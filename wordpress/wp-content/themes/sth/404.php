<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sth
 */
get_header(); ?>

<div id="primary" class="container">
    <div class="row">
      <div class="col-md-8">
        <?php sth_breadcrumbs(); ?>
      </div>
     </div>
  
  
    <div class="row">
      <main id="main" class="col-md-8" role="main">

			<section class="error-404 not-found well">
        <header>
          <h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sth' ); ?></h1>
        </header><!-- .entry-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'sth' ); ?></p>
          
          <?php get_template_part( 'template-parts/partials/404', 'search' ); ?>
   
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
        
        <section class="404-page-list well">
          <h2>Sitemap</h2>
          <ul class="list-unstyled">
             <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
          </ul>
        </section>
        
        

		</main><!-- #main -->
      
      <aside class="col-md-4" role="complimentary">
         <?php get_sidebar(); ?>
      </aside>
  </div>
	</div><!-- #primary -->

<?php get_footer(); ?>