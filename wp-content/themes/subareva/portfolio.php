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

        </div>
    </section>
</main>
<?php
get_footer();
?>
