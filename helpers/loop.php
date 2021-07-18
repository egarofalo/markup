<?php

namespace Codevelopers\Markup\Helpers\Loop;

function posted_on()
{
    $time_string = wp_sprintf(
        '<time class="entry-date published" datetime="%1$s">%2$s</time>',
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date())
    );

    $posted_on = wp_sprintf(
        esc_html__('Posted on %s', 'markup'),
        $time_string
    );

    echo '<span class="posted-on">' . $posted_on . '</span>';
}

function posted_by()
{
    $posted_by = sprintf(
        esc_html__('by %s', 'markup'),
        '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
    );

    echo '<span class="posted-by"> ' . $posted_by . '</span>';
}
