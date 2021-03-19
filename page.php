<?php /* Template Name: Page */ ?>
<?php get_header();?>

<?php
if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section>

    <div class="container page">
        <!--<h2><//?php the_title(); ?></h2>-->
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>

</section>

<?php get_footer();?>