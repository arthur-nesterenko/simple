<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
     if( !is_page('userprofile')):
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap uk-container uk-container-center">
        <?php if (Setup\display_sidebar())
            echo '<div class="uk-grid"></div>';
      ?>


        <main class="<?php echo  Setup\display_sidebar() ? 'uk-width-small-1-1 uk-width-medium-6-10 uk-width-large-7-10' : 'uk-width-1-1' ?>">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="uk-width-small-1-1 uk-width-medium-4-10 uk-width-large-3-10">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
         </div>
        <?php endif; ?>
  </div>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
        include('templates/modal-login.php');
        else:?>
        <main class="wrap">
            <?php include Wrapper\template_path(); ?>
            </main>
        <?php endif;
           wp_footer();
         ?>
        
  </body>
</html>
