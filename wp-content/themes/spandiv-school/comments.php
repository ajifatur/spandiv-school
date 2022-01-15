<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
// if(post_password_required()) {
// 	return;
// }
return;

?>

<div class="comments">

    <!-- Comment Title -->
	<?php if(have_comments()) : ?>
    <h4 class="comment-title"><?= get_comments_number() ?> Komentar</h4>
    <?php endif; ?>

    <?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if(!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
	?>
		<p class="no-comments"><?= _e('Comments are closed.', 'government' ); ?></p>
	<?php endif; ?>

    <!-- Comment List -->
    <div class="comment-list">
        <?php
            $comments = get_comments([
                'post_id' => get_the_ID()
            ]);
            foreach($comments as $comment) :
        ?>
        
        <div class="comment-list-item">
            <div class="flex-shrink-0">
                <img style="background-image: url('<?= bloginfo('template_url') ?>/assets/images/absolutvision-82TpEld0_e4-unsplash.jpg');">
            </div>
            <div class="flex-grow-1 ms-3">
                <p class="h6 mb-2"><?= $comment->comment_author ?></p>
                <p class="mb-0"><?= $comment->comment_content ?></p>
                <p class="mb-0"><small class="text-muted"><i class="bi-calendar me-1"></i><?= date('d/m/Y', strtotime($comment->comment_date)) ?></small></p>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>