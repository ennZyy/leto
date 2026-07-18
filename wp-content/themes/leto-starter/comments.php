<?php
/**
 * Comments template.
 *
 * @package Leto_Starter
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$leto_comment_count = get_comments_number();
			if ( '1' === $leto_comment_count ) {
				printf(
					/* translators: %s: post title. */
					esc_html__( 'One thought on &ldquo;%s&rdquo;', 'leto-starter' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count, 2: post title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', (int) $leto_comment_count, 'comments title', 'leto-starter' ) ),
					esc_html( number_format_i18n( $leto_comment_count ) ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => esc_html__( '&laquo; Older comments', 'leto-starter' ),
				'next_text' => esc_html__( 'Newer comments &raquo;', 'leto-starter' ),
			)
		);
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'leto-starter' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_form'  => 'leto-comment-form',
			'class_submit'=> 'submit leto-submit',
		)
	);
	?>
</div>
