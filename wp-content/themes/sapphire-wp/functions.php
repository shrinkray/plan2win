<?php


	define( 'EWF_SETUP_PAGE'			, 'functions.php');				# page containing setup
	define( 'EWF_SETUP_THEME_DOMAIN'	, 'sapphire-wp');				# translation domain
	define( 'EWF_SETUP_THNAME'			, 'bitpub');					# theme options short name
	define( 'EWF_SETUP_TITLE'			, 'Sapphire Setup');			# wordpress menu title
	define( 'EWF_SETUP_THEME_NAME'		, 'Sapphire Wordpress');		# wordpress menu title
	define( 'EWF_SETUP_THEME_VERSION'	, '1.0');						# wordpress menu title
	
	
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
	function baw_hack_wp_title_for_home( $title )
	{
	  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
	    return __( 'Home', 'theme_domain' ) . ' - ' . get_bloginfo( 'description' );
	  }
	  return $title;
	}
	
	include_once ('framework/framework-setup.php');


# Preview WooCommerce Emails.
# @author WordImpress.com
# @url https://github.com/WordImpress/woocommerce-preview-emails
# If you are using a child-theme, then use get_stylesheet_directory() instead
#

$preview = get_template_directory() . '/woocommerce/emails/woo-preview-emails.php';

if(file_exists($preview)) {
	require $preview;
}
/**
 * Redirect the Continue Shopping URL from the default (most recent product)
 */
function custom_continue_shopping_redirect_url ( $url ) {
	$url ="https://www.plan2winsoftware.com/shop/";
	return $url;
}
add_filter('woocommerce_continue_shopping_redirect', 'custom_continue_shopping_redirect_url');

?>