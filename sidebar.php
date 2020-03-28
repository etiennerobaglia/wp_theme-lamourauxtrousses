<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themamourotrousse
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
<div class="site-branding">
			
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img id="img-logo" alt="L'Amour Aux Trousses" src="<?php echo get_theme_file_uri( 'img/laat-logo_beige.svg' ); ?>">
				</a>
</div><!-- .site-branding -->

	<?php dynamic_sidebar( 'sidebar-1' ); 
	wp_nav_menu('menu-1'); ?>
</aside><!-- #secondary -->
