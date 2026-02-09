# sbjorkholt.github.io

Personal academic website for Solveig Bjorkholt, built with [Hugo](https://gohugo.io/) and the [Hugo Blox Builder](https://hugoblox.com/) theme.

## Structure

```
config/_default/   Hugo configuration (site settings, menus, modules)
content/           Markdown content
  authors/         Author profile
  publication/     Academic publications
  teaching/        Teaching materials
  project/         Writing projects (Undefined Story, Medium)
  post/            Blog posts
assets/media/      Images and graphics
layouts/           Custom template overrides
themes/            Hugo Blox theme (managed via Hugo Modules)
.github/workflows/ GitHub Actions deployment pipeline
```

## Build and deploy

The site is deployed to GitHub Pages via a GitHub Actions workflow (`.github/workflows/hugo.yml`) on every push to `main`.

To build locally:

```bash
hugo server
```

This starts a local development server with live reload at `http://localhost:1313`.

To build the production site:

```bash
hugo --gc --minify
```

Output goes to the `public/` directory (gitignored).
