<?php
/*
 * 
 * 
 * 
 * Template Name: Commercial Service - Tabbed
 * @package sth
 */
get_header(); ?>

	 <div id="primary" class="container">
     <div class="row">
       <div class="col-md-8">
         <div class="jumbotron">
            <h1><?php the_title(); ?></h1>
            <p><?php echo get_post_meta(get_the_ID(), "sub-title", true); ?></p>
          </div>

       </div>

       <div class="col-md-4 col-sm-4">
          <div class="featured-image-sidebar">
            <img src="http://placehold.it/350x250" width="100%" class="hidden-sm hidden-xs">
            
        <?php if ( has_post_thumbnail() ){

                  echo get_the_post_thumbnail();

                  } ;?>
         </div>
       </div>
     </div>
     
     
     <hr>

       

    
      <main id="main" role="main">
        <?php $parent_id = get_the_ID(); //this sets the parent id that feeds into the get_post queries?>
        
        <div class="row">

          <div id="" class="col-md-8">
            <?php while ( have_posts() ) : the_post(); ?>
            
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane in fade active" id="home">            
                <article id="post-<?php the_ID(); ?>" <?php post_class('well'); ?>>
                  <header class="entry-header">
                   <h2 class="entry-title">A World-class Service</h2>
                  </header><!-- .entry-header -->

                  <div class="entry-content">
                    <?php the_content(); ?>
                    <?php
                      wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sth' ),
                        'after'  => '</div>',
                      ) );
                    ?>
                  </div><!-- .entry-content -->

                  <footer class="entry-footer">
                    <?php edit_post_link( esc_html__( 'Edit', 'sth' ), '<span class="edit-link">', '</span>' ); ?>
                  </footer><!-- .entry-footer -->
                </article><!-- #post-## -->
              </div>
               <?php endwhile; // End of parent page loop. ?>
              
             
              <?php 
                  $args = array(
                    'post_parent' => $parent_id,
                    'post_type'   => 'page', 
                    'numberposts' => -1,
                    'post_status' => 'published',
                  );
               $myposts = get_posts($args);
               foreach($myposts as $post) :?>

              <?php $post_slug=$post->post_name; ?>
              <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
              
              <div role="tabpanel" class="tab-pane fade" id="<?php echo $post_slug; ?>">
                
                <?php if($image): ?>
                  <img src="<?php echo $image;?>" width="100%">
                <?php endif ;?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('well'); ?> role="article">
                    <section class="post_content clearfix">
                      <h2 class="entry-title" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>   
                      <?php $content = $post->post_content; ?>
                      <?php // echo $content; ?>
                      <?php echo apply_filters('the_content', $content); ?>
                    </section>
                </article>
              </div>

             <?php endforeach; ?>
           </div>

           
          
          </div>
          
          <div class="col-xs-12 col-md-4">
              
              <div class="nav-controls" id="tabbed-nav">
                 <!-- Nav tabs -->
                <ul class="nav nav-pills nav-stacked" role="tablist">
                  
                  <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo get_the_title( $parent_id ); ?></a>
                  </li>

                  
                  <?php 
                    $args = array(
                      'post_parent' => $parent_id,
                      'post_type'   => 'page', 
                      'numberposts' => -1,
                      'orderby'   => 'title',
                      'order' => 'ASC',
                      'post_status' => 'any' 
                    );
                     $myposts = get_posts($args);
                     foreach($myposts as $post) :?>
                  
                   <?php $post_slug=$post->post_name; ?>
                    <li role="presentation">
                      <a href="#<?php echo $post_slug; ?>" aria-controls="<?php echo $post_slug; ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
           
                
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation" class="nav-list-spacer">
                  </li>
                </ul>
              </div>
            
            <hr>
            
            <section class="well" id="commericial-contact-form">
              <h4>Contact our team</h4>
               <?php echo do_shortcode("[contact-form subject='[Medical Imaging %26amp; Medical Physics'][contact-field label='Name' type='name' required='1'/][contact-field label='Email' type='email' required='1'/][contact-field label='Company' type='text' required='1'/][contact-field label='Phone Number' type='text'/][contact-field label='Message' type='textarea' required='1'/][/contact-form]");?>
            </section>
               
            
            </div>
          
          
          
          
          
          
          
          
            
            <script>
              
              // After the results are sorted, it finishes by scrolling the browser to the top of the results id
            if ( jQuery( window ).width() < 650 ){
             
              jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                 jQuery('html, body').animate({scrollTop:0});
              })  
              
            }       
            </script>
          
          </div>
        
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <img src="http://placehold.it/350x250" width="100%" class="hidden-xs">
            <div class="well">
              <h4>Service Feature</h4>
              <p>A description of the service feature</p>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-3">
           <img src="http://placehold.it/350x250" width="100%" class="hidden-xs">
           <div class="well">
              <h4>Service Feature</h4>
              <p>A description of the service feature</p>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-3">
           <img src="http://placehold.it/350x250" width="100%" class="hidden-xs">
           <div class="well">
              <h4>Service Feature</h4>
              <p>A description of the service feature</p>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-3">
           <img src="http://placehold.it/350x250" width="100%" class="hidden-xs">
           <div class="well">
              <h4>Service Feature</h4>
              <p>A description of the service feature</p>
            </div>
          </div>
        </div>

      </main>
     
     <?php get_footer(); ?>