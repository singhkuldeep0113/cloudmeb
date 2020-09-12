<?php
    /**
     * Template Name: Resource Details Template
     */
    include 'common.php';
    $image_path = get_template_directory_uri() . "/dist/images";
    while (have_posts()) : the_post();
      $categories = get_field('resource_category', get_the_ID())
?>

<!-- Menu -->
<div class="education_detail_menu">
  <div class="container">
    <div class="education_detail_menu__lgtitle">
      <a href="/resources"><img src="<?=$image_path?>/education/icon_back.png" alt="" class="edu_detail_back"/>Resources</a>
    </div>
    <?php
      for ($i = 0; $i < sizeof($categories); $i++) {
    ?>
      <div class="tag_item <?= getCatColor($categories[$i]) ?>">
        <?= $categories[$i] ?>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Content -->
<div class="education_content">
  <div class="container">
    <div class="content__lgtitle">
      <?php the_title(); ?>
    </div>
    <div class="content__author">
      by <span>Cloudmeb · 3</span> comments
    </div>
    <div class="text-center">
      <img src="<?= get_field('resource_logo', get_the_ID()); ?>" class="content__img"/>
    </div>

    <p class="content__hd_center">
      <?php echo get_field('resource_description', get_the_ID()); ?>
    </p>
    <div class="content__mdtitle">
      <?php echo get_field('resource_contents', get_the_ID()); ?>
    </div>
  </div>
</div>

  <div class="education_services">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="education_services__lgtitle">
            CloudMeb Legal Services
          </div>
          <div class="education_services__mdtitle">
            Federal or provincial legal services on business incorporation, registration, and audits, everywhere across Canada.
          </div>
        </div>
        <div class="col-md-4">
          <div class="education_services__btn_wrapper">
            <button class="education_services__btn">Try it for Free</button>
            <div class="education_services__credit">No credit card details required</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <div class="navigation education_nav d-flex">
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
          <img src="<?=$image_path?>/education/img_edu_asset08.png" alt="">
        </div>
        <div class="navigate_details">
          <div class="details__tags">
            <div class="label"><span>20</span> MIN READ</div>
            <div class="tag_item accounting">ACCOUNTING</div>
          </div>
          <div class="detail_title">
            Is Your Startup Idea Viable?
          </div>
        </div>
      </div>
      <div class="navigate_item right d-flex">
        <div class="navigate_item_image">
          <img src="<?=$image_path?>/education/img_edu_assets09.png" alt="">
        </div>
        <div class="navigate_details">
          <div class="details__tags">
            <div class="label"><span>21</span> MIN READ</div>
            <div class="tag_item legal">LEGAL</div>
          </div>
          <div class="detail_title">
            Executive Hires: The Case for Extreme Referencing
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
