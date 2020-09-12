<?php
/**
 * Template Name: Products Template
 */

$image_path = get_template_directory_uri() . "/dist/images";

$_posts = new WP_Query(array(
  'post_type' => 'product',
  'posts_per_page' => 50,
  'paged' => 1
));

if ($_posts->have_posts()):
?>
  <!-- Contents -->
  <div class="cloud_products">
    <div class="container">
      <div class="products__lgtitle">Proven cloud solutions</div>
      <div class="products__mdtitle">Manage your business in real time</div>
      <div class="products__content">
        <div class="row">
          <?php  while ($_posts->have_posts()) : $_posts->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <a class="products__content-Wrapper" href="<?= get_the_permalink(get_the_ID());?>">
                <div class="products__item">
                  <a href="<?= get_the_permalink(get_the_ID());?>">
                    <img src="<?= get_field('product_logo', get_the_ID()); ?>"/>
                  </a>
                  <div class="status small">
                    <?= get_field('product_discount', get_the_ID()); ?>
                  </div>
                </div>
                <div class="products__item__title">
                  <a href="<?= get_the_permalink(get_the_ID());?>" class="products__item__lgtitle">
                    <?= get_the_title(get_the_ID());?>
                  </a>
                  <?php
                    $category = get_field('product_category', get_the_ID());
                    $sty = str_replace(' ', '_', strtolower($category));
                  ?>
                  <div class="products__item__tag <?= $sty ?>">
                    <?= get_field('product_category', get_the_ID()); ?>
                  </div>
                </div>
                <div class="products__item__mdtitle">
                  <?= get_field('product_sub_title', get_the_ID()); ?>
                </div>
                <div class="products__item__smtitle">
                  <?= get_field('product_description', get_the_ID()); ?>
                </div>
              </a>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
