<?php
/**
 * Section: Latest From The Blog -- shows the 6 most recent posts, each as a
 * card (featured image, date, title, excerpt), with a "View All Articles"
 * button linking to the site's Posts page (Settings > Reading > Posts page).
 * Also available as the [speck_blog] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$speck_blog_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 6,
		'post_status'    => 'publish',
		'no_found_rows'  => true,
	)
);

if ( ! $speck_blog_query->have_posts() ) {
	return;
}

$speck_blog_archive_fallback = get_option( 'page_for_posts' ) ? get_permalink( get_option( 'page_for_posts' ) ) : home_url( '/blog/' );
$speck_blog_archive_url      = speck_footer_link( 'speck_blog_button_url', $speck_blog_archive_fallback );
?>
<section class="speck-blog">
	<div class="speck-container">
		<h2><?php esc_html_e( 'Latest From The Blog', 'speck-modern-theme' ); ?></h2>

		<div class="speck-blog-grid">
			<?php
			while ( $speck_blog_query->have_posts() ) :
				$speck_blog_query->the_post();
				?>
				<a class="speck-blog-card" href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="speck-blog-card__image">
							<?php the_post_thumbnail( 'medium_large' ); ?>
						</div>
					<?php endif; ?>
					<div class="speck-blog-card__body">
						<p class="speck-blog-card__date"><?php echo esc_html( get_the_date() ); ?></p>
						<h3 class="speck-blog-card__title"><?php the_title(); ?></h3>
						<p class="speck-blog-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
					</div>
				</a>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>

		<a class="speck-btn speck-btn--outline" href="<?php echo esc_url( $speck_blog_archive_url ); ?>">
			<?php esc_html_e( 'View All Articles', 'speck-modern-theme' ); ?>
		</a>
	</div>
</section>
