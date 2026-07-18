<?php
/**
 * Template part for displaying posts in loop contexts (archive, search, etc.).
 *
 * @package Leto_Starter
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'leto-entry' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="leto-entry__thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php the_post_thumbnail( 'leto-starter-entry' ); ?>
		</a>
	<?php endif; ?>

	<header class="leto-entry__header">
		<?php the_title( sprintf( '<h2 class="leto-entry__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<p class="leto-entry__meta">
				<span class="posted-on">
					<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
						<?php echo esc_html( get_the_date() ); ?>
					</time>
				</span>
				<span class="byline">
					<?php
					printf(
						/* translators: %s: post author. */
						esc_html__( 'by %s', 'leto-starter' ),
						'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
					);
					?>
				</span>
			</p>
		<?php endif; ?>
	</header>

	<div class="leto-entry__content">
		<?php the_excerpt(); ?>
	</div>

	<footer class="leto-entry__footer">
		<a class="leto-read-more" href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Read more', 'leto-starter' ); ?>
			<span aria-hidden="true">&rarr;</span>
		</a>
	</footer>
</article>
