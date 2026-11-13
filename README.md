# Tannerpress WordPress

Homepage design refinements for https://tannerpress.com, implemented as a small plugin for the existing Tannerpress block theme.

## Changes

- Fluid headline and section typography with consistent spacing.
- Responsive hero image and wrapping calls to action.
- Full-width mobile hero buttons and single-column mobile articles.
- Visible keyboard focus and clearer editorial separation.
- Existing homepage text, images, palette, product queries, and article queries are preserved.

## Install

Copy `tannerpress-homepage/` into `wp-content/plugins/`, then activate **Tannerpress Homepage** in WordPress Plugins. Alternatively zip that folder and upload it in Plugins > Add New > Upload Plugin. The stylesheet loads only on the front page. No database migration or content replacement is required.

The existing `.github/workflows/wpcom.yml` packages repository contents as an artifact. It contains no explicit plugin installation or activation step. Confirm the destination and directory mapping in your WordPress deployment integration before deploying; this repository is not a complete WordPress installation.

## Verification

Selectors were checked against the published homepage markup. PHP runtime and visual browser verification were unavailable in the authoring environment: PHP was absent and Chromium failed to launch because socket creation was blocked. Desktop/mobile visual QA and WordPress runtime verification remain required before production activation. Check at 1440px, 768px and 390px; verify no horizontal scrolling, hero links, product cards, article links, keyboard focus, and that other pages remain unchanged.

## Rollback

Deactivate Tannerpress Homepage. Original theme styling returns immediately; content remains intact.
