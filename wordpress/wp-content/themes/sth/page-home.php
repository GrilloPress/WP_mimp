<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content">
			
				<div id="main" class="clearfix" role="main">

					<section id="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="brand-header">
                    <h1 class="brand-h1">Medical Imaging &amp; Medical Physics</h1>
                    <p class="lead">A multi-disciplinary department in the heart of South Yorkshire</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="mimp-blocks">
            <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo home_url( '/patient-information/' ); ?>">
                      <img src="<?php echo get_template_directory_uri() . '/images/patient-partnership.jpg' ;?>" class="hidden-xs" width="100%">
                      <div class="well" id="">
                        <h2>Patient Information</h2>
                        <footer>Learn more about your patient journey and our services</footer>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo home_url( '/departments-and-services/' ); ?>">
                      <img src="<?php echo get_template_directory_uri() . '/images/services.jpg' ;?>" class="hidden-xs" width="100%">
                      <div class="well" id="">
                        <h2>A-Z of Services</h2>
                        <footer>Explore our commercial and patient services</footer>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="hidden-xs" width="100%">
                      <img src="<?php echo get_template_directory_uri() . '/images/commerical-web.jpg' ;?>" class="hidden-xs" width="100%">
                      <div class="well" id="">
                        <h2>Commercial Services</h2>
                        <footer>Find out more about our world-class commerical services</footer>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo home_url( '/referrals/' ); ?>">
                      <img src="<?php echo get_template_directory_uri() . '/images/gps.jpg' ;?>" class="hidden-xs" width="100%">
                      <div class="well" id="">
                        <h2>Referral Information</h2>
                        <footer>Find out how to make a referral to our service</footer>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
          </section>
          
           <section id="featured-pages">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <div class="well">
                    <h2>Featured Services</h2>
                    
                    <div class="row">
                      
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul class="media-list">
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Medical Imaging</h4>
                                Department
                              </div>
                            </a>
                          </li>
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Service heading</h4>
                                one-liner
                              </div>
                            </a>
                          </li>
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Service heading</h4>
                                one-liner
                              </div>
                            </a>
                          </li>
                          
                        </ul>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul class="media-list">
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Service heading</h4>
                                one-liner
                              </div>
                            </a>
                          </li>
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Service heading</h4>
                                one-liner
                              </div>
                            </a>
                          </li>
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Service heading</h4>
                                one-liner
                              </div>
                            </a>
                          </li>
                          
      
                        </ul>
                      </div>
                      
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul class="media-list">
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Service heading</h4>
                                one-liner
                              </div>
                            </a>
                          </li>
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Service heading</h4>
                                one-liner
                              </div>
                            </a>
                          </li>
                          
                          <li class="media">
                            <a href="#">
                              <div class="media-body">
                                <h4 class="media-heading">Service heading</h4>
                                one-liner
                              </div>
                            </a>
                          </li>
      
                        </ul>
                      </div>
                      
                    </div>
                    
                    
                  </div>
                </div>
                
                 <div class="col-md-3 col-sm-12 col-xs-12">
                   <div class="well">
                    <h2>Recent News</h2>
                     
                     <ul class="list-unstyled">
                      <?php
                      $args = array( 'posts_per_page' => 5 );

                      $myposts = get_posts( $args );
                      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <li>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                      <?php endforeach; 
                      wp_reset_postdata();?>

                     </ul>
                     
                     
                  </div>
                </div>
              </div>
             </div>
          </section>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>