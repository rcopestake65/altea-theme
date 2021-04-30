<?php wp_footer();?>
<footer>
    <div class="footer-container">
        <p>&copy; <script type="text/javascript">
            document.write(new Date().getFullYear());
            </script> - <a href="/">Altea</a></p>
        <?php
wp_nav_menu( array( 
    'theme_location' => 'main-menu', 
    'container_class' => 'footer-custom-menu-class' ) ); 
?>
        <!--    <ul class="footer-social-menu">
            <li><a href="#"><i class="fab fa-linkedin fa-lg"></i></a></li>
        </ul>-->

    </div>
    <div class="footer-social-icons container">
        <a href="#"><span class="social-icon"><i class="fab fa-twitter"></i></span></a>
        <a href="#"><span class="social-icon"><i class="fab fa-instagram"></i></span></a>
        <a href="#"><span class="social-icon"><i class="fab fa-linkedin-in"></i></span></a>

    </div>
</footer>

</body>

</html>