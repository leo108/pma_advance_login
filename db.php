<?php
if(!defined('PMA_ADVANCE_LOGIN')){
    echo "Attack";
    exit;
}
return array(
    'localhost' => array(
        'host' => '127.0.0.1',
        'port' => 3306,
        'user' => 'root',
        'password' => 'toor',
        'cfgupdate' => array('verbose' => 'localhost by sso'),
    ),
);
