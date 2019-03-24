/**
 * @module typings/core
 */

// Definitions
import { IGenericObject } from '.';

export interface IUrlBase {
  path: string | undefined;
  hash: string | undefined;
  query: IGenericObject;
}
export interface IUrlFull extends IUrlBase {
  href: string | undefined;
}
