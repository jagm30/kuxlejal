# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Kuxlejal is a Spanish-language marketing website for an agroecological coffee producer in Jomanichil, Tenejapa, Chiapas, Mexico. "Kuxlejal" means "Vida" (Life) in Tseltal.

## Commands

```bash
# First-time setup
composer run setup

# Full development environment (Laravel server + queue + pail logs + Vite, all concurrent)
composer run dev

# Run tests
composer run test

# Run a single test file
php artisan test --filter=ExampleTest

# Lint PHP with Pint
./vendor/bin/pint

# Build frontend assets
npm run build

# Frontend dev server only
npm run dev
```

## Architecture

**Backend:** Laravel 12 (PHP 8.2+) using standard MVC. Currently a single route (`/`) rendering `welcome.blade.php`.

**Frontend:** Blade templates with Tailwind CSS loaded via CDN in the layout (not via the Vite pipeline). The Vite pipeline (`resources/css/app.css` + `resources/js/app.js`) exists but the master layout uses `<script src="https://cdn.tailwindcss.com">` and configures Tailwind inline with `tailwind.config`. Lucide Icons are also loaded via CDN (`unpkg.com/lucide`).

**View structure:**
- `resources/views/layouts/master.blade.php` — full HTML shell with navbar, all page sections, and footer. Contains inline Tailwind config, brand colors, and Google Fonts (Fraunces + Work Sans).
- `resources/views/welcome.blade.php` — extends `layouts.master`, yields into `@section('content')`.

**Brand tokens** (defined inline in `master.blade.php`):
- `brand-brown`: `#4A2511`
- `brand-red`: `#8D2B1B`
- `brand-green`: `#1E6B38`
- `brand-sand`: `#FAF8F5`

**Database:** SQLite by default for development and in-memory SQLite for tests (configured in `phpunit.xml`).

## Key Conventions

- All user-facing content is in Spanish (with some Tseltal phrases).
- Static images are served from `/imagenes/` (public directory).
- The master layout has `onerror` fallbacks on `<img>` tags pointing to `placehold.co` for missing images.
- WhatsApp order links are constructed dynamically via JavaScript in the product configurator section.
