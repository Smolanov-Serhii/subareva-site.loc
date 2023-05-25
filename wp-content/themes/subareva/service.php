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
                    <?php the_field('zagolovok_straniczy', $post_id)?>
                </h1>
                <p class="section-title__back" data-aos="fade-up" data-aos-delay="100">
                    <?php the_field('zagolovok_straniczy', $post_id)?>
                </p>
            </div>
            <div class="service__list">
                <?php
                if( have_rows('perechen_uslug', $post_id) ):
                    while( have_rows('perechen_uslug') ) : the_row();
                        $photo = get_sub_field('fon_dlya_uslugi');
                        $head = get_sub_field('nazvanie_uslugi');
                        $content = get_sub_field('opisanie_uslugi');
                        $desc = get_sub_field('tekst_pod_perechnem_czen');
                        ?>
                        <div class="service__item">
                            <div class="service__head">
                                <?php echo $head ?>
                                <svg width="30" height="8" viewBox="0 0 30 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.1716 0.614586L29.3536 3.79657C29.5488 3.99183 29.5488 4.30841 29.3536 4.50367L26.1716 7.68565C25.9763 7.88092 25.6597 7.88092 25.4645 7.68565C25.2692 7.49039 25.2692 7.17381 25.4645 6.97855L27.7929 4.65012H0V3.65012H27.7929L25.4645 1.32169C25.2692 1.12643 25.2692 0.809848 25.4645 0.614586C25.6597 0.419324 25.9763 0.419324 26.1716 0.614586Z" fill="#15223D"/>
                                </svg>
                            </div>
                            <div class="service__content">
                                <div class="service__item-img">
                                    <img src="<?php echo $photo ?>" alt="<?php echo $head ?>">
                                </div>
                                <?php echo $content ?>
                                <?php
                                if( have_rows('czeny') ): ?>
                                    <table>

                                            <?php
                                            while( have_rows('czeny') ): the_row();

                                                $name = get_sub_field('nazvanie_proczedury');
                                                $price = get_sub_field('czena');
                                            ?>
                                                <tr>
                                                <td><?php echo $name ?></td><td><?php echo $price ?></td>
                                        </tr>
                                            <?php endwhile; ?>
                                    </table>
                                <?php endif; ?>
<!--                                <div class="service__item-contacts">-->
<!--                                    <a href="mailto:--><?php //echo the_field("elektronnaya_pochta", 'options'); ?><!--" rel="nofollow">-->
<!--                                        Написать-->
<!--                                    </a>-->
<!--                                    <a href="tel:--><?php //echo the_field("nomer_telefona", 'options'); ?><!--" rel="nofollow">-->
<!--                                        Позвонить-->
<!--                                    </a>-->
<!--                                </div>-->
                                <p class="service__item-desc"><?php echo $desc ?></p>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
