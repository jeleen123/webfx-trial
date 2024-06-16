<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JeleenTalledo
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jeleentalledo' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'jeleentalledo' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'jeleentalledo' ), 'jeleentalledo', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="http://flexslider.woothemes.com/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        rtl: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="http://flexslider.woothemes.com/js/shCore.js"></script>
  <script type="text/javascript" src="http://flexslider.woothemes.com/js/shBrushXml.js"></script>
  <script type="text/javascript" src="http://flexslider.woothemes.com/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="http://flexslider.woothemes.com/js/jquery.easing.js"></script>
  <script src="http://flexslider.woothemes.com/js/jquery.mousewheel.js"></script>
  <script defer src="http://flexslider.woothemes.com/js/demo.js"></script>

</body>
</html>
