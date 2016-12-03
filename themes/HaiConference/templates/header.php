<?php
$imgLogo =  get_template_directory_uri().'/assets/images/logo.png';

?>

<header>

<div class="uk-container uk-container-center uk-margin-top uk-margin-bottom">
  <div class="uk-grid">
    <div class="uk-width-small-1-2 uk-width-medium-3-10 uk-width-large-2-10">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo $imgLogo; ?>" alt="Logo" class="uk-img-preserve logo">
      </a>
    </div>
    <div class="header-info uk-width-small-1-2 uk-width-medium-7-10 uk-width-large-8-10">
        <div class="meeting-date uk-width-small-1-1 uk-width-medium-5-6 uk-width-large-5-6 uk-text-right uk-push-1-10">
          <span>Пленарное заседание состоялось 20.04.2016 в 14:00 в 307гк НАКУ ХАИ</span>
        </div>
        <div class="contact-phone uk-width-small-1-1 uk-width-medium-5-6 uk-width-large-5-6 uk-text-right uk-push-1-10">
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
            </div>
          </div>
    </div>
  </div>
 </div>
</header>
