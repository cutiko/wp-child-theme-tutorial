<!--
  functions.php file is intended to add custom functions for your theme. You must never write functions in the original WP files.
  In this case the function below is for setting your css. The example below set the original parent theme css and then enque the child theme css.
  This way the child theme css is later and will overwrite original css.
  After you read this please, delete this comment.
-->

<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

?>