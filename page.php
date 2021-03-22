<?php /* Template Name: Page */ ?>
<?php get_header();?>

<?php
if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section>

    <?php the_content(); ?>

    <?php endwhile; endif; ?>

</section>

<?php get_footer();?>