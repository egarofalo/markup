<?php

$helpers = [
    'asset',
    'hook',
    'loop',
    'navbar',
    'query',
    'string',
    'conditional_tags',
    'template_tags'
];

$external = [
    'class-wp-bootstrap-navwalker'
];

$hooks = [
    'action',
    'filter',
    'shortcode',
    'theme_support'
];

foreach ($helpers as $file) {
    require_once locate_template("helpers/{$file}.php");
}

foreach ($external as $file) {
    require_once locate_template("external/{$file}.php");
}

foreach ($hooks as $file) {
    require_once locate_template("hooks/{$file}.php");
}
