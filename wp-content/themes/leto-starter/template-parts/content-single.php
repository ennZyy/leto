<?php
/**
 * Template part for displaying single posts.
 *
 * @package Leto_Starter
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'leto-entry' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="leto-entry__thumbnail">
			<?php the_post_thumbnail( 'leto-starter-entry' ); ?>
		</div>
	<?php endif; ?>

	<header class="leto-entry__header">
		<?php the_title( '<h1 class="leto-entry__title">', '</h1>' ); ?>

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
				<span class="cat-links">
					<?php the_category( ', ' ); ?>
				</span>
			</p>
		<?php endif; ?>
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

	<?php if ( has_tag() ) : ?>
		<footer class="leto-entry__footer">
			<?php the_tags( '<p class="tag-links"><span class="tag-title">' . esc_html__( 'Tags:', 'leto-starter' ) . '</span> ', ', ', '</p>' ); ?>
		</footer>
	<?php endif; ?>
</article>
