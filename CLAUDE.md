# LC Hinoki 2023 Theme — Architecture Guide

## Theme Overview

- **Parent theme:** Understrap (Bootstrap 5 variant via `theme_mod_understrap_bootstrap_version`)
- **Child theme:** `lc-hinoki2023` (text domain)
- **Build system:** npm scripts — Sass (`src/sass/`), Rollup JS (`src/js/`), PostCSS, Terser
  - `npm run css` — compiles, autoprefixes, minifies SCSS → `css/`
  - `npm run js` — rollup + terser `src/js/` → `js/`
  - `npm run watch` — watches both with nodemon
- **Constants:** `LC_THEME_DIR` defined in `functions.php` pointing to wp-content subdirectory

## Key Files

| File | Purpose |
|------|---------|
| `functions.php` | Defines `LC_THEME_DIR`, loads `inc/lc-theme.php`, dequeues parent assets, loads Bootstrap 5 |
| `inc/lc-theme.php` | Main orchestration — includes all other `inc/` files, contains Amelia WAITLIST/email hooks |
| `inc/lc-blocks.php` | Registers all ~32 ACF blocks via `acf_register_block` (hooked to `acf/init`) |
| `inc/lc-utility.php` | Shortcodes (`[contact_email]`, `[contact_phone]`, `[social_icons]`), helpers (phone parsing, Vimeo, reading time), comment disabling |
| `inc/lc-posttypes.php` | Registers "What's On" CPT (currently commented out in `lc-theme.php`) |
| `inc/lc-taxonomies.php` | Taxonomy registration |
| `inc/lc-blog.php` | Blog-related functions |
| `blocks/` | 32 ACF block render templates |
| `acf-json/` | ACF field group JSON exports (synced via ACF UI) |

## Custom Plugins (in `/wp-content/plugins/`)

### lc-amelia-external-events
- Tags Amelia events with `EXTERNAL` (tag name) to turn them into link-out cards
- Admin page under Amelia menu to set external URLs per event
- Front-end: enqueues `lcaee-frontend.css` (hides `.am-ec__info-price`, `.am-ec__actions-price`, `.am-ec__info-capacity`, `.am-ec__info-availability`, `.am-ec__info-waiting-list` via `display: none !important`) and `lcaee-frontend.js` (relabels button to "Find out more", intercepts click to open URL in new tab)
- Uses `amelia_get_events_filter` to inject `lcaeeExternal` / `lcaeeUrl` into event data

### lc-amelia-restricted
- Passcode protection for Amelia events by category
- Admin UI to set passcodes per event category
- Front-end JS intercepts booking flow and prompts for passcode before proceeding

### lcp-popup
- Custom popup/modal functionality
- Has admin, assets, and templates directories

## Amelia Integration — WAITLIST Feature

**All in `inc/lc-theme.php`.** Uses a name-prefix convention (no plugin hooks, no Amelia overrides):

1. **Naming convention:** Name an Amelia event starting with `WAITLIST:` (e.g. `WAITLIST: Morning Forest Bathing`)

2. **Front-end button relabelling:** Inline `<script>` via `wp_footer` uses a `MutationObserver` watching `document.body`. When an `.am-ec__info-name` starts with `WAITLIST:`:
   - Changes `.am-ec__actions-btn .am-button__inner` text to `WAITLIST` (card)
   - Changes `.am-elf__footer .am-button--primary .am-button__inner` text to `WAITLIST` (popup)
   - Hides `.am-ec__info-price` and `.am-ec__actions-price` elements

3. **Email interception:** Filter on `amelia_manipulate_email_data` strips the `WAITLIST:` prefix and sends a waitlist confirmation message instead of the normal booking email.

**Key Amelia v3 CSS classes used:**
- `.am-ec` — event card wrapper
- `.am-ec__info-name` — event name in card
- `.am-ec__info-price` — price badge in info section
- `.am-ec__actions-price` — price in actions area
- `.am-ec__actions-btn` — button container
- `.am-elf__footer` — popup footer
- `#amelia-container` — root Amelia container (popup context)

## ACF Blocks Pattern

All blocks follow the same pattern in `lc-blocks.php`:
```php
acf_register_block(array(
    'name'            => 'LC Block Name',
    'title'           => 'LC Block Name',
    'render_template' => 'blocks/block_name.php',
    'category'        => 'layout',
    'icon'            => 'excerpt-view',
    'mode'            => 'edit',
    'supports'        => array('mode' => false),
));
```
Hooked to `acf/init`. Block templates use ACF field functions directly.

## Gutenberg Modifications

- Core paragraph, heading, and list blocks are wrapped in `<div class="container-xl">` via a render callback
- Admin styles constrain editor width to 1040px
- Full-screen editor is disabled by default
- Comments (and all related UI) are completely removed across the entire site
- Tags support is removed from posts
- Page templates from the parent theme (blank, empty, sidebar variants) are unset
