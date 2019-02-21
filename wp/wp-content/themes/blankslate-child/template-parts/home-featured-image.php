<div id="featured-image">
  <?php if (the_post_thumbnail()) : ?>
      the_post_thumbnail();
  <? endif ?>
  <div class='wrapper'>
    <div id='home-title'>
      <p class="slogan"><? the_title(); ?></p>
      <h1><? echo esc_html(get_bloginfo('name')) ?></h1>
    </div>
  </div>
</div>