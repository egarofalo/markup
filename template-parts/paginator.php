<?php

use function Codevelopers\Markup\Helpers\ConditionalTags\show_paginator;

if (show_paginator()) : ?>
    <div class="site-paginator">
        <div class="container-xl site-paginator__content">
            <?php echo paginate_links() ?>
        </div>
    </div>
<?php endif;
