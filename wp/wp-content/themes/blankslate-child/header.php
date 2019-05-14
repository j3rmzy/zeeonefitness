<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width" />
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header id="header">
        <?php get_template_part('template-parts/default', 'menu'); ?>
    </header>
