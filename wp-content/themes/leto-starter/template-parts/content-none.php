<?php
/**
 * Template part for displaying a message when no posts match.
 *
 * @package Leto_Starter
 */
?>
<section class="leto-no-results">
	<header class="leto-page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing found', 'leto-starter' ); ?></h1>
	</header>

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p>
				<?php
				printf(
					/* translators: %s: post creation URL. */
					wp_kses(
						__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'leto-starter' ),
						array( 'a' => array( 'href' => array() ) )
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
			</p>
		<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again with some different keywords.', 'leto-starter' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'leto-starter' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</section>
