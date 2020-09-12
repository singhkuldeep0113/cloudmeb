<?php
/**
 * Template Name: Product Details Template
 */

$image_path = get_template_directory_uri() . "/dist/images";
while (have_posts()) : the_post();
  $benefits_object = get_field('benefits_object', get_the_ID());
  $lengthOfBenefits = count($benefits_object);
?>

  <!-- Menu -->
  <div class="service_detail_menu">
    <div class="container">
      <div class="service_detail_menu__lgtitle">
        <a href="/services"><img src="<?=$image_path?>/services/icon_back2.png" alt="" class="prod_detail_back"/> Services</a>
      </div>
    </div>
  </div>

  <div class="service_details__header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="service_details__header-lgtitle">
            <img src="<?= get_field('service_logo', get_the_ID()); ?>" alt=""/>
            <div class="title"><?= the_title() ?></div>
          </div>
          <div class="service_detail_menu__mdtitle">
            <?= get_field('service_sub_title', get_the_ID()); ?>
          </div>
          <div class="service_detail_menu__smtitle">
            <?= get_field('service_description', get_the_ID()); ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 text-center">
          <img src="<?=$image_path?>/services/img_serviced_asset02.png" alt="" class="service_detail_img"/>
        </div>
      </div>
    </div>
  </div>

  <div class="service_details__content">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <?php
            for ($index = 0; $index < $lengthOfBenefits; $index++) {
              $id = $benefits_object[$index]->ID;
          ?>
          <div class="service_details__content-item first">
            <img src="<?= get_field('benfit_icon', $id); ?>" alt="" class="item_logo" />
            <div class="description">
              <div class="service_details__content-lgtitle">
                <?= $benefits_object[$index]->post_title ?>
              </div>
              <div class="service_details__content-mdtitle">
                <?= get_field('benefit_description', $id); ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="service_detail-signup">
            <img src="<?=$image_path?>/products/img_prod_details_asset07.svg" alt=""/>
            <div class="label">
              Create your account today and start your journey with Cloudmeb
            </div>
            <button class="btn_signup">Sign Up for Free</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <div class="navigation service_nav d-flex">
    <div class="container">
      <div class="navigation_control_label">
        <div>PREV</div>
        <div>NEXT</div>
      </div>
      <div class="navigation_control_arrow">
        <img src="<?=$image_path?>/education/icon_arrow2.png" class="arrow_left" alt="">
        <img src="<?=$image_path?>/education/icon_arrow2.png" class="arrow_right" alt="">
      </div>
      <div class="navigate_item left d-flex">
        <div class="navigate_item_image">
          <img src="<?=$image_path?>/services/img_serviced_asset08.svg" alt="">
        </div>
        <div class="navigate_details">
          <div class="details__tags">
            <div class="label">Payroll</div>
          </div>
          <div class="detail_title">
            Accurate, on time payroll
          </div>
        </div>
      </div>
      <div class="navigate_item right d-flex">
        <div class="navigate_item_image">
          <img src="<?=$image_path?>/services/img_serviced_asset09.svg" alt="">
        </div>
        <div class="navigate_details">
          <div class="details__tags">
            <div class="label">Training</div>
          </div>
          <div class="detail_title">
            Training wheels for your feature-packed business cloud
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
