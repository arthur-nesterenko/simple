<?php

function add_config_js()
{
    $config = array(
        'ajax_register' => admin_url('admin-ajax.php?action=registerUser'),
        'ajax_login' => '10'
    );
    wp_localize_script( 'jquery', 'CONFIG',   $config  );

}
add_action('wp_enqueue_scripts','add_config_js',101);