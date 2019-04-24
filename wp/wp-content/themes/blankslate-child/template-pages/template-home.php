<?php

/**
 * Template Name: Home
 */

get_header('home'); ?>

<header id="home-header">
    <? get_template_part('template-parts/home', 'custom-header'); ?>
</header>
<main id="content">
  <?php 
    // start the loop
    while (have_posts()) : the_post();
      get_template_part('template-parts/home','main');
    endwhile;
  ?>
</main>

<?php 
get_footer(); ?>