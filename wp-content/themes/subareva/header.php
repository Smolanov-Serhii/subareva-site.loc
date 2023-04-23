<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Subareva
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/@barba/core"></script>
	<script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
	<?php wp_head(); ?>
</head>
<script>
	window.onload = function () {
		document.body.classList.add('loaded_hiding');
		window.setTimeout(function () {
			document.body.classList.add('loaded');
			document.body.classList.remove('loaded_hiding');
		}, 500);
	}

</script>
<body <?php body_class(); ?> data-barba="wrapper">
<div class="site-container" data-barba="container" data-barba-namespace="<?php echo $slug?>">

<div class="preloader">
	<div class="preloader__row">
		<div class="preloader__item"></div>
		<div class="preloader__item"></div>
	</div>
</div>
<?php wp_body_open(); ?>
	<header id="header" class="header">
		<div class="header__logo">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<a href="<?php echo get_page_link( 2 );?>" rel="home">
					<?php
						the_custom_logo();
					?>
				</a>
				<?php
			else :
				the_custom_logo();
			endif;
			?>
		</div>
		<nav class="header__nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
		<div class="header__language">
			<?php
			qtranxf_generateLanguageSelectCode('short');
			?>
		</div>
	</header>
