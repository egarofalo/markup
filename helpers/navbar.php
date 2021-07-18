<?php

namespace Codevelopers\Markup\Helpers\Navbar;

/**
 * Displays the Primary Navbar.
 */
function primary_navbar()
{
    wp_nav_menu([
        'echo' => true,
        'theme_location' => 'primary_navigation',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'navbar-nav ml-auto d-none d-md-flex',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new \WP_Bootstrap_Navwalker(),
    ]);
}

/**
 * Displays the Primary Navbar for mobile.
 */
function primary_navbar_mobile()
{
    wp_nav_menu([
        'echo' => true,
        'theme_location' => 'primary_navigation_mobile',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'navbar-nav mr-auto d-md-none',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new \WP_Bootstrap_Navwalker(),
    ]);
}

/**
 * Displays the Footer Navbar.
 */
function footer_navbar()
{
    wp_nav_menu([
        'echo' => true,
        'theme_location' => 'footer_navigation',
        'depth' => 1,
        'container' => false,
        'menu_class' => 'navbar-footer',
    ]);
}
