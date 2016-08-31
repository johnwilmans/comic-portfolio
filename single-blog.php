<?php
/*
 *  Template Name: Blog Page
 *
 */

?>
<?php




?>
<div class="container small-size">
  <?php if(has_nav_menu('post_menu')){
    echo '<div class="row">';
   echo '<div class="submenu">';


      $portfolio_menu = wp_nav_menu( array(
        'theme_location'		=>	'post_menu',
        'echo'							=>	false,
        'menu_id'						=>	'post-navbar',
        'menu_class'				=>	'sub-menu',
        'before'						=>	'',
        'after'							=>	'',
        'container'					=>	'div',
        'container_id'			=>	'sub_parent',
        'container_class'		=>	'sub_menus',
      ));
      echo $post_menu;
      echo '</div><!-- submenu -->';
    echo '</div><!-- row -->';

}; ?>
<div id="blog-post">


  <div class="row contact-panel blog-panel">
    <h1><?php the_title(); ?></h1>
    <p class="author">
      Posted by <?php the_author_link(); ?><span class="date-posted">&nbsp;on <?php the_date(); ?></span><br />
      <span class="cats"><?php the_category(); ?></span>
      <?php the_tags(); ?>

<div class="navigation">
  <div class="align-left">
    <p>
      <?php previous_post_link(); ?>

    </p>


  </div><!-- align -left --->
  <div class="align-right">
    <p>
      <?php next_post_link(); ?>
    </p>
  </div><!-- align- right -->
</div> <!-- navigation -->


      <hr />

    </p><!-- author -->
    <?php the_content();?>
    <?php comments_template(); ?>

  </div><!-- row-->
</div><!-- id blogpost -->
  <aside id="sidebar-blog" class="sidebar">
    <?php dynamic_sidebar('sidebar-blog'); ?>
    <!--<?php include('sidebar-blog.php'); ?>-->
  </aside>
</div><!-- container -->
<?php
get_footer(); ?>
