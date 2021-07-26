<div class="single-contents">
    <?php if (has_post_thumbnail()) : ?>
        <figure>
            <?php the_post_thumbnail('loop', ['class' => 'd-block mx-auto img-fluid']) ?>
        </figure>
    <?php endif; ?>

    <?php if (has_excerpt()) : ?>
        <div class="entry-excerpt">
            <?php the_excerpt() ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php the_content() ?>
    </div>
</div>