<?php
/**
 * Single blog post template -- shows the full article.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<main id="primary" class="speck-content speck-container speck-single">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article <?php post_class(); ?>>
			<header class="speck-single__header">
				<h1><?php the_title(); ?></h1>
				<p class="speck-single__meta"><?php echo esc_html( get_the_date() ); ?></p>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="speck-single__thumbnail">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content speck-single__content">
				<?php the_content(); ?>
			</div>
		</article>
		<?php
	endwhile;
	?>
</main>

<?php
get_footer();
