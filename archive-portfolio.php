<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div id="postlistpage">


<?php
echo '<div class="contact-panel">';


echo "<h2>Portfolio</h2>";
echo '</div>';

  $args = array(
    'posts_per_page'  =>  '-1',
    'cat'             =>  '4',
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
    echo 'Posted By: ';
    echo the_author_meta( 'user_nicename', $author_id ).' on ' .get_the_date() . '<br  />';
    echo the_tags().'<br  />';
    echo comments_number('0', '1', '%');




    echo '</div>';
};
?>

</div><!-- postlistpage -->
<?php



 ?>
  </div><!-- row -->
  <aside class="sidebar" id="sidebar-home">
    <?php get_sidebar(); ?>
  </aside>

</div><!-- container -->
<?php get_footer(); ?>
