<div class="footer-nav-menu">
    <?php
    if (has_nav_menu('footer_menu')) {
        wp_nav_menu(
            array(
                'theme_location' => 'footer_menu',
            )
        );
    }
    ?>
    <footer class="site-footer">
        <p>
            <?php echo get_bloginfo('title'); ?>&copy; Copyright
            <?php echo date('Y') ?> | Developer links:
            <a href="#">Edits</a>,
            <a href="#">Home</a>,
            <a href="#">Single</a>
        </p>
    </footer>
</div>
<?php wp_footer(); ?>
</body>

</html>