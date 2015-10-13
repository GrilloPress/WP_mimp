<?php
/*
 * 
 * 
 * 
 * Template Name: Department Show All Template
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
      <main id="main" class="col-md-12" role="main">
        
        <div class="text-right">
          <p class="lead">Featured Departments &amp; Services</p>
        </div>
        
        <div class="row">
          
        
        <?php 
        $args = array( 'category_name' => 'Featured service',
                       'orderby'   => 'title',
                       'order'     => 'ASC',
                       'posts_per_page' => 4
                     
                     );
        $the_query = new WP_Query($args);
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        
        <section class="col-sm-4 col-md-3">
          
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            
            <?php if ( has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full', array('class' => 'img-responsive hidden-xs')); ?>
            <?php else : ?>
              <img src="http://placehold.it/350x230" width="100%" class="img-responsive hidden-xs">
            <?php endif; ?>
            
            <div class="well well-preview">
              <h4><?php the_title() ?></h4>
              <p>Featured Service</p>
            </div>
            
          </a>
        </section>
        
        
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        </div>
        
        <div class="text-right">
          <p class="lead">All Departments &amp; Services</p>
        </div>
        
        <div class="row">
          
          <?php 
          $full_args = array( 'category_name' => 'Service',
                       'orderby'   => 'title',
                       'order'     => 'ASC',
                       'posts_per_page' => -4
                     
                     );
        $the_query = new WP_Query($full_args);
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        
        <section class="col-sm-4 col-md-3">
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
              <p><?php the_title() ?></p>
          </a>
        </section>
        
        
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
          
        </div>
		  </main><!-- #main -->
      
      <aside class="col-md-12">
        
        
      </aside>
      
	  </div><!-- #primary -->
     
  </div>

<?php get_footer(); ?>