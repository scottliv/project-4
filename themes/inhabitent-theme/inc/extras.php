<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// Change Wp logo and link on wp-admin login

function inhabitent_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );

function inhabitent_login_logo() { ?>
    <style type="text/css">
      #login h1 a, .login h1 a {
    		background-image: url(<?php echo get_stylesheet_directory_uri()?>/images/inhabitent-logo-text-dark.svg);
				height:65px;
				width:320px;
				background-size: 320px 65px;
				background-repeat: no-repeat;
      }
    </style>
<?php }
add_action( 'login_head', 'inhabitent_login_logo' );

function inhabitent_logo_url_title(){
	return 'Inhabitent';
}

add_filter('login_headertitle', 'inhabitent_logo_url_title');

function inhabitent_dynamic_css() {
	if (! is_page_template('page-templates/about.php')){
		return;
	}

	$image = CFS()->get( 'about_header_image' );

	if( ! $image ){
		return;
	}

	$hero_css = ".page-template-about .entry-header {
		background:
			linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
			url({$image}) no-repeat center bottom;
			background-size: cover, cover;
	}";
	wp_add_inline_style( 'red-starter-style', $hero_css); 
}
add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css');

function inhabitent_adventures_css() {

	$image = CFS()->get( 'adventure_hero' );

	if( ! $image ){
		return;
	}

	$adventure_css = ".single-adventure article header.entry-header {
		background:
			url({$image}) no-repeat center;
			background-size: cover;
	}";
	wp_add_inline_style( 'red-starter-style', $adventure_css); 
}
add_action( 'wp_enqueue_scripts', 'inhabitent_adventures_css');


