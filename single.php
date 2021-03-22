<?php get_header();?>

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section class="container">


    <?php //the_content(); 
    
    get_template_part( 'template-parts/content', 'article' );

    ?>


</section>

<?php endwhile;
    endif;
    ?>

<?php get_footer();?>