<?php get_header();?>

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section>

    <div class="hero-image">


    </div>

    <div class="container home">
        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>


    </div>

</section>

<?php endwhile;
    endif;
    ?>
<?php get_footer();?>