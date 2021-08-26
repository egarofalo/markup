<?php

use function Codevelopers\Markup\Helpers\TemplateTags\get_template_part;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('head'); ?>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <header class="site-header" role="banner">
        <?php get_template_part('primary-navbar') ?>
        <?php get_template_part('title') ?>
    </header><!-- .site-header -->

    <div class="site-body">