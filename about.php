<?php /* Template Name: About */ ?>
<?php get_header();?>



<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section class="about">
    <div class="container">








        <?php endwhile; endif; ?>
    </div>
</section><!-- end fun -->



<?php get_footer();?>