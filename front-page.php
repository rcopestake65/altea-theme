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
        <div class="mobile-content">
            <h3>Case Studies</h3>
            <div class="case-studies-grid">
                <div class="case-studies-item">
                    <h3>Ares Management</h3>
                    <div class="img-zoom">
                        <a href="/wp-content/uploads/Case-Study-ARES-MAY-2021.pdf"> <img
                                src="/wp-content/uploads/Ares.jpg" alt="Ares"></a>
                    </div>

                    <p>ALTEA has successfully supported a major refinancing project for Bombardier, helping a group of
                        US-based
                        private financiers (HPS Investment Partners, Apollo Capital Management and Ares Management) to
                        close
                        a
                        three-year, $1 billion secured term loan facility for Bombardier.??
                    </p>
                    <a class="btn-skew teal download" href="/wp-content/uploads/Case-Study-ARES-MAY-2021.pdf"><i
                            class="fas fa-file-pdf fa-lg pdf-color"></i> Download (3MB)</a>
                </div>
                <div class="case-studies-item">
                    <h3>ATR</h3>
                    <div class="img-zoom">
                        <a href="/wp-content/uploads/ALT_Case-Study-ATR-MAY-2021.pdf"><img
                                src="/wp-content/uploads/atr.jpg" alt="ATR"></a>
                    </div>

                    <p>ALTEA arranged the first known sale and leaseback of two ATR72-600s and subsequently successfully
                        completed a
                        re-financing of the same aircraft upon transition to their next operators

                    </p>
                    <a class="btn-skew teal download" href="/wp-content/uploads/ALT_Case-Study-ATR-MAY-2021.pdf"><i
                            class="fas fa-file-pdf fa-lg pdf-color"></i> Download (500KB)</a>
                </div>
                <div class="case-studies-item">
                    <h3>Deutsche Aircraft</h3>
                    <div class="img-zoom">
                        <a href="/wp-content/uploads/ALT_Case-Study-Assets-DA-MAY-2021.pdf"><img
                                src="/wp-content/uploads/da.jpg" alt="Deutsche Aircraft"></a>
                    </div>

                    <p>ALTEA concluded an in depth Market Demand Assessment for DA to serve the sub-50 seat market with
                        a
                        state of
                        the art aircraft.
                    </p>
                    <a class="btn-skew teal download"
                        href="/wp-content/uploads/ALT_Case-Study-Assets-DA-MAY-2021.pdf"><i
                            class="fas fa-file-pdf fa-lg pdf-color"></i> Download (1MB)</a>
                </div>
                <div class="case-studies-item">
                    <h3>PH-GOV
                    </h3>
                    <div class="img-zoom">
                        <a href="/wp-content/uploads/ALT_Case-Study-PHGOV-MAY-2021.pdf"> <img
                                src="/wp-content/uploads/phgov.jpg" alt="Netherlands Government Plane"></a>
                    </div>

                    <p>ALTEA successfully managed the nose-to-tail acquisition and outfitting of the new governmental
                        aircraft for
                        the State of the Netherlands - a Boeing BBJ bearing the registration PH-GOV.

                    </p>
                    <a class="btn-skew teal download" href="/wp-content/uploads/ALT_Case-Study-PHGOV-MAY-2021.pdf"><i
                            class="fas fa-file-pdf fa-lg pdf-color"></i> Download (4MB)</a>
                </div>
                <div class="case-studies-item">
                    <h3>PH-KBX
                    </h3>
                    <div class="img-zoom">
                        <a href="/wp-content/uploads/ALT_Case-Study-PHKBX-MAY-2021.pdf"><img
                                src="/wp-content/uploads/phkbx.jpg" alt="Netherlands Government Plane"></a>
                    </div>

                    <p>ALTEA successfully managed the sale and delivery of a 22-year-old Fokker 70 in VIP configuration
                        for
                        the
                        State of the Netherlands. Intelligent and effective, ALTEA???s market knowledge allowed us to
                        achieve
                        an
                        optimum solution for this sale.

                    </p>
                    <a class="btn-skew teal download" href="/wp-content/uploads/ALT_Case-Study-PHKBX-MAY-2021.pdf"><i
                            class="fas fa-file-pdf fa-lg pdf-color"></i> Download (1.5MB)</a>
                </div>
                <div class="case-studies-item">
                    <h3>Leonardo AW-109 GrandNew </h3>
                    <div class="img-zoom">
                        <a href="/wp-content/uploads/Case-Study-PY109-MAY-2021.pdf"><img
                                src="/wp-content/uploads/py109.jpg" alt="Leonardo AW-109 GrandNew "></a>
                    </div>

                    <p>Our customer utilised ALTEA???s interior & exterior design and customer representation services for
                        the
                        design
                        and specification of this unique private helicopter.
                    </p>
                    <a class="btn-skew teal download" href="/wp-content/uploads/Case-Study-PY109-MAY-2021.pdf"><i
                            class="fas fa-file-pdf fa-lg pdf-color"></i> Download (4MB)</a>
                </div>
                <div class="case-studies-item">
                    <h3>Military to Civilian Transition
                    </h3>
                    <div class="img-zoom">
                        <a href="/wp-content/uploads/ALT_Case-Study-Assets-MRTT-MAY-2021.pdf"><img
                                src="/wp-content/uploads/mrtt.jpg" alt="Plane tail"></a>
                    </div>

                    <p>On behalf of Air Tanker (UK Ministry of Defense), ALTEA conducted an in depth technical and
                        commercial
                        evaluation of its Airbus MRTT to determine how and on what terms surplus aircraft could be
                        operated
                        as
                        civilian airliners.

                    </p>
                    <a class="btn-skew teal download"
                        href="/wp-content/uploads/ALT_Case-Study-Assets-MRTT-MAY-2021.pdf"><i
                            class="fas fa-file-pdf fa-lg pdf-color"></i> Download (700KB)</a>
                </div>
            </div>
        </div>

    </div>
    <!--end of mobile content-->

</section>

<?php endwhile;
    endif;
    ?>

<?php get_footer();?>