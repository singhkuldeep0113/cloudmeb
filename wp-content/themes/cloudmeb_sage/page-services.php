<?php
/**
 * Template Name: Services Template
 */

$image_path = get_template_directory_uri() . "/dist/images";

$_posts = new WP_Query(array(
  'post_type' => 'service',
  'posts_per_page' => 50,
  'paged' => 1
));
$index = 0;
if ($_posts->have_posts()):
?>

<!-- Contents -->
<div class="servicesWrapper">
  <div class="container">
    <div class="services__lgtitle">Essential Business Services</div>
    <div class="services__mdtitle">A personal human touch in a technological era</div>
    <div class="row">
      <?php  while ($_posts->have_posts()) : $_posts->the_post(); $index++; ?>
          <?php if ($index === 1) { ?>
              <div class="col-lg-6 col-md-12">
                <div class="img_wrapper">
                  <a href="<?= get_the_permalink(get_the_ID());?>" class="img">
                    <img src="<?= get_field('service_logo', get_the_ID()); ?>" alt=""/>
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="services__description">
                  <a href="<?= get_the_permalink(get_the_ID());?>" class="item__header">
                    <?= get_the_title(get_the_ID());?>
                  </a>
                  <div class="item__header-small">
                    <?= get_field('service_sub_title', get_the_ID()); ?>
                  </div>
                  <div class="item__label">
                    <?= get_field('service_description', get_the_ID()); ?>
                  </div>
                </div>
              </div>
          <?php } else { ?>
              <div class="service_item col-lg-4 col-md-12">
                <div class="img_wrapper small">
                  <a href="<?= get_the_permalink(get_the_ID());?>">
                    <img src="<?= get_field('service_logo', get_the_ID()); ?>" alt=""/>
                  </a>
                </div>
                <div class="services__description small">
                  <a href="<?= get_the_permalink(get_the_ID());?>" class="item__header">
                    <?= get_the_title(get_the_ID());?>
                  </a>
                  <div class="item__header-small">
                    <?= get_field('service_sub_title', get_the_ID()); ?>
                  </div>
                  <div class="item__label">
                    <?= get_field('service_description', get_the_ID()); ?>
                  </div>
                </div>
              </div>
          <?php } ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<br/><br/><br/><br/>
<?php endif; ?>
