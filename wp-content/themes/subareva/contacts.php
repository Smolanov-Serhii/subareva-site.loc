<?php
/* Template Name: Контакты */
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

<main id="main" class="main page-contacts">
    <?php get_template_part( 'template-parts/content', 'static' ); ?>
    <div class="start__decoration">
        <div class="start__decoration-top"></div>
        <div class="start__decoration-left"></div>
        <div class="start__decoration-bottom"></div>
    </div>
    <section class="contacts">
        <div class="contacts__container small-container">
            <div class="contacts__title section-title">
                <h1 class="section-title__main" data-aos="fade-up" data-aos-delay="400">
                    <?php the_title(); ?>
                </h1>
                <p class="section-title__back" data-aos="fade-up" data-aos-delay="100">
                    <?php the_title(); ?>
                </p>
            </div>
            <div class="contacts__list" data-marker="<?php echo get_template_directory_uri() . '/img/templates/contacts/marker.svg'; ?>">
                <div class="contacts__item" data-setx="46.457652429818516" data-sety="30.744028829118516" data-aos="fade-up" data-aos-delay="500">
                    <div class="contacts__item-row contacts__item-location">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/location.svg'; ?>" alt="">
                        <span>г. Одесса, ул. Канатная, 122 Б</span>
                    </div>
                    <div class="contacts__item-row contacts__item-phone">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/phone.svg'; ?>" alt="">
                        <a href="tel:+38 096 139 70 93">+38 096 139 70 93</a>
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/viber.svg'; ?>" alt="">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/telegram.svg'; ?>" alt="">
                    </div>
                    <div class="contacts__item-row contacts__item-time">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/time.svg'; ?>" alt="">
                        <span>Пн-Сб  9:00-19:00</span>
                    </div>
                    <div class="contacts__list-map" id="map1">

                    </div>
                </div>
                <div class="contacts__item" data-setx="46.457652429818516" data-sety="30.744028829118516" data-aos="fade-up" data-aos-delay="700">
                    <div class="contacts__item-row contacts__item-location">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/location.svg'; ?>" alt="">
                        <span>г. Одесса, ул. Канатная, 122 Б</span>
                    </div>
                    <div class="contacts__item-row contacts__item-phone">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/phone.svg'; ?>" alt="">
                        <a href="tel:+38 096 139 70 93">+38 096 139 70 93</a>
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/viber.svg'; ?>" alt="">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/telegram.svg'; ?>" alt="">
                    </div>
                    <div class="contacts__item-row contacts__item-time">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/time.svg'; ?>" alt="">
                        <span>Пн-Сб  9:00-19:00</span>
                    </div>
                    <div class="contacts__list-map" id="map2">

                    </div>
                </div>
                <div class="contacts__item" data-setx="46.457652429818516" data-sety="30.744028829118516" data-aos="fade-up" data-aos-delay="900">
                    <div class="contacts__item-row contacts__item-location">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/location.svg'; ?>" alt="">
                        <span>г. Одесса, ул. Канатная, 122 Б</span>
                    </div>
                    <div class="contacts__item-row contacts__item-phone">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/phone.svg'; ?>" alt="">
                        <a href="tel:+38 096 139 70 93">+38 096 139 70 93</a>
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/viber.svg'; ?>" alt="">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/telegram.svg'; ?>" alt="">
                    </div>
                    <div class="contacts__item-row contacts__item-time">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/contacts/time.svg'; ?>" alt="">
                        <span>Пн-Сб  9:00-19:00</span>
                    </div>
                    <div class="contacts__list-map" id="map3">

                    </div>
                </div>
            </div>
            <div class="contacts__buttons" data-aos="fade-up" data-aos-delay="1100">
                <div class="contacts__button button js-form">
                    <span>Записаться</span>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
