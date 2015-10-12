<?php
/*
 * 
 * 
 * 
 * Template Name: Patient Information Template
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
        
        <?php $the_query = new WP_Query( array( 'category_name' => 'Patient Information' ) ) ;?>
        
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
        <?php $parent = $post->post_parent;?>
        
        <div class="well">
          <h2><a href="<?php echo get_permalink( ); ?>"><?php echo get_the_title($parent) ;?></a></h2>
          <p><?php echo the_excerpt(); ?></p>
          <a role="button" class="btn btn-link" href="<?php echo get_permalink( ); ?>"><?php echo get_the_title($parent) ;?> Patient Information</a>
        </div>
        
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


		  </main><!-- #main -->
      
      <aside class="col-md-4">

        <?php get_sidebar(); ?>
        
      </aside>
      
	  </div><!-- #primary -->
     
  </div>


<?php get_footer(); ?>