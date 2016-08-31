<?php

/*
 *  ADD THEME SUPPORT
*/
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
    add_theme_support( 'automatic-feed-links' );
    add_theme_support('post_thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'video', 'image'));
    add_theme_support('menus');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('custom_logo');
    add_theme_support('title-tag');
    add_theme_support('html5',array('search-form', 'comment-form', 'gallery', 'coment-list', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
}




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function comic_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'comic_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'comic_portfolio_content_width', 0 );


/*
 *  ENQUEUE SCRIPTS
*/
function wpdocs_comic_portfolio_scripts(){
  wp_enqueue_style('style.css', get_stylesheet_uri());
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.min.css');
};
wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );


add_action('wp_enqueue_scripts','wpdocs_comic_portfolio_scripts' );


/*function www_johnwilmans_com_scripts() {
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');

wp_enqueue_style('main', get_stylesheet_uri());


wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array(), 'false', 'true');
wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array(), 'false', 'true');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'www_johnwilmans_com_scripts' );


*/
/*
 * This theme uses menus in header, footer, sidebars and sub header
*/
register_nav_menus(
array(
  'header_menu'           =>  'Main Menu',
  'blog_menu'             =>  'Blog Page Menu',
  'portfolio_menu'        =>  'Portfolio Sub Menu',
  'post_menu'             =>  'Single Post Page Menu',
  'single_portfolio_menu' =>  'Single Portfolio Page Menu',
  'about_menu'            =>  'About Pages Menu',
    'tablet-menu'           =>  'Tablet Menu',
    'mobile-menu'           =>  'Mobile Menu',
));

/*
 * Register Widget Area's.
 */

function comic_portfolio_widgets_init(){
  register_sidebar( array(
    'name'          =>  __( 'Home Page Sidebar', 'comic-portfolio'),
    'id'            =>  'sidebar-home',
    'description'   =>  'This is the sidebar that appears on your home page or front-page.php',
    'class'         =>  'home',

  ));

  register_sidebar( array(
    'name'          =>  __( 'Header Sidebar', 'comic-portfolio'),
    'id'            =>  'sidebar-header',
    'description'   =>  'This is the sidebar that appears in the header.  Generally used for newsletter signups',

  ));

  register_sidebar (array(
		'name'					=>	__(	'Footer Left Sidebar', 'comic-portfolio' ),
		'id'						=>	'sidebar-footer-left',
		'description'		=>	'Widgets for the left of the footer',

	)	);

	register_sidebar (array(
		'name'					=>	__(	'Footer Middle Sidebar', 'comic-portfolio' ),
		'id'						=>	'sidebar-footer-mid',
		'description'		=>	'Widgets for the Middle of the footer',

	)	);

	register_sidebar (array(
		'name'					=>	__(	'Footer Right Sidebar', 'comic-portfolio' ),
		'id'						=>	'sidebar-footer-right',
		'description'		=>	'Widgets for the Right of the footer',

	)	);

  register_sidebar (array(
		'name'					=>	__(	'Blog Page Sidebar', 'comic-portfolio' ),
		'id'						=>	'sidebar-blog',
		'description'		=>	'Widgets for the Index Page Sidebar',

	)	);

  register_sidebar (array(
		'name'					=>	__(	'Single Blog Page Sidebar', 'comic-portfolio' ),
		'id'						=>	'sidebar-single_blog',
		'description'		=>	'Widgets for the Blog Page Sidebar',

	)	);

  register_sidebar (array(
		'name'					=>	__(	'Portfolio Page Sidebar', 'comic-portfolio' ),
		'id'						=>	'sidebar-port',
		'description'		=>	'Widgets for the Portfolio Page Sidebar',

	)	);

  register_sidebar (array(
		'name'					=>	__(	'Portfolio Page Horizontal Sidebar', 'comic-portfolio' ),
		'id'						=>	'sidebar-port_horiz',
		'description'		=>	'Widgets for the Horizontal Portfolio sidebar',

	)	);

  register_sidebar (array(
		'name'					=>	__(	'Contact Page Form', 'comic-portfolio' ),
		'id'						=>	'contact_page_form',
		'description'		=>	'Widgets for the contact page form',

	)	);
};
add_action('widgets_init', 'comic_portfolio_widgets_init');
/*
 *  This theme uses the Customizer for most of the information on the pages.
 */

  add_action( 'customize_register', 'initiate_customizer');
  function initiate_customizer($wp_customize){

/*
 * Customizer Options only for front page
*/
      //if( !is_front_page()){
    $wp_customize->add_panel( 'home_page_settings_panel', array(
        'title'       =>  'Home Page Settings',
        'description' =>  'Set text and images for the Front comic page',
        'priority'    =>  1,
    ));

      // Panel 1 Settings

    $wp_customize->add_section( 'panel1_settings', array(
        'title'       =>  __( 'Panel 1 Settings', 'comic-portfolio'),
        'priority'    =>  1,
        'panel'       =>  'home_page_settings_panel',
    ));



    $wp_customize->add_setting('panel1_gradient_text_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'panel1_gradient_text', array(
      'label'         =>  __('Gradient Box 1 Text', 'comic-portfolio'),
      'section'       =>  'panel1_settings',
      'settings'      =>  'panel1_gradient_text_setting',
    )));

    $wp_customize->add_setting('panel1_text_box_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'panel1_text_box', array(
      'label'         =>  __('Text Box 1 Text', 'comic-portfolio'),
      'section'       =>  'panel1_settings',
      'settings'      =>  'panel1_text_box_setting',
    )));

    $wp_customize->add_setting('panel1_image_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'panel1_image', array(
      'label'         =>  __('Image', 'comic-portfolio'),
      'section'       =>  'panel1_settings',
      'settings'      =>  'panel1_image_setting',
    )));

      //Panel 2 Settings

      $wp_customize->add_section( 'panel2_settings', array(
          'title'       =>  __( 'Panel 2 Settings', 'comic-portfolio'),
          'priority'    =>  2,
          'panel'       =>  'home_page_settings_panel',
      ));

    $wp_customize->add_setting('panel2_gradient_text_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'panel2_gradient_text', array(
      'label'         =>  __('Gradient Box 2 Text', 'comic-portfolio'),
      'section'       =>  'panel2_settings',
      'settings'      =>  'panel2_gradient_text_setting',
    )));

    $wp_customize->add_setting('panel2_text_box_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'panel2_text_box', array(
      'label'         =>  __('Text Box 2 Text', 'comic-portfolio'),
      'section'       =>  'panel2_settings',
      'settings'      =>  'panel2_text_box_setting',
    )));

    $wp_customize->add_setting('panel2_image_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'panel2_image', array(
      'label'         =>  __('Image', 'comic-portfolio'),
      'section'       =>  'panel2_settings',
      'settings'      =>  'panel2_image_setting',
    )));

    $wp_customize->add_setting('panel2_animation_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'panel2_animation', array(
        'label'     =>  __('Animation Image', 'comic-portfolio'),
        'section'   =>  'panel2_settings',
        'settings'  =>  'panel2_animation_setting',
    )));

      //Panel 3 Settings

      $wp_customize->add_section( 'panel3_settings', array(
          'title'       =>  __( 'Panel 3 Settings', 'comic-portfolio'),
          'priority'    =>  3,
          'panel'       =>  'home_page_settings_panel',
      ));

    $wp_customize->add_setting('panel3_gradient_text_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'panel3_gradient_text', array(
      'label'         =>  __('Gradient Box 3 Text', 'comic-portfolio'),
      'section'       =>  'panel3_settings',
      'settings'      =>  'panel3_gradient_text_setting',
    )));

    $wp_customize->add_setting('panel3_text_box_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'panel3_text_box', array(
      'label'         =>  __('Text Box 3 Text', 'comic-portfolio'),
      'section'       =>  'panel3_settings',
      'settings'      =>  'panel3_text_box_setting',
    )));

    $wp_customize->add_setting('panel3_image_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'panel3_image', array(
      'label'         =>  __('Image', 'comic-portfolio'),
      'section'       =>  'panel3_settings',
      'settings'      =>  'panel3_image_setting',
    )));

    //Panel 4 Settings

    $wp_customize->add_section( 'panel4_settings', array(
        'title'       =>  __( 'Panel 4 Settings', 'comic-portfolio'),
        'priority'    =>  4,
        'panel'       =>  'home_page_settings_panel',
    ));

    $wp_customize->add_setting('panel4_gradient_text_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'panel4_gradient_text', array(
      'label'         =>  __('Gradient Box 1 Text', 'comic-portfolio'),
      'section'       =>  'panel4_settings',
      'settings'      =>  'panel4_gradient_text_setting',
    )));

    $wp_customize->add_setting('panel4_text_box_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'panel4_text_box', array(
      'label'         =>  __('Text Box 4 Text', 'comic-portfolio'),
      'section'       =>  'panel4_settings',
      'settings'      =>  'panel4_text_box_setting',
    )));

    $wp_customize->add_setting('panel4_image_setting', array(
        'default'     =>  'none',
        'transport'   =>  'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'panel4_image', array(
      'label'         =>  __('Image', 'comic-portfolio'),
      'section'       =>  'panel4_settings',
      'settings'      =>  'panel4_image_setting',
    )));
  //};

/*
 *  Customizer Options for ALL pages
*/
$wp_customize->add_setting('logo_setting', array(
    'default'     =>  'none',
    'transport'   =>  'refresh',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
  'label'         =>  __( 'Logo Upload', 'comic-portfolio'),
  'description'   =>  __( 'Best image size is 250px by 250px '),
  'section'       =>  'title_tagline',
  'settings'      =>  'logo_setting',
)));
  };


  add_action('init', 'create_portfolio_post_type');
function create_portfolio_post_type(){

    set_post_thumbnail_size(300, 300);
  register_post_type('Portfolio',
    array(
      'labels'        =>  array(
      'name'          =>  __( 'Portfolio'),
      'singular_name' =>  __( 'Portfolios')
    ),
      'public'        =>  true,
      'has_archive'   =>  true,
      'taxonomies'    =>  array('category','post_tag'),
      'supports'      =>  array('custom-fields', 'editor', 'thumbnail', 'title', 'excerpt'),

)
);
};



 ?>
