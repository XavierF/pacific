<?php
/**
 * Default Footer
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 * Last Revised: July 16, 2012
 */
?>
<!-- End Template Content -->
<footer>
      <div class="container">
<p class="ftr-top"><a href="#">Back to top</a></p>
<?php
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content");
?>
<p class="ftr-rt"><a href="#">Back to top</a></p>
<p class="ftr-info">&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
  <p class="ftr-info">843 Carleton, Berkeley CA, 94710</p>
 <p class="ftr-info">1-510-843-2453</p>
    </div> <!-- /container -->
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
       </footer>
<?php wp_footer(); ?>
  </body>
</html>