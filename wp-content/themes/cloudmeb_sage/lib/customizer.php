<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path( 'scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');


/**
 * Remove the content editor from ALL pages
 */
function remove_content_editor()
{
  remove_post_type_support('page', 'editor');
}

add_action('admin_head', __NAMESPACE__ . '\\remove_content_editor');

function remove_menus() {
  remove_menu_page('edit.php'); //Posts
  remove_menu_page('edit-comments.php'); //Comments
  remove_menu_page('themes.php'); //Themes
  remove_menu_page('tools.php'); //Tools
}

add_action('admin_menu', __NAMESPACE__ . '\\remove_menus');


/***
 *    Benefits Page in WP-Admin dashboard
 */
function benefits() {
  $labels = array(
    'name' => __('Benefits'),
    'singular_name' => __('Benefit'),
    'menu_name' => __('Benefits'),
    'name_admin_bar' => __('Benefit'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New'),
    'new_item' => __('New Benefit'),
    'edit_item' => __('Edit Benefit'),
    'view_item' => __('View Benefits'),
    'all_items' => __('All Benefits'),
    'search_items' => __('Search Benefits'),
    'parent_item_colon' => __('Parent Benefit:'),
    'not_found' => __('No Benefit found.'),
    'not_found_in_trash' => __('No Benefit found in Trash.')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('with_front' => false, 'slug' => 'benefit'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-products',
    'supports' => array('title', 'thumbnail', 'author')
  );

  register_post_type('benefit', $args);
  flush_rewrite_rules(false);
}

add_action('init', __NAMESPACE__ . '\\benefits');

/**
 *  Cloud Products
 */
function products() {
  $labels = array(
    'name' => __('Cloud Products'),
    'singular_name' => __('Cloud Product'),
    'menu_name' => __('Cloud Products'),
    'name_admin_bar' => __('Cloud Product'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New'),
    'new_item' => __('New Cloud Product'),
    'edit_item' => __('Edit Cloud Product'),
    'view_item' => __('View Cloud Product'),
    'all_items' => __('All Cloud Products'),
    'search_items' => __('Search Cloud Products'),
    'parent_item_colon' => __('Parent Cloud Product:'),
    'not_found' => __('No Cloud Product found.'),
    'not_found_in_trash' => __('No Cloud Product found in Trash.')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('with_front' => false, 'slug' => 'product'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-laptop',
    'supports' => array('title', 'thumbnail', 'author')
  );

  register_post_type('product', $args);
  flush_rewrite_rules(false);
}

add_action('init', __NAMESPACE__ . '\\products');

function services() {
  $labels = array(
    'name' => __('Cloud Services'),
    'singular_name' => __('Cloud Service'),
    'menu_name' => __('Cloud Services'),
    'name_admin_bar' => __('Cloud Service'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New'),
    'new_item' => __('New Cloud Service'),
    'edit_item' => __('Edit Cloud Service'),
    'view_item' => __('View Cloud Service'),
    'all_items' => __('All Cloud Services'),
    'search_items' => __('Search Cloud Services'),
    'parent_item_colon' => __('Parent Cloud Service:'),
    'not_found' => __('No Cloud Service found.'),
    'not_found_in_trash' => __('No Cloud Service found in Trash.')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('with_front' => false, 'slug' => 'service'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-groups',
    'supports' => array('title', 'thumbnail', 'author')
  );

  register_post_type('service', $args);
  flush_rewrite_rules(false);
}

add_action('init', __NAMESPACE__ . '\\services');

function educations() {
  $labels = array(
    'name' => __('Educations'),
    'singular_name' => __('Education'),
    'menu_name' => __('Educations'),
    'name_admin_bar' => __('Education'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New'),
    'new_item' => __('New Education'),
    'edit_item' => __('Edit Education'),
    'view_item' => __('View Education'),
    'all_items' => __('All Educations'),
    'search_items' => __('Search Educations'),
    'parent_item_colon' => __('Parent Education:'),
    'not_found' => __('No Education found.'),
    'not_found_in_trash' => __('No Education found in Trash.')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('with_front' => false, 'slug' => 'education'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-book',
    'supports' => array('title', 'thumbnail', 'author')
  );

  register_post_type('education', $args);
  flush_rewrite_rules(false);
}

add_action('init', __NAMESPACE__ . '\\educations');

function resources() {
  $labels = array(
    'name' => __('Resources'),
    'singular_name' => __('Resource'),
    'menu_name' => __('Resources'),
    'name_admin_bar' => __('Resource'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New'),
    'new_item' => __('New Resource'),
    'edit_item' => __('Edit Resource'),
    'view_item' => __('View Resource'),
    'all_items' => __('All Resources'),
    'search_items' => __('Search Resources'),
    'parent_item_colon' => __('Parent Resource:'),
    'not_found' => __('No Resource found.'),
    'not_found_in_trash' => __('No Resource found in Trash.')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('with_front' => false, 'slug' => 'resource'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-megaphone',
    'supports' => array('title', 'thumbnail', 'author')
  );

  register_post_type('resource', $args);
  flush_rewrite_rules(false);
}

add_action('init', __NAMESPACE__ . '\\resources');


function get_educations() {
  $_posts = new \WP_Query(array(
    'post_type' => 'education',
    'posts_per_page' => 50,
    'paged' => 1
  ));

  $result = [];
  if ($_posts->have_posts()):
    while ($_posts->have_posts()) : $_posts->the_post();
       array_push($result, [
         "id" => get_the_ID(),
         "name" => get_the_title(get_the_ID()),
         "description" => get_field('education_description', get_the_ID()),
         "category" => get_field('education_category', get_the_ID()),
         "education_duration" => get_field('education_duration', get_the_ID()),
       ]);
    endwhile;
  endif;
  wp_send_json_success($result);
  wp_die();
}

/**
 *  Restful API
 */
function register_custom_routes() {
  register_rest_route(
    'data',
    '/educations',
    array(
      'methods' => 'GET',
      'callback' => __NAMESPACE__ . '\\get_educations',
    )
  );
}

add_action('rest_api_init', __NAMESPACE__ . '\\register_custom_routes');


/***
 *    Testimonial Page in WP-Admin dashboard
 */
function testimonials() {
  $labels = array(
    'name' => __('Testimonials'),
    'singular_name' => __('Testimonial'),
    'menu_name' => __('Testimonials'),
    'name_admin_bar' => __('Testimonial'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New'),
    'new_item' => __('New Testimonial'),
    'edit_item' => __('Edit Testimonial'),
    'view_item' => __('View Testimonials'),
    'all_items' => __('All Testimonials'),
    'search_items' => __('Search Testimonials'),
    'parent_item_colon' => __('Parent Testimonial:'),
    'not_found' => __('No Testimonial found.'),
    'not_found_in_trash' => __('No Testimonial found in Trash.')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('with_front' => false, 'slug' => 'testimonial'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-admin-users',
    'supports' => array('title', 'thumbnail', 'author')
  );

  register_post_type('testimonial', $args);
  flush_rewrite_rules(false);
}

add_action('init', __NAMESPACE__ . '\\testimonials');


/***
 *    Footer Menus Page in WP-Admin dashboard
 */
function footers() {
  $labels = array(
    'name' => __('Footer Menus'),
    'singular_name' => __('Footer Menu'),
    'menu_name' => __('Footer Menus'),
    'name_admin_bar' => __('Footer Menu'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New'),
    'new_item' => __('New Footer Menu'),
    'edit_item' => __('Edit Footer Menu'),
    'view_item' => __('View Footer Menu'),
    'all_items' => __('All Footer Menus'),
    'search_items' => __('Search Footer Menus'),
    'parent_item_colon' => __('Parent Footer Menu:'),
    'not_found' => __('No Footer Menu found.'),
    'not_found_in_trash' => __('No Footer Menu found in Trash.')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('with_front' => false, 'slug' => 'footers'),
    'capability_type' => 'post',
    'capabilities' => array(
      'create_posts' => 'do_not_allow', // false < WP 4.5, credit @Ewout
    ),
    'map_meta_cap'=>true,
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-menu',
    'supports' => array('title', 'thumbnail', 'author')
  );

  register_post_type('footer', $args);
  flush_rewrite_rules(false);
}

add_action('init', __NAMESPACE__ . '\\footers');
