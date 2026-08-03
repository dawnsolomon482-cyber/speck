<?php
/**
 * The footer for Speck Modern Theme
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	<footer class="speck-footer" role="contentinfo">

		<div class="speck-footer__social">
			<a href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
				<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 8.5h2.5V5.2c-.43-.06-1.9-.2-3.6-.2-3.57 0-6 2.24-6 6.35v3.65H4.5v3.7h3.4V22h3.8v-3.3h3.26l.52-3.7h-3.78v-3.2c0-1.07.29-1.8 1.8-1.8Z" fill="currentColor"/></svg>
			</a>
			<a href="#" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
				<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="5" width="20" height="14" rx="3" fill="none" stroke="currentColor" stroke-width="1.6"/><path d="M10.5 9.2 15 12l-4.5 2.8z" fill="currentColor"/></svg>
			</a>
			<a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
				<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="3" width="18" height="18" rx="5" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="1.6"/><circle cx="17.4" cy="6.6" r="1.1" fill="currentColor"/></svg>
			</a>
		</div>

		<div class="speck-footer__bottom">
			<div class="speck-container speck-footer__bottom-inner">
				<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
				<span aria-hidden="true">|</span>
				<a href="https://www.speckdealerships.com/sitemap.aspx"><?php esc_html_e( 'Sitemap', 'speck-modern-theme' ); ?></a>
				<span aria-hidden="true">|</span>
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy', 'speck-modern-theme' ); ?></a>
				<span aria-hidden="true">|</span>
				<span><?php bloginfo( 'name' ); ?></span>
				<span aria-hidden="true">|</span>
				<span>61 East Allen Road, Sunnyside, WA 98944</span>
			</div>
		</div>

	</footer>

<?php wp_footer(); ?>
</body>
</html>
