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
        
        <article id="post-<?php the_ID(); ?>" <?php post_class('well'); ?>>
          <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header><!-- .entry-header -->
        
        <section>
          <p class="lead">At Sheffield Teaching Hospitals we aim to provide you with the best patient experience possible.</p>
          <p>The Medical Imaging and Medical Physics departments work in all of the major adult hospitals in Sheffield such as the Northern General, Royal Hallamshire, Jessop Wing Hospital, Weston Park Hospital and the Charles Clifford Dental Hospital</p>
          <p>The vast majority of your questions will be answered on the relevant department or service page, or contained within a service’s patient leaflet. If you cannot find the answer you are looking for on a service’s page, the best course of action is to call the department or service and ask.&nbsp;Failing that, get in contact with our Patient Service team who will try to help you where they can.</p>
            <p>Use the dropdown button below to find the relevant department or service page:</p>
          </section>
          
          <!-- Single button -->
          <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Department &amp; Service <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
        
        <?php 
        $the_query = new WP_Query( array( 'category_name' => 'Patient Information' ) );
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        $parent = $post->post_parent;?>
          
          
              <li><a href="<?php echo get_permalink($parent); ?>"><?php echo get_the_title($parent) ;?></a></li>

              
        
        
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
              
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo home_url( '/departments-and-services/' ); ?>">All Departments &amp; Services</a></li>
            </ul>
          </div>

        </article>
		  </main><!-- #main -->
      
      <aside class="col-md-4">
         <div class="featured-image-sidebar">
              <img src="<?php echo get_template_directory_uri() . '/images/patient-partnership.jpg' ;?>" class="hidden-xs img-featured-sidebar" width="100%">
            </div>
        <?php get_sidebar(); ?>
        
      </aside>
      
	  </div><!-- #primary -->
     
  </div>


<?php get_footer(); ?>