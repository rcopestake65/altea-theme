<div class="post-container">
    <h3><?php the_title(); ?></h3>
    <h4><?php the_date(); ?></h4>

    <div class="news-grid">
        <div><?php the_field('copy'); ?>
            <ul>
                <?php 
// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=5' ); ?>

                <?php 
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
// Display the Post Title with Hyperlink
?>

                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

                <?php 
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>
            </ul>
        </div>
        <div> <img src="<?php the_field('image'); ?>" /></div>
    </div>



    <!-- <?php
the_content();
?> -->



</div>