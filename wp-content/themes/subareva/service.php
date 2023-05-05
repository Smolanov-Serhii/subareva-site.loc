<?php
/* Template Name: Сервис */
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

<main id="main" class="main page-service">
    <?php get_template_part( 'template-parts/content', 'static' ); ?>
    <div class="start__decoration">
        <div class="start__decoration-top"></div>
        <div class="start__decoration-left"></div>
        <div class="start__decoration-bottom"></div>
    </div>
    <section class="service">
        <div class="service__container small-container">
            <div class="service__title section-title">
                <h1 class="section-title__main" data-aos="fade-up" data-aos-delay="400">
                    <?php the_title(); ?>
                </h1>
                <p class="section-title__back" data-aos="fade-up" data-aos-delay="100">
                    <?php the_title(); ?>
                </p>
            </div>
            <div class="service__list">
                <div class="service__item">
                    <div class="service__head">
                        Аппаратная косметология
                        <svg width="30" height="8" viewBox="0 0 30 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.1716 0.614586L29.3536 3.79657C29.5488 3.99183 29.5488 4.30841 29.3536 4.50367L26.1716 7.68565C25.9763 7.88092 25.6597 7.88092 25.4645 7.68565C25.2692 7.49039 25.2692 7.17381 25.4645 6.97855L27.7929 4.65012H0V3.65012H27.7929L25.4645 1.32169C25.2692 1.12643 25.2692 0.809848 25.4645 0.614586C25.6597 0.419324 25.9763 0.419324 26.1716 0.614586Z" fill="#15223D"/>
                        </svg>
                    </div>
                    <div class="service__content">
                        <div class="service__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/service/img.png'?>" alt="Аппаратная косметология">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cupiditate
                            distinctio ipsam natus omnis repellat sapiente! Dicta distinctio fuga hic magnam molestiae
                            velit. Aliquam assumenda iusto odio! Consequuntur, unde!
                        </p>
                        <table>
                            <tr><td>Название процедуры</td><td>от  1500 грн</td></tr>
                            <tr><td>Название процедуры</td><td>от  500 грн</td></tr>
                            <tr><td>Название процедуры</td><td>от  700 грн</td></tr>
                            <tr><td>Название процедуры</td><td>от  700 грн</td></tr>
                            <tr><td>Название процедуры</td><td>от  700 грн</td></tr>
                            <tr><td>Название процедуры</td><td>от  700 грн</td></tr>
                            <tr><td>Название процедуры</td><td> 1500 грн</td></tr>
                        </table>
                        <div class="service__item-contacts">
                            <a href="mailto:<?php echo the_field("elektronnaya_pochta", 'options'); ?>" rel="nofollow">
                                Написать
                            </a>
                            <a href="tel:<?php echo the_field("nomer_telefona", 'options'); ?>" rel="nofollow">
                                Позвонить
                            </a>
                        </div>
                    </div>
                </div>
                <div class="service__item">
                    <div class="service__head">
                        Аппаратная косметология
                        <svg width="30" height="8" viewBox="0 0 30 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.1716 0.614586L29.3536 3.79657C29.5488 3.99183 29.5488 4.30841 29.3536 4.50367L26.1716 7.68565C25.9763 7.88092 25.6597 7.88092 25.4645 7.68565C25.2692 7.49039 25.2692 7.17381 25.4645 6.97855L27.7929 4.65012H0V3.65012H27.7929L25.4645 1.32169C25.2692 1.12643 25.2692 0.809848 25.4645 0.614586C25.6597 0.419324 25.9763 0.419324 26.1716 0.614586Z" fill="#15223D"/>
                        </svg>
                    </div>
                    <div class="service__content">
                        <div class="service__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/service/img.png'?>" alt="Аппаратная косметология">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur cupiditate
                            distinctio ipsam natus omnis repellat sapiente! Dicta distinctio fuga hic magnam molestiae
                            velit. Aliquam assumenda iusto odio! Consequuntur, unde!
                        </p>
                        <p>Assumenda autem consectetur, cupiditate dignissimos ea harum illo illum ipsam nihil nisi
                            perspiciatis possimus, quas, quisquam suscipit ullam vitae voluptatem. Consectetur cum
                            doloribus inventore molestiae nemo nulla numquam quidem voluptatem!
                        </p>
                        <p>Architecto corporis debitis deleniti doloribus laboriosam libero maiores nulla numquam
                            quos, sint, tempore temporibus ut! Corporis distinctio doloribus eligendi facere itaque
                            magni nihil omnis, perspiciatis saepe similique tempora, temporibus voluptate?
                        </p>
                        <p>A ab debitis distinctio doloremque dolorum ea earum eius ipsa ipsum maxime modi nulla odio,
                            placeat reiciendis similique tenetur ut voluptatem. Delectus eos id labore maiores
                            molestiae, reiciendis velit voluptatum!
                        </p>
                        <p>Animi beatae delectus dolores hic neque non quod, saepe sapiente ullam? Ab, odit, velit?
                            Aperiam aut excepturi exercitationem facilis nam nulla quasi quis saepe sed sint sit unde,
                            veniam voluptas?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
