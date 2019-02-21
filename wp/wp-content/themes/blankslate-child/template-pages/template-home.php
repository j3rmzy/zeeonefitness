<?php

/**
 * Template Name: Home
 */

get_header('home'); ?>

<header id="home-header">
    <?php if (has_post_thumbnail()) { ?>
      <? get_template_part('template-parts/home', 'featured-image'); ?>
    <? } else { ?>
      <div id="home-title">
        <div class="wrapper">
          <p class="slogan"><? the_title(); ?></p>
          <h1><? echo esc_html(get_bloginfo('name')) ?></h1>
        </div>
    </div>
    <? } ?>
</header>
<section id="main">
  <?php 
    // start the loop
    while (have_posts()) : the_post();
      get_template_part('template-parts/home','main');
    endwhile;
  ?>
</section>

<?php 
get_footer(); ?>