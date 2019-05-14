<?php if (has_header_video()) : ?>
<div id="featured-header">
    <div id="home-header-video">
      <?php the_custom_header_markup() ?>
      <div id='home-title'>
        <div class='wrapper'>
          <p class="slogan"><?php the_title(); ?></p>
          <h1><?php echo esc_html(get_bloginfo('name')) ?></h1>
        </div>
      </div>
    </div>
</div>
<?php else : ?>
<div id="featured-header">
  <div id="home-header-image" style="background-image: url(' <?php echo get_header_image() ?>')">
    <div id='home-title'>
      <div class='wrapper'>
        <p class="slogan"><?php the_title(); ?></p>
        <h1><?php echo esc_html(get_bloginfo('name')) ?></h1>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>