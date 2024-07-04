<?php
add_theme_support( 'post-thumbnails' );
function cssandscripts() {
    wp_enqueue_style('homestyle', get_template_directory_uri() . '/assets/css/home.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/returntotop.js',  array( 'jquery' ));
  }
  add_action('wp_enqueue_scripts', 'cssandscripts');

add_action( 'wp_footer', 'linkedinad_footer' );

function linkedinad_footer() {
    ?>
    <script type="text/javascript">
      
    </script>
    <?php
}