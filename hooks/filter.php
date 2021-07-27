<?php

/**
 * Add the SRI attributes to script and style tags served from a CDN.
 */
add_filter('style_loader_tag', function ($html, $handler) {
    if ($handler === 'fontawesome') {
        $html = str_replace(
            '<link',
            '<link integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"',
            $html
        );
    }

    return $html;
}, 10, 2);

/**
 * Hide dynamic sidebar in certain pages.
 */
add_filter('markup_hide_dynamic_sidebar', function ($name) {
    return in_array(true, [
        // add conditionals here...
    ], true);
});

/**
 * Show static sidebar in certain pages.
 */
add_filter('markup_show_static_sidebar', function () {
    return in_array(true, [
        // add conditionals here...
    ], true);
});

/**
 * Filter the site title.
 */
add_filter('markup_site_title', function (string $title) {
    // change the site title here...
    return $title;
});
