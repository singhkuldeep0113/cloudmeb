<?php
/**
 * Template Name: Services Template
 */

$image_path = get_template_directory_uri() . "/dist/images";
?>

<?php if( have_rows('english_version') ): ?>
<?php while( have_rows('english_version') ): the_row();
    $main_title = get_sub_field('main_title');
    $updated_date = get_sub_field('updated_date');
    $introduction_title = get_sub_field('introduction_title');
    $introduction_terms_content = get_sub_field('introduction_terms_content');
    $general_title = get_sub_field('general_title');
    $general_terms_content = get_sub_field('general_terms_content');
?>
  <!-- Content -->
  <div class="termsWrapper">
    <div class="container">
      <div class="terms-lgtitle"><?= $main_title ?></div>
      <div class="terms-mdtitle"><?= $updated_date ?></div>
      <div class="terms-mdlabel"><?= $introduction_title ?></div>
      <div class="terms-smtitle">
        <p>
          <?= $introduction_terms_content ?>
        </p>
      </div>
      <div class="terms-mdlabel"><?= $general_title ?></div>
      <div class="terms-smtitle last">
        <p>
          <?= $general_terms_content ?>
        </p>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
