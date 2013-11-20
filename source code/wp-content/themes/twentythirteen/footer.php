<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

    </div><!-- #main -->
    <footer id="colophon" class="site-footer" role="contentinfo">
      
      
      <div class="site-info">
        <?php do_action( 'twentythirteen_credits' ); ?>
        <a href="http://www.c2class.com/">C2Class Copyright © 2013</a>&nbsp;&nbsp;
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
      </div><!-- .site-info -->
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>
</body>
</html>