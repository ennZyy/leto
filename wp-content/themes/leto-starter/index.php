<?php
/**
 * The main template file.
 *
 * @package Leto_Starter
 */
get_header();
?>

<main id="leto-primary" class="leto-main" role="main">
	<div class="leto-container">
		<div class="leto-layout <?php echo is_active_sidebar( 'sidebar-1' ) ? 'leto-layout--with-sidebar' : ''; ?>">
			<div class="leto-content">

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header class="leto-page-header">
						<h1 class="page-title"><?php single_post_title(); ?></h1>
					</header>
				<?php elseif ( is_search() ) : ?>
					<header class="leto-page-header">
						<h1 class="page-title">
							<?php
							printf(
								/* translators: %s: search query. */
								esc_html__( 'Search results for: %s', 'leto-starter' ),
								'<span>' . esc_html( get_search_query() ) . '</span>'
							);
							?>
						</h1>
					</header>
				<?php elseif ( is_archive() ) :
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="leto-taxonomy-description">', '</div>' );
				endif; ?>

				<?php if ( have_posts() ) : ?>

					<?php
					while ( have_posts() ) :
						the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'leto-entry' ); ?>>
							<?php if ( has_post_thumbnail() ) : ?>
								<a class="leto-entry__thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
									<?php the_post_thumbnail( 'leto-starter-entry' ); ?>
								</a>
							<?php endif; ?>

							<header class="leto-entry__header">
								<?php
								if ( is_singular() ) :
									the_title( '<h1 class="leto-entry__title">', '</h1>' );
								else :
									the_title( sprintf( '<h2 class="leto-entry__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
								endif;
								?>

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
								<?php
								if ( is_singular() ) {
									the_content(
										sprintf(
											/* translators: %s: Name of current post. */
											wp_kses(
												__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'leto-starter' ),
												array( 'span' => array( 'class' => array() ) )
											),
											get_the_title()
										)
									);

									wp_link_pages(
										array(
											'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'leto-starter' ) . '">',
											'after'  => '</nav>',
										)
									);
								} else {
									the_excerpt();
								}
								?>
							</div>

							<?php if ( ! is_singular() ) : ?>
								<footer class="leto-entry__footer">
									<a class="leto-read-more" href="<?php the_permalink(); ?>">
										<?php esc_html_e( 'Read more', 'leto-starter' ); ?>
										<span aria-hidden="true">&rarr;</span>
									</a>
								</footer>
							<?php endif; ?>
						</article>
						<?php
						if ( is_singular() ) {
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						}
					endwhile;
					?>

					<nav class="leto-pagination" role="navigation" aria-label="<?php esc_attr_e( 'Posts navigation', 'leto-starter' ); ?>">
						<?php
						the_posts_pagination(
							array(
								'prev_text'          => esc_html__( '&laquo; Previous', 'leto-starter' ),
								'next_text'          => esc_html__( 'Next &raquo;', 'leto-starter' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'leto-starter' ) . ' </span>',
							)
						);
						?>
					</nav>

				<?php else : ?>

					<section class="leto-no-results">
						<header>
							<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'leto-starter' ); ?></h1>
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

				<?php endif; ?>

			</div><!-- .leto-content -->

			<?php get_sidebar(); ?>
		</div><!-- .leto-layout -->
	</div><!-- .leto-container -->
</main>

<?php
get_footer();
