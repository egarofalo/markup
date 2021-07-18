<?php

use function Codevelopers\Markup\Helpers\TemplateTags\site_main_row_container_class;
use function Codevelopers\Markup\Helpers\TemplateTags\site_main_col_container_class;

get_header() ?>

<div class="container-xl">
    <div <?php site_main_row_container_class() ?>>
        <div <?php site_main_col_container_class() ?>>
            <main class="site-main" role="main">
                <?php
                if (have_posts()) :
                    get_template_part('template-parts/content', 'grid');
                    get_template_part('template-parts/paginator');
                else :
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
            </main>
        </div>

        <?php get_template_part('template-parts/sidebar', 'primary') ?>
    </div>
</div>

<?php get_footer();
