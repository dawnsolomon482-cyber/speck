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
			<div class="speck-footer__social-icons">
				<a class="speck-footer__social-icon" href="<?php echo esc_url( speck_footer_link( 'speck_facebook_url' ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
					<svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
						<circle cx="20" cy="20" r="20" fill="#1877F2"/>
						<path d="M25.5 20.5H22V32h-4.7V20.5H14.5V16.3H17.3v-2.7c0-3.1 1.5-6.1 6.4-6.1h4.4v4.1h-3.2c-.6 0-1.5.3-1.5 1.7v3h4.7Z" fill="#fff"/>
					</svg>
				</a>
				<a class="speck-footer__social-icon" href="<?php echo esc_url( speck_footer_link( 'speck_youtube_url' ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
					<svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
						<rect x="2" y="8" width="36" height="24" rx="7" fill="#FF0000"/>
						<path d="M16.5 15.5v9l8-4.5Z" fill="#fff"/>
					</svg>
				</a>
				<a class="speck-footer__social-icon" href="<?php echo esc_url( speck_footer_link( 'speck_instagram_url' ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
					<svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<radialGradient id="speckIgGradient" cx="30%" cy="107%" r="150%">
								<stop offset="0%" stop-color="#fdf497"/>
								<stop offset="8%" stop-color="#fdf497"/>
								<stop offset="41%" stop-color="#fd5949"/>
								<stop offset="58%" stop-color="#d6249f"/>
								<stop offset="100%" stop-color="#285AEB"/>
							</radialGradient>
						</defs>
						<rect x="1" y="1" width="38" height="38" rx="11" fill="url(#speckIgGradient)"/>
						<rect x="10.5" y="10.5" width="19" height="19" rx="6" fill="none" stroke="#fff" stroke-width="2.2"/>
						<circle cx="20" cy="20" r="5.3" fill="none" stroke="#fff" stroke-width="2.2"/>
						<circle cx="26.3" cy="13.7" r="1.6" fill="#fff"/>
					</svg>
				</a>
			</div>
			<p class="speck-footer__social-label"><?php esc_html_e( 'Follow Speck Family Dealerships', 'speck-modern-theme' ); ?></p>
		</div>

		<div class="speck-footer__bottom">
			<div class="speck-container speck-footer__bottom-inner">
				<span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span>
				<span aria-hidden="true">|</span>
				<a href="<?php echo esc_url( speck_footer_link( 'speck_sitemap_url', 'https://www.speckdealerships.com/sitemap.aspx' ) ); ?>"><?php esc_html_e( 'Sitemap', 'speck-modern-theme' ); ?></a>
				<span aria-hidden="true">|</span>
				<a href="<?php echo esc_url( speck_footer_link( 'speck_privacy_url', home_url( '/privacy-policy/' ) ) ); ?>"><?php esc_html_e( 'Privacy', 'speck-modern-theme' ); ?></a>
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
