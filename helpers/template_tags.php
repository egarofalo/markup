<?php

namespace Codevelopers\Markup\Helpers\TemplateTags;

use function CoDevelopers\Markup\Helpers\ConditionalTags\has_dynamic_sidebar;

/**
 * Display the title.
 */
function site_title()
{
    if (is_home() && is_front_page()) :
        bloginfo('name');
    elseif (is_singular() || (is_home() && !is_front_page())) :
        single_post_title();
    elseif (is_archive()) :
        the_archive_title();
    elseif (is_search()) :
        echo wp_sprintf(
            esc_html__('Search Results for: %s',  'markup'),
            '<span>' . get_search_query() . '</span>'
        );
    elseif (is_404()) :
        esc_html_e('Page not found', 'markup');
    endif;
}

/**
 * Display the class attribute of the site main row container.
 */
function site_main_row_container_class()
{
    $classes = 'row';

    echo 'class="' . $classes . '"';
}

/**
 * Display the class attribute of the site main col container.
 */
function site_main_col_container_class()
{
    $classes = 'col-12' . (has_dynamic_sidebar('primary_sidebar') ? ' col-sm-8' : '');

    echo 'class="' . $classes . '"';
}

/**
 * Display the class attribute of the primary sidebar container.
 */
function primary_sidebar_container_class()
{
    $classes = 'col-12 col-sm-4';

    echo 'class="' . $classes . '"';
}
