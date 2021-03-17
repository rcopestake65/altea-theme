<?php get_header();?>

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section>

    <div class="hero-image"><?php 

$image = get_field('hero_image');

if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
    </div>

    <div class="container home">
        <!--<h2><//?php the_title(); ?></h2>-->
        <?php the_content(); ?>

        <div class="testimonial">
            <i class="fas fa-quote-right fa-3x quotes"></i>
            <?php the_field('testimonial'); ?>
        </div>
    </div>

</section>
<?php endwhile;
    endif;
    ?>
<?php get_footer();?>