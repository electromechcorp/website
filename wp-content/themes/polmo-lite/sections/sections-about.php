<?php

$jeweltheme_polmo_about_us_title = get_theme_mod('jeweltheme_polmo_about_us_title',__('<span>We</span> are Polmo Limited Creative Web Agency','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_desc = get_theme_mod('jeweltheme_polmo_about_us_desc',__('There is so considerable a body of knowledge bearing upon the similarities and dissimilarities of these two entities that it will be well to compare them. After such comparison one will be better able to judge of the propriety of assuming them to be subject to identical laws','jeweltheme_polmo'));

$jeweltheme_polmo_about_us_expertise_title = get_theme_mod('jeweltheme_polmo_about_us_expertise_title',__('<span>Our</span> areas of expertise','jeweltheme_polmo'));

//Progress 1
$jeweltheme_polmo_about_us_progress_title_1 = get_theme_mod('jeweltheme_polmo_about_us_progress_title_1',__('WordPress Plugin Dev','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_progress_percantage_1 = get_theme_mod('jeweltheme_polmo_about_us_progress_percantage_1',__('89','jeweltheme_polmo'));

//Progress 2
$jeweltheme_polmo_about_us_progress_title_2 = get_theme_mod('jeweltheme_polmo_about_us_progress_title_2',__('Web Design','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_progress_percantage_2 = get_theme_mod('jeweltheme_polmo_about_us_progress_percantage_2',__('70','jeweltheme_polmo'));

//Progress 3
$jeweltheme_polmo_about_us_progress_title_3 = get_theme_mod('jeweltheme_polmo_about_us_progress_title_3',__('PHP Programming','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_progress_percantage_3 = get_theme_mod('jeweltheme_polmo_about_us_progress_percantage_3',__('60','jeweltheme_polmo'));

// Button
$jeweltheme_polmo_about_us_button_text = get_theme_mod('jeweltheme_polmo_about_us_button_text',__('Learn More','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_button_url = get_theme_mod('jeweltheme_polmo_about_us_button_url',__('#','jeweltheme_polmo'));

// Counter 1
$jeweltheme_polmo_about_us_counter_icon_1 = get_theme_mod('jeweltheme_polmo_about_us_counter_icon_1',__('fa-heart-o','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_counter_number_1 = get_theme_mod('jeweltheme_polmo_about_us_counter_number_1',__('8,236','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_counter_text_1 = get_theme_mod('jeweltheme_polmo_about_us_counter_text_1',__('Love Bites','jeweltheme_polmo'));

// Counter 2
$jeweltheme_polmo_about_us_counter_icon_2 = get_theme_mod('jeweltheme_polmo_about_us_counter_icon_2',__('fa-wifi','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_counter_number_2 = get_theme_mod('jeweltheme_polmo_about_us_counter_number_2',__('1,203','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_counter_text_2 = get_theme_mod('jeweltheme_polmo_about_us_counter_text_2',__('Customer Centers','jeweltheme_polmo'));

// Counter 3
$jeweltheme_polmo_about_us_counter_icon_3 = get_theme_mod('jeweltheme_polmo_about_us_counter_icon_3',__('fa-map-marker','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_counter_number_3 = get_theme_mod('jeweltheme_polmo_about_us_counter_number_3',__('3,679','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_counter_text_3 = get_theme_mod('jeweltheme_polmo_about_us_counter_text_3',__('Love Bites','jeweltheme_polmo'));

// Counter 4
$jeweltheme_polmo_about_us_counter_icon_4 = get_theme_mod('jeweltheme_polmo_about_us_counter_icon_4',__('fa-cogs','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_counter_number_4 = get_theme_mod('jeweltheme_polmo_about_us_counter_number_4',__('2,310','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_counter_text_4 = get_theme_mod('jeweltheme_polmo_about_us_counter_text_4',__('Mechanical Cogs','jeweltheme_polmo'));

// Work With Us
$jeweltheme_polmo_about_us_work_with_us_image = get_theme_mod('jeweltheme_polmo_about_us_work_with_us_image', get_template_directory_uri() . '/images/tab.jpg');
$jeweltheme_polmo_about_us_work_with_us_title = get_theme_mod('jeweltheme_polmo_about_us_work_with_us_title',__('<span>Why</span> Work With Us','jeweltheme_polmo'));
$jeweltheme_polmo_about_us_work_with_us_desc = get_theme_mod('jeweltheme_polmo_about_us_work_with_us_desc',__('One part of the ether is precisely like any other part everywhere and always, and there are no such distinctions in it as correspond with the elemental forms of matter.           
              There is an ultimate particle of each one of the elements which is practically absolute and known as an atom. The atom retains its identity through all combinations and processes. It may be here or there, move fast or slow, but its atomic form persists              <br> <br>
              One might infer already that if the ether were structureless, physical laws operative upon such material substances as atoms could not be applicable to it, and so indeed all the evidence we have shows that gravitation is not one of its properties.','jeweltheme_polmo'));


?>

  <section id="about" class="about">
    <div class="about-top">
      <div class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="know-about-us wow animated fadeInLeft" data-wow-delay=".5s">
                <?php if ( !empty($jeweltheme_polmo_about_us_title) && !empty($jeweltheme_polmo_about_us_desc) && !empty($jeweltheme_polmo_about_us_button_text) && !empty($jeweltheme_polmo_about_us_button_url) ){ ?>
                  <h2 class="section-title">
                    <?php echo $jeweltheme_polmo_about_us_title; ?>
                  </h2><!-- /.section-title -->
                  <p class="description">
                    <?php echo $jeweltheme_polmo_about_us_desc; ?>
                  </p><!-- /.description -->
                  <div class="btn-container">
                    <a href="<?php echo esc_url( $jeweltheme_polmo_about_us_button_url ); ?>" class="btn read-more">
                      <?php echo $jeweltheme_polmo_about_us_button_text; ?>
                    </a>
                  </div><!-- /.btn-container -->
                <?php } ?>
              </div><!-- /.know-about-us -->
            </div>

            <div class="col-md-5">
              <div class="our-skills wow animated fadeInRight" data-wow-delay=".5s">
                <?php if ( !empty($jeweltheme_polmo_about_us_expertise_title) 
                  && !empty($jeweltheme_polmo_about_us_progress_title_1) && !empty($jeweltheme_polmo_about_us_progress_percantage_1) 
                  && !empty($jeweltheme_polmo_about_us_progress_title_2) && !empty($jeweltheme_polmo_about_us_progress_percantage_2) 
                  && !empty($jeweltheme_polmo_about_us_progress_title_3) && !empty($jeweltheme_polmo_about_us_progress_percantage_3) 
                   ){ ?>
                  <h2 class="section-title">
                    <?php echo $jeweltheme_polmo_about_us_expertise_title; ?>
                  </h2><!-- /.section-title -->
                  <div class="skill-bars">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $jeweltheme_polmo_about_us_progress_percantage_1; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $jeweltheme_polmo_about_us_progress_percantage_1; ?>%;">
                        <span class="skill-name">
                          <?php echo $jeweltheme_polmo_about_us_progress_title_1; ?>
                        </span><?php echo $jeweltheme_polmo_about_us_progress_percantage_1; ?>%
                      </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $jeweltheme_polmo_about_us_progress_percantage_2; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $jeweltheme_polmo_about_us_progress_percantage_2; ?>%;">
                        <span class="skill-name">
                          <?php echo $jeweltheme_polmo_about_us_progress_title_2; ?>
                        </span><?php echo $jeweltheme_polmo_about_us_progress_percantage_2; ?>%
                      </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $jeweltheme_polmo_about_us_progress_percantage_3; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $jeweltheme_polmo_about_us_progress_percantage_3; ?>%;">
                        <span class="skill-name">
                          <?php echo $jeweltheme_polmo_about_us_progress_title_3; ?>
                        </span><?php echo $jeweltheme_polmo_about_us_progress_percantage_3; ?>%
                      </div>
                    </div>
                  </div><!-- /.skill-bars -->
                <?php } ?>
              </div><!-- /.our-skills -->
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.about-top -->

    <div class="about-middle">
      <div class="about-breifing">
        <div class="col-md-3 col-sm-6">
          <div class="item media wow animated fadeInLeft" data-wow-delay=".35s">
            <div class="section-padding">
              <div class="item-no media-left">
                <span class="count text-right">
                  <?php echo __( "01", "jeweltheme_polmo" ); ?>
                </span>
              </div><!-- /.item-no -->
              <div class="item-details media-body text-center">
                <div class="item-icon">
                  <i class="fa <?php echo $jeweltheme_polmo_about_us_counter_icon_1; ?>"></i>
                </div><!-- /.item-icon -->
                <div class="countdown">
                  <span class="count-number counter">
                    <?php echo $jeweltheme_polmo_about_us_counter_number_1; ?>
                  </span>
                </div><!-- /.coundown -->
                <span class="about-item">
                  <?php echo $jeweltheme_polmo_about_us_counter_text_1; ?>
                </span>
              </div><!-- /.item-details -->
            </div><!-- /.section-padding -->
          </div><!-- /.item -->
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="item media wow animated fadeInLeft" data-wow-delay=".55s">
            <div class="section-padding">
              <div class="item-no media-left">
                <span class="count text-right">
                  <?php echo __( "02", "jeweltheme_polmo" ); ?>
                </span>
              </div><!-- /.item-no -->
              <div class="item-details media-body text-center">
                <div class="item-icon">
                  <i class="fa <?php echo $jeweltheme_polmo_about_us_counter_icon_2; ?>"></i>
                </div><!-- /.item-icon -->
                <div class="countdown">
                  <span class="count-number counter">
                    <?php echo $jeweltheme_polmo_about_us_counter_number_2; ?>
                  </span>
                </div><!-- /.coundown -->
                <span class="about-item">
                  <?php echo $jeweltheme_polmo_about_us_counter_text_2; ?>
                </span>
              </div><!-- /.item-details -->
            </div><!-- /.section-padding -->
          </div><!-- /.item -->
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="item media wow animated fadeInLeft" data-wow-delay=".75s">
            <div class="section-padding">
              <div class="item-no media-left">
                <span class="count text-right">
                  <?php echo __( "03", "jeweltheme_polmo" ); ?>
                </span>
              </div><!-- /.item-no -->
              <div class="item-details media-body text-center">
                <div class="item-icon">
                  <i class="fa <?php echo $jeweltheme_polmo_about_us_counter_icon_3; ?>"></i>
                </div><!-- /.item-icon -->
                <div class="countdown">
                  <span class="count-number counter">
                    <?php echo $jeweltheme_polmo_about_us_counter_number_3; ?>
                  </span>
                </div><!-- /.coundown -->
                <span class="about-item">
                  <?php echo $jeweltheme_polmo_about_us_counter_text_3; ?>
                </span>
              </div><!-- /.item-details -->
            </div><!-- /.section-padding -->
          </div><!-- /.item -->
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="item media wow animated fadeInLeft" data-wow-delay=".95s">
            <div class="section-padding">
              <div class="item-no media-left">
                <span class="count text-right">
                  <?php echo __( "04", "jeweltheme_polmo" ); ?>
                </span>
              </div><!-- /.item-no -->
              <div class="item-details media-body text-center">
                <div class="item-icon">
                  <i class="fa <?php echo $jeweltheme_polmo_about_us_counter_icon_4; ?>"></i>
                </div><!-- /.item-icon -->
                <div class="countdown">
                  <span class="count-number counter">
                    <?php echo $jeweltheme_polmo_about_us_counter_number_4; ?>
                  </span>
                </div><!-- /.coundown -->
                <span class="about-item">
                  <?php echo $jeweltheme_polmo_about_us_counter_text_4; ?>
                </span>
              </div><!-- /.item-details -->
            </div><!-- /.section-padding -->
          </div><!-- /.item -->
        </div>
      </div><!-- /.about-briefing -->
    </div><!-- /.about-middle -->

    <div class="about-bottom">
      <div class="section-padding">
        <div class="col-sm-6">
          <div class="tab-image wow animated fadeInLeft" data-wow-delay=".5s">
            <img src="<?php echo esc_url( $jeweltheme_polmo_about_us_work_with_us_image ); ?>" alt="Tab Image">
          </div><!-- /.tab-image -->
        </div>
        <div class="col-sm-6">
          <div class="about-work wow animated fadeInRight" data-wow-delay=".5s">
            <h2 class="section-title">
              <?php echo $jeweltheme_polmo_about_us_work_with_us_title; ?>
            </h2><!-- /.section-title -->
            <p class="description">
              <?php echo $jeweltheme_polmo_about_us_work_with_us_desc; ?>
            </p><!-- /.description -->
          </div><!-- /.about-work -->
        </div>
      </div><!-- /.section-padding -->
    </div><!-- /.about-bottom -->
  </section><!-- /#about -->