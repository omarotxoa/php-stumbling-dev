<?php 
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
define('HOME_PATH', $protocol . $_SERVER['HTTP_HOST'] . '/php-stumbling-dev/');
?>