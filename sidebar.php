<?php

use function Codevelopers\Markup\Helpers\ConditionalTags\has_static_sidebar;
use function Codevelopers\Markup\Helpers\TemplateTags\get_template_part;

if (has_static_sidebar()) : ?>
    <aside class="sidebar-area static-sidebar">
        <?php get_template_part('sidebar', 'static') ?>
    </aside>
<?php endif;
