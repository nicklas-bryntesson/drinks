<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Pokemon
 * @since 1.0.0
 */

?>
<!doctype html>

<html <?php language_attributes(); ?> >


<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header class="site-header">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			<h2>Site Header</h2>
		</header>
		
