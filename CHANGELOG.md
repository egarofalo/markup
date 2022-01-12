## [1.2.0] - 2022-01-12

### Added

-   Add traductions
-   Add `comment_form_default_fields` filter hook for change comment form fields markup
-   Add `comment_form_default` filter hook for change comments field markup

### Changed

-   Move `main.js` and `forms.js` scripts to footer
-   Update _Webpack Encore_ version to `^0.33.0`
-   Update `sass-loader` version to `^10.2.0`
-   Update `postcss-loader` version to `^4.3.0`

### Fixed

-   Fix image files hashed path in `manifest.json`

## [1.1.3] - 2021-12-28

### Added

-   Add `assets/markup-logo.png` Markup image logo
-   Add `screenshot.jpg` theme image file

### Changed

-   Update `README.md`

### Removed

-   Remove **slide-desktop**, **slide-mobile**, **image-header** and **banner** thumbnails

## [1.1.2] - 2021-12-15

### Changed

-   Changed `README.md` file

## [1.1.1] - 2021-12-14

### Changed

-   Changed footer vendor styles
-   Changed engine "node" version to `14.x` in `package.json` file

### Fixed

-   Fixed value attribute on the meta charset tag inside the `head.php` template part

### Removed

-   Remove unused styles in `_footer.scss` sass file

## [1.1.0] - 2021-08-26

### Added

-   Add new helper function `get_template_part` into the helper file `template_tags.php`

### Changed

-   Update all template files and hooks files were `get_template_part` helper function was invoked
-   Update `README.md` file

## [1.0.5] - 2021-07-28

### Added

-   Add new theme metadata in `style.css` stylesheet theme
-   Add `_image.scss` for image elements styles
-   Add `show_paginator` conditional tag

### Changed

-   Change version in `style.css` stylesheet theme file
-   Update **Theme structure** section in `README.md`
-   Update `paginator.php` template part for show the paginator only when is needed

### Removed

-   Remove `_global.scss` file

## [1.0.4] - 2021-07-27

### Added

-   Add new filter `markup_site_title`
-   Add new section **Theme structure** in `README.md`

### Changed

-   New arguments (`bool $echo = true` and `string $tag = 'h1'`) in `site_title` template tag function

### Fixed

-   Fix `block-editor-styles` mixin in `mixins/_editor.scss`

## [1.0.3] - 2021-07-26

### Fixed

-   Fix version in `style.css` theme stylesheet

## [1.0.2] - 2021-07-26

### Added

-   Add `has_excerpt` conditional tag in `content-loop.php` template part
-   Add `has_excerpt` conditional tag in `content-page.php` template part
-   Add `has_excerpt` conditional tag in `content-single.php` template part

### Changed

-   Replace `get_custom_logo()` function call to `the_custom_logo()` in `footer.php` template file

## [1.0.1] - 2021-07-26

### Added

-   Add **Block Editor** and **TinyMCE Editor** styles in `editor-styles.scss`

### Changed

-   Rename **Template Full Width** to **Full Width**
-   Rename classes in `_loop.scss` and `_grid.scss`

### Removed

-   Remove **Soil** plugin support in `theme_support.php` hook file
