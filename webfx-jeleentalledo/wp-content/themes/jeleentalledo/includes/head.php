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
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
		<!-- owlcarousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>


	

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jeleentalledo' ); ?></a>
