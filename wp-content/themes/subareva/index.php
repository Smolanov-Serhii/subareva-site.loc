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
		<div class="header__logo">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<a href="<?php echo get_home_url()?>" rel="home">
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
		<div class="header__language">
			<?php
			qtranxf_generateLanguageSelectCode('short');
			?>
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
					<iframe id="sfera" src="https://blobmixer.14islands.com/view?ambient=0.95&angle1=1.03&angle2=0.31&angle3=1.57&bloom=0&ccRougness=0.21&clearColor=%23ffffff&clearcoat=0.22&color=%23ddf4ff&color1=%23000fff&color2=%23ffff00&color3=%237600ff&decay1=0&decay2=0&decay3=0&dist1=20&dist2=9.53&dist3=8.2&distort=0&dynEnv=false&envMap=2&flatShading=true&floor=false&floorColor=rgba%2811%2C39%2C43%2C1%29&floorEnvMap=0.37&floorMetalness=0&floorOpacity=0.27&floorRoughness=0.15&floorSize=0&floorY=-0.4&frequency=0.01&glitch=false&gradient=foil&int1=3.4&int2=0.7&int3=5&int4=0&int5=0.63&ior=2.33&lights[0]=1&lights[1]=2&lights[2]=3&lights[3]=4&lights[4]=5&metalness=0&noise=0&numWaves=5&opacity=1&penum1=1&penum3=1&poleAmount=0&pp=false&reflectivity=1&roughness=0.55&rshad=false&rx=-0.78&ry=1.23&rz=-2.49&scale=1.11&scanline=0&segments=512&shadow1=false&shadow2=false&shadowBias1=false&shadowFocus1=1&shadowMap=false&sky=false&speed=0&surfPoleAmount=0.43&surfaceDistort=1.9&surfaceFrequency=1.31&surfaceSpeed=1&transmission=0.17&useGradient=true&uv=true&vignette=0&wireframe=false&x1=3.87&x2=-2.8&x3=1.33&x4=3.07&y1=-3.73&y2=-6.67&y3=-0.27&z1=1.93&z2=5.73&z3=7.13&z4=3.53&z5=6.2"  frameborder="0" width="100%" height="100%"></iframe>
				</div>

			</div>
			<?php get_template_part( 'template-parts/content', 'static' ); ?>
		</section>




	</main>
<?php
get_footer();
