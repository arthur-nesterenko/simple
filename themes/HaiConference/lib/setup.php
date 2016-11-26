<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
//  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');



/*
* 
* register custom post type
*/
add_action('init', __NAMESPACE__ .'\\register_custom_new_post_type');
  function register_custom_new_post_type()
  {

    register_post_type('conference', array(
		'label'  => 'Конференции',
		'labels' => array(
			'name'               => 'Конференции', // основное название для типа записи
			'singular_name'      => 'Конференция', // название для одной записи этого типа
			'add_new'            => 'Добавить конференцию', // для добавления новой записи
			'add_new_item'       => 'Добавление конференции', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование конференции', // для редактирования типа записи
			'new_item'           => 'Новая конференция', // текст новой записи
			'view_item'          => 'Смотреть конференцию', // для просмотра записи этого типа.
			'search_items'       => 'Искать конференции', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Конференции', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'show_ui'             => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   =>  true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-format-chat', 
		'hierarchical'        => true,
		'supports'            => array('title','editor','author','custom-fields','page-attributes','post-formats'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );

  }


 //register_custom_new_post_type();





/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('hai/css', Assets\asset_path('styles/main.css'), false, null);

//  if (is_single() && comments_open() && get_option('thread_comments')) {
//    wp_enqueue_script('comment-reply');
//  }

  wp_enqueue_script('uikit', Assets\asset_path('scripts/uikit.js'), ['jquery'], null, true);
    wp_enqueue_script('uikit', Assets\asset_path('scripts/components.js'), ['jquery'], null, true);
     wp_enqueue_script('main', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
 
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);





