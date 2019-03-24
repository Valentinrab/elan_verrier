# Notes

## Lerna/npm publish

### Beta `publish`

```sh
yarn test
lerna publish --canary --preid next --dist-tag next
lerna publish --github-release --force-publish=*
lerna publish --github-release
```

To be tested: `--github-release`

### Test `publish` with [verdaccio](https://www.npmjs.com/package/verdaccio)

```sh
npm adduser --registry http://localhost:4873
lerna publish --registry http://localhost:4873 --canary --preid next
```

---

> Questions…
>
> - [ ] Scroll/lock util?
> - [⛔️] Build module/nomodule? BOFFFFFF
> - [ ] Browser support
>   - [ ] doit fonctionner avec IE <= 11? 10?
>   - [ ] Integrate with Cypress

---

## Showcase

> check old issues…

- https://leap-in.com/
