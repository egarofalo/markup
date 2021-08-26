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
                if (have_posts()) :
                    get_template_part('content', 'grid');
                    get_template_part('paginator');
                else :
                    get_template_part('content', 'none');
                endif;
                ?>
            </main>
        </div>

        <?php get_template_part('sidebar', 'primary') ?>
    </div>
</div>

<?php get_footer();
