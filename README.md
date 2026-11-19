# Milan3PLHub theme

WordPress child theme of **Twenty Twenty-Five** for [milan3plhub.com](https://milan3plhub.com).

## What lives here

| File | Purpose |
| --- | --- |
| `style.css` | Theme header plus all custom CSS (cards, steps, header, footer, forms, mobile sticky bar) |
| `functions.php` | Loads `style.css` on the site and in the editor |
| `theme.json` | Colour palette, fonts, font sizes, layout widths, element styles |
| `parts/header.html` | Site header: wordmark, main menu, Get a quote button |
| `parts/footer.html` | Site footer and the mobile sticky Contact / Get a quote bar |
| `templates/404.html` | Page not found template |

Page content (the pages themselves), menus, forms and plugin settings live in the WordPress database, not in this repo.

## Requirements

- Parent theme **Twenty Twenty-Five** installed in `wp-content/themes/twentytwentyfive`.
- Font files in `wp-content/uploads/fonts/`: `archivo-600.woff2`, `archivo-700.woff2`, `ibm-plex-sans-400.woff2`, `ibm-plex-sans-500.woff2`, `ibm-plex-sans-600.woff2`, `ibm-plex-mono-500.woff2`.

## Workflow

1. Edit files locally and push to `main`.
2. In StackCP > Git Version Control, pull the latest changes and deploy.
3. Purge the 20i cache if logged-out visitors still see the old version.

If the header or footer is edited in Appearance > Editor, WordPress saves a copy in the database that overrides the file here. To go back to the file version, use "Reset" on that template part in the Site Editor.
