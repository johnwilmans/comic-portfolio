<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="google-site-verification" content="hdvgmeRJY-gISrqY8pCiIhgm_9dBJQUTDbc0vVUcwsQ" />
    <title>JohnWilmans.com | Web Development</title>
<!-- Adobe Fonts -->
<script src="https://use.typekit.net/ccd6hnz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

      <div class="nav ">

        <div class="logo">
          <img src="<?php echo get_theme_mod('logo_setting'); ?>">

        </div><!-- logo -->
        <div class="widget-area">
          <?php dynamic_sidebar('sidebar-header'); ?>
        </div>
        <div class="nav-menu">
        <?php
        $header_menu = wp_nav_menu( array(
          'theme_location'		=>	'header_menu',
		      'echo'							=>	false,
		      'menu_id'						=>	'navbar',
		      'menu_class'				=>	'nav-menu',
		      'before'						=>	'',
		      'after'							=>	'',
		      'container'					=>	'div',
		      'container_id'			=>	'header_parent',
		      'container_class'		=>	'header_menus',
        ));
        echo $header_menu; ?>
             </div><!-- nav-menu -->
    </div><!-- nav -->
        
        <div class="mobile-nav">
            <div class="menu-btn" id="menu-btn">
                <div></div>
                <span></span>
                <span></span>
                <span></span>
            </div><!-- menu-btn -->
        
            <div class="responsive-menu">
             <?php wp_nav_menu (array('container_class'=>'menu-header',   'theme_location' =>  'mobile-menu', ));
               ?>
              </div>
        </div><!-- mobile nav-->
        
       
     
    </div><!-- container -->
