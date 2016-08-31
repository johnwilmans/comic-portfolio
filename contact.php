<?php
/*
 *  Template Name: Contact Page
 *
 */

get_header();
 ?>



<div class="container comic small-size">
  <?php if(has_nav_menu('about_menu')){
    echo '<div class="row-full">';
   echo '<div class="submenu">';


      $about_menu = wp_nav_menu( array(
        'theme_location'		=>	'about_menu',
        'echo'							=>	false,
        'menu_id'						=>	'about-navbar',
        'menu_class'				=>	'sub-menu',
        'before'						=>	'',
        'after'							=>	'',
        'container'					=>	'div',
        'container_id'			=>	'sub_parent',
        'container_class'		=>	'sub_menus',
      ));
      echo $about_menu;
      echo '</div><!-- submenu -->';
    echo '</div><!-- row -->';

  }; ?>
  <div class="row-full">
    <div class="container comic">


        <div class="row-full">
            <section class="row contact-panel contactus">
              <h2>Let's become Sidekicks.</h2>
              <h5>Like us on <span class="social"><a href="https://www.facebook.com/johnwilmans/">Facebook</a></span>. Follow us on <span class="social"><a href="http://www.twitter.com/johnwilmans">Twitter</a></span>. Ask about our other social media. Or use the options below. We can't wait to hear from you.</h5>
              <div class="row contact-page-panel">
                <div class="services-blurb-half">
                  <div class="form-horizontal contactus-form">
                      <?php dynamic_sidebar('contact_page_form'); ?>
    </div><!-- form-horizontal contactus-form-->
  </div><!-- services-blurb-half -->
                <div class="services-blurb-half contact-info">
                  <h3>07801503767</h3>
                  <h3>john.wilmans@gmail.com</h3>
                  <h3><a href="https://johnwilmans.typeform.com/to/yJP1Hz"><button class="btn btn-block btn-default" id="typeform">Fill out our Request for Proposal</button></a></h3>

                </div>




              </div>


            </section>



          </div><!-- row -->

        </div><!-- container -->
