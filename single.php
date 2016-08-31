<?php get_header(); ?>

  <?php if(have_posts()) : while(have_posts()) : the_post();
  if (  in_category(  '4' ))  :
    get_template_part('single-portfolio');

  else :
  get_template_part('single-blog');
  endif;
endwhile;
endif;
wp_reset_query();


?>





<?php get_footer(); ?>
