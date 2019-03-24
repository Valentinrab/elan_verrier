/**
 * @barba/core/modules/store
 * <br><br>
 * ## Transitions store.
 *
 * - Resolve transition
 * - Manage rules
 *
 * @module core/modules/store
 * @preferred
 */

/***/

// Definitions
import {
  IRule,
  IRules,
  ITransitionAppear,
  ITransitionData,
  ITransitionPage,
  RuleName,
} from '../defs';

// Modules
import { Logger } from './Logger';

export class Store {
  public logger: Logger = new Logger('@barba/core');
  /**
   * All registered transitions.
   */
  public all: ITransitionPage[] = [];
  /**
   * "Appear only" registered transitions.
   */
  public appear: ITransitionAppear[] = [];
  /**
   * Rules for transition resolution.
   *
   * Defaults:
   *
   * - namespace
   * - custom
   */
  private _rules: IRule[] = [
    {
      name: 'namespace',
      type: 'strings',
    },
    {
      name: 'custom',
      type: 'function',
    },
  ];

  /**
   * Init store.
   */
  constructor(transitions: ITransitionPage[] = []) {
    if (transitions) {
      // TODO: add check for valid transitions? criteria? (appear || enter && leave)
      this.all = this.all.concat(transitions);
    }
    this._update();
  }

  /**
   * Add rule or transition.
   */
  public add(type: 'rule' | 'transition', data: any): void {
    switch (type) {
      case 'rule':
        // TODO: check for valid rule
        this._rules.splice(data.position || 0, 0, data.value);
        break;
      case 'transition':
      default:
        // TODO: check for valid transition
        this.all.push(data);
        break;
    }

    this._update();
  }

  /**
   * Resolve transition.
   */
  public resolve(
    data: ITransitionData,
    appear: boolean = false
  ): ITransitionAppear | ITransitionPage {
    const transitions = appear ? this.appear : this.all;

    // All matching transition infos
    const matching = new Map();

    // Active = first of valid transitions
    // sorted by directions (from/to, from || to, …)
    const active = transitions.find(t => {
      let valid = true;
      const match = {};

      // Check rules
      this._rules.reverse().forEach(rule => {
        if (valid) {
          valid = this._check(t, rule, data, match);
          // From/to check, only for page transitions
          if (!appear) {
            if (t.from && t.to) {
              valid =
                this._check(t, rule, data, match, 'from') &&
                this._check(t, rule, data, match, 'to');
            }
            if (t.from && !t.to) {
              valid = this._check(t, rule, data, match, 'from');
            }
            if (!t.from && t.to) {
              valid = this._check(t, rule, data, match, 'to');
            }
          }
        }
      });

      matching.set(t, match);

      return valid;
    });

    this.logger.info(matching.get(active));

    return active;
  }

  /**
   * ### Update store.
   *
   * - Reorder transition by priorities
   * - Get wait indicator
   * - Get appear transitions
   */
  private _update(): void {
    // Reorder by priorities
    this.all = this.all
      .map(t => this._addPriority(t))
      .sort((a, b) => a.priority - b.priority)
      .reverse()
      .map(t => {
        delete t.priority;

        return t;
      });
    this.appear = this.all.filter(t => t.appear) as ITransitionAppear[];
  }

  /**
   * ### Check if transition apply.
   *
   * Based on rule, page data and optional direction:
   *
   * 1. transition has no rule "property":
   *    - always returns true
   * 2. transition has rule "property":
   *     - "strings" should be present on both side (transition + page) and match
   *     - "function" should return true
   */
  private _check(
    transition: ITransitionPage,
    rule: IRule,
    data: ITransitionData,
    match: any,
    direction?: 'from' | 'to'
  ): boolean {
    let isValid = true;
    let hasMatch = false;
    const t = transition;
    const { name, type } = rule;
    const strRule = name as IRules['strings'];
    const objRule = name as IRules['object'];
    const fnName = name as IRules['function'];
    const base = direction ? t[direction] : t; // = t || t.from || t.to
    const page = direction === 'to' ? data.next : data.current; // = current || next
    const exist = direction ? base && base[name] : base[name];

    // If transition rule exists
    if (exist) {
      switch (type) {
        case 'strings':
        default: {
          // Array support
          const names: string[] = Array.isArray(base[strRule])
            ? (base[strRule] as string[])
            : [base[strRule] as string];

          // For matching, prop should be present on both sides and match
          if (page[strRule] && names.indexOf(page[strRule]) !== -1) {
            hasMatch = true;
          }
          // If transition prop is different from current, not valid
          if (names.indexOf(page[strRule]) === -1) {
            isValid = false;
          }
          break;
        }

        case 'object': {
          // Array support
          const names: string[] = Array.isArray(base[objRule])
            ? (base[objRule] as string[])
            : [base[objRule] as string];

          // For matching, prop should be present on both sides and match
          if (
            page[objRule] &&
            page[objRule].name &&
            names.indexOf(page[objRule].name) !== -1
          ) {
            hasMatch = true;
          }
          // If transition prop is different from current, not valid
          if (names.indexOf(page[objRule].name) === -1) {
            isValid = false;
          }
          break;
        }

        case 'function':
          if (base[fnName](data)) {
            hasMatch = true;
          } else {
            isValid = false;
          }
          break;
      }

      if (hasMatch) {
        if (direction) {
          match[direction] = match[direction] || {};
          match[direction][name] = t[direction][name];
        } else {
          match[name] = t[name];
        }
      }
    }

    return isValid;
  }

  /**
   * ### Calculate transition priority.
   *
   * Based on:
   *
   * - rule "position" (index) give tens, hundreds, thousands, …
   * - from/to properties give units (0, 1 or 2)
   */
  private _calculatePriority(
    t: ITransitionPage,
    ruleName: RuleName,
    ruleIndex: number
  ): number {
    let priority = 0;

    if (
      t[ruleName] ||
      (t.from && t.from[ruleName]) ||
      (t.to && t.to[ruleName])
    ) {
      priority += Math.pow(10, ruleIndex);

      if (t.from && t.from[ruleName]) {
        priority += 1;
      }
      if (t.to && t.to[ruleName]) {
        priority += 2;
      }
    }

    return priority;
  }

  private _addPriority(t: ITransitionPage): ITransitionPage {
    t.priority = 0;
    let priority = 0;

    this._rules.forEach((rule, i) => {
      const { name } = rule;
      const index = i + 1;

      priority += this._calculatePriority(t, name, index);
    });

    t.priority = priority;

    return t;
  }
}
