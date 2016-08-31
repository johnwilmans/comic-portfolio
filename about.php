<?php
/*
 *  Template Name: About Us
 *
 */

 ?>
<?php get_header() ?>

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
    <div class="row-full container" id="aboutpage">


  <img id="streetscene" src="http://www.yellow-rocket.com/wp-content/uploads/2016/07/Street-Scene.png" />

  <a href="getintouch.html"><img src="http://www.yellow-rocket.com/wp-content/uploads/2016/07/phone-booth.png" id="phonebooth" /></a>
  <a href="http://johnwilmans.com/wp/about-us/"><img src="http://www.yellow-rocket.com/wp-content/uploads/2016/07/Floating-hero.png" id="hero" /></a>
  <a href="http://johnwilmans.com/wp/services/"><div id="aboutus"> <p>
    What we do. How we do it.
  </p>



</div></a>
</div><!-- row-full container -->




<?php get_footer() ?>
</div><!-- container small-size"-->