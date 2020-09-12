<?php
/**
 * Template Name: Home Template
 */

$image_path = get_template_directory_uri() . "/dist/images";
?>

<?php if( have_rows('english_title') ): ?>
<?php while( have_rows('english_title') ): the_row();
  $title = get_sub_field('title');
  $sub_title = get_sub_field('sub_title');
  $button_signup = get_sub_field('button-signup');
  $button_demo = get_sub_field('button-demo');
  $title_of_best_cloud_software = get_sub_field('title_of_best_cloud_software');
  $title_of_meet_cloudmeb_community = get_sub_field('title_of_meet_cloudmeb_community');
  $title_of_knowledge = get_sub_field('title_of_knowledge');
  $subtitle_of_knowledge = get_sub_field('subtitle_of_knowledge');
  $button_of_knowledge_explorer = get_sub_field('button_of_knowledge_explorer');
  $title_of_support_journey = get_sub_field('title_of_support_journey');
  $title_of_get_to_know = get_sub_field('title_of_get_to_know');
  $title_of_how_platform_works = get_sub_field('title_of_how_platform_works');
  $title_of_what_our_client_say = get_sub_field('title_of_what_our_client_say');
?>
    <!-- Introduction -->
    <div class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="intro__lgtitle">
              <?= $title ?>
            </div>
            <div class="intro__mdtitle">
              <?= $sub_title ?>
            </div>
            <div class="intro__btngroup">
              <a class="intro__btn pitch" href="https://account.cloudmeb.com/register"><?= $button_signup ?></a>
              <button class="intro__btn"><?= $button_demo ?></button>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 text-center">
            <img src="<?=$image_path?>/homepage/intro/img_msg_sent.png" alt="" class="intro__banner"/>
          </div>
        </div>
      </div>
    </div>

    <!-- Company -->
    <div class="company">
      <div class="container">
        <div class="company__title">
          <?= $title_of_best_cloud_software ?>
        </div>
        <div class="wrapper_company">
          <img class="image_border" src="<?=$image_path?>/homepage/company/img_company_ringcentral.svg" alt="" />
          <img class="image_shopify" src="<?=$image_path?>/homepage/company/img_company_shopify.svg" alt="" />
          <img class="stripe_image" src="<?=$image_path?>/homepage/company/img_company_stripe.svg" alt="" />
          <img class="image_border" src="<?=$image_path?>/homepage/company/img_company_receiptbank.svg" alt="" />
          <img class="image_border" src="<?=$image_path?>/homepage/company/img_company_xero.svg" alt="" />
          <img class="image_border wagepoint_img" src="<?=$image_path?>/homepage/company/img_company_wagepoint.svg" alt="" />
          <img class="image_shopify" src="<?=$image_path?>/homepage/company/img_company_fathom.svg" alt="" />
          <img class="image_vend" src="<?=$image_path?>/homepage/company/img_company_vend.svg" alt="" />
          <img class="image_border" src="<?=$image_path?>/homepage/company/img_company_approvalmax.svg" alt="" />
        </div>
      </div>
    </div>

    <!-- Community -->
    <div class="community">
      <div class="container">
        <div class="community__lgtitle">
          <?= $title_of_meet_cloudmeb_community ?>
        </div>
        <div class="row tablet_hide">
          <div class="col-lg-4 col-md-12 text-center">
             <div class="three_boxes"> 
            <img src="<?=$image_path?>/homepage/community/img_bookkeepers.png" alt="" class="community__img"/>
            <div class="community__mdtitle">
              Virtual Bookkeepers
            </div>
            <div class="community__smtitle">
              We seamlessly convert your books to the cloud and manage them there, keeping your time and focus on your business.
            </div>
               </div>
          </div>
          <div class="col-lg-4 col-md-12 text-center">
                           <div class="three_boxes"> 
            <img src="<?=$image_path?>/homepage/community/img_accountant.png" alt="" class="community__img"/>
            <div class="community__mdtitle">
              Accountants
            </div>
            <div class="community__smtitle">
              We save your business money it doesn’t need to lose by ensuring you never get penalized for missing a tax deadline.
            </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-12 text-center">
                           <div class="three_boxes"> 
            <img src="<?=$image_path?>/homepage/community/img_cloudspecialist.png" alt="" class="community__img"/>
            <div class="community__mdtitle">
              Cloud Solution Specialists
            </div>
            <div class="community__smtitle">
              We design a complete, bug-free solution using proven tools and add-ons to serve your business’s pressing financial needs.
            </div>
          </div>
          </div>
        </div>
        
        
        
        
             <div class="row community_small" style="display: none;">
          <div class="col-md-4">
            <img src="<?=$image_path?>/homepage/community/img_bookkeepers.png" alt="" class="community__img"/>
            </div>
            <div class="col-md-8">
            <div class="community__mdtitle">
              Virtual Bookkeepers
            </div>
            <div class="community__smtitle">
              We seamlessly convert your books to the cloud and manage them there, keeping your time and focus on your business.
            </div>
               </div>
          <div class="col-lg-4">
            <img src="<?=$image_path?>/homepage/community/img_accountant.png" alt="" class="community__img"/>
            </div>
             <div class="col-md-8">
            <div class="community__mdtitle">
              Accountants
            </div>
            <div class="community__smtitle">
              We save your business money it doesn’t need to lose by ensuring you never get penalized for missing a tax deadline.
            </div>
          </div>
          <div class="col-lg-4">
            <img src="<?=$image_path?>/homepage/community/img_cloudspecialist.png" alt="" class="community__img"/>
            </div>
            <div class="col-md-8">
            <div class="community__mdtitle">
              Cloud Solution Specialists
            </div>
            <div class="community__smtitle">
              We design a complete, bug-free solution using proven tools and add-ons to serve your business’s pressing financial needs.
            </div>
          </div>
        </div>
        
        
        
        
      </div>
    </div>

    <!-- Knowledge -->
    <div class="knowledge">
      <div class="container">
        <div class="knowledge__lgtitle">
          <?= $title_of_knowledge ?>
        </div>
        <div class="knowledge__mdtitle">
          <?= $subtitle_of_knowledge ?>
        </div>
        
        
        <div class="knowledge__content row only_small">
          <div class="col-md-7">
         
            <img src="<?=$image_path?>/homepage/knowledge/img_education.png" class="knowledge_image" alt="" />
                <div class="custom_section">
          <button class="knowledge_btn"><?= $button_of_knowledge_explorer ?></button>
        </div>
          </div>
          <div class="col-md-5">
             <div class="knowledge__item">
              <div class="knowledge__item-header">
                Learn from our mentors
              </div>
              <div class="knowledge__item-content">
                Online access to classes for you gain valuable knowledge on running a business
              </div>
            </div>
              <div class="knowledge__item">
              <div class="knowledge__item-header">
                Understand your financials
              </div>
              <div class="knowledge__item-content">
                We answer all the questions you’ve always wanted to ask
              </div>
            </div>
             <div class="knowledge__item">
              <div class="knowledge__item-header">
                Start your business on the right foot
              </div>
              <div class="knowledge__item-content">
                Step by step articles on how to set up your business in the cloud
              </div>
            </div>
             <div class="knowledge__item">
              <div class="knowledge__item-header">
                Mental Health
              </div>
              <div class="knowledge__item-content">
                Learn about how mindfulness and positivity can make a difference
              </div>
            </div>
        </div> 
        </div>

        
        
        <div class="knowledge__content row display_none_showsmall">
          <div class="col-md-4">
            <div class="knowledge__item">
              <div class="knowledge__item-header">
                Learn from our mentors
              </div>
              <div class="knowledge__item-content">
                Online access to classes for you gain valuable knowledge on running a business
              </div>
            </div>
            <div class="knowledge__item">
              <div class="knowledge__item-header">
                Start your business on the right foot
              </div>
              <div class="knowledge__item-content">
                Step by step articles on how to set up your business in the cloud
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <img src="<?=$image_path?>/homepage/knowledge/img_education.png" class="knowledge_image" alt="" />
          </div>
          <div class="col-md-4">
            <div class="knowledge__item">
              <div class="knowledge__item-header">
                Understand your financials
              </div>
              <div class="knowledge__item-content">
                We answer all the questions you’ve always wanted to ask
              </div>
            </div>
            <div class="knowledge__item">
              <div class="knowledge__item-header">
                Mental Health
              </div>
              <div class="knowledge__item-content">
                Learn about how mindfulness and positivity can make a difference
              </div>
            </div>
          </div>
        </div>

        <div class="knowledge__content__sm ">
          <img src="<?=$image_path?>/homepage/knowledge/img_education.png" class="knowledge_image" alt="" />
          <div id="knowledge__carousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
              <div class="knowledge__item carousel-item active">
                <div class="knowledge__item-header">
                  Learn from our mentors
                </div>
                <div class="knowledge__item-content">
                  Online access to classes for you gain valuable knowledge on running a business
                </div>
              </div>
              <div class="knowledge__item carousel-item">
                <div class="knowledge__item-header">
                  Start your business on the right foot
                </div>
                <div class="knowledge__item-content">
                  Step by step articles on how to set up your business in the cloud
                </div>
              </div>
              <div class="knowledge__item carousel-item">
                <div class="knowledge__item-header">
                  Understand your financials
                </div>
                <div class="knowledge__item-content">
                  We answer all the questions you’ve always wanted to ask
                </div>
              </div>
              <div class="knowledge__item carousel-item">
                <div class="knowledge__item-header">
                  Mental Health
                </div>
                <div class="knowledge__item-content">
                  Learn about how mindfulness and positivity can make a difference
                </div>
              </div>
            </div>

            <ul class="carousel-indicators">
              <li data-target="#knowledge__carousel" data-slide-to="0" class="active"></li>
              <li data-target="#knowledge__carousel" data-slide-to="1"></li>
              <li data-target="#knowledge__carousel" data-slide-to="2"></li>
              <li data-target="#knowledge__carousel" data-slide-to="3"></li>
            </ul>

          </div>
        </div>
        <div class="text-center display_none_showsmall">
          <button class="knowledge_btn"><?= $button_of_knowledge_explorer ?></button>
        </div>
      </div>
    </div>

    <!-- Support -->
    <div class="support">
      <div class="container">
        <div class="support__lgtitle">
          <?= $title_of_support_journey ?>
        </div>
        <div class="support__content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12 support__imagewrapper">
              <img src="<?=$image_path?>/homepage/support/img_location.png" alt="" class="support__image"/>
            </div>
            <div class="support_list col-lg-3 col-md-6 col-xs-12">
              <div class="support__mdtitle">
                Startup Stage
              </div>
              <ul>
                <li class="support__smtitle">
                  <a>Incorporation Services <span>></span></a>
                </li>
                <li class="support__smtitle">
                 <a> Cloud Solution Design <span>></span></a>
                </li>
                <li class="support__smtitle">
                  <a>Process Workflows <span>></span></a>
                </li>
              </ul>
            </div>
            <div class="support_list col-lg-3 col-md-6 col-xs-12">
              <div class="support__mdtitle">
                Optimization Stage
              </div>
              <ul>
                <li class="support__smtitle">
                  <a>Data Conversion <span>></span></a>
                </li>
                <li class="support__smtitle">
                  <a>Catch-Up Work <span>></span></a>
                </li>
                <li class="support__smtitle">
                 <a> Cloud Integrations <span>></span></a>
                </li>
              </ul>
            </div>
            <div class="support_list col-lg-3 col-md-6 col-xs-12">
              <div class="support__mdtitle">
                Growth Stage
              </div>
              <ul>
                <li class="support__smtitle">
                  <a>Monthly Bookkeeping <span>></span></a>
                </li>
                <li class="support__smtitle">
                 <a> Managed Payroll <span>></span></a>
                </li>
                <li class="support__smtitle">
                  <a>Yearly Tax Filings <span>></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Platform -->
    <div class="platform">
      <div class="container">
        <div class="platform__lgtitle">
          <?= $title_of_get_to_know ?>
        </div>
        <div class="row">
          <div class="platform__category col-lg-3 col-md-12">
            <ul class="platform__category-wrapper">
              <li class="platform__category-item active">
                <div class="platform__mdtitle">
                  Education
                </div>
                <div class="platform__smtitle">
                  Access to exclusive knowledge base for startups and entrepreneurs
                </div>
              </li>
              <li class="platform__category-item">
                <div class="platform__mdtitle">
                  Products & Services
                </div>
                <div class="platform__smtitle">
                  Design a cloud solution that fits your business’s needs
                </div>
              </li>
              <li class="platform__category-item">
                <div class="platform__mdtitle">
                  TeamWork
                </div>
                <div class="platform__smtitle">
                  Share data with your dedicated Cloudmeb team
                </div>
              </li>
              <li class="platform__category-item">
                <div class="platform__mdtitle">
                  Special Offers
                </div>
                <div class="platform__smtitle">
                  Save money on software you use with our partner discounts
                </div>
              </li>
              <li class="platform__category-item last">
                <div class="platform__mdtitle">
                  Help
                </div>
                <div class="platform__smtitle">
                  Get the human help you need
                </div>
              </li>
            </ul>
          </div>
          <div class="platform__image-wrapper col-lg-9 col-md-12">
            <img src="<?=$image_path?>/homepage/platform/img_screenshot.png" alt="" class="platform__image"/>
          </div>
          <div id="platform__carousel" class="platform__category-sm col-12 carousel slide" data-ride="carousel">

            <div class="d-flex justify-content-between align-items-center">
              <a class="carousel-control-prev" href="#platform__carousel" data-slide="prev">
                <img src="<?=$image_path?>/homepage/platform/carousel_control_prev.png" alt="">
              </a>
              <div class="carousel-inner">
                <div class="platform__category-item carousel-item active">
                  <div class="platform__mdtitle">
                    Education
                  </div>
                  <div class="platform__smtitle">
                    Access to exclusive knowledge base for startups and entrepreneurs
                  </div>
                </div>
                <div class="platform__category-item carousel-item">
                  <div class="platform__mdtitle">
                    Products & Services
                  </div>
                  <div class="platform__smtitle">
                    Design a cloud solution that fits your business’s needs
                  </div>
                </div>
                <div class="platform__category-item carousel-item">
                  <div class="platform__mdtitle">
                    TeamWork
                  </div>
                  <div class="platform__smtitle">
                    Share data with your dedicated Cloudmeb team
                  </div>
                </div>
                <div class="platform__category-item carousel-item">
                  <div class="platform__mdtitle">
                    Special Offers
                  </div>
                  <div class="platform__smtitle">
                    Save money on software you use with our partner discounts
                  </div>
                </div>
                <div class="platform__category-item carousel-item">
                  <div class="platform__mdtitle">
                    Help
                  </div>
                  <div class="platform__smtitle">
                    Get the human help you need
                  </div>
                </div>
              </div>
              <a class="carousel-control-next" href="#platform__carousel" data-slide="next">
                <img src="<?=$image_path?>/homepage/platform/carousel_control_next.png" alt="">
              </a>
            </div>

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#platform__carousel" data-slide-to="0" class="active"></li>
              <li data-target="#platform__carousel" data-slide-to="1"></li>
              <li data-target="#platform__carousel" data-slide-to="2"></li>
              <li data-target="#platform__carousel" data-slide-to="3"></li>
              <li data-target="#platform__carousel" data-slide-to="4"></li>
            </ul>

          </div>
        </div>
      </div>
    </div>

    <!-- How it works(workflow) -->
    <div class="workflow">
      <div class="container">
        <div class="workflow__lgtitle">
          <?= $title_of_how_platform_works ?>
        </div>
        <div class="workflow__content row">
          <div class="col-sm">
            <div class="workflow__item">
              <div class="workflow__mdtitle">
                <div class="workflow__item-img">
                  <img src="<?=$image_path?>/homepage/workflow/icon_settings.svg" alt=""/>
                </div>
                <span>Build</span>
              </div>
              <div class="workflow__smtitle">
                Our catalogue of top business apps offers endless compatibility options to match your company’s process. Simply login and assemble.
              </div>
            </div>
          </div>
          <img src="<?=$image_path?>/homepage/workflow/icon_arrow.svg" alt="" class="workflow__arrow"/>
          <div class="col-sm">
            <div class="workflow__item">
              <div class="workflow__mdtitle">
                <div class="workflow__item-img">
                  <img src="<?=$image_path?>/homepage/workflow/icon_setup.svg" alt=""/>
                </div>
                <span>Setup</span>
              </div>
              <div class="workflow__smtitle">
                Our community of certified professionals helps you securely reformat, clean up, and upload your data to your new cloud system.
              </div>
            </div>
          </div>
          <img src="<?=$image_path?>/homepage/workflow/icon_arrow.svg" alt="" class="workflow__arrow"/>
          <div class="col-sm">
            <div class="workflow__item">
              <div class="workflow__mdtitle">
                <div class="workflow__item-img">
                  <img src="<?=$image_path?>/homepage/workflow/icon_empower.svg" alt=""/>
                </div>
                <span>Empower</span>
              </div>
              <div class="workflow__smtitle">
                Start gaining valuable insights on your business financials from real-time bookkeeping and unparalleled visibility on any device.
              </div>
            </div>
          </div>
        </div>

        <div id="workflow__carousel" class="workflow__content-sm carousel slide" data-ride="carousel">

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="workflow__item carousel-item active">
              <div class="workflow__mdtitle">
                <div class="workflow__item-img">
                  <img src="<?=$image_path?>/homepage/workflow/icon_settings.svg" alt=""/>
                </div>
                <span>Build</span>
              </div>
              <div class="workflow__smtitle">
                Our catalogue of top business apps offers endless compatibility options to match your company’s process. Simply login and assemble.
              </div>
            </div>
            <div class="workflow__item carousel-item">
              <div class="workflow__mdtitle">
                <div class="workflow__item-img">
                  <img src="<?=$image_path?>/homepage/workflow/icon_setup.svg" alt=""/>
                </div>
                <span>Setup</span>
              </div>
              <div class="workflow__smtitle">
                Our community of certified professionals helps you securely reformat, clean up, and upload your data to your new cloud system.
              </div>
            </div>
            <div class="workflow__item carousel-item">
              <div class="workflow__mdtitle">
                <div class="workflow__item-img">
                  <img src="<?=$image_path?>/homepage/workflow/icon_empower.svg" alt=""/>
                </div>
                <span>Empower</span>
              </div>
              <div class="workflow__smtitle">
                Start gaining valuable insights on your business financials from real-time bookkeeping and unparalleled visibility on any device.
              </div>
            </div>
          </div>

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#workflow__carousel" data-slide-to="0" class="active"></li>
            <li data-target="#workflow__carousel" data-slide-to="1"></li>
            <li data-target="#workflow__carousel" data-slide-to="2"></li>
          </ul>

        </div>
      </div>
    </div>

    <?php
      $_posts = new WP_Query(array(
        'post_type' => 'testimonial',
        'posts_per_page' => 50,
        'paged' => 1
      ));
      if ($_posts->have_posts()):
    ?>
    <!-- Clients -->
    <div class="clients">
      <div class="container">
        <div class="clients__lgtitle">
          <?= $title_of_what_our_client_say ?>
        </div>
          <div class="clients__content carousel">
            <div class="clients__feedback" id="clients__feedback">
              <?php
              while ($_posts->have_posts()) : $_posts->the_post();
              $testi_profile_image = get_field('profile_image', get_the_ID());

              if( have_rows('english_version_testimonial') ):
              while( have_rows('english_version_testimonial') ): the_row();
                  $testi_description = get_sub_field('description');
                  $testi_full_name = get_sub_field('full_name');
                  $testi_company = get_sub_field('company');
                  $testi_role = get_sub_field('role');
              ?>
                <div class="item">
                  <div class="clients__feedback-item">
                    <?= $testi_description ?>
                  </div>
                  <div class="clients__feedback-writter">
                    <img src="<?= $testi_profile_image ?>" alt="" class="clients__feedback-img"/>
                    <div class="clients__info">
                      <div class="clients__mdtitle">
                        <?= $testi_full_name ?>
                      </div>
                      <div class="clients__position">
                        <span><?= $testi_company ?></span>
                        <span>·</span>
                        <span><?= $testi_role ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?>
              <?php endwhile; ?>
            </div>
            <div class="overlap-wrapper">
              <div class="overlap"></div>
              <div class="overlap__active"></div>
              <div class="overlap"></div>
            </div>
          </div>
          <div id="clients__carousel" class="clients__content-sm carousel slide" data-ride="">
            <!-- The slideshow -->
            <div class="carousel-inner">
              <?php
              $index_of_clients = 0;
              while ($_posts->have_posts()) : $_posts->the_post();
              $testi_profile_image = get_field('profile_image', get_the_ID());

              if( have_rows('english_version_testimonial') ):
              while( have_rows('english_version_testimonial') ): the_row();
              $testi_description = get_sub_field('description');
              $testi_full_name = get_sub_field('full_name');
              $testi_company = get_sub_field('company');
              $testi_role = get_sub_field('role');
              ?>
                  <div class="carousel-item <?= $index_of_clients === 0 ? 'active': '' ?>">
                    <div class="clients__feedback-item">
                      <?= $testi_description ?>
                    </div>
                    <div class="clients__feedback-writter">
                      <img src="<?= $testi_profile_image ?>" alt="" class="clients__feedback-img"/>
                      <div class="clients__info">
                        <div class="clients__mdtitle">
                          <?= $testi_full_name ?>
                        </div>
                        <div class="clients__position">
                          <span><?= $testi_company ?></span>
                          <span>·</span>
                          <span><?= $testi_role ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endwhile; endif; ?>
              <?php $index_of_clients++; endwhile; ?>
            </div>

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <?php
                $index_of_clients = 0;
                while ($_posts->have_posts()) : $_posts->the_post();
              ?>
                <li data-target="#clients__carousel" data-slide-to=<?= $index_of_clients ?> class="<?= $index_of_clients === 0 ? 'active' : ''?>"></li>
              <?php $index_of_clients++; endwhile; ?>
            </ul>
          </div>
      </div>
    </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
  var slider = tns({
    "container": "#clients__feedback",
    "items": 2,
    "center": true,
    // "mouseDrag": true,
    "autoplay": true,
    // "autoplayHoverPause": true,
    // "slideBy": "page",
    "swipeAngle": false,
    "speed": 500,
  });
  console.log('slider:', slider);
  slider.play();
</script>
