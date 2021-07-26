<?php

use function Codevelopers\Markup\Helpers\Loop\posted_by;
use function Codevelopers\Markup\Helpers\Loop\posted_on;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('loop ' . get_post_type() . '-loop'); ?>>
    <header class="entry-header">
        <?php the_title('<h2 class="entry-title">', '</h2>') ?>

        <div class="entry-meta">
            <?php
            posted_on();
            posted_by();
            ?>
        </div>
    </header>

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

    <a href="<?php the_permalink() ?>" class="btn btn-secondary">
        <?php _e('Read more', 'markup') ?>
    </a>
</article>