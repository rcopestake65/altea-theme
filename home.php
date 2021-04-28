<?php
get_header();
?>
<?php
echo do_shortcode('[smartslider3 slider="13"]');
?>
<div class="hero-wrapper">
    <a href="#main-content"><i class="fas fa-chevron-down fa-5x"></i></a>
</div>
<article class="container">
    <div class="posts-grid" id="main-content">

        <?php

if( have_posts() ){

    while( have_posts() ){
?>
        <div class="grid-item">
            <?php        the_post(); ?>


            <?php  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}   ?>

            <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>

            <?php the_excerpt(); ?>
        </div>
        <?php
}  
}

?>

    </div>


</article>




<?php
get_footer();
?>