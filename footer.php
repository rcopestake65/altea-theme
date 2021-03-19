<?php wp_footer();?>
<footer>
    <div class="footer-container">
        <p>&copy; <script type="text/javascript">
            document.write(new Date().getFullYear());
            </script> - Altea</p>
        <?php
wp_nav_menu( array( 
    'theme_location' => 'footer-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
        <ul class="footer-social-menu">
            <li><a href="#"><i class="fab fa-linkedin fa-lg"></i></a></li>
        </ul>

    </div>
</footer>

</body>

</html>