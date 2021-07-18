<?php

/**
 * Enable features from Soil when plugin is installed and activated.
 * https://roots.io/plugins/soil
 */
add_action('after_setup_theme', function () {
    add_theme_support('soil', [
        // Cleaner WordPress markup
        'clean-up' => [
            // Obscure and suppress WordPress information.
            'wp_obscurity',
            // Disable WordPress emojis.
            'disable_emojis',
            // Disable Gutenberg block library CSS.
            'disable_gutenberg_block_css' => false,
            // Disable extra RSS feeds.
            'disable_extra_rss',
            // Disable recent comments CSS.
            'disable_recent_comments_css',
            // Disable gallery CSS.
            'disable_gallery_css',
            // Clean HTML5 markup.
            'clean_html5_markup',
        ],
        // Disable REST API
        // 'disable-rest-api',
        // Disable asset versioning
        'disable-asset-versioning',
        // Disable trackbacks
        'disable-trackbacks',
        // Google Analytics
        // 'google-analytics' => 'UA-XXXXX-Y',
        // Move all JS to the footer
        'js-to-footer',
        // Cleaner walker for navigation menus
        'nav-walker',
        // Convert search results from /?s=query to /search/query/
        'nice-search',
        // Root relative URLs
        'relative-urls'
    ]);
});

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
    add_image_size('slide-desktop', 1920, 900, true);
    add_image_size('slide-mobile', 800, 700, true);
    add_image_size('image-header', 1920, 900, true);
    add_image_size('banner', 1920, 1080, true);
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
