# Makutano Digital

Navy immersive direction. Brand colours sampled from the logo:
navy `#1e3a5f`, amber `#ffbd59`, white.

Fonts: Space Grotesk (display), Manrope (body), JetBrains Mono (labels) — loaded from Google Fonts.

The project ships as **two parallel implementations of the same site**:

1. **Plain PHP** (project root) — the live/primary version. No framework, no build step;
   each page is a single self-contained `.php` file with inline `<style>`/`<script>`.
2. **Laravel** (`laravel/`) — a port of the same markup into blade layouts/partials/routes,
   for teams that want MVC structure, routing, and validation. Not a full installable app
   as committed (no `artisan`/`vendor`/`composer.json`) — see [Laravel install](#laravel-install).

## Contents

    index.php                  Home        — hero, service marquee, 01/02/03 capability cards
    services.php                Services    — the seven service domains, each its own card
    about.php                   About       — summary, core values, mission/vision, registration, leadership
    contact.php                 Contact     — details, map embed, enquiry form (sends via PHPMailer)
    mail-config.php             SMTP settings used by contact.php (see Security note below)
    lib/PHPMailer/               Vendored PHPMailer (Exception.php, PHPMailer.php, SMTP.php) — no Composer
    assets/logo.png              Company logo
    assets/Makutano_Digital_Company_Profile.pdf
    Makutano_Digital_Company_Profile.docx   Source document for site copy
    laravel/
      routes/web.php                                 named routes: home, services, about, contact, contact.submit, lang.switch
      app/Http/Controllers/PageController.php         renders each page view; submit() validates the enquiry form
      resources/views/layouts/app.blade.php           layout: styles, theme-toggle script, language script
      resources/views/partials/navbar.blade.php        active state via request()->routeIs()
      resources/views/partials/footer.blade.php        page links + contact info + registration numbers
      resources/views/pages/{home,services,about,contact}.blade.php

## Running the static site

    php -S localhost:8000

The included nginx + php-fpm site config proxies `.php` requests straight to the filesystem
(`try_files $uri $uri/ =404` + fastcgi to php-fpm) — no rewrite rules or router script needed.

## Navigation

The navbar links all four pages, marks the current page with an amber underline
(`aria-current="page"`), and collapses to a MENU button under 900px. The footer repeats
the page links alongside office address, phone, email, website, TIN and licence number.
Both the navbar and footer are locked to the dark navy theme at all times (`.mk-fixedbar`,
see below) even when the rest of the page switches to light mode.

## Design system (shared CSS classes)

Every page repeats the same small set of utility classes in its inline `<style>` block:

    .mk-cta        Pill buttons — lift + amber-glow shadow on hover/active
    .mk-vcard       Bordered content cards (values, services, mission/vision, leadership) —
                     lift + shadow-below + glowing border on hover/active
    .mk-navlink, .mk-langtoggle, .mk-themebtn, .mk-menubtn   Header controls, each with a
                     matching hover/active lift+shadow treatment
    .mk-fixedbar    Marks the header and footer as exempt from the light-theme repaint, so
                     they always render in the dark navy palette regardless of theme
    .mk-svcrow      (legacy) row-hover highlight — superseded by .mk-vcard on services.php
    .mk-grid, .mk-pad   Responsive helpers collapsed via the `@media (max-width:900px)` block

## Theme toggle

A small IIFE in each page's closing `<script>` block persists the theme (`mk-theme`) and
language (`mk-lang`) choices to `localStorage`. Switching to light theme calls `paint()`,
which walks every inline-styled element and rewrites navy/white colour values to their light
equivalents — except anything inside `.mk-fixedbar` (header/footer), which is always skipped
so those stay dark.

## Bilingual behaviour

Every bilingual string is a pair of spans, `.lang-en` and `.lang-sw`. Visibility follows
the `lang` attribute on `<html>`; the EN / SW pill in the navbar flips it client-side with
no page reload. To move to server-side translation, replace the span pairs with
`@lang('site.key')` and use the `/lang/{locale}` route with a locale middleware (already
present in `laravel/routes/web.php`).

## Contact form

`contact.php` posts to itself, validates input server-side, and sends mail via the vendored
PHPMailer using the credentials in `mail-config.php`. The Laravel port's
`PageController::submit()` validates the same fields but currently only flashes a status
message — the `Mail::to(...)->send(...)` call is commented out, so wire up a Mailable before
relying on it to actually deliver mail.

## Laravel install

1. Start a fresh Laravel app (`composer create-project laravel/laravel`).
2. Copy `laravel/app`, `laravel/routes/web.php`, and `laravel/resources/views` into it, keeping paths.
3. Copy `assets/logo.png` and `assets/Makutano_Digital_Company_Profile.pdf` to `public/assets/`.
4. Wire up `PageController::submit()` to an actual Mailable if the enquiry form needs to send mail.
5. Visit `/`.

## Security note

`mail-config.php` holds the live SMTP password and is now gitignored and untracked —
copy `mail-config.example.php` to `mail-config.php` and fill in real credentials on any
new checkout. This does **not** remove the password already committed in past history
(commit `f73e2bc`) on the GitHub remote — that password must still be rotated on the mail
server, and the repo's history purged (`git filter-repo` + force-push) if the remote is or
will be public.

## Notes

- Imagery is not included; the direction uses no photography above the fold.
- The service marquee is CSS-only (`@keyframes mkMarquee`, duplicated track, `translateX(-50%)`).
- Layout collapses to single column under 900px.
- Leadership names, degrees and portraits on `about.php` are still placeholders.
