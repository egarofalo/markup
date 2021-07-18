<?php

use function Codevelopers\Markup\Helpers\Navbar\primary_navbar,
    Codevelopers\Markup\Helpers\Navbar\primary_navbar_mobile;
?>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-xl">
        <a class="navbar-brand" href="<?php echo esc_url(home_url()) ?>">
            <?php
            if (has_custom_logo()) :
                the_custom_logo();
            else :
                bloginfo();
            endif;
            ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNavbar" aria-controls="primaryNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="primaryNavbar" class="collapse navbar-collapse">
            <?php
            primary_navbar();
            primary_navbar_mobile();
            ?>
        </div>
    </div>
</nav>