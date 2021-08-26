<?php

use function Codevelopers\Markup\Helpers\Query\get_last_posts;
use function Codevelopers\Markup\Helpers\TemplateTags\get_template_part;

/**
 * Last posts Section shortcode.
 * [last-posts-section class="another-classes" count="number_of_posts" /]
 */

add_shortcode('last-posts-section', function ($atts) {
    $atts = shortcode_atts(
        [
            'class' => '',
            'count' => 4,
        ],
        $atts,
        'last-posts-section'
    );

    $atts['posts'] = get_last_posts();
    get_template_part('last-posts-section', null, $atts);
});
