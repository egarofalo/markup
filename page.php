<?php

use function Codevelopers\Markup\Helpers\TemplateTags\get_template_part;
use function Codevelopers\Markup\Helpers\TemplateTags\site_main_row_container_class;
use function Codevelopers\Markup\Helpers\TemplateTags\site_main_col_container_class;

get_header() ?>

<div class="container-xl">
    <div <?php site_main_row_container_class() ?>>
        <div <?php site_main_col_container_class() ?>>
            <main class="site-main" role="main">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('content', 'page');
                endwhile;

                // If comments are open or we have at least one comment, load the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </main>
        </div>

        <?php get_template_part('sidebar', 'primary') ?>
    </div>
</div>

<?php get_footer();
