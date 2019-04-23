<? if (has_header_video()) { ?>
  <div id="featured-header">
    <div id="home-header-video">
      <? the_custom_header_markup() ?>
      <div id='home-title'>
        <div class='wrapper'>
          <p class="slogan"><? the_title(); ?></p>
          <h1><? echo esc_html(get_bloginfo('name')) ?></h1>
        </div>
      </div>
    </div>
  </div>
<? } else { ?>
  <div id="featured-header">
    <div id="home-header-image" style="background-image: url(' <? echo get_header_image() ?>')">
      <div id='home-title'>
        <div class='wrapper'>
          <p class="slogan"><? the_title(); ?></p>
          <h1><? echo esc_html(get_bloginfo('name')) ?></h1>
        </div>
      </div>
    </div>
  </div>
<? } ?>