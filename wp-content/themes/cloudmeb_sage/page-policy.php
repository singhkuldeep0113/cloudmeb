<?php
/**
 * Template Name: Privacy Template
 */

$image_path = get_template_directory_uri() . "/dist/images";
?>
<?php 
$value = get_field( "main_title" );
$value_privacy = get_field( "page_content" );
?>
<div class="privacy_policy">
<div class="container">
<h2><?php if( $value ) {
    echo $value;
} else {
    echo '';
} ?>
</h2>
<?php 
if( $value_privacy ) {
    echo $value_privacy;
} else {
    echo '';
}
?>
</div>
</div>