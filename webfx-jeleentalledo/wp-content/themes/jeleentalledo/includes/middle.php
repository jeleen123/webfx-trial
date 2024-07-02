<!-- Welcome section Start -->

<?php if( have_rows('welcome_section_contents') ): ?>
  <?php while( have_rows('welcome_section_contents') ): the_row(); ?>

      <?php if( get_row_layout() == 'welcome_section_top' ):
        // get Welcome section top container
        $welcome_h4_title = get_sub_field('welcome_h4_title');
        $welcome_main_title = get_sub_field('welcome_main_title');
        $welcome_description = get_sub_field('welcome_description');
        $welcome_button_link = get_sub_field('welcome_button_link');
        $welcome_button_link_title = get_sub_field('welcome_button_link_title'); 
        $welcome_team_image_title = get_sub_field('welcome_team_image_title'); 
        $welcome_team_image = get_sub_field('welcome_team_image'); 

      //  <?php echo $var;       
      ?>


  <div class="welcome-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-4 mobile-order2">
          <div class="welcome-box team-box">
            <div class="team-image">
              <img src="<?php echo $welcome_team_image; ?>" alt="Welcome" />
            </div>
            <div class="team-title">
              <?php echo $welcome_team_image_title; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-8">
          <div class="welcome-content">
            <h4 class="optinal-h4"><?php echo $welcome_h4_title; ?></h4>
            <h1><?php echo $welcome_main_title; ?></h1>
            <p><?php echo $welcome_description; ?></p>
            <a href="<?php echo $welcome_button_link; ?>" class="btn btn-primary"><?php echo $welcome_button_link_title; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
      <?php elseif( get_row_layout() == 'welcome_section_bottom' ): 
          // get header contents layout
          $service_small_title = get_sub_field('service_small_title');
          $service_main_title = get_sub_field('service_main_title');
          $service_main_content = get_sub_field('service_main_content');
          $service_button_link = get_sub_field('service_button_link');
          $service_button_link_title = get_sub_field('service_button_link_title');
      ?>

  <div class="home-services line-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="service-content">
            <h4 class="optinal-h4"><?php echo $service_small_title; ?></h4>
            <h2><?php echo $service_main_title; ?></h2>
            <p><?php echo $service_main_content; ?></p>
            <a href="<?php echo $service_button_link; ?>" class="btn btn-primary"><?php echo $service_button_link_title; ?></a>
          </div>
        </div>

      
        <div class="col-lg-6 ">
          
          <div class="d-none d-lg-block">
            
            <div class="service-owl owl-carousel owl-theme">
              <div class="item">
            
                <div class="row">
                  <!-- Owl carousel -->  
                   <?php elseif( get_row_layout() == 'services_carousel_container' ): 
                           while( have_rows('services_carousel_repeater') ) : the_row();
                                    $service_image  = get_sub_field('service_carousel_image');
                                    $service_title  = get_sub_field('service_carousel_title');
                                    $service_link  = get_sub_field('service_carousel_link');
                                    $service_link_title  = get_sub_field('service_carousel_link_title');
                    ?>  
                  <div class="col-md-6"><!-- box 1 -->
                    <div class="service-box">
                      <div class="service-image">
                        <img src="<?php echo $service_image; ?>" alt="Service" />
                      </div>
                      <div class="service-info">
                        <div class="service-inner">
                          <div class="service-icon comman-icon">
                            <span class="icon-dental"></span>
                          </div>
                          <div class="service-title"><?php echo $service_title; ?></div>
                          <a class="learn-more" href="<?php echo $service_image; ?>"><?php echo $service_link_title; ?><span
                              class="icon-arrow-right"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                   <?php endwhile; ?>
                </div>

              </div><!-- End of item -->

            </div><!-- End of service-owl -->
          </div>
          <div class="d-lg-none">
            <div class="service-owl owl-carousel owl-theme">
              <!-- Owl carousel -->  
                      <?php
                         while( have_rows('services_carousel_repeater') ) : the_row();
                                  $service_image  = get_sub_field('service_carousel_image');
                                  $service_title  = get_sub_field('service_carousel_title');
                                  $service_link  = get_sub_field('service_carousel_link');
                                  $service_link_title  = get_sub_field('service_carousel_link_title');
                       ?>  
              <div class="item">
                <div class="service-box"> <!-- Repeat box 1 -->
                  <div class="service-image">
                    <img src="<?php echo $service_image; ?>" alt="Service" />
                  </div>
                  <div class="service-info">
                    <div class="service-inner">
                      <div class="service-icon comman-icon">
                        <span class="icon-dental"></span>
                      </div>
                      <div class="service-title"><?php echo $service_title; ?></div>
                      <a class="learn-more" href="<?php echo $service_link; ?>"><?php echo $service_link_title; ?><span
                          class="icon-arrow-right"></span></a>
                    </div>
                  </div>
                </div>
              </div><!-- End of item -->
                <?php endwhile; ?>
            </div>          
          </div>
         
        </div><!-- End of col-lg-6 -->

      </div>
    </div>
  </div>

      <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<!-- Welcome section Start -->

<!-- Home Team Start -->
<?php if( have_rows('home_team_contents') ): ?>
  <?php while( have_rows('home_team_contents') ): the_row(); ?>

      <?php if( get_row_layout() == 'home_team_container' ):
        // get Home team container container
        $team_banner_image = get_sub_field('team_banner_image');
        $team_small_title = get_sub_field('team_small_title');
        $team_main_title = get_sub_field('team_main_title');
        $meet_the_team_link = get_sub_field('meet_the_team_link');
        $meet_the_team_cta = get_sub_field('meet_the_team_cta');

      //  <?php echo $var;       
      ?>

    <div class="home-team">
      <div class="team-banner">
        <div class="banner-image">
          <img src="<?php echo $team_banner_image;?>" alt="Team" />
        </div>
      </div>
      <div class="team-content">
        <div class="container">
          <div class="team-wrap">
              <h4 class="optinal-h4"><?php echo $team_small_title;?></h4>
              <h2><?php echo $team_main_title;?></h2>
            <div class="row">
              <?php while( have_rows('meet_the_team_repeater') ) : the_row();
                      $team_image  = get_sub_field('team_image');
                      $team_link  = get_sub_field('team_link');
                      $team_link_cta  = get_sub_field('team_link_cta');
                      $team_title  = get_sub_field('team_title');
               ?>  
              <div class="col-md-4">
                <div class="team-box">
                  <div class="team-image">
                    <img src="<?php echo $team_image;?>" alt="Team" />
                    <div class="team-hover">
                      <div class="team-h-inner">
                        <div class="comman-icon">
                          <span class="icon-cross-paw"></span>
                        </div>
                        <div class="more-div">
                          <a class="learn-more yellow-link" href="<?php echo $team_link;?>"
                            ><?php echo $team_link_cta;?> <span class="icon-arrow-right"></span
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="team-title"><?php echo $team_title;?></div>
                </div>
              </div>
                <?php endwhile; ?>
            </div>
            <div class="meet-button">
              <a href="<?php echo $meet_the_team_link;?>" class="btn btn-secondary"><?php echo $meet_the_team_cta;?></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<!-- Home Team End -->

<!-- Exotic Care Start -->
<?php if( have_rows('exotic_care_contents') ): ?>
  <?php while( have_rows('exotic_care_contents') ): the_row(); ?>

      <?php if( get_row_layout() == 'exotic_care_container' ):
        // get Home team container container
        $exotic_care_small_title = get_sub_field('exotic_care_small_title');
        $exotic_care_main_title = get_sub_field('exotic_care_main_title');
        $exotic_care_main_content = get_sub_field('exotic_care_main_content');
        $exotic_care_small_link = get_sub_field('exotic_care_small_link');
        $exotic_care_small_link_cta = get_sub_field('exotic_care_small_link_cta');
        $exotic_care_image_1 = get_sub_field('exotic_care_image_1');
        $exotic_care_image_1_title = get_sub_field('exotic_care_image_1_title');
        $exotic_care_image_2 = get_sub_field('exotic_care_image_2');
        $exotic_care_image_2_title = get_sub_field('exotic_care_image_2_title');

      //  <?php echo $var;       
      ?>

    <div class="exotic-care">
      <div class="container">
        <div class="exotic-wrap">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <h4 class="optinal-h4"><?php echo $exotic_care_small_title;?></h4>
              <h2><?php echo $exotic_care_main_title;?></h2>
              <p><?php echo $exotic_care_main_content;?></p>
              <a href="<?php echo $exotic_care_small_link;?>" class="btn btn-primary"
                ><?php echo $exotic_care_small_link_cta;?></a
              >
            </div>
            <div class="col-lg-5">
              <div class="exotic-images">
                <div class="exotic-image1 team-box">
                  <div class="team-image">
                    <img src="<?php echo $exotic_care_image_1;?>" alt="Exotic" />
                  </div>
                  <div class="team-title"><?php echo $exotic_care_image_1_title;?></div>
                </div>
                <div class="exotic-image2 team-box">
                  <div class="team-image">
                    <img src="<?php echo $exotic_care_image_2;?>" />
                  </div>
                  <div class="team-title"><?php echo $exotic_care_image_2_title;?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<!-- Exotic Care End -->

<!-- Fun Fact Start -->
<?php if( have_rows('fun_fact_contents') ): ?>
  <?php while( have_rows('fun_fact_contents') ): the_row(); ?>

      <?php if( get_row_layout() == 'fun_fact_container' ):
        // get Home team container container
        $small_title_1 = get_sub_field('small_title_1');
        $small_title_2 = get_sub_field('small_title_2');

      //  <?php echo $var;       
      ?>


    <div class="fun-fact line-bg">
      <div class="container">
        <div class="fun-friday">
          <?php echo $small_title_1;?>
          <span class="friday-label"><?php echo $small_title_2;?></span>
        </div>
        <div class="fun-fact-owl owl-carousel">
          <?php
               while( have_rows('fun_fact_repeater') ) : the_row();
                        $fun_image  = get_sub_field('fun_image');
                        $fun_content  = get_sub_field('fun_content');
                        $fun_link_cta  = get_sub_field('fun_link_cta');
             ?>  
          <div class="item">
            
            <div class="fun-image">
              <img src="<?php echo $fun_image;?>" />
              <a class="play-icon icon-youtube" href="javascript:void(0);"></a>
            </div>
            <div class="fun-content">
              <?php echo $fun_content;?>
              <a class="btn btn-primary" href="javascript:void(0);"
                ><?php echo $fun_link_cta;?></a
              >
            </div>
          </div>
            <?php endwhile; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<!-- Fun Fact End -->

<!-- Testi and Blog Start -->
<?php if( have_rows('testimonial_and_blog_contents') ): ?>
  <?php while( have_rows('testimonial_and_blog_contents') ): the_row(); ?>

      <?php if( get_row_layout() == 'testimonial_container' ):
          $testimonial_main_title = get_sub_field('testimonial_main_title');
          $testimonial_link = get_sub_field('testimonial_link');
          $testimonial_link_cta = get_sub_field('testimonial_link_cta');

      //  <?php echo $var;       
      ?>

    <div class="testi-blog">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="testimonials">
              <div class="comman-icon">
                <span class="icon-quotes"></span>
              </div>
              <h2><?php echo $testimonial_main_title;?></h2>
              <a class="btn btn-primary" href="<?php echo $testimonial_link;?>"
                ><?php echo $testimonial_link_cta;?></a
              >
              <div class="testi-owl owl-carousel">
                  <?php while( have_rows('testimonial_repeater') ) : the_row();
                        $tetimonial_content  = get_sub_field('tetimonial_content');
                        $testimonial_author  = get_sub_field('testimonial_author');
                   ?>  
                <div class="item">
                    <?php echo $tetimonial_content;?>
                  <span><?php echo $testimonial_author;?></span>
                </div>
                  <?php endwhile; ?>
              </div>
            </div>
          </div>

          <?php elseif( get_row_layout() == 'blog_container' ):
              $blog_main_title = get_sub_field('blog_main_title');
              $blog_main_link = get_sub_field('blog_main_link');
              $blog_main_link_cta = get_sub_field('blog_main_link_cta');
              $blog_image = get_sub_field('blog_image');
              $blog_inner_title = get_sub_field('blog_inner_title');
              $blog_inner_conent = get_sub_field('blog_inner_conent');
              $blog_inner_link = get_sub_field('blog_inner_link');
              $blog_inner_link_cta = get_sub_field('blog_inner_link_cta');
          ?>
          <div class="col-lg-6">
            <div class="home-blog">
              <div class="blog-title">
                <h4 class="optinal-h4"><?php echo $blog_main_title;?></h4>
                <a class="btn btn-secondary" href="<?php echo $blog_main_link;?>"
                  ><?php echo $blog_main_link_cta;?>s</a
                >
              </div>
              <div class="blog-main">
                <div class="blog-image">
                  <img src="<?php echo $blog_image;?>" />
                </div>
                <div class="blog-content">
                  <div class="blog-inner">
                    <h4><?php echo $blog_inner_title;?></h4>
                    <?php echo $blog_inner_conent;?>
                    <div class="readmore">
                      <a class="btn btn-primary" href="<?php echo $blog_inner_link;?>"
                        ><?php echo $blog_inner_link_cta;?></a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
<!-- Testi and Blog End -->

