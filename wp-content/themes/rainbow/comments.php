<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dpbm
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
//    $fields = array(
//        'author' => '<p class="comment-form-author"><label for="author">' . __('Họ tên', 'domainreference') . '</label> ' . ( $req ? '<span class="required"></span>' : '' ) . '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"/></p>',
//        'email' => '<p class="comment-form-email"><label for="email">Email</label> ' . ( $req ? '<span class="required"></span>' : '' ) . '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" /></p>',
//    );

    $args = array(
        'fields' => apply_filters('comment_form_default_fields', []),
        'label_submit' => 'Gửi bình luận',
        'cancel_reply_link' => 'Hủy',
    );

    comment_form($args);
    if (have_comments()) :
        ?>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'dpbm'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'dpbm')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'dpbm')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-above -->
        <?php endif; // Check for comment navigation.  ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol><!-- .comment-list -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'dpbm'); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'dpbm')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'dpbm')); ?></div>

                </div><!-- .nav-links -->
            </nav><!-- #comment-nav-below -->
            <?php
        endif; // Check for comment navigation.

    endif; // Check for have_comments().
// If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>

        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'dpbm'); ?></p>
        <?php
    endif;
    ?>

</div><!-- #comments -->
