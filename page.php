<?php /* Template Name: Page */ ?>
<?php get_header();?>

<?php
if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section>

    <div class="container">

        <?php the_content(); ?>



        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer();?>