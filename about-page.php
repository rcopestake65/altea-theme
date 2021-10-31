<?php /* Template Name: About-Page */ ?>
<?php get_header();?>

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section class="home">



    <?php the_content(); ?>

    <div class="container">

        <div>
            <?php the_field('slider'); ?>
        </div>
        <div class="wp-block-columns pt2" id="main-content">
            <div class="wp-block-column"><?php the_field('intro'); ?></div>
            <div class="wp-block-column"><?php the_field('icon_slider'); ?></div>
        </div>
        <h4 class="" id="team">Meet the team</h4>
        <div class="wp-block-columns pt2">
            <div class="wp-block-column team-member">
                <div class="img-zoom">
                    <img src="<?php the_field('team_image_one'); ?>" alt="" />
                </div>
                <?php the_field('team_members_one'); ?>
            </div>
            <div class="wp-block-column team-member">
                <div class="img-zoom">
                    <img src="<?php the_field('team_image_two'); ?>" alt="" />
                </div>
                <?php the_field('team_members_two'); ?>
            </div>
        </div>
        <div class="associates">
            <?php the_field('associates'); ?>
        </div>
        <div class="wp-block-columns">
            <?php if(have_rows('logos')):?>

            <?php while(have_rows('logos')): the_row();
  
    ?>
            <div class="wp-block-column">
                <?php the_sub_field('logo');?>
            </div>
            <?php endwhile;?>

            <?php endif;?>
        </div>
    </div>
</section>


</section>

<?php endwhile;
    endif;
    ?>

<?php get_footer();?>