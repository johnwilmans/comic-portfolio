<?php
/*
 *  Template Name: About Us
 *
 */


 ?>
<?php get_header(); ?>
<div class="container small-size">
  <div class="row-full">
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

  </div><!-- row -->
</div><!-- container small-size -->


<?php get_footer(); ?>
