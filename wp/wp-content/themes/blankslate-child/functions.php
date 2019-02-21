<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles() {
  wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}


function default_sidebar() {
  register_sidebar(
      array (
        'name' => __( 'Custom Sidebar', 'zeeonefitness' ),
        'id' => 'custom-side-bar',
        'before_widget' => '<div class="sidebar-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="sidebar-title">',
        'after_title' => '</h3>',
      )
  );
}

add_action('widgets_init', 'default_sidebar');

add_theme_support('custom_header', array(
  'video' => true,
));

?>
