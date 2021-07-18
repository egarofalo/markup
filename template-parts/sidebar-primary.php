<?php

use function Codevelopers\Markup\Helpers\ConditionalTags\has_dynamic_sidebar;
use function Codevelopers\Markup\Helpers\TemplateTags\primary_sidebar_container_class;

if (has_dynamic_sidebar('primary_sidebar')) : ?>
    <div <?php primary_sidebar_container_class() ?>>
        <aside class="sidebar-area primary-sidebar" role="complementary">
            <?php dynamic_sidebar('primary_sidebar') ?>
        </aside>
    </div>
<?php endif; ?>