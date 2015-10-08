<?php
/*
 * 
 * 
 * 
 * Template Name: Master Page with Tabbed sidebar
 * @package sth
 */
get_header(); ?>

	 <div id="primary" class="container">
     <div class="row">
      <div class="col-md-12">
        <?php sth_breadcrumbs(); ?>
        <?php $parent_id = get_the_ID(); //this sets the parent id that feeds into the get_post queries?>
      </div>
     </div>
    
      <main id="main" role="main">
        
        <div class="row">

          <div id="" class="col-md-8">
            <?php while ( have_posts() ) : the_post(); ?>
            
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane in fade active" id="home">
                <?php if ( has_post_thumbnail() ){
                  
                echo get_the_post_thumbnail() ;
  
                } ;?>
                
            
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
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
                      <h1 class="entry-title" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h1>   
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
            </div>
            
            <script>
              
              jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                 jQuery('html, body').animate({scrollTop:0});
              })         
            </script>
          
          </div>

      </main>
     
     <?php get_footer(); ?>