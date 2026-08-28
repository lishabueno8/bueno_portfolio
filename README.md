# Celyn Lisha Bueno — Personal Portfolio

A personal single-page portfolio website built with **Laravel**, **Blade**, and **Tailwind CSS v4**. It showcases who I am, my educational background, certificates, projects, and how to get in touch.

> BSIT student committed to learning, teamwork, and developing practical IT solutions.

## Project description

This portfolio is a responsive, single-page website that presents my personal and professional information in one clean page with anchor-based navigation. All of the site's content lives directly in the application code — there is **no database involved**. The page is composed of modular Blade partials and styled entirely with Tailwind CSS utilities.

## Main sections & features

- **Hero (Home)** — Name, role (BSIT), tagline, short intro, profile picture, and quick links to contact and GitHub.
- **About** — A short bio written as paragraphs, plus a list of personal highlights and a stats strip (years of experience, certifications earned).
- **Education** — A timeline of schools, programs/credentials, years attended, and honors.
- **Certificates** — A grid of certification cards (title, issuer, year) with a **lightbox modal** that opens the certificate image on click.
- **Contact** — An email contact form (opens the visitor's mail client with a pre-filled message via `mailto:`) alongside direct email, phone, and location details.
- **Footer** — Social media links (Facebook, Telegram, TikTok, Discord, Gmail), quick links, contact details, and a GitHub profile link.
- **Interactive navbar** — Sticky header with a collapsible mobile menu and scroll-spy highlighting of the active section.

### Personal & contact information

- **Name:** Celyn Lisha Bueno
- **Location:** Philippines
- **Email:** lishabueno8@gmail.com
- **Phone:** +63 928 733 4584
- **GitHub:** https://lishabueno8.github.io

### Projects (with GitHub links)

| Project | Description | GitHub |
| --- | --- | --- |
| Laravel Blog Platform | A full-featured blogging system with authentication, markdown authoring, categories, comments, and an admin dashboard. | [blog-platform](https://lishabueno8.github.io/blog-platform) |
| Task Manager REST API | A stateless JSON API for task management with token auth, validation, pagination, and API tests. | [task-manager-api](https://lishabueno8.github.io/task-manager-api) |
| E-Commerce Storefront | A responsive storefront UI with product grids, cart interactions, and a smooth checkout flow. | [storefront-ui](https://lishabueno8.github.io/storefront-ui) |
| Weather Dashboard | A live weather dashboard that consumes a public API to render forecasts, charts, and location search. | [weather-dashboard](https://lishabueno8.github.io/weather-dashboard) |
| Inventory Management System | An internal tool for tracking stock, handling supplier orders, and producing simple reports. | [inventory-system](https://lishabueno8.github.io/inventory-system) |
| This Portfolio | A static single-page portfolio built with Blade, Tailwind CSS v4, and Vite, using no database at all. | [BUENO_PORTFOLIO](https://lishabueno8.github.io/BUENO_PORTFOLIO) |

## Technologies used

- **Backend / Framework:** PHP 8.3+, Laravel 13
- **Templating:** Blade
- **Styling:** Tailwind CSS v4 (via `@tailwindcss/vite`)
- **Build tooling:** Vite 8, `laravel-vite-plugin`
- **Icons / Fonts:** Font Awesome 6, Instrument Sans (served via the `laravel-vite-plugin` font helpers)
- **Frontend behavior:** Vanilla JavaScript (no frontend framework)
- **Testing:** PHPUnit feature tests

## Project structure

Key files that make up this portfolio:

```
app/Http/Controllers/PortfolioController.php   # Invokable controller; holds all portfolio content as arrays
resources/views/layouts/app.blade.php          # Base layout (head, nav, content, footer)
resources/views/pages/portfolio.blade.php      # Main page — assembles the section partials
resources/views/partials/
    hero.blade.php                             # Home / hero section
    about.blade.php                            # About, bio, highlights, stats
    education.blade.php                        # Education timeline
    certificates.blade.php                     # Certificates grid + lightbox modal
    contact.blade.php                          # Contact form & details
    nav.blade.php                              # Sticky navbar + mobile menu
    footer.blade.php                           # Footer with socials & quick links
resources/css/app.css                          # Tailwind CSS entry point
resources/js/app.js                            # Mobile menu, scroll-spy, contact form, modal
routes/web.php                                 # Single route "/" -> PortfolioController
public/images/                                 # profile.jpg
public/certificates/                           # Certificate images
```

The site is driven by a single route:

```php
Route::get('/', PortfolioController::class)->name('home');
```

Because there is no database, editing your portfolio content is as simple as updating the plain arrays (for example `$profile`, `$education`, `$certificates`, `$projects`, and `$socials`) in `app/Http/Controllers/PortfolioController.php`.

## How to run locally

**Requirements:** PHP 8.3+, Composer, and Node.js.

1. Install PHP dependencies:

   ```bash
   composer install
   ```

2. Set up the environment file (if it doesn't already exist):

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Install and build the frontend assets:

   ```bash
   npm install
   npm run build
   ```

   While developing, you can run `npm run dev` instead to watch files and rebuild on change.

4. Start the development server:

   ```bash
   php artisan serve
   ```

   Then open the printed URL (usually http://127.0.0.1:8000) in your browser.

> **Windows (XAMPP) note:** this project requires **PHP 8.3 or newer**. On this machine a compatible executable exists at `C:\xampp\php83\php.exe`. A convenience launcher, `start.bat`, starts the server with the correct PHP version. If your PHP lives elsewhere, update the `PHP=` path inside `start.bat`.

## Testing

The project includes PHPUnit feature tests that verify the home page loads successfully and renders its main sections and content:

```bash
php artisan test
```

## License

This is a personal portfolio project. The underlying application is built on the MIT-licensed Laravel framework.
