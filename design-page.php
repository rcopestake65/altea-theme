<?php /* Template Name: Design-Page */ ?>
<?php get_header();?>

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section>



    <?php the_content(); ?>

    <div class="container design design-container">

        <div>
            <?php the_field('slider'); ?>
        </div>
        <div class="wp-block-columns container flex-control">

            <div class="wp-block-column pr1" style="flex-basis:50%">
                <h3><?php the_field('main_title'); ?></h3>
                <?php the_field('main_copy'); ?>

                <?php if(have_rows('content')):?>

                <?php while(have_rows('content')): the_row();?>
                <h4><?php the_sub_field('title'); ?></h4>
                <?php the_sub_field('copy'); ?>

                <?php endwhile;?>
                <?php endif;?>

                <h4><?php the_field('case_studies_title'); ?></h4>
                <?php if(have_rows('links')):?>

                <?php while(have_rows('links')): the_row();
                $link = get_sub_field('link');?>

                <a class="white btn-skewed" href="<?php echo $link['url'];?>"><?php echo $link['title'];?></a>

                <?php endwhile;?>
                <?php endif;?>
            </div>
            <div class="wp-block-column" style="flex-basis:50%">
                <?php if(have_rows('team_content')):?>
                <?php while(have_rows('team_content')): the_row();
                        
                            $img = get_sub_field('team_image');
                            $name = get_sub_field('name');
                            $job = get_sub_field('job');
                            $quote = get_sub_field('quote');
                            $callout = get_sub_field('callout');
                        ?>
                <div class="wp-block-columns">



                    <div class="wp-block-column" style="flex-basis:200px">
                        <div class="img-zoom"><img src="<?php echo $img; ?>" alt="" /></div>


                    </div>
                    <div class="wp-block-column">


                        <h4 class="biog-link">
                            <a href="<?php echo $name['url'];?>"><?php echo $name['title'];?></a>
                        </h4>
                        <p><?php echo $job;?></p>
                        <blockquote class="wp-block-quote is-style-default">
                            <p><?php echo $quote;?></p>
                            <p class="callout"><?php echo $callout;?></p>


                    </div>
                </div>
                <?php endwhile;?>
                <?php endif;?>
            </div>

        </div>
    </div>
</section>



<?php endwhile;
    endif;
    ?>

<?php get_footer();?>