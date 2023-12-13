<?php
$footer_description = get_field('footer_description', 'general_settings');
$footer_links_array = get_field('footer_links', 'general_settings');
$footer_social_icons_array = get_field('footer_social_icons', 'general_settings');
?>

<footer class="footer">
  <div class="footer-container">
    <div class="footer_logo">
      <a href="<?php bloginfo('url'); ?>">
        <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'medium')[0]); ?>" class="u-img-responsive">
      </a>
    </div>
    <div class="footer-content">
      <p class="footer-description">
        <?php echo $footer_description ?>
      </p>
      <div class="footer-links">
        <div class="links">
          <?php foreach ($footer_links_array as $single_link) {
            $link_data = $single_link['link'];
          ?>
            <a href=" <?php echo $link_data['url'] ?> ">
              <?php echo $link_data['title'] ?>
            </a>

          <?php  } ?>
        </div>
        <div class="social-icons">
          <?php foreach ($footer_social_icons_array as $single_icon) {
            $icon_img = $single_icon['icon'];
            $icon_link = $single_icon['icon_link'];
          ?>
            <a href=" <?php echo $icon_link ?> ">
              <?php echo wp_get_attachment_image($icon_img, 'full'); ?>
            </a>

          <?php  } ?>
        </div>
      </div>
    </div>
  </div>
</footer>