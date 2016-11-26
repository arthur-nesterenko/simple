<?php


function registerUser()
{
  $json = array();
   $creds = array(
       'username' => $_POST['username'],
       'lastname' => $_POST['lastname'],
       'surname' => $_POST['surname'],
        'user_role' => $_POST['user_role'],
       'password' => $_POST['password'],
       'repeat_password' => $_POST['repeat_password']
       );
//    $creds['user_login'] = 'Leonid';
//    $creds['user_password'] = 'password';
//    $creds['remember'] = true;

    $json['creds'] = $creds;
    $json['teste'] = 'работаем дальше';
    exit( json_encode($json));
}
add_action('wp_ajax_registerUser', 'registerUser');
add_action('wp_ajax_nopriv_registerUser', 'registerUser');

