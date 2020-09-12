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
  <div class="product_detail_menu">
    <div class="container">
      <div class="product_detail_menu__lgtitle">
        <a href="/products"><img src="<?=$image_path?>/education/icon_back.png" alt="" class="pro_detail_back"/> Products</a>
      </div>
      <?php
      $category = get_field('product_category', get_the_ID());
      $sty = str_replace(' ', '_', strtolower($category));
      ?>
      <div class="tag_item <?= $sty ?>"><?= $category ?></div>
    </div>
  </div>

  <div class="product_details__header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="product_details__header-lgtitle">
            <img src="<?= get_field('product_logo', get_the_ID()); ?>" alt=""/>
            <div class="title"><?= the_title() ?></div>
            <div class="tag_item <?= $sty ?>"><?= $category ?></div>
          </div>
          <div class="product_detail_menu__mdtitle">
            <?= get_field('product_sub_title', get_the_ID()); ?>
          </div>
          <div class="product_detail_menu__smtitle">
            <?= get_field('product_description', get_the_ID()); ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 text-center">
          <img src="<?=$image_path?>/products/img_prod_details_asset02.png" alt="" class="product_detail_img"/>
        </div>
      </div>
    </div>
  </div>

  <div class="product_details__content">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <?php
            for ($index = 0; $index < $lengthOfBenefits; $index++) {
              $id = $benefits_object[$index]->ID;
          ?>
          <div class="product_details__content-item <?= $index == 0 ? 'first' : '' ?>">
            <img src="<?= get_field('benfit_icon', $id); ?>" alt="" class="item_logo" />
            <div class="description">
              <div class="product_details__content-lgtitle">
                <?= $benefits_object[$index]->post_title ?>
              </div>
              <div class="product_details__content-mdtitle">
                <?= get_field('benefit_description', $id); ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="product_detail-signup">
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
  <div class="navigation d-flex">
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
          <img src="<?=$image_path?>/products/img_prod_details_asset08.svg" alt="">
        </div>
        <div class="navigate_details">
          <div class="details__tags">
            <div class="label">Shopify</div>
            <div class="tag_item legal">E-COMMERCE</div>
          </div>
          <div class="detail_title">
            Everything you need to sell anywhere
          </div>
        </div>
      </div>
      <div class="navigate_item right d-flex">
        <div class="navigate_item_image">
          <img src="<?=$image_path?>/products/img_prod_details_asset09.svg" alt="">
        </div>
        <div class="navigate_details">
          <div class="details__tags">
            <div class="label">RingCentral</div>
            <div class="tag_item accounting">ONLINE COMM.</div>
          </div>
          <div class="detail_title">
            Your complete cloud communications system
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
