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
