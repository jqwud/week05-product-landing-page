# Arriola-Robles Children's Clinic & Roncis Pharmacy — Product Landing Page

A modern, responsive product landing page developed for **Arriola-Robles Children's Clinic** and its on-site **Roncis Pharmacy ("Ang Botika ni Dok!")**, located in Brgy. Cabanbanan, Pagsanjan, Laguna.

The project was built using **Laravel, Blade Components, Tailwind CSS v4, and Alpine.js**, with a focus on responsive web design, reusable UI components, accessibility, and a consistent visual identity based on the business's existing branding.

**GitHub Repository:**
https://github.com/jqwud/week05-product-landing-page

---

## 1. Introduction

### What is a Product Landing Page?

A **product landing page** is a focused web page designed to introduce a product, service, business, or offering to visitors. It presents important information such as features, benefits, pricing, testimonials, and contact details in a clear and visually organized way.

Unlike a traditional website with many pages and navigation paths, a landing page is usually designed around a specific purpose or conversion goal, such as encouraging visitors to make an inquiry, book a service, purchase a product, or contact a business.

### Why Landing Pages Are Important for Businesses

A well-designed landing page gives a business a professional online presence and allows customers to quickly find important information.

For a local healthcare business, this can include:

* Clinic services
* Consultation fees
* Operating hours
* Pharmacy information
* Contact details
* Location information
* Customer testimonials

For small businesses that primarily depend on word of mouth, a landing page can make essential information available to customers before they visit the physical location.

### Purpose of This Project

The purpose of this project was to create a modern and responsive landing page for a real local business rather than a fictional product or company.

The design translates the existing visual identity of Arriola-Robles Children's Clinic and Roncis Pharmacy into a digital interface while improving the presentation of its services, pricing, contact information, and customer-focused content.

---

## 2. Objectives

This project accomplished the following learning objectives:

* Practice component-based frontend development using **Laravel Blade**.
* Build reusable UI elements using **Blade Components**.
* Apply **Tailwind CSS v4** and its utility-first approach to a real-world interface.
* Implement a **mobile-first responsive design**.
* Use **Flexbox and CSS Grid** to create flexible page layouts.
* Apply responsive breakpoints for mobile, tablet, and desktop screen sizes.
* Develop a consistent visual design system using color, typography, spacing, and iconography.
* Improve user experience through clear visual hierarchy and intuitive navigation.
* Translate an existing local business identity into a digital design system.
* Practice organizing a Laravel project using maintainable folders and reusable components.
* Use Git and GitHub as part of a realistic development workflow.

---

## 3. Responsive Web Design

Responsive web design allows a website to adapt its layout and content to different screen sizes and devices.

This project follows a **mobile-first approach**, meaning the basic layout is designed for smaller screens first and progressively enhanced for larger screens.

### Mobile-First Design

The interface was designed to work on small mobile screens before adding larger-screen layouts.

The primary target sizes were:

* **375px** — Mobile
* **768px** — Tablet
* **1024px and above** — Desktop/Laptop

On mobile devices, content is generally presented in a single-column layout. As the screen becomes wider, sections transition into multi-column layouts where appropriate.

### Responsive Breakpoints

Tailwind CSS responsive utility classes were used to change layouts at different screen sizes.

For example:

```html
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    ...
</div>
```

This creates:

* One column on small screens
* Two columns from the `md` breakpoint
* Three columns from the `lg` breakpoint

The navigation also changes behavior on smaller screens, where it becomes a hamburger menu powered by Alpine.js. The desktop navigation intentionally activates at the `lg` breakpoint (1024px) rather than `md` (768px), since tablet-width screens didn't have enough room for the full link set and both CTA buttons without feeling cramped.

### Flexbox

Flexbox was used for components that require flexible horizontal or vertical alignment.

Examples include:

* Navigation items
* Buttons
* Contact information rows
* Card content
* Icon-and-text combinations

Example:

```html
<div class="flex items-center gap-3">
    <svg>...</svg>
    <span>Clinic Hours</span>
</div>
```

### CSS Grid

CSS Grid was used for larger page layouts where content needed to be organized into multiple columns.

Examples include:

* Feature cards
* Pricing cards
* Testimonials
* Desktop content sections

Grid allows the layout to automatically adjust depending on the available screen width. Pricing cards use `items-stretch` so all three cards match the tallest card's height, keeping the row visually even even when one card (the highlighted plan) has more content than the others.

### User Experience (UX)

User experience was considered throughout the design process. The interface uses:

* Clear section headings
* Consistent spacing
* Strong visual hierarchy
* Easily identifiable buttons
* Readable typography
* Familiar navigation patterns
* Responsive layouts
* Clear presentation of important business information

The goal was to allow visitors, particularly parents and potential patients, to find information quickly without unnecessary navigation.

### Why Responsive Design Matters

Users access websites through many different devices, including smartphones, tablets, laptops, and desktop computers.

A responsive interface ensures that the website remains:

* Readable
* Usable
* Visually consistent
* Accessible
* Easy to navigate

regardless of screen size.

---

## 4. Tailwind CSS

This project uses **Tailwind CSS v4**, a utility-first CSS framework that allows styles to be applied directly through utility classes.

### Utility-First CSS

Instead of creating a separate CSS class for every component, Tailwind provides small utility classes that control individual properties.

For example:

```html
<button class="rounded-full bg-clinic-magenta px-6 py-3 text-white font-semibold">
    Book a Consultation
</button>
```

Each utility controls a specific aspect of the button, including:

* Border radius
* Background color
* Padding
* Text color
* Font weight

### Advantages of Tailwind CSS

Tailwind was useful for this project because it provides:

* Rapid UI development
* Consistent spacing and sizing
* Built-in responsive utilities
* Easy state styling
* Reduced need for custom CSS
* Consistent design tokens
* Easy component-level customization

### Responsive Utility Classes

Responsive prefixes such as `sm:`, `md:`, `lg:`, and `xl:` were used to change styles depending on screen size.

Example:

```html
<h1 class="text-4xl md:text-5xl lg:text-6xl">
    Caring for Every Little Smile
</h1>
```

The heading increases in size as more screen space becomes available.

### Component Styling

Tailwind utilities are used directly inside Blade Components. This keeps each component's visual styling close to its markup and makes individual components easier to maintain.

The project also defines custom design tokens in:

```text
resources/css/app.css
```

Tailwind CSS v4's CSS-first configuration is used to define custom colors, fonts, and animations through the `@theme` block.

Custom design tokens include:

```text
--color-clinic-magenta
--color-clinic-yellow
--color-clinic-navy
```

Custom animations such as `animate-float` and `animate-pulse-glow` are also used throughout the interface.

---

## 5. Blade Components

### What Are Blade Components?

**Blade Components** are reusable UI elements provided by Laravel's Blade templating system.

Instead of writing the same HTML structure repeatedly, a component can be created once and reused throughout the application.

For example:

```blade
<x-feature-card
    title="Pediatric Checkups"
    description="Comprehensive healthcare for children."
/>
```

The component contains the reusable structure while the parent page provides the specific content.

### Component Structure

The project's reusable components are located in:

```text
resources/views/components/
```

The main components include:

```text
button.blade.php
navbar.blade.php
hero.blade.php
feature-card.blade.php
pricing-card.blade.php
testimonial-card.blade.php
section-title.blade.php
cta-section.blade.php
contact-info.blade.php
pharmacy-highlight.blade.php
footer.blade.php
```

Larger section components assemble smaller components together:

```text
features-section.blade.php
pricing-section.blade.php
testimonials-section.blade.php
contact-section.blade.php
```

Shared page structure is handled separately through `resources/views/layouts/app.blade.php`, with page-specific content living in `resources/views/pages/home.blade.php`.

### Why Reusable Components Improve Maintainability

Reusable components reduce duplicated markup and make changes easier to manage.

For example, if the design of every pricing card needs to change, the developer can update:

```text
pricing-card.blade.php
```

instead of manually editing every pricing card in the page.

This results in:

* Less code duplication
* Easier maintenance
* Consistent UI
* Faster development
* Better organization
* Easier future updates

### Benefits of Modular UI Development

The component-based architecture divides the interface into smaller, understandable pieces.

This makes it easier to:

1. Build individual interface elements.
2. Test components independently.
3. Reuse components across sections.
4. Modify designs without affecting unrelated content.
5. Keep the main page clean and readable.

### Example Component

A reusable button component supports multiple variants:

```blade
<x-button variant="primary">
    Contact Us
</x-button>
```

The component supports:

* `primary`
* `secondary`
* `outline`

This keeps button styling consistent across the entire landing page.

![Blade Components Folder](screenshots/13-Blade_Components.png)

---

## 6. User Interface Design

The interface follows a modern design system while retaining the visual identity of the actual clinic and pharmacy.

### Color Palette

The primary colors were inspired by the business's existing storefront signage.

| Color          | Hex       | Purpose                            |
| -------------- | --------- | ---------------------------------- |
| Clinic Magenta | `#E6007E` | Pharmacy branding, primary actions |
| Clinic Yellow  | `#FDB913` | Clinic branding, highlights        |
| Clinic Navy    | `#1B3A8C` | Text, secondary accents            |

Using a limited color palette keeps the interface visually consistent and prevents individual sections from feeling disconnected.

### Typography

The project uses:

* **Fredoka** — headings and display text
* **Plus Jakarta Sans** — body text and supporting content

Fredoka provides a friendly and approachable personality that fits a children's clinic, while Plus Jakarta Sans maintains readability for longer text.

### Iconography

The interface uses custom inline SVG icons for services and contact information.

This approach was chosen instead of relying on emojis or a generic icon library because custom icons provide:

* Consistent visual weight
* Better control over color
* Better alignment with the design
* A more professional appearance
* Consistency across browsers and devices

### Button Styles

Buttons use consistent:

* Border radius
* Padding
* Typography
* Brand colors
* Hover states
* Visual hierarchy

Primary actions use the strongest brand color, while secondary and outline buttons provide alternative levels of emphasis.

### Card Design

Cards are used for:

* Services/features
* Pricing
* Testimonials
* Pharmacy information

The cards use consistent spacing, rounded corners, subtle borders/shadows, and controlled visual effects.

A restrained glassmorphism style is used in selected areas to provide depth without overwhelming the content.

### Layout Consistency

Consistency is maintained through:

* Repeated spacing values
* Consistent container widths
* Shared typography styles
* Reusable components
* Consistent button treatments
* Repeated card structures
* Standardized section headings

These choices improve usability because users can quickly understand how different parts of the interface work.

---

## 7. Before-and-After Comparison

The development process involved an initial basic layout followed by several rounds of visual refinement.

### Before

The initial version focused primarily on:

* Basic page structure
* Content placement
* Section organization
* Initial responsive behavior

The early design was intentionally simple and served as the foundation for the final interface.

### After

The final version introduced:

* Brand-specific colors
* Improved typography
* Custom SVG iconography
* Responsive multi-column layouts
* Reusable Blade Components
* Glassmorphism elements
* Subtle animations
* Improved visual hierarchy
* Refined spacing and alignment
* Improved navigation and mobile usability

The final interface is more cohesive, recognizable, and usable than the initial prototype.

Full before-and-after comparison images are available in the [`documentation/`](documentation/) folder.

---

## 8. Folder Structure

The project follows Laravel's standard application structure while organizing reusable views and documentation separately.

```text
project-root/
│
├── app/
│   └── Laravel application code
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │       Tailwind CSS v4 theme tokens and custom animations
│   │
│   ├── js/
│   │   └── app.js
│   │       Alpine.js initialization
│   │
│   └── views/
│       ├── layouts/
│       │   └── Shared page layouts
│       │
│       ├── components/
│       │   └── Reusable Blade Components
│       │
│       └── pages/
│           └── Page-specific views
│
├── public/
│   └── images/
│       └── Storefront photos and mascot artwork
│
├── screenshots/
│   └── Interface and development screenshots
│
├── documentation/
│   └── Before-and-after comparison images
│
└── README.md
```

### `resources/views/layouts`

Contains shared Blade layouts that can be used as a common structure for pages.

### `resources/views/components`

Contains reusable Blade Components such as buttons, cards, navigation, testimonials, and contact information.

### `resources/views/pages`

Contains page-specific views. This keeps larger page structures separate from reusable UI components.

### `public`

Contains publicly accessible assets such as images and other files required by the browser.

### `screenshots`

Contains screenshots documenting the final interface, responsive layouts, and development structure.

### `documentation`

Contains supporting documentation images, particularly the before-and-after comparison required for the project.

---

## 9. Screenshots

The project documentation includes screenshots demonstrating the interface at different stages and screen sizes.

### Responsive Layouts

**Desktop View**
![Desktop Layout](screenshots/03-Desktop_Layout.png)

**Tablet View**
![Tablet Layout](screenshots/04-Tablet_Layout.png)

**Mobile View**
![Mobile Layout](screenshots/05-Mobile_Layout.png)

### Interface Sections

**Navigation Bar**
![Navigation Bar](screenshots/06-Navigation_Bar.png)

**Hero Section**
![Hero Section](screenshots/07-Hero_Section.png)

**Features Section**
![Features Section](screenshots/08-Features_Section.png)

**Pricing Cards**
![Pricing Cards](screenshots/09-Pricing_Cards.png)

**Testimonials**
![Testimonials](screenshots/10-Testimonials.png)

**Footer**
![Footer](screenshots/11-Footer.png)

### Development Documentation

**VS Code Project Structure**
![VS Code Project Structure](screenshots/12-VSCode_Project_Structure.png)

**Blade Components Folder**
![Blade Components Folder](screenshots/13-Blade_Components.png)

**GitHub Repository**
![GitHub Repository](screenshots/14-GitHub_Repository.png)

---

## 10. Design Principles

The project follows several design principles recommended for modern web interfaces.

### Modern Design System

The interface uses a consistent set of colors, typography, spacing, component styles, and visual effects.

### Consistent Spacing and Typography

Spacing and typography are standardized across sections to establish a clear visual hierarchy.

### Limited Color Palette

The design uses a small number of primary colors based on the existing business branding.

### Accessibility and Contrast

Text and interactive elements use sufficiently contrasting colors to improve readability and usability.

### Original Design

The interface was developed specifically for Arriola-Robles Children's Clinic and Roncis Pharmacy rather than directly copying an existing website.

The design combines the business's existing brand identity with a custom digital visual system.

---

## 11. Challenges & Solutions

### Tailwind CSS v4 Changes

The original development plan was based on the older Tailwind CSS workflow using:

```bash
npx tailwindcss init -p
```

Tailwind CSS v4 introduced a different configuration approach, including the Vite plugin and CSS-first theme configuration.

The project was adapted by using `@tailwindcss/vite` and defining custom theme tokens directly in `resources/css/app.css`.

### Avoiding a Generic or Templated Design

Early versions relied more heavily on common UI patterns such as emoji icons and repeated rounded cards.

These were replaced with:

* Custom SVG icons
* More varied layouts
* Brand-specific colors
* A custom mascot illustration
* More deliberate visual hierarchy

This helped the final design feel more specific to the business.

### Establishing a Visual Identity

The project explored multiple visual directions before settling on the final design.

The final approach retained the clinic and pharmacy's real-world brand colors while introducing a custom mascot illustration and restrained glassmorphism effects.

This allowed the landing page to feel modern without losing the identity of the actual business.

### Tablet Layout Refinement

An early version of the interface prioritized mobile and desktop breakpoints without fully testing the tablet range. Once reviewed at 768px, three issues were identified: the navbar felt crowded, horizontal overflow created unintended spacing, and pricing cards were uneven in height.

These were resolved by moving the desktop navigation breakpoint from `md` to `lg`, adding `overflow-x-hidden` to prevent layout overflow, and switching the pricing grid to `items-stretch` so all cards match height.

### Windows/PowerShell Compatibility

Some common Bash commands do not behave the same way in Windows PowerShell.

For example, commands using `&&` or `touch` required PowerShell-compatible alternatives.

The development workflow was adjusted to use Windows-compatible commands where necessary.

---

## 12. Installation & Setup

### Requirements

Before running the project, make sure the following are installed:

* PHP
* Composer
* Node.js and npm
* Laravel-compatible PHP extensions

### Installation

Clone the repository:

```bash
git clone https://github.com/jqwud/week05-product-landing-page.git
```

Navigate into the project:

```bash
cd week05-product-landing-page
```

Install PHP dependencies:

```bash
composer install
```

Install frontend dependencies:

```bash
npm install
```

Start the frontend development server:

```bash
npm run dev
```

In another terminal, start Laravel:

```bash
php artisan serve
```

Open the application at:

```text
http://127.0.0.1:8000
```

---

## 13. Reflection

This project provided practical experience in combining responsive design, component-based development, and visual design into a single working interface.

One of the most important lessons was understanding how reusable components can improve the structure and maintainability of a project. Instead of treating the landing page as one large HTML document, the interface was divided into smaller Blade Components that could be reused and modified independently.

Working with Tailwind CSS v4 also provided experience with its newer CSS-first configuration approach. This required adapting the original development plan but ultimately resulted in a better understanding of Tailwind's utility system and design tokens.

Another important lesson was designing around the constraints of a real business. Instead of inventing a completely new identity, the project needed to preserve recognizable elements such as the clinic's colors, pharmacy branding, services, and information while still creating a modern digital experience.

Overall, the project strengthened my understanding of responsive web design, Laravel Blade Components, Tailwind CSS, UI/UX principles, and the process of refining an interface from a basic layout into a polished responsive product landing page.

---

## 14. Project Information

**Business:** Arriola-Robles Children's Clinic & Roncis Pharmacy
**Location:** Brgy. Cabanbanan, Pagsanjan, Laguna
**Technology:** Laravel, Blade, Tailwind CSS v4, Alpine.js
**Project Type:** Responsive Product Landing Page
**Purpose:** Academic / School Project

---

© 2026 Arriola-Robles Children's Clinic & Roncis Pharmacy. Built as a school project.