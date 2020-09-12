<?php
    /**
     * Template Name: Resources Template
     */

    include 'common.php';
    $image_path = get_template_directory_uri() . "/dist/images";
    $filtered_category = $_GET["category"];

    $_posts = new WP_Query(array(
      'post_type' => 'resource',
      'posts_per_page' => 50,
      'paged' => 1
    ));

    $data = [];
    $posts = $_posts->posts;
    foreach($posts as $post) {
      $id = $post->ID;
      $resource_category = get_field('resource_category', $id);
      if (in_array($filtered_category, $resource_category) || $filtered_category == '') {
        array_push($data, $post);
      }
    }
    $sizeOfPosts = count($data);
?>

<!-- Menu -->
<div class="education_menu">
  <div class="container">
    <div class="education_menu__lgtitle">
      Resources
    </div>
    <div class="menu d-flex flex-grow-1">
      <div class="education_menu_list">
        <a class="education_menu__mdtitle brown" href="?category=How to">
          How to
        </a>
        <a class="education_menu__mdtitle green" href="?category=Templates">
          Templates
        </a>
        <a class="education_menu__mdtitle blue" href="?category=Checklists">
          Checklists
        </a>
        <a class="education_menu__mdtitle pink" href="?category=Guides">
          Guides
        </a>
        <a class="education_menu__mdtitle yarn last" href="?category=Best Practices">
          Best Practices
        </a>
      </div>
      <input type="text" class="education_menu__search" placeholder="Search" />
    </div>

  </div>
</div>

<?php
if ($sizeOfPosts > 0) :
  $headID = $data[0]->ID;
?>
<!-- overview -->
<div class="education_overview">
  <div class="container">
    <a href="<?= get_the_permalink($headID);?>" class="overview_img">
      <img src="<?= get_field('resource_logo', $headID); ?>" alt=""/>
    </a>
    <div class="overview_details">
      <a href="<?= get_the_permalink($headID);?>" class="education_overview-lgtitle">
        <?= get_the_title($headID);?>
      </a>
      <div class="education_overview-mdtitle">
        <?= get_field('resource_description', $headID); ?>
      </div>
      <div class="education_overview-items">
        <?php
        $categories = get_field('resource_category', $headID);
        for ($i = 0; $i < sizeof($categories); $i++) {
          ?>
          <div class="tag_item <?= getCatColor($categories[$i]) ?>">
            <?= $categories[$i] ?>
          </div>
        <?php } ?>
        <div class="download">
          DOWNLOAD
        </div>
      </div>
    </div>
  </div>
</div>

<!-- category -->
<div class="education_category">
  <div class="container">
    <div class="row">
      <?php
        $index = 0;
        for($index = 1; $index < $sizeOfPosts; $index++) {
          $id = $data[$index]->ID;
      ?>
          <div class="<?= ($index === 4 || $index === 5) ? 'col-md-6 col-sm-12' : 'col-lg-4 col-md-6 col-sm-12' ?>">
            <div class="category__item <?= ($index === 4 || $index === 5) ? 'big' : 'small' ?>">
              <a href="<?= get_the_permalink($id);?>">
                <img src="<?= get_field('resource_logo', $id); ?>" alt=""/>
              </a>
              <div class="category__label">
                <?php
                $categories = get_field('resource_category', $id);
                for ($i = 0; $i < sizeof($categories); $i++) {
                  ?>
                  <div class="tag_item <?= getCatColor($categories[$i]) ?>">
                    <?= $categories[$i] ?>
                  </div>
                <?php } ?>
                <div class="download">
                  DOWNLOAD
                </div>
              </div>
              <a href="<?= get_the_permalink($id);?>" class="education_category__lgtitle">
                <?= get_the_title($id);?>
              </a>
            </div>
          </div>
      <?php } ?>
    </div>
    <div class="text-center">
      <button class="btn_load_more">Load More</button>
    </div>
  </div>
</div>
<?php endif; ?>
