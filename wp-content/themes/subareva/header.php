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

if ( is_front_page() && is_home() ) {

	$param = 'data-aos="fade-right" data-aos-delay="1200"';
	$param2 = ' data-aos="fade-left" data-aos-delay="1500""';
}
else {
	$param = '';
	$param2 = '';
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<script src="https://maps.googleapis.com/maps/api/js?key=" defer ></script>
<!--	<script src="--><?php //echo get_template_directory_uri() . '/src/js/jquery.event.move.js'?><!--"></script>-->
<!--	<script src="--><?php //echo get_template_directory_uri() . '/src/js/jquery.twentytwenty.js'?><!--"></script>-->
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-25DMJ8C3N0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-25DMJ8C3N0');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2CSQ4M');</script>
<!-- End Google Tag Manager -->

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
	// function Twentytwenty(){
	// 	if ($(".twentytwenty-container").length){
	// 		$(".twentytwenty-container").twentytwenty({default_offset_pct: 0.7});
	// 	}
	// }
	// Twentytwenty();
</script>

<body <?php body_class(); ?> data-barba="wrapper">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2CSQ4M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="site-container" data-barba="container" data-barba-namespace="<?php echo $slug?>">
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<div class="background">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
<div class="preloader">
	<div class="preloader__row">
		<div class="preloader__item"></div>
		<div class="preloader__item"></div>
	</div>
</div>
<div class="preloader-page">

</div>
<?php wp_body_open(); ?>
	<header id="header" class="header default">
		<div class="header__small-container">
			<div class="header__logo-hide">
				<a href="<?php echo get_page_link( 2 );?>" rel="home">
					<svg width="38" height="25" viewBox="0 0 38 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.15427 10.1503C6.4816 9.51653 5.43616 8.88278 4.80891 8.24903C4.18166 7.61528 3.97259 6.77028 3.97259 5.92529C3.97259 4.86904 4.39075 3.81278 5.01801 3.17903C5.64526 2.54529 6.69069 2.12279 7.73611 2.12279C8.78153 2.12279 9.61787 2.33404 10.4542 2.96779C11.2905 3.60154 11.7087 4.44654 12.1269 5.50279L13.5905 4.44654C12.9632 3.17905 12.1269 2.1228 11.0814 1.48905C9.82693 0.855299 8.57243 0.4328 6.89975 0.4328C4.80891 0.4328 3.13625 1.06655 1.88174 2.33405C0.62724 3.60155 0 5.29153 0 7.19278C0 8.67153 0.418168 9.93903 1.04542 10.784C1.88176 11.8403 3.13625 12.6853 5.01801 13.319C8.36335 14.7978 10.036 16.4878 10.036 18.389C10.036 19.6565 9.61785 20.5015 8.99059 21.3465C8.15426 22.1915 7.31793 22.4028 6.06343 22.4028C5.22709 22.4028 4.39076 22.1915 3.55442 21.5578C2.71809 20.924 2.09082 20.2903 1.67265 19.234L0 20.5015C0.836337 21.769 1.88174 22.614 2.92717 23.2477C3.97259 23.8815 5.43616 24.0927 6.89975 24.0927C8.99059 24.0927 10.8724 23.459 12.336 21.9802C13.7995 20.7127 14.4268 19.0228 14.4268 16.9103C14.4268 15.4315 14.0086 14.164 13.1723 13.1078C12.3359 12.2628 10.6633 11.2065 8.15427 10.1503Z" fill="#15223D"/>
						<path d="M33.4162 21.134C32.1448 21.9793 30.8735 22.402 29.3902 22.402C27.0594 22.402 25.3642 21.5567 23.881 19.8659C22.6096 18.1752 21.9739 15.6392 21.9739 12.4691C21.9739 9.08762 22.6096 6.55155 24.0929 4.64949C25.3642 2.74743 27.2713 1.69073 29.6021 1.69073C31.0853 1.69073 32.1448 2.1134 33.2043 2.74742C34.2637 3.38144 35.1113 4.43814 35.747 5.91752L37.2302 4.86082C36.3827 3.38144 35.1113 2.11341 33.6281 1.26805C32.1448 0.422693 30.4497 0 28.5426 0C25.3642 0 22.6096 1.05671 20.4907 3.38145C18.3717 5.70619 17.3123 8.4536 17.3123 12.0464C17.3123 15.6392 18.3717 18.3866 20.4907 20.7113C22.6096 23.0361 25.1523 24.0927 28.3307 24.0927C30.4497 24.0927 32.3567 23.6701 33.84 22.6134C35.5351 21.5567 36.5946 20.0773 37.654 18.1752L36.1708 17.3299C35.747 19.0206 34.6875 20.2886 33.4162 21.134Z" fill="#15223D"/>
					</svg>
				</a>
			</div>
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
					?>
					<a href="<?php echo get_page_link( 2 );?>" rel="home">
						<?php
						the_custom_logo();
						?>
					</a>
				<?php
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
			<div class="header__nav-phones" style="justify-content: flex-end; align-items: flex-end;">
				<?php
				if( have_rows('telefony_v_menyu', 'options') ):
					while( have_rows('telefony_v_menyu','options') ) : the_row();
						$phone = get_sub_field('nomer_telefona');
						?>
						<a href="tel:<?php echo $phone ?>" rel="nofollow"><?php echo $phone ?></a>
					<span>  |  </span>
					<?php
					endwhile;
				endif;
				?>
			</div>
			<?php if( current_user_can('editor') || current_user_can('administrator') ) {  ?>
				<div class="header__language">
					<?php
					qtranxf_generateLanguageSelectCode('short');
					?>
				</div>
			<?php } ?>
			<div class="header__burger">
				<img src="<?php echo get_template_directory_uri() . '/img/templates/header/burger.png'?>" alt="Burger button">
				<!--			<div class="header__burger-lines">-->
				<!--				<span></span>-->
				<!--				<span></span>-->
				<!--				<span></span>-->
				<!--			</div>-->
			</div>
			<div class="header__mob" style="display: none">
				<div class="start__socials" <?php echo $param ?> >
					<a href="<?php echo the_field("ssylka_na_instagram", 'options'); ?>" rel="nofollow">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
								<path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9Z" fill="#B9B9D3"/>
							</g>
						</svg>
					</a>
					<a href="<?php echo the_field("ssylka_na_facebook", 'options'); ?>" rel="nofollow">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
								<path d="M22 12C22 6.48 17.52 2 12 2C6.48 2 2 6.48 2 12C2 16.84 5.44 20.87 10 21.8V15H8V12H10V9.5C10 7.57 11.57 6 13.5 6H16V9H14C13.45 9 13 9.45 13 10V12H16V15H13V21.95C18.05 21.45 22 17.19 22 12Z" fill="#B9B9D3"/>
							</g>
						</svg>
					</a>
					<a href="<?php echo the_field("ssylka_na_youtube", 'options'); ?>" rel="nofollow">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
								<path d="M21.543 6.498C22 8.28 22 12 22 12C22 12 22 15.72 21.543 17.502C21.289 18.487 20.546 19.262 19.605 19.524C17.896 20 12 20 12 20C12 20 6.107 20 4.395 19.524C3.45 19.258 2.708 18.484 2.457 17.502C2 15.72 2 12 2 12C2 12 2 8.28 2.457 6.498C2.711 5.513 3.454 4.738 4.395 4.476C6.107 4 12 4 12 4C12 4 17.896 4 19.605 4.476C20.55 4.742 21.292 5.516 21.543 6.498ZM10 15.5L16 12L10 8.5V15.5Z" fill="#B9B9D3"/>
							</g>
						</svg>
					</a>
					<a href="<?php echo the_field("ssylka_na_tiktok", 'options'); ?>" rel="nofollow">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C3.79086 2 2 3.79086 2 6V18C2 20.2091 3.79086 22 6 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H6ZM16.2331 7.83369C16.3212 7.89173 16.4122 7.94526 16.5056 7.9941C17.1136 8.30063 17.7075 8.39396 18 8.36187V10.7488C18 10.7488 17.1653 10.7138 16.5457 10.5475C15.6822 10.3139 15.1286 9.95517 15.1286 9.95517C15.1286 9.95517 14.7445 9.69822 14.7156 9.68072V14.6131C14.7156 14.8873 14.6438 15.5733 14.4286 16.1452C14.24 16.6343 13.9704 17.0873 13.6314 17.4848C13.6314 17.4848 13.1007 18.15 12.1685 18.5965C11.3914 18.9689 10.7002 18.9893 10.4257 18.9974C10.4032 18.998 10.3836 18.9986 10.3669 18.9993C10.3669 18.9993 9.09059 19.0512 7.93946 18.2603L7.93369 18.2544V18.2603C7.5445 17.9857 7.19744 17.6546 6.90369 17.2777C6.5394 16.8078 6.31587 16.2505 6.25818 16.0872V16.0813C6.16646 15.804 5.97407 15.1329 6.00292 14.4851C6.04878 13.3439 6.42749 12.6407 6.52786 12.4657C6.79163 11.9859 7.13619 11.5562 7.54603 11.1961C8.01377 10.7997 8.55769 10.5055 9.14348 10.3322C9.72928 10.1589 10.3442 10.1103 10.9495 10.1894L10.9467 12.6375C10.7473 12.5718 10.5388 12.5384 10.3291 12.5386C9.22125 12.5386 8.32336 13.4521 8.32336 14.5802C8.32336 15.7083 9.22125 16.6218 10.3291 16.6218C10.6741 16.6222 11.0132 16.5317 11.313 16.3593C11.6006 16.194 11.8437 15.9598 12.0209 15.6772C12.198 15.3947 12.3038 15.0724 12.3288 14.7388V14.7336C12.3303 14.7266 12.3303 14.7196 12.3303 14.7129V14.7129C12.3306 14.7076 12.3309 14.7025 12.3312 14.6976C12.3319 14.6873 12.3326 14.6776 12.3326 14.6674C12.3378 14.5455 12.3378 14.4221 12.3378 14.2973V5H14.7156C14.7119 5 14.6871 5.23041 14.7471 5.58651H14.7442C14.816 6.01553 15.011 6.62829 15.533 7.23231C15.7417 7.46042 15.9767 7.66233 16.2331 7.83369Z" fill="#B9B9D3"/>
							</g>
						</svg>
					</a>
					<a href="<?php echo the_field("ssylka_na_telegram", 'options'); ?>" rel="nofollow">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.92969 4.92891C6.80312 3.05422 9.34844 2 12 2C14.6516 2 17.1969 3.05422 19.0703 4.92891C20.9453 6.80359 22 9.34891 22 12C22 14.6511 20.9453 17.1964 19.0703 19.0711C17.1969 20.9458 14.6516 22 12 22C9.34844 22 6.80312 20.9458 4.92969 19.0711C3.05469 17.1964 2 14.6511 2 12C2.00052 9.34778 3.05432 6.80434 4.92969 4.92891ZM12.3578 9.3825C11.3859 9.78703 9.44218 10.6244 6.52656 11.8944C6.05312 12.0827 5.80468 12.2669 5.78281 12.4469C5.74433 12.751 6.12515 12.8709 6.6426 13.0338C6.71357 13.0562 6.78711 13.0794 6.8625 13.1039C7.37343 13.2698 8.06093 13.4641 8.41718 13.4717C8.74218 13.4788 9.10312 13.3452 9.50156 13.0711C12.2266 11.2325 13.6312 10.3031 13.7203 10.2831C13.7828 10.2691 13.8687 10.2513 13.9266 10.3033C13.9859 10.3552 13.9797 10.4536 13.9734 10.48C13.9366 10.6406 12.4463 12.0262 11.6708 12.7472C11.427 12.9738 11.2539 13.1348 11.2187 13.1714C11.1403 13.253 11.0602 13.3301 10.9833 13.4042C10.5092 13.8613 10.1534 14.2042 11.0031 14.7641C11.4151 15.0354 11.744 15.2594 12.0726 15.4833C12.4258 15.7239 12.7787 15.9643 13.2344 16.2631C13.3515 16.3399 13.4634 16.4197 13.5724 16.4974C13.9865 16.7926 14.3586 17.0578 14.8187 17.0155C15.0859 16.9909 15.3625 16.7397 15.5016 15.9903C15.8328 14.2192 16.4844 10.382 16.6344 8.80078C16.6484 8.66235 16.6312 8.485 16.6187 8.40719C16.6047 8.3293 16.5766 8.21836 16.4766 8.13633C16.3562 8.03907 16.1719 8.0186 16.0891 8.01992C15.7125 8.02672 15.1359 8.22735 12.3578 9.3825Z" fill="#B9B9D3"/>
							</g>
						</svg>
					</a>
				</div>
				<nav class="header__mob-nav">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'menu_id'        => 'primary-menu-mob',
						)
					);
					?>
				</nav>
				<div class="header__mob-phones">
					<?php
					if( have_rows('telefony_v_menyu', 'options') ):
						while( have_rows('telefony_v_menyu','options') ) : the_row();
							$phone = get_sub_field('nomer_telefona');
							?>
							<a href="tel:<?php echo $phone ?>" rel="nofollow"><?php echo $phone ?></a>
						<?php
						endwhile;
					endif;
					?>
				</div>
				<?php if( current_user_can('editor') || current_user_can('administrator') ) {  ?>
					<div class="header__mob-language">
						<?php
						qtranxf_generateLanguageSelectCode('short');
						?>
					</div>
				<?php } ?>
			</div>
		</div>
	</header>
