/* tslint:disable:no-string-literal */
import barba from '@barba/core/src';
// Definitions
import { ISchemaPage, ITransitionData } from '@barba/core/src/defs';
import css from '../src';

// Dom
const wrapper = document.createElement('div');
const current = document.createElement('div');
const next = current.cloneNode();

wrapper.dataset.barba = 'wrapper';
current.dataset.barba = 'container';

document.body.appendChild(wrapper);
document.body.appendChild(current);

const t = {
  appear: () => Promise.resolve(),
  enter: () => Promise.resolve(),
  leave: () => Promise.resolve(),
};
const data: ITransitionData = {
  current: ({ container: current } as unknown) as ISchemaPage,
  next: ({ container: next } as unknown) as ISchemaPage,
  trigger: 'barba',
};

barba.use(css);
barba.init();

css.start = jest.fn();
css.next = jest.fn();
css.end = jest.fn();

it('do appear hooks', () => {
  barba.hooks.do('beforeAppear', data, t);
  barba.hooks.do('afterAppear', data, t);

  expect(css.start).toHaveBeenCalledWith(current, 'appear');
  expect(css.end).toHaveBeenCalledWith(current, 'appear');
});

it('do leave hooks', () => {
  barba.hooks.do('beforeLeave', data, t);
  barba.hooks.do('afterLeave', data, t);

  expect(css.start).toHaveBeenCalledWith(current, 'leave');
  expect(css.end).toHaveBeenCalledWith(current, 'leave');
});

it('do enter hooks', () => {
  barba.hooks.do('beforeEnter', data, t);
  barba.hooks.do('afterEnter', data, t);

  expect(css.start).toHaveBeenCalledWith(next, 'enter');
  expect(css.end).toHaveBeenCalledWith(next, 'enter');
});

it('override transitions', () => {
  barba.transitions['_appear'](data, t);
  barba.transitions['_leave'](data, t);
  barba.transitions['_enter'](data, t);

  expect(css.next).toHaveBeenNthCalledWith(1, current, 'appear');
  expect(css.next).toHaveBeenNthCalledWith(2, current, 'leave');
  expect(css.next).toHaveBeenNthCalledWith(3, next, 'enter');
});
