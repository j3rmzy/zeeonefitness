<?php if (get_header_image()) : ?>
  <header id='default-page-title' style='background-image: url("<?php echo get_header_image() ?>")'>
<?php else : ?>
  <header id="default-page-title">
<?php endif; ?>
  <div class="wrapper">
    <h1><?php the_title(); ?></h1>
  </div>
</header>
<article id="default-page-main">
  <?php if (has_post_thumbnail()) : ?>
    <?php get_template_part('template-parts/default', 'featured-image'); ?>
  <?php endif; ?>
  <?php the_content(); ?>
  <?php if (is_active_sidebar('custom-side-bar')) : ?>
    <?php get_template_part('template-parts/default', 'sidebar'); ?>
  <?php endif; ?>
</article>
