<?php

namespace Codevelopers\Markup\Helpers\Hook;

/**
 * Hooks a single callback to multiple actions tags.
 */
function add_actions($tags, $function, $priority = 10, $accepted_args = 1): void
{
    foreach ((array) $tags as $tag) {
        add_action($tag, $function, $priority, $accepted_args);
    }
}

/**
 * Hooks a single callback to multiple filters tags.
 */
function add_filters($tags, $function, $priority = 10, $accepted_args = 1): void
{
    foreach ((array) $tags as $tag) {
        add_filter($tag, $function, $priority, $accepted_args);
    }
}

/**
 * Add one or more actions in an array format.
 */
function add_array_actions(array ...$actions): void
{
    foreach ($actions as $action) {
        if (
            isset($action[0]) and
            isset($action[1]) and
            is_string($action[0]) and
            is_callable($action[1])
        ) {
            if (is_array($action[0])) {
                add_actions(...$action);
            } else {
                add_action(...$action);
            }
        }
    }
}

/**
 * Add one or more filters in an array format.
 */
function add_array_filters(array ...$filters): void
{
    foreach ($filters as $filter) {
        if (
            isset($filter[0]) and
            isset($filter[1]) and
            is_string($filter[0]) and
            is_callable($filter[1])
        ) {
            if (is_array($filter[0])) {
                add_filters(...$filter);
            } else {
                add_filter(...$filter);
            }
        }
    }
}
