<?php get_sidebar() ?>
</div><!-- .site-body -->

<footer class="site-footer" role="contentinfo">
    <div class="site-footer__contents">
        <div class="container-xl">
            <div class="site-footer__logo">
                <?php
                if (has_custom_logo()) :
                    get_custom_logo();
                else :
                ?>
                    <p class="font-weight-bold text-center"><?php bloginfo('name') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="site-footer__vendor">
        <div class="container-fluid">
            <a href="https://codevelopers.tech" target="_blank" rel="noopener noreferrer">codevelopers.tech</a>
        </div>
    </div>
</footer><!-- .site-footer -->

<?php wp_footer() ?>
</body>

</html>