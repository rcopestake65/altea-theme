<?php get_header();?>

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section class="home desktop-and-tablet">



    <?php the_content(); ?>

</section>

<section class="home mobile-only">



    <?php the_content(); ?>

    <div id="mobile-acf-content">
        <div>
            <img src="<?php the_field('image_one'); ?>" alt="" />
        </div>
        <a href="<?php echo get_permalink(323) ?>">

            <div class="cta-assets">
                <?php the_field('assets'); ?>
            </div>
        </a>
        <div>
            <img src="<?php the_field('image_two'); ?>" alt="" />
        </div>
        <a href="<?php echo get_permalink(335) ?>">
            <div class="cta-design">
                <?php the_field('design'); ?>
            </div>
        </a>
        <div>
            <img src="<?php the_field('image_three'); ?>" alt="" />
        </div>
        <a href="<?php echo get_permalink(366) ?>">
            <div class="cta-finance">
                <?php the_field('finance'); ?>
            </div>
        </a>
        <div class="mobile-strapline">
            <?php the_field('strapline'); ?>
        </div>
        <div class="mobile-content">
            <?php the_field('content'); ?>
        </div>
        <div class="mobile-help">
            <?php the_field('help'); ?>
        </div>
        <div class="mobile-btns-container">
            <div class="mt2 mobile-btns">
                <?php the_field('buttons'); ?>
            </div>
            <div class="mobile-strapline-two">
                <?php the_field('strapline_two'); ?>
            </div>
        </div>

    </div>
    <!--end of mobile content-->

</section>

<?php endwhile;
    endif;
    ?>

<?php get_footer();?>