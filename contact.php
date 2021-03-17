<?php /* Template Name: Contact */ ?>
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
        <!--Contact Form-->
        <div class="form-container">


            <div class="form-item">


                <form id="contactForm" action="#" method="post">
                    <div class="form-control">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="feedback-input" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" class="feedback-input" />
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="message">Message</label>
                        <textarea id="body" name="body" class="feedback-input"></textarea>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>

                    <input type="submit" value="Submit" id="submit-btn" />
                </form>

            </div>
            <div class="thanks-message">
                <p>Thank you for contacting HoundsWeLove.</p>
                <p>We'll get back to you shortly</p>
                <img src="http://www.redink-sandbox.co.uk/28/wp-content/uploads/logo.png">
            </div>
        </div>
        <!--end contact form-->
        <?php the_content(); ?>



        <?php if( get_field('testimonial')): ?>
        <div class="testimonial">xxxxxxxx
            <i class="fas fa-quote-right fa-3x quotes"></i>
            <?php the_field('testimonial'); ?>
        </div>
        <?php endif; ?>
    </div>






    <?php endwhile; endif; ?>
    </div>
</section>



<?php get_footer();?>