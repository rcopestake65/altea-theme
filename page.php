<?php /* Template Name: Page */ ?>
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

    <div class="container page">
        <!--<h2><//?php the_title(); ?></h2>-->

        <?php the_content(); ?>
        <?php if( get_field('testimonial')): ?>

        <div class="testimonial">
            <i class="fas fa-quote-right fa-3x quotes"></i>
            <?php the_field('testimonial'); ?>
        </div>
        <?php endif; ?>
    </div>






    <?php endwhile; endif; ?>
    </div>
</section>



<?php get_footer();?>