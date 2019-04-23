<header id="default-page-title">
  <div class="wrapper">
    <h1><? the_title(); ?></h1>  
  </div>
</header>
<article id="default-page-main">
  <? get_template_part('template-parts/default', 'featured-image'); ?>
  <div class="wrapper">
    <div class="content-wrapper">
      <div class="content">
        <? the_content(); ?>
      </div>

      <?php if (is_active_sidebar('custom-side-bar')) : ?>
        <? get_template_part('template-parts/default', 'sidebar'); ?>
      <?php endif; ?>
    </div>
  </div>
</article>
