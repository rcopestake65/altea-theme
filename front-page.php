<?php /* Template Name: Front-Page */ ?>
<?php get_header();?>

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section class="home">



    <?php the_content(); ?>
    <div class="container-full-width-unsticky header-btns-bg">

        <div class="container wp-block-columns header-btns">

            <div class="wp-block-column cta-assets" id="assets">
                <a href="/assets"><?php the_field('assets_button'); ?></a>
            </div>

            <div class="wp-block-column cta-design" id="design">
                <a href="/design"><?php the_field('design_button'); ?></a>
            </div>
            <div class="wp-block-column cta-finance" id="finance">
                <a href="/finance"><?php the_field('finance_button'); ?></a>
            </div>
            <div class="wp-block-column cta-strapline"><?php the_field('strapline_one'); ?></div>
        </div>
        <div class="container strapline-two"><?php the_field('strapline_two'); ?></div>
    </div>
    <div class="container">

        <div>
            <?php the_field('slider'); ?>
        </div>
        <div class="wp-block-columns pt2" id="main-content">
            <div class="wp-block-column"><?php the_field('intro'); ?></div>
            <div class="wp-block-column">
                <h3>How can we help?</h3>
                <?php if(have_rows('links')):
                
                 $count=1
                  
                    ?>

                <?php while(have_rows('links')): the_row();
                 $link = get_sub_field('link');
                if ($count == 1){
                ?>

                <a href="<?php echo $link['url'];?>">
                    <div class="copper btn-skewed">
                        <?php echo $link['title'];?>
                    </div>
                </a>
                <?php } elseif ($count == 2) { ?>
                <a href="<?php echo $link['url'];?>">
                    <div class="gunmetal btn-skewed">
                        <?php echo $link['title'];?>
                    </div>
                </a>
                <?php } elseif ($count == 3) { ?>
                <a href="<?php echo $link['url'];?>">
                    <div class="copper btn-skewed">
                        <?php echo $link['title'];?>
                    </div>
                </a>
                <?php } elseif ($count == 4) { ?>
                <a href="<?php echo $link['url'];?>">
                    <div class="teal btn-skewed">
                        <?php echo $link['title'];?>
                    </div>
                </a>
                <?php } elseif ($count > 4) { ?>
                <a href="<?php echo $link['url'];?>">
                    <div class="copper btn-skewed">
                        <?php echo $link['title'];?>
                    </div>
                </a>
                <?php }
$count++ ?>

                <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>

        <div>
            <div class="case-studies-grid">
                <?php if(have_rows('case_studies')):?>

                <?php while(have_rows('case_studies')): the_row();
                    $download = get_sub_field('download');
                    ?>
                <div class="case-studies-item">
                    <h3><?php the_sub_field('title');?></h3>
                    <div class="img-zoom"> <img src="<?php the_sub_field('image'); ?>" alt="" /></div>
                    <p><?php the_sub_field('text');?></p>
                    <p class="teal btn-skew download"> <a
                            href="<?php echo $download['url'];?>"><?php echo $download['title'];?></a></p>
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