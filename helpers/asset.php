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
 * Enqueue your Google Fonts styles.
 */
function google_fonts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');
}

/**
 * Enqueues your styles.
 */
function styles()
{
    // Add Google Fonts styles
    google_fonts();
    // Add Fontawesome styles
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    // Add site styles
    wp_enqueue_style('main', asset('styles/main.css'), ['fontawesome', 'google-fonts']);
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
        wp_enqueue_script('main', asset('scripts/main.js'), ['jquery'], false, true);

        // Add forms.js
        wp_enqueue_script('forms', asset('scripts/forms.js'), ['jquery'], false, true);

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
