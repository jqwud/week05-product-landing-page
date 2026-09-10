# Arriola-Robles Children's Clinic & Roncis Pharmacy — Landing Page

A responsive landing page built for a real local business: **Arriola-Robles Children's Clinic**
and its on-site **Roncis Pharmacy** ("Ang Botika ni Dok!"), located in Brgy. Cabanbanan,
Pagsanjan, Laguna. Built with Laravel, Blade components, and Tailwind CSS v4.

🔗 **Live repo:** https://github.com/jqwud/week05-product-landing-page

---

## Introduction

Small local clinics rarely have any online presence beyond word of mouth — no way for a
parent to check hours before driving over, confirm the consultation fee, or see what the
pharmacy stocks. This project gives Arriola-Robles Children's Clinic and Roncis Pharmacy a
real, modern landing page: an actual business, not a fictional SaaS product, built entirely
from real signage, real pricing, and real service information.

## Objectives

- Practice component-based frontend architecture using Laravel Blade
- Apply Tailwind CSS utility-first styling to a real, non-trivial layout
- Design a responsive interface that works from a 375px phone up to desktop
- Translate an existing local brand identity (signage, colors, tagline) into a coherent
  digital design system
- Build and ship the project through a realistic git workflow (20+ meaningful commits)

## Business Information

| Item | Details |
|---|---|
| Clinic | Arriola-Robles Children's Clinic |
| Pharmacy | Roncis Pharmacy — "Ang Botika ni Dok!" |
| Doctor | Rona Arriola Robles, RPh, M.D., DPPS |
| Address | 6CQM+CF6, Road, Brgy. Cabanbanan, Pagsanjan, Laguna |
| Phone | 0968-619-4586 |
| Consultation fee | ₱250 (medicines & vaccines not included) |
| Clinic hours | Mon/Wed/Fri 11:00 AM–4:00 PM · Tue/Thu 9:00 AM–11:00 AM · Closed Sat/Sun |

Services covered: pediatric checkups, immunization, sick-child consultation, general
consultation, plus pharmacy offerings (prescription & OTC medicines, vitamins/supplements,
baby products, medical supplies).

## Responsive Web Design

Built mobile-first with Tailwind's breakpoint system, and manually verified at:

- **375px** — mobile, single-column stack, hamburger navigation
- **768px** — tablet, two-column layouts activate
- **1024px+** — laptop/desktop, full multi-column grid layout

The navbar collapses into an Alpine.js-powered slide-down mobile menu below the `md:`
breakpoint, with each link closing the menu on tap.

## Tailwind CSS

This project uses **Tailwind CSS v4**, which changed significantly from earlier versions:

- No `tailwind.config.js` — theme tokens (colors, fonts) are defined directly in
  `resources/css/app.css` inside an `@theme { }` block
- Installed via the `@tailwindcss/vite` plugin rather than a PostCSS config
- Custom design tokens defined: brand colors (`--color-clinic-magenta`,
  `--color-clinic-yellow`, `--color-clinic-navy`), font families, and custom keyframe
  animations (`animate-float`, `animate-pulse-glow`) for the site's motion design

## Blade Components

The UI is built from reusable Blade components rather than repeated markup:

resources/views/components/
├── button.blade.php — shared button, 3 variants (primary/secondary/outline)
├── navbar.blade.php — sticky glass navbar with Alpine mobile menu
├── hero.blade.php — hero section with mascot illustration
├── feature-card.blade.php — reusable service card (icon + title + description)
├── pricing-card.blade.php — pricing tier card with optional "highlight" state
├── testimonial-card.blade.php — star rating + quote + attribution
├── section-title.blade.php — shared heading + subtitle block
├── cta-section.blade.php — call-to-action band
├── contact-info.blade.php — icon + label + value row (address, phone)
├── pharmacy-highlight.blade.php — pharmacy hours + product list panel
└── footer.blade.php — site footer


Larger section files (`features-section.blade.php`, `pricing-section.blade.php`,
`testimonials-section.blade.php`, `contact-section.blade.php`) assemble these smaller
components with real content, and are all composed together in `welcome.blade.php`.

## UI Design

- **Color palette** — pulled directly from the clinic's real storefront signage: magenta
  `#E6007E` (Roncis Pharmacy), yellow/gold `#FDB913` (Arriola-Robles Clinic), and navy
  `#1B3A8C` for text and secondary accents.
- **Typography** — Fredoka for headings/display text (rounded, friendly, legible at large
  sizes) paired with Plus Jakarta Sans for body copy, loaded via Google Fonts.
- **Visual style** — glassmorphism (translucent, blurred cards) combined with restrained
  motion: a floating hero mascot, slow-pulsing background glow, hover-lift on cards, and an
  underline-on-hover nav — all respecting `prefers-reduced-motion`.
- **Mascot** — a custom-illustrated owl doctor character used in the hero section, styled
  and positioned against the site's real brand colors rather than a separate palette.
- **Icons** — hand-built inline SVG icons for every service/contact item, instead of emoji
  or a generic icon library, so the iconography matches the rest of the visual system.

## Folder Structure

app/ Laravel application code
resources/
├── css/app.css Tailwind v4 theme tokens, custom animations
├── js/app.js Alpine.js initialization
└── views/
├── components/ Reusable Blade components (see above)
└── welcome.blade.php Assembles all sections into the final page
public/
└── images/ Storefront photo, mascot illustration
documentation/ Before/after screenshots (see below)


## Installation & Setup

```bash
git clone https://github.com/jqwud/week05-product-landing-page.git
cd week05-product-landing-page
composer install
npm install
npm run dev
php artisan serve
```

Then visit `http://127.0.0.1:8000`.

## Challenges & Solutions

**Tailwind v4's breaking changes.** The original plan assumed the classic
`npx tailwindcss init -p` workflow, but Tailwind v4 removed the `init` command entirely in
favor of a Vite-plugin-based setup with no config file. Solved by installing
`@tailwindcss/vite` directly and moving all theme tokens into a CSS-native `@theme` block.

**Avoiding a templated, AI-generated look.** Early drafts leaned on emoji icons and a grid
of identical rounded-shadow cards — a recognizable generic pattern. These were replaced with
custom SVG icons and a more deliberate, less uniform layout.

**Finding the right visual identity.** After the initial build, two very different creative
directions were explored: the shipped glassmorphism/motion style built on the clinic's real
signage colors, versus a full pastel palette with a custom mascot-driven design system. The
final decision kept the real brand colors site-wide (since they're what actually identifies
this business) while adopting a custom mascot illustration in the hero only — getting the
personality of the new direction without abandoning the clinic's real identity.

**Windows/PowerShell command differences.** Several setup commands (chaining with `&&`,
creating empty files with `touch`) don't work the same way in PowerShell as in bash — resolved
by using PowerShell-native syntax (`;` separators, `New-Item`) instead.

## Screenshots

*Before/after comparison images go in the `documentation/` folder — create it at the project
root and add:*

- `documentation/before-wireframe-desktop.png` — unstyled layout, desktop
- `documentation/before-wireframe-mobile.png` — unstyled layout, mobile
- `documentation/after-desktop.png` — final styled page, desktop
- `documentation/after-tablet.png` — final styled page, tablet (768px)
- `documentation/after-mobile.png` — final styled page, mobile (375px)

*(Take the "before" wireframe screenshots by temporarily commenting out the Tailwind
directive in `resources/css/app.css`, or by checking out one of your earliest commits —
`git log` shows `feat: setup project folder structure` as a good unstyled starting point —
then restore `app.css` afterward.)*

## Reflection

*A few sentences in your own words on what you learned — component architecture, Tailwind
v4's new approach, working with a real client's existing brand constraints, and the design
trade-offs made along the way — go here before submission.*

---

© 2026 Arriola-Robles Children's Clinic & Roncis Pharmacy. Built as a school project.