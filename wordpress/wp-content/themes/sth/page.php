<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sth
 */

get_header(); ?>

	 <div id="primary" class="container">
     <div class="row">
      <div class="col-md-12">
        <?php sth_breadcrumbs(); ?>
      </div>
     </div>
     
    <div class="row">
      <main id="main" class="col-md-8" role="main">
        
         <?php if ( has_post_thumbnail() ){
                echo get_the_post_thumbnail() ;
                } ;?>
        
			<?php while ( have_posts() ) : the_post(); ?>
        
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
      <aside class="col-md-4">
        
        <?php if (is_page( 'Referrals' ))
  
           get_template_part( 'template-parts/partials/block', 'sidebar' );

         ?>
  
        <?php get_sidebar(); ?>
        
      </aside>
      
	  </div><!-- #primary -->
     
  </div>

<?php get_footer(); ?>