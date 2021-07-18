<?php

namespace Codevelopers\Markup\Helpers\Query;

/**
 * Get the last six posts.
 */
function get_last_posts(int $count = 6)
{
    return new \WP_Query([
        'post_type' => 'post',
        'posts_per_page' => $count,
        'order' => 'DESC',
        'orderby' => 'date'
    ]);
}
