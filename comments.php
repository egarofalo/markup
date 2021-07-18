<?php
if (post_password_required()) {
    return;
}
?>
<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();

            if ('1' === $comment_count) {
                printf(
                    esc_html__('One comment on &ldquo;%1$s&rdquo;', 'markup'),
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            } else {
                printf(
                    esc_html(
                        _n(
                            '%1$s comment on &ldquo;%2$s&rdquo;',
                            '%1$s comments on &ldquo;%2$s&rdquo;',
                            $comment_count,
                            'markup'
                        )
                    ),
                    number_format_i18n($comment_count),
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments([
                'style' => 'ol',
                'short_ping' => true,
            ]);
            ?>
        </ol>

        <?php
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if (!comments_open()) :
        ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'markup'); ?></p>
    <?php endif;

    endif; // Check for have_comments().

    comment_form([
        'class_form' => 'comment-form needs-validation with-loading-state',
        'class_submit' => 'btn btn-outline-dark',
        'comment_field' => sprintf(
            '<p class="comment-form-comment">%s %s %s</p>',
            sprintf(
                '<label for="comment">%s</label>',
                _x('Comment', 'markup')
            ),
            '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" class="form-control"></textarea>',
            '<span class="invalid-feedback">' . __("The comment field must not be empty", 'markup') . '</span>'
        ),
    ]);
    ?>
</div>