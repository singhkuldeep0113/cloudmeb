<?php
/**
 * Template Name: Services Template
 */

$image_path = get_template_directory_uri() . "/dist/images";
?>

<div class="partners_head">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="partners_head-lgtitle">
          Leverage<br/>
          <span>our platform</span>
        </div>
        <div class="partners_head-mdtitle">
          Cloudmeb trusted advisor network
        </div>
        <button class="partners_head-btn">
          Apply Today
        </button>
      </div>
      <div class="col-lg-6 col-md-12 text-center">
        <img src="<?=$image_path?>/partner/img_partner_ill01.png" alt="" class="partners_head-ill" />
      </div>
    </div>
  </div>
</div>

<div class="partners_collaborate">
  <div class="container">
    <div class="partners_collaborate-lgtitle">
      Let's Collaborate
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 partners_collaborate-ill-wrapper">
        <img src="<?=$image_path?>/partner/img_partner_ill03.png" alt="" class="partners_collaborate-ill-sm" />
      </div>
      <div class="col-lg-12 col-md-8 col-sm-8 row partners_collaborate-title-wrapper">
        <div class="col-lg-6 col-md-12 partners_collaborate-mdtitle">
          Benefits
        </div>
        <div class="col-lg-6 col-md-12 partners_collaborate-smtitle">
          As a Cloudmeb partner, we strive to help you grow your business, and help you maintain that growth.
        </div>
      </div>
    </div>
    <div class="partners_collaborate__box">
      <div class="row">
        <div class="col-lg-3 col-md-12 border-0">
          <img src="<?=$image_path?>/partner/img_partner_ill03.png" alt="" class="partners_collaborate-ill" />
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="partners_collaborate__box-item">
            <img src="<?=$image_path?>/partner/img_partner_asset01.svg" alt="" class="" />
            <div class="partners_collaborate-label">
              <div class="partners_collaborate-mdlabel">
                Grow your client base
              </div>
              <div class="partners_collaborate-smlabel">
                Stay busy with Cloudmeb's portfolio of clientele at your fingertips.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="partners_collaborate__box-item">
            <img src="<?=$image_path?>/partner/img_partner_asset02.svg" alt="" class="" />
            <div class="partners_collaborate-label">
              <div class="partners_collaborate-mdlabel">
                Get the word out
              </div>
              <div class="partners_collaborate-smlabel">
                Our established online presence will promote your services and build your visibility.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 border-0">
          <div class="partners_collaborate__box-item">
            <img src="<?=$image_path?>/partner/img_partner_asset03.svg" alt="" class="" />
            <div class="partners_collaborate-label">
              <div class="partners_collaborate-mdlabel">
                Manage your accounts easily
              </div>
              <div class="partners_collaborate-smlabel">
                Eliminate the headache of managing your accounts; we`ll take core of that. Concentrate on what you do best.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row expand_market">
      <div class="col-md-4 col-sm-4 partners_collaborate-ill-wrapper">
        <img src="<?=$image_path?>/partner/img_partner_ill02.png" alt="" class="partners_collaborate-ill-sm" />
      </div>
      <div class="col-lg-12 col-md-8 col-sm-8 row partners_collaborate-title-wrapper">
        <div class="col-lg-6 col-md-12 partners_collaborate-mdtitle">
          Expand your market offer
        </div>
        <div class="col-lg-6 col-md-12 partners_collaborate-smtitle">
          We aspire to be gurus of the back-office in its entirety. As our partner, we`ll equip you to service all of your clients' administrative needs.
        </div>
      </div>
    </div>
    <div class="partners_collaborate__box">
      <div class="row">
        <div class="col-lg-3 col-md-12 border-0">
          <img src="<?=$image_path?>/partner/img_partner_ill02.png" alt="" class="partners_collaborate-ill" />
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="partners_collaborate__box-item">
            <img src="<?=$image_path?>/partner/img_partner_asset04.svg" alt="" class="" />
            <div class="partners_collaborate-label">
              <div class="partners_collaborate-mdlabel">
                Offer your clients more
              </div>
              <div class="partners_collaborate-smlabel">
                Offer a full range of solutions for POS, Payroll, Inventory, Scheduling, Jobs, CRM, web design and much more.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="partners_collaborate__box-item">
            <img src="<?=$image_path?>/partner/img_partner_asset05.svg" alt="" class="" />
            <div class="partners_collaborate-label">
              <div class="partners_collaborate-mdlabel">
                Tailor your offer
              </div>
              <div class="partners_collaborate-smlabel">
                Use our intelligent system to offer tailored solutions that satisfy your client’s specific needs.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 border-0">
          <div class="partners_collaborate__box-item">
            <img src="<?=$image_path?>/partner/img_partner_asset06.svg" alt="" class="" />
            <div class="partners_collaborate-label">
              <div class="partners_collaborate-mdlabel">
                Convert existing clients
              </div>
              <div class="partners_collaborate-smlabel">
                Cloud solutions can work wonders for your existing clients, and our conversion framework makes the transition incredibly easy.
              </div>
            </div>
          </div>
        </div>
      </div>
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
        What Our Clients Say
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

<div class="partners_become">
  <div class="container">
    <div class="partners_become-lgtitle">
      Becoming a Partner in 3 Steps
    </div>
    <div class="partners_become-steps">
      <div class="partners_become__item">
        <div class="stepIndex">1</div>
        <div class="partners_become-mdtitle">
          Submit
        </div>
        <div class="partners_become-smtitle">
          Submit your application by telling us what products you know and the services you would like to offer.
        </div>
      </div>

      <img src="<?=$image_path?>/partner/icon_arrow.svg" alt="" class="workflow__arrow"/>

      <div class="partners_become__item">
        <div class="stepIndex">2</div>
        <div class="partners_become-mdtitle">
          Review
        </div>
        <div class="partners_become-smtitle">
          We will review your application and contact you to ensure you meet Cloudmeb standards.
        </div>
      </div>

      <img src="<?=$image_path?>/partner/icon_arrow.svg" alt="" class="workflow__arrow"/>

      <div class="partners_become__item">
        <div class="stepIndex">3</div>
        <div class="partners_become-mdtitle">
          Start
        </div>
        <div class="partners_become-smtitle">
          Once approved, start receiving new clients and using Cloudmeb to manage your assigned accounts.
        </div>
      </div>
    </div>
    <div id="partners_carousel" class="partners_become-steps-sm carousel slide" data-ride="carousel">

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="partners_become__item carousel-item active">
          <div class="stepIndex">1</div>
          <div class="partners_become-mdtitle">
            Submit
          </div>
          <div class="partners_become-smtitle">
            Submit your application by telling us what products you know and the services you would like to offer.
          </div>
        </div>
        <div class="partners_become__item carousel-item">
          <div class="stepIndex">2</div>
          <div class="partners_become-mdtitle">
            Review
          </div>
          <div class="partners_become-smtitle">
            We will review your application and contact you to ensure you meet Cloudmeb standards.
          </div>
        </div>
        <div class="partners_become__item carousel-item">
          <div class="stepIndex">3</div>
          <div class="partners_become-mdtitle">
            Start
          </div>
          <div class="partners_become-smtitle">
            Once approved, start receiving new clients and using Cloudmeb to manage your assigned accounts.
          </div>
        </div>
      </div>

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#partners_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#partners_carousel" data-slide-to="1"></li>
        <li data-target="#partners_carousel" data-slide-to="2"></li>
      </ul>

    </div>
    <div class="partners_become__btnapply">
      <button>Apply Today</button>
    </div>
  </div>
</div>

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
