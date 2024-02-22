# Kirby Kit

Personal [Kirby](https://getkirby.com/) starter kit, based on [Arnoson](https://github.com/arnoson/kirby-kit)'s.

## Features

- ⚡️ [Vite](https://vitejs.dev/)
- ♻️ [Very Simple Components](https://github.com/very-simple/components)
- 🚀 [Very Simple Deploy](https://github.com/very-simple/deploy)
- 🍬 [Kirby Template Sugar](https://github.com/arnoson/kirby-template-sugar)
- 📂 Public folder structure
- 📚 Code co-location with file nesting
- 🔄 Live Reload on templates/snippets/layout changes
- 🦾 Typescript
- 🎨 Modern CSS w/ nesting, layers, custom media queries
- 🐛 Debugging
- 🗄️ Backups
- 🔑 dotenv

## Development

```bash
npm run dev
```

## Production

🔒 deploy is only allowed on the `main` branch!

Preview the build locally:

```bash
npm run build
```

Build and upload the website to your production webspace:

```bash
npm run deploy
```

If you don't want to build before deploy (in case no ts/css/kirby files changed):

```bash
npm run deploy-no-build
```

## Staging

Build and upload the website to your staging webspace:

```bash
npm run stage
```

If you don't want to build before staging (in case no ts/css/kirby files changed):

```bash
npm run stage-no-build
```
