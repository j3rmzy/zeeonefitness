<?php get_header(); ?>

<section id="main">
  <?php 
    // start the loop
    while (have_posts()) : the_post();
      get_template_part('template-parts/default','main');
    endwhile;
  ?>
</section>

<?php 
get_footer(); ?>