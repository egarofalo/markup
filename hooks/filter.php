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
 * Add Bootstrap classes to comments form fields.
 */
add_filter('comment_form_default_fields', function ($fields) {
    $required_feedback = '<span class="invalid-feedback">' . __("This field is required", 'markup') . '</span></p>';

    if (!empty($fields['author'])) {
        $fields['author'] = str_replace(
            ['<input ', '</p>'],
            [
                '<input class="form-control" ',
                $required_feedback
            ],
            $fields['author']
        );
    }

    if (!empty($fields['email'])) {
        $fields['email'] = str_replace(
            ['<input ', '</p>'],
            [
                '<input class="form-control" ',
                $required_feedback
            ],
            $fields['email']
        );
    }

    if (!empty($fields['url'])) {
        $fields['url'] = str_replace(
            ['<input ', '</p>'],
            [
                '<input class="form-control" ',
                $required_feedback
            ],
            $fields['url']
        );
    }

    return $fields;
});

/**
 * Add span.invalid-feedback element and .from-control class to textarea comment field.
 */
add_filter('comment_form_defaults', function ($defaults) {
    $defaults['comment_field'] = str_replace(
        ['<textarea ', '</p>'],
        [
            '<textarea class="form-control" ',
            '<span class="invalid-feedback">' . __("The comment field must not be empty", 'markup') . '</span>'
        ],
        $defaults['comment_field']
    );

    return $defaults;
});

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
