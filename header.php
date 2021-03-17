<!DOCTYPE html>

<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="canonical" href="#" />
    <title>Red Ink Theme</title>
</head>

<body <?php body_class();?>>



    <div class="container-full-width">
        <header>

            <div class="menu-btn">
                <p>Menu</p>
                <i class="fas fa-bars fa-2x"></i>
            </div>

            <h1 class="hidden"></h1>

            <div class="social-menu">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
                    </li>
                    <li><a href="#"><i class="fab fa-instagram fa-lg"></i></a></li>
                </ul>
            </div>

            <nav class="main-nav">
                <a href="/" title="home" class="navbar-item">
                    <img src="http://www.redink-sandbox.co.uk/28/wp-content/uploads/logo.png" alt="Logo" class="logo">
                </a>

                <?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>

            </nav>
        </header>
    </div>