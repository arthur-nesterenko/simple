<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

// require_once get_template_directory().'/vendor/autoload.php';

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


 function view($template, $data = array()) {
		$file =  get_template_directory().'/templates/content-'.$template.'.php';  //get_template_directory() . $template;

    // echo $file;
    
    if (file_exists($file)) {
			extract($data);
			ob_start();
		    require $file;
			  $output = ob_get_contents();
			ob_end_clean();

			echo  $output;
		} else {
			trigger_error('Error: Could not load template ' . $file . '!');
			exit();
		}
	}



include('functions/nav_walker.php'); 
include('functions/function_filter.php');
include('functions/function_ajax.php');
include('functions/widgets.php');
