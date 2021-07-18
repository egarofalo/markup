<?php if ($posts->have_posts()) : ?>
    <section class="section last-posts-section">
        <div class="row grid">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                <div class="col-6 col-md-4 item-<?php echo get_post_type() ?>">
                    <?php get_template_part('template-parts/content', 'loop') ?>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </section>
<?php endif;
