<div class="row grid">
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-6 col-md-4 grid-item <?php echo get_post_type() ?>-grid-item">
            <?php get_template_part('template-parts/content-loop', get_post_type()) ?>
        </div>
    <?php endwhile; ?>
</div>