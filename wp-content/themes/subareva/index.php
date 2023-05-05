<?php
	/**
 		Template Name: Главная
 	*/
$post_id = basename(get_permalink());
//$post_id = get_the_ID();
$slug = $wp_query->post->post_title;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
<div class="site-container start-container" data-barba="container" data-barba-namespace="<?php echo $slug?>">
	<div class="preloader-main">

	</div>
	<?php wp_body_open(); ?>
	<header id="header" class="header">
		<div class="header__will">
			<img src="<?php echo get_template_directory_uri() . '/img/templates/header/will.svg'?>" alt="Will image">
		</div>
		<div class="header__logo-hide">
			<svg width="38" height="25" viewBox="0 0 38 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8.15427 10.1503C6.4816 9.51653 5.43616 8.88278 4.80891 8.24903C4.18166 7.61528 3.97259 6.77028 3.97259 5.92529C3.97259 4.86904 4.39075 3.81278 5.01801 3.17903C5.64526 2.54529 6.69069 2.12279 7.73611 2.12279C8.78153 2.12279 9.61787 2.33404 10.4542 2.96779C11.2905 3.60154 11.7087 4.44654 12.1269 5.50279L13.5905 4.44654C12.9632 3.17905 12.1269 2.1228 11.0814 1.48905C9.82693 0.855299 8.57243 0.4328 6.89975 0.4328C4.80891 0.4328 3.13625 1.06655 1.88174 2.33405C0.62724 3.60155 0 5.29153 0 7.19278C0 8.67153 0.418168 9.93903 1.04542 10.784C1.88176 11.8403 3.13625 12.6853 5.01801 13.319C8.36335 14.7978 10.036 16.4878 10.036 18.389C10.036 19.6565 9.61785 20.5015 8.99059 21.3465C8.15426 22.1915 7.31793 22.4028 6.06343 22.4028C5.22709 22.4028 4.39076 22.1915 3.55442 21.5578C2.71809 20.924 2.09082 20.2903 1.67265 19.234L0 20.5015C0.836337 21.769 1.88174 22.614 2.92717 23.2477C3.97259 23.8815 5.43616 24.0927 6.89975 24.0927C8.99059 24.0927 10.8724 23.459 12.336 21.9802C13.7995 20.7127 14.4268 19.0228 14.4268 16.9103C14.4268 15.4315 14.0086 14.164 13.1723 13.1078C12.3359 12.2628 10.6633 11.2065 8.15427 10.1503Z" fill="#15223D"/>
				<path d="M33.4162 21.134C32.1448 21.9793 30.8735 22.402 29.3902 22.402C27.0594 22.402 25.3642 21.5567 23.881 19.8659C22.6096 18.1752 21.9739 15.6392 21.9739 12.4691C21.9739 9.08762 22.6096 6.55155 24.0929 4.64949C25.3642 2.74743 27.2713 1.69073 29.6021 1.69073C31.0853 1.69073 32.1448 2.1134 33.2043 2.74742C34.2637 3.38144 35.1113 4.43814 35.747 5.91752L37.2302 4.86082C36.3827 3.38144 35.1113 2.11341 33.6281 1.26805C32.1448 0.422693 30.4497 0 28.5426 0C25.3642 0 22.6096 1.05671 20.4907 3.38145C18.3717 5.70619 17.3123 8.4536 17.3123 12.0464C17.3123 15.6392 18.3717 18.3866 20.4907 20.7113C22.6096 23.0361 25.1523 24.0927 28.3307 24.0927C30.4497 24.0927 32.3567 23.6701 33.84 22.6134C35.5351 21.5567 36.5946 20.0773 37.654 18.1752L36.1708 17.3299C35.747 19.0206 34.6875 20.2886 33.4162 21.134Z" fill="#15223D"/>
			</svg>
		</div>
		<div class="header__logo">
			<?php
			the_custom_logo();
			?>
		</div>
		<div class="header__language">
			<?php
			qtranxf_generateLanguageSelectCode('short');
			?>
		</div>
		<div class="header__burger">
			<img src="<?php echo get_template_directory_uri() . '/img/templates/header/burger.png'?>" alt="Burger button">
<!--			<div class="header__burger-lines">-->
<!--				<span></span>-->
<!--				<span></span>-->
<!--				<span></span>-->
<!--			</div>-->
		</div>
	</header>
	<main id="main" class="main page-main">
		<section class="start">
			<div class="start__decoration">
				<div class="start__decoration-top"></div>
				<div class="start__decoration-left"></div>
				<div class="start__decoration-bottom"></div>
			</div>
			<div class="start__container">
				<nav class="header__nav swiper-container start__nav">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'menu' => 'div',
						'container' => 'ul',
						'container_class' => '',
						'container_id' => '',
						'menu_class' => 'swiper-wrapper',
						'menu_id' => 'primary-menu',
						'echo' => true,
						'fallback_cb' => 'wp_page_menu',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth' => 0,
						'walker' => '',
					)); ?>
				</nav>
				<div class="start__sfera">
					<video autoplay muted loop id="myVideo">
						<source src="<?php echo get_template_directory_uri() . '/img/templates/header/sfera.mp4'?>" type="video/mp4">
					</video>
<!--					<iframe id="sfera" src="https://blobmixer.14islands.com/view?ambient=0.95&angle1=1.03&angle2=0.31&angle3=1.57&bloom=0&ccRougness=0.21&clearColor=%23ffffff&clearcoat=0.22&color=%23ddf4ff&color1=%23000fff&color2=%23ffff00&color3=%237600ff&decay1=0&decay2=0&decay3=0&dist1=20&dist2=9.53&dist3=8.2&distort=0&dynEnv=false&envMap=2&flatShading=true&floor=false&floorColor=rgba%2811%2C39%2C43%2C1%29&floorEnvMap=0.37&floorMetalness=0&floorOpacity=0.27&floorRoughness=0.15&floorSize=0&floorY=-0.4&frequency=0.01&glitch=false&gradient=foil&int1=3.4&int2=0.7&int3=5&int4=0&int5=0.63&ior=2.33&lights[0]=1&lights[1]=2&lights[2]=3&lights[3]=4&lights[4]=5&metalness=0&noise=0&numWaves=5&opacity=1&penum1=1&penum3=1&poleAmount=0&pp=false&reflectivity=1&roughness=0.55&rshad=false&rx=-0.78&ry=1.23&rz=-2.49&scale=1.11&scanline=0&segments=512&shadow1=false&shadow2=false&shadowBias1=false&shadowFocus1=1&shadowMap=false&sky=false&speed=0&surfPoleAmount=0.43&surfaceDistort=1.9&surfaceFrequency=1.31&surfaceSpeed=1&transmission=0.17&useGradient=true&uv=true&vignette=0&wireframe=false&x1=3.87&x2=-2.8&x3=1.33&x4=3.07&y1=-3.73&y2=-6.67&y3=-0.27&z1=1.93&z2=5.73&z3=7.13&z4=3.53&z5=6.2"  frameborder="0" width="100%" height="100%"></iframe>-->
				</div>

			</div>
			<?php get_template_part( 'template-parts/content', 'static' ); ?>
		</section>




	</main>
<?php
get_footer();
