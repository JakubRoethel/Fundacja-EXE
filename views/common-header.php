<?php
$button_link = get_field('header_button_link', 'general_settings');
?>


<header class="header">
  <div class="header_logo">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'medium')[0]); ?>" class="u-img-responsive">
        </a>
      </div>
  <div class="menu_container">
      <div class="header_navigation">
        <?php wp_nav_menu([
          'menu' => 'Main menu',
          'menu_id' => 'navigation-list',
          'menu_class' => 'navigation__list',
          'container' => 'nav',
          'container_id' => 'navigation',
          'container_class' => 'navigation',
          'theme_location' => 'main-menu',
        ]); ?>
      </div>
    </div>
    <div class="button-wrapper">
            <a href="<?php echo $button_link['url'] ?>"><?php echo $button_link['title'] ?></a>
      </div>
</header>