<?php
//if (is_user_logged_in())
//    echo 'good';
//else
//{
//    wp_redirect( home_url() );
//    exit;
//}

global $current_user;

print_r( $current_user );
$user =  get_user_by( 'id', $current_user->ID );
$data = array();

/* data about user */
$data['username'] = $user->first_name;
$data['lastname'] = $user->last_name;
$data['role'] = $user->role;
$data['user_email'] = $user->user_email;

$template  = get_template_directory().'/templates/content-'.$post->post_name.'.php';

if (file_exists( $template )) 
 	view($post->post_name, $data) ;


