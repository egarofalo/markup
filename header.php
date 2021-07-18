<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('template-parts/head'); ?>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <header class="site-header" role="banner">
        <?php get_template_part('template-parts/primary-navbar') ?>
        <?php get_template_part('template-parts/title') ?>
    </header><!-- .site-header -->

    <div class="site-body">