<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sth
 */

?>

    </div><!-- #content -->

    <footer id="colophon" role="contentinfo">
      <div class="site-footer">
        <div class="container">
          <div id="widget-footer" class="row">
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		        <?php endif; ?>
		        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		        <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		        <?php endif; ?>
		      </div>
        </div>
     </div><!-- .site-info -->
      
        <div class="sub-footer">
          <div class="container">
            <div class="col-md-12">
              <p>&copy; Sheffield Teaching Hospitals NHS Foundation Trust</p>
            </div>
          </div>
        </div>
     
    </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>

  </body>
</html>