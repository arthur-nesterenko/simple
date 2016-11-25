<header >

 
<div class="uk-container uk-container-center">
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
</div>
</header>
