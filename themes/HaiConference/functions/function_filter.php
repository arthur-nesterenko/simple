<?php

function add_config_js()
{
    $config = array(
        'ajax_register' => admin_url('admin-ajax.php?action=registerUser'),
        'ajax_login' => '10',
        'link_userprofile' => home_url().'/userprofile/'
    );
    wp_localize_script( 'jquery', 'CONFIG',   $config  );

}
add_action('wp_enqueue_scripts','add_config_js',101);

//function authentication()
//{
//
//    if (is_user_logged_in) return;
//    $URI  =  $_SERVER['REQUEST_URI'];
//    print_r(  $_SERVER );
//    $isRedirect = (strrpos( $URI,'userprofile')) ;
////    if ( $isRedirect )
////    {
////        wp_redirect( home_url());
////        exit;
////    }
//}
//
//add_action('init','authentication',101);
