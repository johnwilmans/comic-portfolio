<?php get_header(); ?>

  <div class="container small-size">


    <div class="row">
      <div class="third panel front-panel" id="panel-1">
        <img src="<?php echo get_theme_mod('panel1_image_setting')?>" />
        <div class="sleep sleep1">
              <p>
                <span class="bigz">Z</span>z<span class="bigz">Z</span>z
              </p>
            </div>
            <div class="sleep sleep2">
              <p>
                <span class="bigz">Z</span>z<span class="bigz">Z</span>z
              </p>
            </div>
            <div class="sleep sleep3">
              <p>
                <span class="bigz">Z</span>z<span class="bigz">Z</span>z
              </p>
            </div>

        <div class="gradient-box">
          <p class="comic-text">
            <?php echo get_theme_mod('panel1_gradient_text_setting'); ?>
          </p>
        </div><!-- gradient-box -->
        <div class="text-box">
        <p>
          <?php echo get_theme_mod('panel1_text_box_setting'); ?>
        </p></div><!-- text-box -->
      </div><!-- ID panel 1 -->
      <div class="half panel front-panel" id="panel-2">
        <img src="<?php echo get_theme_mod('panel2_image_setting')?>" />
        <div id="rocket">
              <img src="<?php echo get_theme_mod('panel2_animation_setting')?>" class="rocket-fly"/>
            </div>
        <div class="gradient-box">
          <p class="comic-text">
            <?php echo get_theme_mod('panel2_gradient_text_setting'); ?>
          </p>
        </div><!-- gradient-box -->
        <div class="text-box">
        <p>
          <?php echo get_theme_mod('panel2_text_box_setting'); ?>
        </p></div><!-- text-box -->
      </div><!-- ID panel 2-->
    </div><!-- row -->




    <div class="row">
      <div class="half panel front-panel" id="panel-3">
        <img src="<?php echo get_theme_mod('panel3_image_setting')?>" />

        <div class="gradient-box">
          <p class="comic-text">
            <?php echo get_theme_mod('panel3_gradient_text_setting'); ?>
          </p>
        </div><!-- gradient-box -->
        <div class="text-box">
        <p>
          <?php echo get_theme_mod('panel3_text_box_setting'); ?>
        </p></div><!-- text-box -->
      </div><!-- ID panel 3 -->
      <div class="third panel front-panel" id="panel-4">
        <img src="<?php echo get_theme_mod('panel4_image_setting')?>" />
        <div class="gradient-box">
          <p class="comic-text">
            <?php echo get_theme_mod('panel4_gradient_text_setting'); ?>
          </p>
        </div><!-- gradient-box -->
        <div class="text-box">
        <p>
          <?php echo get_theme_mod('panel4_text_box_setting'); ?>
        </p></div><!-- text-box -->
      </div><!-- ID panel 4-->
    </div><!-- row -->
  <aside class="sidebar" id="sidebar-home">
    <?php dynamic_sidebar('sidebar-home'); ?>
  </aside>
  </div><!-- container -->


    <?php get_footer(); ?>
