    <footer class="site-footer container">
        <div class="footer-content">
            <?php
                $args = array(
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'footer-menu'
                );
                wp_nav_menu($args)
            ?>
            <p class="copyright">By <a href="https://www.linkedin.com/in/mariana-caldas-souza/" target="_blank" rel="noreferrer noopener" title="Mariana Caldas LinkedIn">Mariana Caldas</a>. All Rights Reserved. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
