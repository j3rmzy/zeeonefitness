<?php

/**
 * Template Name: Coming Soon
 */

get_header('empty'); ?>

<div id='coming-soon' class='cs-hero'>
  <main id='main-content' class='main-content'>
    <?php if (have_posts()): 
        while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif ?>
  </main>
</div>

<?php wp_footer(); ?>