    <footer class="d-flex justify-content-end align-items-center mt-3">
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'footer',
                    'container' => '',
                    'theme_location' => 'footer'
                )
            )
        ?>
    </footer>
</body>
<script src="./js/bootstrap.bundle.min.js"></script>
<?php
    wp_footer();
?>
</html>