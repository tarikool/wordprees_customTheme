<?php
/**
 * The is the footer page layout for our theme
 * @package customTheme
 * @version 1.0
 */
?>

        <footer id="site-footer">
            <div class="container">
            <span class="site-title">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                      <?php bloginfo( 'name' ); ?>
              </a>
            </span>
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'customTheme' ) ); ?>">
                    <?php printf( __( 'Proudly powered by %s', 'customTheme' ), 'WordPress' ); ?>
                </a>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
