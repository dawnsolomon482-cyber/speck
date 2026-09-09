<?php
/**
 * Fallback template
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<main id="primary" class="speck-content speck-container speck-archive">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<h1 class="speck-archive__title"><?php esc_html_e( 'Blog', 'speck-modern-theme' ); ?></h1>
	<?php endif; ?>

	<?php
	if ( have_posts() ) :
		?>
		<div class="speck-blog-grid">
			<?php
			while ( have_posts() ) :
				the_post();
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
			?>
		</div>

		<nav class="speck-archive__pagination">
			<?php
			echo paginate_links(
				array(
					'prev_text' => __( '&laquo; Previous', 'speck-modern-theme' ),
					'next_text' => __( 'Next &raquo;', 'speck-modern-theme' ),
				)
			);
			?>
		</nav>
		<?php
	else :
		?>
		<p><?php esc_html_e( 'Nothing found.', 'speck-modern-theme' ); ?></p>
		<?php
	endif;
	?>
</main>

<?php
get_footer();
