<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_underscore
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		<?php
			if ( has_nav_menu( 'footer-menu' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'container' => 'nav',
					'container_class' => 'footer-menu-container',
					'menu_class' => 'footer-menu-list',
				) );
			}
			?>

		<div>
			<p> <small>jep portfolio</small> |
			<small>© 2024 All rights reserved.</small>
			</p>
		</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
