<?php get_header(); ?>


<div class="container small-size">
  <?php if(has_nav_menu('blog_menu')){
    echo '<div class="row">';
   echo '<div class="submenu">';


      $sub_menu = wp_nav_menu( array(
        'theme_location'		=>	'blog_menu',
        'echo'							=>	false,
        'menu_id'						=>	'blog-navbar',
        'menu_class'				=>	'sub-menu',
        'before'						=>	'',
        'after'							=>	'',
        'container'					=>	'div',
        'container_id'			=>	'sub_parent',
        'container_class'		=>	'sub_menus',
      ));
      echo $sub_menu;
      echo '</div><!-- submenu -->';
    echo '</div><!-- row -->';

}; ?>
  <div class="row">
    <div id="postlistpage">


<?php
echo '<div class="contact-panel">';


echo "<h2>Posts</h2>";
echo '</div>';

  $args = array(
    'posts_per_page'  =>  '-1',
    'cat'             =>  '-4',
    'orderby'         =>  'rand',
  );

  $postdata   = get_posts($args);
  foreach ($postdata as $post){
    $link = get_permalink();
    global  $post;
    $author_id=$post->post_author;

    echo '<div class="postlisting">';
    echo the_post_thumbnail() . '<br />';
    echo the_category();
    echo '<h2><a href="'.$link.'">' . get_the_title() . '</a></h2>';
    //echo the_author_meta( 'user_nicename', $author_id ) . '<br  />';
    echo 'Posted By ';
    echo the_author_meta( 'display_name', $author_id ).' on ' .get_the_date() . '<br  />';

    echo the_tags().'<br  />';
    echo comments_number('0', '1', '%');




    echo '</div>';
    wp_reset_query();
};
?>

</div><!-- postlistpage -->
<?php



 ?>
  </div><!-- row -->
  <aside id="sidebar-blog" class="sidebar">
    <?php dynamic_sidebar('sidebar-blog'); ?>
    <!--<?php include('sidebar-blog.php'); ?>-->
  </aside>

</div><!-- container -->
<?php get_footer(); ?>
