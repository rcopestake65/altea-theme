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
    <div class="archive-container">
        <div class="posts-grid" id="main-content">

            <?php

if( have_posts() ){

    while( have_posts() ){
?>



            <div class="grid-item">
                <?php the_post(); ?>


                <a class="img-zoom" href=" <?php the_permalink(); ?>"> <?php  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}   ?></a>

                <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
                <h4 class="posts-date"><?php the_date(); ?></h4>
                <?php the_excerpt(); ?>
            </div>
            <?php
}  
}

?>

        </div>
        <div class="press-details">
            <h4>ALTEA PRESS OFFICE</h4>
            <p> Inter Relations & Company</p>
            <p>+44 1403 218588</p>
            <p><a href="mailto:jane@inter-relations.co.uk">jane@inter-relations.co.uk</a></p>
            <div class="news-callout mt1">ALTEA knows aircraft. <br>
                Inside and out.

                <h4>One expert team, interpreting knowledge and insight to achieve extraordinary results.
                </h4>
            </div>
        </div>
    </div>
</article>




<?php
get_footer();
?>