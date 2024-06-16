<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JeleenTalledo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/icomoon.css">

	<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    rtl: true
  });
});
	
</script>
  <!-- Syntax Highlighter -->
  <link href="http://flexslider.woothemes.com/css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="http://flexslider.woothemes.com/css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <!-- Demo CSS -->
	<link rel="stylesheet" href="http://flexslider.woothemes.com/css/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="http://flexslider.woothemes.com/js/modernizr.js"></script>

	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jeleentalledo' ); ?></a>
