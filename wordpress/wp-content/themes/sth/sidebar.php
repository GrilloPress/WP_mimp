<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package sth
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

 <a href="<?php echo home_url( '/patient-information/' ); ?>">
   <img src="<?php echo get_template_directory_uri() . '/images/patient-partnership.jpg' ;?>" class="hidden-xs" width="100%">
   <div class="well" id="">
     <h4>Patient Information</h4>
     <footer>Learn more about your patient journey and our services</footer>
   </div>
 </a>

<a href="<?php echo home_url( '/departments-and-services/' ); ?>">
  <img src="<?php echo get_template_directory_uri() . '/images/services.jpg' ;?>" class="hidden-xs" width="100%">
  <div class="well" id="">
    <h4>A-Z of Services</h4>
    <footer>Explore our commercial and patient services</footer>
  </div>
</a>

<a href="<?php echo home_url( '/referrals/' ); ?>">
  <img src="<?php echo get_template_directory_uri() . '/images/gps.jpg' ;?>" class="hidden-xs" width="100%">
  <div class="well" id="">
    <h4>Referral Information</h4>
    <footer>Find out how to make a referral to our service</footer>
  </div>
</a>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->