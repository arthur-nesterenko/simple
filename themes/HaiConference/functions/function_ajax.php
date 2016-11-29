<?php


function registerUser()
{

    $json = array();

$userdata = array(
	'user_pass'       => $_POST['password'], // обязательно
	'user_login'      => $_POST['email'], // обязательно
	'user_email'      => $_POST['email'],
	'display_name'    => $_POST['username'],
	'first_name'      => $_POST['username'],
	'last_name'       => $_POST['lastname'],
	'user_registered' => date('d F Y'), 
	'role'            => $_POST['user_role'],
    'show_admin_bar_front' => false // (строка) роль пользователя
);


$user_id = wp_insert_user( $userdata ) ;

	if( ! is_wp_error( $user_id ) ) {
		$json['success'] =  true;
	} else {
		$json['error'] = $user_id->get_error_message();
	} 

    
    exit( json_encode($json));
}
add_action('wp_ajax_registerUser', 'registerUser');
add_action('wp_ajax_nopriv_registerUser', 'registerUser');

