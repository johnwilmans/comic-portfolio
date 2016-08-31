<?php
/*
 *
 *  Template Name: Portfolio Search Results.
 *
 */

 ?>






<?php get_header(); ?>


<div  class="container small-size">
  <?php if(has_nav_menu('portfolio_menu')){
    echo '<div class="row">';
   echo '<div class="submenu">';


      $portfolio_menu = wp_nav_menu( array(
        'theme_location'		=>	'portfolio_menu',
        'echo'							=>	false,
        'menu_id'						=>	'portfolio-navbar',
        'menu_class'				=>	'sub-menu',
        'before'						=>	'',
        'after'							=>	'',
        'container'					=>	'div',
        'container_id'			=>	'sub_parent',
        'container_class'		=>	'sub_menus',
      ));
      echo $portfolio_menu;
      echo '</div><!-- submenu -->';
    echo '</div><!-- row -->';

}; ?>
  <div id="port-list" class="row-full">
    <div id="postlistpage">


<?php
echo '<div class="contact-panel">';


echo "<h2>Some of our Previous work</h2>";
echo '</div>';




  $args = array(
    'post_type'       =>  'Portfolio',
    'posts_per_page'  =>  '-1',
    'cat'             =>  '4',
    'orderby'         =>  'rand',
  );



  $postdata   = get_posts($args);
  foreach ($postdata as $post){
    $link = get_permalink();
    global  $post;
    $author_id=$post->post_author;
    ?>
<div class="half contact-panel port-img">
  <img src="<?php the_field('cover_image'); ?> "/>
</div>
<div class="third contact-panel port-blurb">
  <h2><?php the_title(); ?></h2>
  <p>
    <?php the_field('intro'); ?>
  </p>
  <a href="<?php the_permalink(); ?>">More Info </a>

</div>
    <!--echo '<div class="postlisting">';
    echo the_post_thumbnail() . '<br />';
    echo the_category();
    echo '<h2><a href="'.$link.'">' . get_the_title() . '</a></h2>';

    echo 'Created By ';
    echo the_author_meta( 'display_name', $author_id ).'<br  />';

    echo the_tags().'<br  />';
    echo the_field('intro');
    echo '</div>';
    echo '<div class="postlisting">';
    ?>
    <img src="<?php the_field('cover_image'); ?>" />
  -->
<?php
    //echo '</div>'; ?>
<?php
    wp_reset_query();
};
?>

</div><!-- postlistpage -->

  
  
</div><!-- row -->
</div><!-- container -->
<?php get_footer(); ?>
