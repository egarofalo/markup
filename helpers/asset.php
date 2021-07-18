<?php

namespace Codevelopers\Markup\Helpers\Asset;

$assets = json_decode(file_get_contents(get_template_directory() . '/dist/manifest.json'), true);

/**
 * Get an asset file with version added.
 */
function asset($filename)
{
    global $assets;

    return get_template_directory_uri() . '/' . $assets[$filename];
}

/**
 * Enqueues your styles.
 */
function styles()
{
    // Add Fontawesome styles
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    // Add site styles
    wp_enqueue_style('main', asset('styles/main.css'));
}

/**
 * Enqueue the shared script here.
 */
function shared_script()
{
    if (!is_admin()) {
        // Remove jQuery
        wp_deregister_script('jquery');

        // Add runtime.js
        wp_enqueue_script('runtime', asset('runtime.js'));

        // Add jQuery and other libraries
        wp_enqueue_script('jquery', asset('scripts/shared.js'), ['runtime']);
    }
}

/**
 * Enqueues your scripts.
 */
function scripts()
{
    if (!is_admin()) {
        // Add main.js
        wp_enqueue_script('main', asset('scripts/main.js'), ['jquery']);

        // Add forms.js
        wp_enqueue_script('forms', asset('scripts/forms.js'), ['jquery']);
        wp_localize_script('forms', 'wp_ajax', [
            'url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce(),
        ]);

        // Add comment-reply js
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}

/**
 * Enqueues admin login styles.
 */
function admin_login_styles()
{
    wp_enqueue_style('login', asset('styles/login.css'));
}
