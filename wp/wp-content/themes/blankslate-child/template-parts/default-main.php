<? if (get_header_image()) { ?>
  <header id='default-page-title' style='background-image: url("<? echo get_header_image() ?>")'>
<? } else { ?>
  <header id="default-page-title">
<? } ?>
  <div class="wrapper">
    <h1><? the_title(); ?></h1>  
  </div>
</header>
<article id="default-page-main">
  <!-- <?php if (has_post_thumbnail()) : ?>
    <? get_template_part('template-parts/default', 'featured-image'); ?>
  <? endif; ?> -->
    <? the_content(); ?>

    <?php if (is_active_sidebar('custom-side-bar')) : ?>
      <? get_template_part('template-parts/default', 'sidebar'); ?>
    <?php endif; ?>
</article>
