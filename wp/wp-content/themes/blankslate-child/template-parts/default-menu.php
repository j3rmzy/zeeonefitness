<div id="main-menu">
  <div class='menu-top'>
    <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
    <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
    <?php get_template_part('template-parts/header','mobile-menu'); ?>
  </div>
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>