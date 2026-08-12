# Makutano Digital — Home page (direction 1b)

Navy immersive direction. Brand colours sampled from the logo:
navy `#1e3a5f`, amber `#ffbd59`, white.

Fonts: Space Grotesk (display), Manrope (body), JetBrains Mono (labels) — loaded from Google Fonts.

## Contents

    index.php                  Home        — serve with any PHP host (php -S localhost:8000)
    services.php               Services    — the seven service domains
    about.php                  About       — summary, mission, vision, registration, leadership
    contact.php                Contact     — details, map slot, enquiry form
    assets/logo.png            Company logo
    laravel/
      routes/web.php                                 named routes: home, services, about, contact
      app/Http/Controllers/PageController.php
      resources/views/layouts/app.blade.php          layout: styles, navbar, footer, language script
      resources/views/partials/navbar.blade.php      active state via request()->routeIs()
      resources/views/partials/footer.blade.php      page links + contact info + registration numbers
      resources/views/pages/{home,services,about,contact}.blade.php

## Navigation

The navbar links all four pages, marks the current page with an amber underline
(`aria-current="page"`), and collapses to a MENU button under 900px. The footer repeats
the page links alongside office address, phone, email, website, TIN and licence number.
Page content is taken from the company profile document; leadership names and portraits
are still placeholders.

## Laravel install

1. Copy `laravel/` contents into your app, keeping paths.
2. Copy `assets/logo.png` to `public/assets/logo.png`.
3. Visit `/`.

## Bilingual behaviour

Every bilingual string is a pair of spans, `.lang-en` and `.lang-sw`. Visibility follows
the `lang` attribute on `<html>`; the EN / SW pill in the navbar flips it client-side with
no page reload. To move to server-side translation, replace the span pairs with
`@lang('site.key')` and use the `/lang/{locale}` route with a locale middleware.

## Notes

- Imagery is not included; the direction uses no photography above the fold.
- The service marquee is CSS-only (`@keyframes mkMarquee`, duplicated track, `translateX(-50%)`).
- Layout collapses to single column under 900px.
