<?
  $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<div id="featured-image" style="background-image: url('<? echo $backgroundImg[0]; ?>')"> 
  <div class='wrapper'>
    <div id='home-title'>
      <p class="slogan"><? the_title(); ?></p>
      <h1><? echo esc_html(get_bloginfo('name')) ?></h1>
    </div>
  </div>
</div>