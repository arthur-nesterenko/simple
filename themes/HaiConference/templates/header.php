<?php
$imgLogo =  get_template_directory_uri().'/assets/images/logo.png';

?>

<header>

<div class="uk-container uk-container-center uk-margin-top uk-margin-bottom">
  <div class="uk-grid">
    <div class="logo-section uk-width-small-1-3 uk-width-medium-3-10 uk-width-large-2-10">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo $imgLogo; ?>" alt="Logo" class="uk-img-preserve logo">
      </a>
    </div>
    <div class="header-info uk-width-small-2-3 uk-width-medium-7-10 uk-width-large-8-10">
        <div class="meeting-date uk-hidden-small uk-width-small-1-1 uk-width-medium-5-6 uk-width-large-5-6 uk-text-right uk-push-1-10">
          <span>Пленарное заседание состоялось 20.04.2016 в 14:00 в 307гк НАКУ ХАИ</span>
        </div>
        <div class="contact-phone uk-hidden-small uk-width-small-1-1 uk-width-medium-5-6 uk-width-large-5-6 uk-text-right uk-push-1-10">
          <span>Свяжитесь с нами: (057) 212342342</span>
        </div>
        <div class="uk-container">
          <div class="uk-grid">
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
              <div class="mobile-menu uk-hidden-medium uk-hidden-large uk-text-right uk-width-small-1-1">
                <a class="uk-button uk-icon-user uk-icon-large" href="#authentication" data-uk-modal></a>
                <button class="uk-button uk-icon-navicon uk-icon-large" data-uk-offcanvas="{target:'#left-menu', mode:'slide'}"></button>
                <div id="left-menu" class="uk-offcanvas uk-text-center">
                    <div class="uk-offcanvas-bar uk-offcanvas-bar-show">
                        <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                        <?php
                          if (has_nav_menu('primary_navigation')) :
                              wp_nav_menu( array(
                                'theme_location'    => 'primary_navigation',
                                'depth'             => 2,
                                'container'         => '',
                                'menu_class'        => 'uk-navbar',
                                'fallback_cb'       => 'basey_primary_menu::fallback',
                                'walker'            => new Nav_primary_menu())
                          );
                          endif;
                          ?>
                        </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="under-header uk-width-1-1">
      <div class="uk-width-small-1-1 uk-medium-1-1 uk-hidden-large uk-push-1-10">
        <span>Пленарное заседание состоялось 20.04.2016 в 14:00 в 307гк НАКУ ХАИ</span>
      </div>
      <div class="uk-width-small-1-1 uk-medium-1-1 uk-hidden-large uk-push-1-10">
        <span>Свяжитесь с нами: (057) 212342342</span>
      </div>
    </div>
  </div>
 </div>
</header>
