<?php /* Template Name: Page */ ?>
<?php get_header();?>

<?php
if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section>

    <!-- HERO BACKGROUND IMAGE FROM ACF - large screens-->
    <div class="static-hero-wrapper-large-screens">
        <a href="#main-content"><i class="fas fa-chevron-down fa-5x"></i></a>
        <div class="static-hero-container"
            style="background-image: url(<?php echo get_field('hero_image'); ?>); background-attachment: fixed; background-repeat: no-repeat;">
        </div>
    </div>
    <!-- HERO IMAGE FROM ACF - small screens (<1000px)-->
    <div class="static-hero-wrapper-small-screens">
        <!-- <a href="#main-content"><i class="fas fa-chevron-down fa-5x"></i></a> -->
        <div class="static-hero-container">
            <img src="<?php echo get_field('hero_image'); ?>" alt="">
        </div>
    </div>
    <div class="container">

        <?php the_content(); ?>



        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer();?>