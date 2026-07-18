<?php
/**
 * Template part for displaying search results.
 *
 * @package Leto_Starter
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'leto-entry' ); ?>>
	<header class="leto-entry__header">
		<?php the_title( sprintf( '<h2 class="leto-entry__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<p class="leto-entry__meta">
				<span class="posted-on">
					<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
						<?php echo esc_html( get_the_date() ); ?>
					</time>
				</span>
			</p>
		<?php endif; ?>
	</header>

	<div class="leto-entry__content">
		<?php the_excerpt(); ?>
	</div>
</article>
