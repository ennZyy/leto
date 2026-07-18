<?php
/**
 * Template part for displaying single pages.
 *
 * @package Leto_Starter
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'leto-entry' ); ?>>
	<header class="leto-entry__header">
		<?php the_title( '<h1 class="leto-entry__title">', '</h1>' ); ?>
	</header>

	<div class="leto-entry__content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'leto-starter' ) . '">',
				'after'  => '</nav>',
			)
		);
		?>
	</div>
</article>
