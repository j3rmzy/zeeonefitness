<header id="default-page-title">
  <div class="wrapper">
    <h1><? the_title(); ?></h1>  
  </div>
</header>
<article id="default-page-main">
  <div class="wrapper">
    <? get_template_part('template-parts/default', 'featured-image'); ?>
    <div class="content-wrapper">
      <div class="content">
        <? the_content(); ?>
      </div>
      <? get_template_part('template-parts/default', 'sidebar'); ?>
    </div>
  </div>
</main>
