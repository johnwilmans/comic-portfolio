<?php
/*
 *  Template Name: Portfolio Page
 *
 */



get_header();


 ?>
<div class="container small-size">
  <?php if(is_active_sidebar('sidebar-port_horiz')){ ?>
    <div id="sidebar-port-horiz">
      
      <?php dynamic_sidebar('sidebar-port_horiz'); ?>
    </div>
 <?php }; ?>
  <?php if(has_nav_menu('single_portfolio_menu')){ ?>
    <div class="row">
   <div id="portfolio-submenu">

     <?php
      $portfolio_menu = wp_nav_menu( array(
        'theme_location'		=>	'single_portfolio_menu',
        'echo'							=>	false,
        'menu_id'						=>	'portfolio-navbar',
        'menu_class'				=>	'sub-menu',
        'before'						=>	'',
        'after'							=>	'',
        'container'					=>	'div',
        'container_id'			=>	'sub_parent',
        'container_class'		=>	'sub_menus',
      ));
      echo $single_portfolio_menu; ?>
    </div><!-- portfolio-submenu -->
    </div><!-- row -->

  <?php }; ?>
</div>

 <div class="container port-single">

   <div class="row-full">
     <div class="contact-panel portpage-blurb">
       <h1><?php the_field('company_name'); ?></h1>
       <h3>HISTORY</h3>
       <p>
         <?php the_field('history'); ?>
       </p>
       <h3>SERVICE</h3>
       <p>
         <?php the_field('service'); ?>
       </p>
       <h3>SITE</h3>
       <p>
         <?php the_field('site'); ?>
       </p>


     </div><!-- contact-panel portpage-blurb -->
     <div class="row-mid">


     <div class="contact-panel port-image">
       <img src="<?php the_field('cover_image'); ?>" />

     </div><!-- contact-panel port-image-->
     <div class="row-spec specs">
       <div class="contact-panel spec">
         <i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
         <p class="date">
           <?php the_field('year_built');?>
         </p>

       </div><!-- contact-panel spec-->

     <div class="contact-panel spec">
       <i class="fa fa-code fa-3x" aria-hidden="true"></i>

       <?php $field = get_field_object('languages');
$value = $field['value'];
$choices = $field['choices'];

if( $value ): ?>
<ul class="tech-list">
<?php foreach( $value as $v ): ?>
<li>
<?php echo $choices[ $v ]; ?>
</li>
<?php endforeach; ?>
</ul>
<?php endif; ?>



     </div><!-- contact-panel spec-->

     <div class="contact-panel spec">
       <i class="fa fa-cogs fa-3x" aria-hidden="true"></i>
       <?php $field = get_field_object('technologies');
$value = $field['value'];
$choices = $field['choices'];

if( $value ): ?>
<ul class="service-list">
<?php foreach( $value as $v ): ?>
<li>
<?php echo $choices[ $v ]; ?>
</li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
     </div><!-- contact-panel spec-->
   </div><!-- row-small -->
   </div><!-- row mid-->
   </div><!-- row -->

 </div><!-- container -->
<?php get_footer(); ?>
