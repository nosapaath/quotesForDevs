<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="quote-header" role="banner">
				<div class="site-branding">

				<a href="<?php echo home_url();?>">
						<?php 
								$sv_file = file_get_contents(get_template_directory_uri().'/build/images/quoteslogo.svg');
								$find_string   = '<svg';
								$position = strpos($sv_file, $find_string);
								$sv_file_new = substr($sv_file, $position);
								echo "<div id='search-icon' class='logo-wrapper' style='' >" . $sv_file_new . "</div>";
						?>
						</a>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

		

			<div id="content" class="site-content">
