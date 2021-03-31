<?php /* Template Name: Page */ ?>
<?php get_header();?>

<?php
if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section>

    <!-- HERO BACKGROUND IMAGE FROM ACF-->
    <div class="static-hero-wrapper">
        <a href="#main-content"><i class="fas fa-chevron-down fa-5x"></i></a>
        <div class="static-hero-container"
            style="background-image: url(<?php echo get_field('hero_image'); ?>); background-attachment: fixed; background-repeat: no-repeat;">
        </div>

    </div>

    <?php the_content(); ?>



    <?php endwhile; endif; ?>

</section>

<?php get_footer();?>