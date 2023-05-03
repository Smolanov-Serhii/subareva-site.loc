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
                    Портфолио
                </h1>
                <p class="section-title__back" data-aos="fade-up" data-aos-delay="100">
                    Портфолио
                </p>
            </div>
            <div class="portfolio__tabs tabs-elements">
                <div class="portfolio__tabs-item tabs-nav-item">
                    <div class="button ">
                        <span>Стоматология</span>
                    </div>
                </div>
                <div class="portfolio__tabs-item tabs-nav-item">
                    <div class="button tabs-nav-item">
                        <span>Косметология</span>
                    </div>
                </div>
            </div>
            <div class="portfolio__content tabs-elements">
                <div class="portfolio__content-item tabs-content-item stomatolog-slider">
                    <div class="portfolio__stomatolog-block">
                        <div class="portfolio__stomatolog-slider swiper-container" id="portfolio__stomatolog-slider">
                            <div class="portfolio__wrapper swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-1.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-2.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-3.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-1.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-2.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-3.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
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
<!--                <div class="portfolio__content-item tabs-content-item cosmetics-slider">-->
<!--                    <div class="portfolio__stomatolog-block">-->
<!--                        <div class="portfolio__stomatolog-slider swiper-container" id="portfolio__cosmetics-slider">-->
<!--                            <div class="portfolio__wrapper swiper-wrapper">-->
<!--                                <div class="swiper-slide">-->
<!--                                    <img class="about__title-img swiper-slide-image" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-1.jpg'?><!--" alt="Диагностика">-->
<!--                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <img class="about__title-img swiper-slide-image" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-2.jpg'?><!--" alt="Диагностика">-->
<!--                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide" data-fresco="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?><!--">-->
<!--                                    <img class="about__title-img swiper-slide-image" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-3.jpg'?><!--" alt="Диагностика">-->
<!--                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <img class="about__title-img swiper-slide-image" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?><!--" alt="Диагностика">-->
<!--                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <img class="about__title-img swiper-slide-image" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-1.jpg'?><!--" alt="Диагностика">-->
<!--                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <img class="about__title-img swiper-slide-image" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-2.jpg'?><!--" alt="Диагностика">-->
<!--                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <img class="about__title-img swiper-slide-image" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-3.jpg'?><!--" alt="Диагностика">-->
<!--                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>-->
<!--                                </div>-->
<!--                                <div class="swiper-slide">-->
<!--                                    <img class="about__title-img swiper-slide-image" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?><!--" alt="Диагностика">-->
<!--                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="clinic__slider-nav">-->
<!--                            <div class="clinic__slider-prev">-->
<!--                                <img class="about__title-img" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/prev.png'?><!--" alt="PREV">-->
<!--                            </div>-->
<!--                            <div class="clinic__slider-next">-->
<!--                                <img class="about__title-img" src="--><?php //echo get_template_directory_uri() . '/img/templates/clinic/next.png'?><!--" alt="NEXT">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>

        </div>
    </section>
    <section class="reviews">
        <div class="reviews__container">
            <div class="reviews__title section-title">
                <h1 class="section-title__main" data-aos="fade-up" data-aos-delay="800">
                    отзывы о нас
                </h1>
                <p class="section-title__back" data-aos="fade-up" data-aos-delay="500">
                    отзывы о нас
                </p>
            </div>
            <div class="small-container">
                <div class="reviews__slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide reviews__slide">
                                <div class="reviews__slide-img">
                                    <a href="https://www.youtube.com/watch?v=k35Jt-VnzO8&ab_channel=REDGroup" class="fresco">
                                        <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M76 38C76 58.9868 58.9868 76 38 76C17.0132 76 0 58.9868 0 38C0 17.0132 17.0132 0 38 0C58.9868 0 76 17.0132 76 38Z" fill="white" fill-opacity="0.03"/>
                                            <path d="M67 38C67 54.0163 54.0163 67 38 67C21.9837 67 9 54.0163 9 38C9 21.9837 21.9837 9 38 9C54.0163 9 67 21.9837 67 38Z" fill="white" fill-opacity="0.07"/>
                                            <path d="M57 38C57 48.4934 48.4934 57 38 57C27.5066 57 19 48.4934 19 38C19 27.5066 27.5066 19 38 19C48.4934 19 57 27.5066 57 38Z" fill="white" fill-opacity="0.07"/>
                                            <path d="M45.4565 37.614L34.4 32.0912C34.2508 32.0222 34.0867 31.9915 33.9227 32.002C33.7586 32.0125 33.5998 32.0638 33.4607 32.1513C33.3215 32.2387 33.2065 32.3596 33.126 32.5028C33.0456 32.646 33.0023 32.807 33 32.9713V44.012C32.9986 44.1806 33.0408 44.3466 33.1224 44.4942C33.2041 44.6417 33.3224 44.7657 33.466 44.8542C33.6097 44.9426 33.7737 44.9926 33.9423 44.9992C34.1109 45.0059 34.2784 44.9689 34.4285 44.892L45.4565 39.3693C45.6199 39.2874 45.7572 39.1617 45.8532 39.0063C45.9492 38.8509 46 38.6718 46 38.4892C46 38.3066 45.9492 38.1276 45.8532 37.9722C45.7572 37.8168 45.6199 37.6911 45.4565 37.6092V37.614Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/reviews/img.jpg'?>" alt="">
                                </div>
                                <div class="reviews__slide-desc">
                                    <h3 class="reviews__slide-name">
                                        Екатерина Синицина
                                    </h3>
                                    <div class="reviews__slide-work">
                                        Студентка
                                    </div>
                                    <div class="reviews__slide-content">
                                        <svg width="60" height="42" viewBox="0 0 60 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.13" d="M45.2432 0.0653929C48.8108 -0.261582 51.8919 0.637609 54.4865 2.76295C56.9189 5.05178 58.5405 7.99455 59.3514 11.5913C60 14.6975 60.1622 17.8856 59.8378 21.1553C59.3514 24.5886 58.2973 27.6948 56.6757 30.4741C54.8919 33.4169 52.4595 35.951 49.3784 38.0763C46.2973 40.2016 42.4054 41.5095 37.7027 42L36 35.8692C38.4324 35.2153 41.027 34.0708 43.7838 32.436C46.5405 30.8011 48.3243 28.0218 49.1351 24.0981L45.4865 24.8338C41.7568 24.9973 38.5946 23.9346 36 21.6458C33.2432 19.3569 31.8649 16.4959 31.8649 13.0627C31.8649 9.62943 33.1622 6.60491 35.7568 3.9891C38.3514 1.53679 41.5135 0.22888 45.2432 0.0653929ZM13.1351 0.0653901C16.8649 -0.261585 19.9459 0.637606 22.3784 2.76295C24.8108 5.05178 26.4324 7.99455 27.2432 11.5913C28.0541 14.6975 28.2162 17.8856 27.7297 21.1553C27.2432 24.5886 26.1892 27.6948 24.5676 30.4741C22.7838 33.4169 20.3514 35.951 17.2703 38.0763C14.1892 40.2016 10.3784 41.5095 5.83783 42L3.89189 35.8692C6.32432 35.2153 9 34.0708 11.9189 32.436C14.6757 30.8011 16.4595 28.0218 17.2703 24.0981C16.6216 24.2616 16.0541 24.3433 15.5676 24.3433C14.9189 24.5068 14.1892 24.6703 13.3784 24.8338C9.64865 24.9973 6.48649 23.9346 3.89189 21.6458C1.2973 19.3569 -1.82348e-06 16.4959 -1.52333e-06 13.0627C-1.22319e-06 9.62943 1.2973 6.6049 3.89189 3.9891C6.32433 1.53678 9.40541 0.228877 13.1351 0.0653901Z" fill="#A9B3C0"/>
                                        </svg>
                                        <p>Tellus accumsan enim arcu blandit id nunc ornare commodo at. Non tristique diam quam cursus in et ornare sem nisl. Ullamcorper potenti convallis felis risus. Elementum sed varius ac porttitor adipiscing mauris. Viverra in ipsum tortor quis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide reviews__slide">
                                <div class="reviews__slide-img">
                                    <a href="https://www.youtube.com/watch?v=k35Jt-VnzO8&ab_channel=REDGroup" class="fresco">
                                        <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M76 38C76 58.9868 58.9868 76 38 76C17.0132 76 0 58.9868 0 38C0 17.0132 17.0132 0 38 0C58.9868 0 76 17.0132 76 38Z" fill="white" fill-opacity="0.03"/>
                                            <path d="M67 38C67 54.0163 54.0163 67 38 67C21.9837 67 9 54.0163 9 38C9 21.9837 21.9837 9 38 9C54.0163 9 67 21.9837 67 38Z" fill="white" fill-opacity="0.07"/>
                                            <path d="M57 38C57 48.4934 48.4934 57 38 57C27.5066 57 19 48.4934 19 38C19 27.5066 27.5066 19 38 19C48.4934 19 57 27.5066 57 38Z" fill="white" fill-opacity="0.07"/>
                                            <path d="M45.4565 37.614L34.4 32.0912C34.2508 32.0222 34.0867 31.9915 33.9227 32.002C33.7586 32.0125 33.5998 32.0638 33.4607 32.1513C33.3215 32.2387 33.2065 32.3596 33.126 32.5028C33.0456 32.646 33.0023 32.807 33 32.9713V44.012C32.9986 44.1806 33.0408 44.3466 33.1224 44.4942C33.2041 44.6417 33.3224 44.7657 33.466 44.8542C33.6097 44.9426 33.7737 44.9926 33.9423 44.9992C34.1109 45.0059 34.2784 44.9689 34.4285 44.892L45.4565 39.3693C45.6199 39.2874 45.7572 39.1617 45.8532 39.0063C45.9492 38.8509 46 38.6718 46 38.4892C46 38.3066 45.9492 38.1276 45.8532 37.9722C45.7572 37.8168 45.6199 37.6911 45.4565 37.6092V37.614Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/reviews/img.jpg'?>" alt="">
                                </div>
                                <div class="reviews__slide-desc">
                                    <h3 class="reviews__slide-name">
                                        Екатерина Синицина
                                    </h3>
                                    <div class="reviews__slide-work">
                                        Студентка
                                    </div>
                                    <div class="reviews__slide-content">
                                        <svg width="60" height="42" viewBox="0 0 60 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.13" d="M45.2432 0.0653929C48.8108 -0.261582 51.8919 0.637609 54.4865 2.76295C56.9189 5.05178 58.5405 7.99455 59.3514 11.5913C60 14.6975 60.1622 17.8856 59.8378 21.1553C59.3514 24.5886 58.2973 27.6948 56.6757 30.4741C54.8919 33.4169 52.4595 35.951 49.3784 38.0763C46.2973 40.2016 42.4054 41.5095 37.7027 42L36 35.8692C38.4324 35.2153 41.027 34.0708 43.7838 32.436C46.5405 30.8011 48.3243 28.0218 49.1351 24.0981L45.4865 24.8338C41.7568 24.9973 38.5946 23.9346 36 21.6458C33.2432 19.3569 31.8649 16.4959 31.8649 13.0627C31.8649 9.62943 33.1622 6.60491 35.7568 3.9891C38.3514 1.53679 41.5135 0.22888 45.2432 0.0653929ZM13.1351 0.0653901C16.8649 -0.261585 19.9459 0.637606 22.3784 2.76295C24.8108 5.05178 26.4324 7.99455 27.2432 11.5913C28.0541 14.6975 28.2162 17.8856 27.7297 21.1553C27.2432 24.5886 26.1892 27.6948 24.5676 30.4741C22.7838 33.4169 20.3514 35.951 17.2703 38.0763C14.1892 40.2016 10.3784 41.5095 5.83783 42L3.89189 35.8692C6.32432 35.2153 9 34.0708 11.9189 32.436C14.6757 30.8011 16.4595 28.0218 17.2703 24.0981C16.6216 24.2616 16.0541 24.3433 15.5676 24.3433C14.9189 24.5068 14.1892 24.6703 13.3784 24.8338C9.64865 24.9973 6.48649 23.9346 3.89189 21.6458C1.2973 19.3569 -1.82348e-06 16.4959 -1.52333e-06 13.0627C-1.22319e-06 9.62943 1.2973 6.6049 3.89189 3.9891C6.32433 1.53678 9.40541 0.228877 13.1351 0.0653901Z" fill="#A9B3C0"/>
                                        </svg>
                                        <p>Tellus accumsan enim arcu blandit id nunc ornare commodo at. Non tristique diam quam cursus in et ornare sem nisl. Ullamcorper potenti convallis felis risus. Elementum sed varius ac porttitor adipiscing mauris. Viverra in ipsum tortor quis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide reviews__slide">
                                <div class="reviews__slide-img">
                                    <a href="https://www.youtube.com/watch?v=k35Jt-VnzO8&ab_channel=REDGroup" class="fresco">
                                        <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M76 38C76 58.9868 58.9868 76 38 76C17.0132 76 0 58.9868 0 38C0 17.0132 17.0132 0 38 0C58.9868 0 76 17.0132 76 38Z" fill="white" fill-opacity="0.03"/>
                                            <path d="M67 38C67 54.0163 54.0163 67 38 67C21.9837 67 9 54.0163 9 38C9 21.9837 21.9837 9 38 9C54.0163 9 67 21.9837 67 38Z" fill="white" fill-opacity="0.07"/>
                                            <path d="M57 38C57 48.4934 48.4934 57 38 57C27.5066 57 19 48.4934 19 38C19 27.5066 27.5066 19 38 19C48.4934 19 57 27.5066 57 38Z" fill="white" fill-opacity="0.07"/>
                                            <path d="M45.4565 37.614L34.4 32.0912C34.2508 32.0222 34.0867 31.9915 33.9227 32.002C33.7586 32.0125 33.5998 32.0638 33.4607 32.1513C33.3215 32.2387 33.2065 32.3596 33.126 32.5028C33.0456 32.646 33.0023 32.807 33 32.9713V44.012C32.9986 44.1806 33.0408 44.3466 33.1224 44.4942C33.2041 44.6417 33.3224 44.7657 33.466 44.8542C33.6097 44.9426 33.7737 44.9926 33.9423 44.9992C34.1109 45.0059 34.2784 44.9689 34.4285 44.892L45.4565 39.3693C45.6199 39.2874 45.7572 39.1617 45.8532 39.0063C45.9492 38.8509 46 38.6718 46 38.4892C46 38.3066 45.9492 38.1276 45.8532 37.9722C45.7572 37.8168 45.6199 37.6911 45.4565 37.6092V37.614Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/reviews/img.jpg'?>" alt="">
                                </div>
                                <div class="reviews__slide-desc">
                                    <h3 class="reviews__slide-name">
                                        Екатерина Синицина
                                    </h3>
                                    <div class="reviews__slide-work">
                                        Студентка
                                    </div>
                                    <div class="reviews__slide-content">
                                        <svg width="60" height="42" viewBox="0 0 60 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.13" d="M45.2432 0.0653929C48.8108 -0.261582 51.8919 0.637609 54.4865 2.76295C56.9189 5.05178 58.5405 7.99455 59.3514 11.5913C60 14.6975 60.1622 17.8856 59.8378 21.1553C59.3514 24.5886 58.2973 27.6948 56.6757 30.4741C54.8919 33.4169 52.4595 35.951 49.3784 38.0763C46.2973 40.2016 42.4054 41.5095 37.7027 42L36 35.8692C38.4324 35.2153 41.027 34.0708 43.7838 32.436C46.5405 30.8011 48.3243 28.0218 49.1351 24.0981L45.4865 24.8338C41.7568 24.9973 38.5946 23.9346 36 21.6458C33.2432 19.3569 31.8649 16.4959 31.8649 13.0627C31.8649 9.62943 33.1622 6.60491 35.7568 3.9891C38.3514 1.53679 41.5135 0.22888 45.2432 0.0653929ZM13.1351 0.0653901C16.8649 -0.261585 19.9459 0.637606 22.3784 2.76295C24.8108 5.05178 26.4324 7.99455 27.2432 11.5913C28.0541 14.6975 28.2162 17.8856 27.7297 21.1553C27.2432 24.5886 26.1892 27.6948 24.5676 30.4741C22.7838 33.4169 20.3514 35.951 17.2703 38.0763C14.1892 40.2016 10.3784 41.5095 5.83783 42L3.89189 35.8692C6.32432 35.2153 9 34.0708 11.9189 32.436C14.6757 30.8011 16.4595 28.0218 17.2703 24.0981C16.6216 24.2616 16.0541 24.3433 15.5676 24.3433C14.9189 24.5068 14.1892 24.6703 13.3784 24.8338C9.64865 24.9973 6.48649 23.9346 3.89189 21.6458C1.2973 19.3569 -1.82348e-06 16.4959 -1.52333e-06 13.0627C-1.22319e-06 9.62943 1.2973 6.6049 3.89189 3.9891C6.32433 1.53678 9.40541 0.228877 13.1351 0.0653901Z" fill="#A9B3C0"/>
                                        </svg>
                                        <p>Tellus accumsan enim arcu blandit id nunc ornare commodo at. Non tristique diam quam cursus in et ornare sem nisl. Ullamcorper potenti convallis felis risus. Elementum sed varius ac porttitor adipiscing mauris. Viverra in ipsum tortor quis.</p>
                                    </div>
                                </div>
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
</main>
<?php
get_footer();
?>
