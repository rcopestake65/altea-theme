<?php
get_header();
?>

<article class="container">

    <?php

if( have_posts() ){

    while( have_posts() ){

        the_post(); ?>
    <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
    <?php  the_content(); 
    }
}

?>



</article>




<?php
get_footer();
?>