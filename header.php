<!DOCTYPE html>

<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="canonical" href="#" />
    <title>Altea</title>
</head>

<body <?php body_class();?>>




    <header>
        <div class="container">


            <h1 class="hidden">Altea</h1>
            <h2 class="hidden">Aircraft | inside &amp; out</h2>

            <nav>
                <a href="/altea_web_project/" title="home" class="navbar-item">
                    <?php
                $image_attributes = wp_get_attachment_image_src( 41, 'full' );
if ( $image_attributes ) : ?>
                    <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>"
                        height="<?php echo $image_attributes[2]; ?>" />
                    <?php endif; ?>

                </a>

                <?php
wp_nav_menu( array( 
    'theme_location' => 'main-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
                <div class="menu-btn">
                    <div class="menu-bar"></div>
                    <div class="menu-bar"></div>
                    <div class="menu-bar"></div>
                    <!-- <i class="fas fa-bars fa-2x"></i> -->
                </div>
            </nav>
        </div>
        <!--container-->
    </header>
    <div class="mask"></div>