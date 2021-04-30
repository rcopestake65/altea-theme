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
    <?php if( get_field('map') ): ?>
    <a
        href="https://www.google.com/maps/place/Power+Rd,+Chiswick,+London+W4+5PY/@51.4943759,-0.2822119,17z/data=!3m1!4b1!4m5!3m4!1s0x48760e0acd51bf11:0x2f503da8d8bcb99!8m2!3d51.494045!4d-0.2797843">
        <img src="<?php the_field('map'); ?>" /></a>
    <?php endif; ?>
</section>

<?php get_footer();?>