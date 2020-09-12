<?php
/**
 * Footer
 */
$image_path = get_template_directory_uri() . "/dist/images";

$_posts = new WP_Query(array(
  'post_type' => 'footer',
  'posts_per_page' => 50,
  'paged' => 1,
  'order'=>'ASC'
));

while ($_posts->have_posts()) : $_posts->the_post();
  while (have_rows('header_item')): the_row();
    $header_title = get_sub_field('english_header');
    $header_link = get_sub_field('link_header');
  endwhile;
  while (have_rows('menu_item')): the_row();
    while (have_rows('menu_label01')): the_row();
      $menu_label01 = get_sub_field('english_footer');
      $menu_link01 = get_sub_field('menu_item_link');
    endwhile;
    while (have_rows('menu_label02')): the_row();
      $menu_label02 = get_sub_field('english_footer');
      $menu_link02 = get_sub_field('menu_item_link');
    endwhile;
    while (have_rows('menu_label03')): the_row();
      $menu_label03 = get_sub_field('english_footer');
      $menu_link03 = get_sub_field('menu_item_link');
    endwhile;
    while (have_rows('menu_label04')): the_row();
      $menu_label04 = get_sub_field('english_footer');
      $menu_link04 = get_sub_field('menu_item_link');
    endwhile;

    if ($header_title === 'FOLLOW US') :
      $linkedin = $menu_link01;
      $facebook = $menu_link02;
      $twitter = $menu_link03;
      $instagram = $menu_link04;
      break;
    endif;
  endwhile;
endwhile;
?>
<footer class="footer">
  <div class="container">
    <div class="footer__top row">
      <?php
        while ($_posts->have_posts()) : $_posts->the_post();
          while (have_rows('header_item')): the_row();
            $header_title = get_sub_field('english_header');
            $header_link = get_sub_field('link_header');
          endwhile;
          while (have_rows('menu_item')): the_row();
            while (have_rows('menu_label01')): the_row();
              $menu_label01 = get_sub_field('english_footer');
              $menu_link01 = get_sub_field('menu_item_link');
            endwhile;
            while (have_rows('menu_label02')): the_row();
              $menu_label02 = get_sub_field('english_footer');
              $menu_link02 = get_sub_field('menu_item_link');
            endwhile;
            while (have_rows('menu_label03')): the_row();
              $menu_label03 = get_sub_field('english_footer');
              $menu_link03 = get_sub_field('menu_item_link');
            endwhile;
            while (have_rows('menu_label04')): the_row();
              $menu_label04 = get_sub_field('english_footer');
              $menu_link04 = get_sub_field('menu_item_link');
            endwhile;
            while (have_rows('menu_label05')): the_row();
              $menu_label05 = get_sub_field('english_footer');
              $menu_link05 = get_sub_field('menu_item_link');
            endwhile;
            while (have_rows('menu_label06')): the_row();
              $menu_label06 = get_sub_field('english_footer');
              $menu_link06 = get_sub_field('menu_item_link');
            endwhile;
          endwhile;
      if ($header_title !== 'FOLLOW US') :
      ?>
          <div class="col-md-2">
            <div class="footer__lgtitle">
              <a href="<?= $header_link ?>"><?= $header_title ?></a>
            </div>
            <ul class="footer__mdtitle">
              <li><a href="<?= $menu_link01 ?>"><?= $menu_label01 ?></a></li>
              <li><a href="<?= $menu_link02 ?>"><?= $menu_label02 ?></a></li>
              <li><a href="<?= $menu_link03 ?>"><?= $menu_label03 ?></a></li>
              <li><a href="<?= $menu_link04 ?>"><?= $menu_label04 ?></a></li>
              <li><a href="<?= $menu_link05 ?>"><?= $menu_label05 ?></a></li>
              <li><a href="<?= $menu_link06 ?>"><?= $menu_label06 ?></a></li>
            </ul>

            <?php if ($header_title === 'CONTACTS') : ?>
                <div class="footer__lgtitle follow">
                  <a href="">Follow us</a>
                </div>
                <div class="follow_icons">
                  <a href="<?= $linkedin ?>"><img src="<?=$image_path?>/footer/icon_in.svg" alt=""/></a>
                  <a href="<?= $facebook ?>"><img src="<?=$image_path?>/footer/icon_fb.svg" alt=""/></a>
                  <a href="<?= $twitter ?>"><img src="<?=$image_path?>/footer/icon_tw.svg" alt=""/></a>
                  <a href="<?= $instagram ?>"><img src="<?=$image_path?>/footer/icon_te.svg" alt=""/></a>
                </div>
            <?php
              endif;
            ?>
          </div>
      <?php
        endif;
        endwhile;
      ?>
    </div>
    <ul class="footer__top-sm">
      <li><a class="footer__link" href="<?php echo home_url();?>/services">SERVICES</a></li>
      <li><a class="footer__link" href="<?php echo home_url();?>/products">PRODUCTS</a></li>
      <li><a class="footer__link" href="<?php echo home_url();?>/educations">EDUCATION</a></li>
      <li><a class="footer__link" href="<?php echo home_url();?>/resources">RESOURCES</a></li>
      <li><a class="footer__link" href="<?php echo home_url();?>/partners">PARTNERS</a></li>
    </ul>
  </div>
  <div class="footer__bottom">
    <div class="copyright">
      <img src="<?=$image_path?>/footer/logo_footer.svg" alt="" class="footer__logo"/>
      <p>2020 © CloudMeb. <sapn class="reserved">All rights reserved.</sapn> </p>
      <p>We are proudly <span><img src="<?=$image_path?>/footer/icon_ca.svg"/> Canadian</span> owned and operated.</p>
    </div>
    <div class="footer__bottom-right">
      <a href="<?php echo home_url();?>/terms">Terms of Use</a>
    </div>
    <div class="footer__bottom-right">
      <a href="<?php echo home_url();?>/privacy-policy">Privacy Policy</a>
    </div>
  </div>
</footer>
