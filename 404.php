<?php

use function Codevelopers\Markup\Helpers\Asset\asset;
use function Codevelopers\Markup\Helpers\TemplateTags\get_template_part;
use function Codevelopers\Markup\Helpers\TemplateTags\site_main_row_container_class;
use function Codevelopers\Markup\Helpers\TemplateTags\site_main_col_container_class;

get_header() ?>

<div class="container-xl">
    <div <?php site_main_row_container_class() ?>>
        <div <?php site_main_col_container_class() ?>>
            <main class="site-main" role="main">
                <p class="page-404__big-text">
                    <?php _e("Sorry, we couldn't find what you're looking for.", 'markup') ?>
                </p>

                <div class="page-404__img-container">
                    <figure>
                        <img src="<?php echo asset('images/404.png') ?>" class="img-fluid d-block mx-auto" />
                    </figure>
                </div>

                <p class="page-404__medium-text">
                    <?php echo wp_sprintf(__(
                        'Go to our <a href="%s">HOME</a> page to continue browsing our site.',
                        'markup'
                    ), get_home_url()) ?>
                </p>
            </main>
        </div>

        <?php get_template_part('sidebar', 'primary') ?>
    </div>
</div>

<?php get_footer();
