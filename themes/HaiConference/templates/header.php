<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
          wp_nav_menu( array(
            'theme_location'    => 'primary_navigation',
            'depth'             => 2,
            'container'         => '',
            'menu_class'        => 'uk-navbar-nav uk-hidden-small',
            'fallback_cb'       => 'basey_primary_menu::fallback',
            'walker'            => new Nav_primary_menu())
			);


      endif;
      ?>
    </nav>
  </div>
</header>
