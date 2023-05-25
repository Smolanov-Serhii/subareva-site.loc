<?php
/* Template Name: Портфолио */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */
$post_id = basename(get_permalink());
$post_id = get_the_ID();
$slug = $wp_query->post->post_title;
get_header();
?>

<main id="main" class="main page-portfolio">
    <?php get_template_part( 'template-parts/content', 'static' ); ?>
    <div class="start__decoration">
        <div class="start__decoration-top"></div>
        <div class="start__decoration-left"></div>
        <div class="start__decoration-bottom"></div>
    </div>
    <section class="portfolio">
        <div class="portfolio__container small-container">
            <div class="clinic__title section-title">
                <h1 class="section-title__main" data-aos="fade-up" data-aos-delay="400">
                    <?php the_field('zagolovok_straniczy', $post_id)?>

                </h1>
                <p class="section-title__back" data-aos="fade-up" data-aos-delay="100">
                    <?php the_field('zagolovok_straniczy', $post_id)?>
                </p>
            </div>
            <div class="portfolio__tabs tabs-elements">
                <div class="portfolio__tabs-item tabs-nav-item active">
                    <div class="button ">
                        <span><?php the_field('nadpis_na_knopke_stomatologiya', $post_id)?></span>
                    </div>
                </div>
                <div class="portfolio__tabs-item tabs-nav-item">
                    <div class="button tabs-nav-item">
                        <span><?php the_field('nadpis_na_knopke_kosmetorlogiya', $post_id)?></span>
                    </div>
                </div>
            </div>
            <div class="portfolio__content tabs-elements">
                <div class="portfolio__content-item tabs-content-item stomatolog-slider active">
                    <div class="portfolio__stomatolog-block">
                        <div class="portfolio__stomatolog-slider swiper-container" id="portfolio__stomatolog-slider">
                            <div class="portfolio__wrapper swiper-wrapper">
                                <?php
                                if( have_rows('slajder_stomatologiya', $post_id) ):
                                    while( have_rows('slajder_stomatologiya') ) : the_row();
                                        $photoMain = get_sub_field('osnovnoe_foto');
                                        $photoDop = get_sub_field('foto_dlya_sravneniya');
                                        $title = get_sub_field('nazvanie_proczedury');
                                        ?>
                                        <div class="swiper-slide">
                                            <img class="about__title-img swiper-slide-image" src="<?php echo $photoMain ?>" alt="<?php echo $title ?>">
                                            <!--                                                <img class="about__title-img swiper-slide-image" src="--><?php //echo $photoDop ?><!--" alt="--><?php //echo $title ?><!--">-->
                                            <h3 class="clinic__slider-desc swiper-slide-title"><?php echo $title ?></h3>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="clinic__slider-nav">
                        <div class="clinic__slider-prev">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/prev.png'?>" alt="PREV">
                        </div>
                        <div class="clinic__slider-next">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/next.png'?>" alt="NEXT">
                        </div>
                    </div>
                </div>
                <div class="portfolio__content-item tabs-content-item cosmetics-slider">
                    <div class="portfolio__stomatolog-block">
                        <div class="portfolio__cosmetics-slider swiper-container" id="portfolio__cosmetics-slider">
                            <div class="portfolio__wrapper swiper-wrapper">
                                <?php
                                if( have_rows('slajder_kosmetologiya', $post_id) ):
                                    while( have_rows('slajder_kosmetologiya') ) : the_row();
                                        $photoMain = get_sub_field('osnovnoe_foto');
                                        $photoDop = get_sub_field('foto_dlya_sravneniya');
                                        $title = get_sub_field('nazvanie_proczedury');
                                        ?>
                                        <div class="swiper-slide">
                                            <img class="about__title-img swiper-slide-image" src="<?php echo $photoMain ?>" alt="<?php echo $title ?>">
                                            <!--                                                <img class="about__title-img swiper-slide-image" src="--><?php //echo $photoDop ?><!--" alt="--><?php //echo $title ?><!--">-->
                                            <h3 class="clinic__slider-desc swiper-slide-title"><?php echo $title ?></h3>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="clinic__slider-nav">
                        <div class="clinic__slider-prev">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/prev.png'?>" alt="PREV">
                        </div>
                        <div class="clinic__slider-next">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/next.png'?>" alt="NEXT">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="reviews">
        <div class="reviews__container">
            <div class="reviews__title section-title">
                <h1 class="section-title__main" data-aos="fade-up" data-aos-delay="800">
                    <?php the_field('zagolovok_bloka', $post_id)?>
                </h1>
                <p class="section-title__back" data-aos="fade-up" data-aos-delay="500">
                    <?php the_field('zagolovok_bloka', $post_id)?>
                </p>
            </div>
            <div class="small-container">
                <div class="reviews__slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            if( have_rows('otzyvy', $post_id) ):
                                while( have_rows('otzyvy') ) : the_row();
                                    $name = get_sub_field('imya');
                                    $rev = get_sub_field('otzyv');
                                    ?>
                                    <div class="swiper-slide reviews__slide">
                                        <div class="reviews__slide-desc">
                                            <h3 class="reviews__slide-name">
                                                <?php echo $name ?>
                                            </h3>
                                            <div class="reviews__slide-content">
                                                <svg width="60" height="42" viewBox="0 0 60 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.13" d="M45.2432 0.0653929C48.8108 -0.261582 51.8919 0.637609 54.4865 2.76295C56.9189 5.05178 58.5405 7.99455 59.3514 11.5913C60 14.6975 60.1622 17.8856 59.8378 21.1553C59.3514 24.5886 58.2973 27.6948 56.6757 30.4741C54.8919 33.4169 52.4595 35.951 49.3784 38.0763C46.2973 40.2016 42.4054 41.5095 37.7027 42L36 35.8692C38.4324 35.2153 41.027 34.0708 43.7838 32.436C46.5405 30.8011 48.3243 28.0218 49.1351 24.0981L45.4865 24.8338C41.7568 24.9973 38.5946 23.9346 36 21.6458C33.2432 19.3569 31.8649 16.4959 31.8649 13.0627C31.8649 9.62943 33.1622 6.60491 35.7568 3.9891C38.3514 1.53679 41.5135 0.22888 45.2432 0.0653929ZM13.1351 0.0653901C16.8649 -0.261585 19.9459 0.637606 22.3784 2.76295C24.8108 5.05178 26.4324 7.99455 27.2432 11.5913C28.0541 14.6975 28.2162 17.8856 27.7297 21.1553C27.2432 24.5886 26.1892 27.6948 24.5676 30.4741C22.7838 33.4169 20.3514 35.951 17.2703 38.0763C14.1892 40.2016 10.3784 41.5095 5.83783 42L3.89189 35.8692C6.32432 35.2153 9 34.0708 11.9189 32.436C14.6757 30.8011 16.4595 28.0218 17.2703 24.0981C16.6216 24.2616 16.0541 24.3433 15.5676 24.3433C14.9189 24.5068 14.1892 24.6703 13.3784 24.8338C9.64865 24.9973 6.48649 23.9346 3.89189 21.6458C1.2973 19.3569 -1.82348e-06 16.4959 -1.52333e-06 13.0627C-1.22319e-06 9.62943 1.2973 6.6049 3.89189 3.9891C6.32433 1.53678 9.40541 0.228877 13.1351 0.0653901Z" fill="#A9B3C0"/>
                                                </svg>
                                                <?php echo $rev ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="clinic__slider-nav">
                        <div class="clinic__slider-prev">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/prev.png'?>" alt="PREV">
                        </div>
                        <div class="clinic__slider-next">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/next.png'?>" alt="NEXT">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
