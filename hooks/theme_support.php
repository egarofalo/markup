<?php

/**
 * Enable plugins to manage the document title.
 * http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
 */
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

/**
 * Enable post thumbnails and register image sizes for your theme.
 * http://codex.wordpress.org/Post_Thumbnails
 * http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
 * https://developer.wordpress.org/reference/functions/add_image_size
 */
add_action('init', function () {
    add_theme_support('post-thumbnails');
    add_image_size('loop', 500, 350, true);
});

/**
 * Enable HTML5 markup support.
 * http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
 */
add_action('after_setup_theme', function () {
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);
});

/**
 * Add aditional features to the Block Editor.
 */
add_action('after_setup_theme', function () {
    // Default block styles
    // https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
    add_theme_support('wp-block-styles');
    // Supporting custom line heights
    // https://developer.wordpress.org/block-editor/developers/themes/theme-support/#supporting-custom-line-heights
    add_theme_support('custom-line-height');
    // Support custom units
    // https://developer.wordpress.org/block-editor/developers/themes/theme-support/#support-custom-units
    add_theme_support('custom-units', 'rem', 'em');
    // Responsive embedded content
    // https://developer.wordpress.org/block-editor/developers/themes/theme-support/#responsive-embedded-content
    add_theme_support('responsive-embeds');
    // Cover block padding
    // https://developer.wordpress.org/block-editor/developers/themes/theme-support/#cover-block-padding
    add_theme_support('custom-spacing');
});

/**
 * Add custom logo support.
 */
add_action('after_setup_theme', function () {
    add_theme_support('custom-logo', [
        'height' => 300,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => ['site-title', 'site-description'],
        'unlink-homepage-logo' => false,
    ]);
});
