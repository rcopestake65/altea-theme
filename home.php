<?php
get_header();
?>
<div class="container">
    <?php
echo do_shortcode('[smartslider3 slider="13"]');
?>

    <article>
        <div class="archive-container">
            <div class="posts-grid" id="main-content">

                <?php

if( have_posts() ){

    while( have_posts() ){
?>



                <div class="grid-item">
                    <?php the_post(); ?>


                    <a class="img-zoom" href="<?php the_permalink(); ?>">
                        <img src="<?php the_field('image'); ?>" /></a>

                    <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                    <h4 class="posts-date"><?php the_date(); ?></h4>
                    <?php the_field('excerpt'); ?>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read more </a>

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
        <div class="pagination">
            <div class="nav-previous"><?php previous_posts_link( 'Prev' ); ?></div>
            <div class="nav-next"><?php next_posts_link( 'Next' ); ?></div>
        </div>

    </article>


</div>



<?php
get_footer();
?>