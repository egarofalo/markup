<?php

use function Codevelopers\Markup\Helpers\TemplateTags\site_title;
?>
<div class="site-title">
    <div class="container-xl">
        <?php echo apply_filters('markup_site_title', site_title(false)) ?>
    </div>
</div>