<?php
$button_link = get_field('header_button_link', 'general_settings');

if (is_front_page()) {
  $link = $button_link['url'];
} else {
  $home_url = esc_url(home_url('/'));
  $link = $home_url . $button_link['url'];
}

?>


<header class="header">
  <div class=" main_header" data-aos="slide-down">
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
      <a href="<?php echo $link ?>"><?php echo $button_link['title'] ?></a>
    </div>
  </div>
  <div class="header_container_mobile">
    <div class="mobile-header">
      <div class="header_logo">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'medium')[0]); ?>" class="u-img-responsive">
        </a>
      </div>
      <button type="button" class="header__toggle">
        <div class="header__toggle__item"></div>
        <div class="header__toggle__item"></div>
        <div class="header__toggle__item"></div>
      </button>
    </div>
    <div class="menu-header">
      <span class="close-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.4 19L5 17.6L10.6 12L5 6.4L6.4 5L12 10.6L17.6 5L19 6.4L13.4 12L19 17.6L17.6 19L12 13.4L6.4 19Z" fill="#181818" />
        </svg>
      </span>
      <div id="mobile-nav" class="header_navigation_mobile">
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
    <div class="navigation__overlay"></div>


  </div>
</header>