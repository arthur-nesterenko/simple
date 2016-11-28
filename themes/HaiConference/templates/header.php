<?php
$imgLogo =  get_template_directory_uri().'/dist/images/logo.png'; ;

?>

<header>

<div class="uk-container uk-container-center uk-margin-bottom">
  <div class="uk-grid">
    <div class="uk-width-small-1-1 uk-width-medium-4-10 uk-width-large-3-10">
      <img src="<?php echo $imgLogo; ?>" alt="Logo" class="uk-img-preserve">
    </div>
    <div class="uk-width-small-1-1 uk-width-medium-6-10 uk-width-large-7-10">
        Что такое Lorem Ipsum?
    </div>
  </div>
 </div>
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
