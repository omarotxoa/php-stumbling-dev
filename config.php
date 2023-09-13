<?php 
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';

if($_SERVER['HTTP_HOST'] === "stumbling.dev" || $_SERVER['HTTP_HOST'] === "dev.stumbling.dev") {
    define('HOME_PATH', $protocol . $_SERVER['HTTP_HOST'] . '/');
} else {
    define('HOME_PATH', $protocol . $_SERVER['HTTP_HOST'] . '/php-stumbling-dev/');
}

?>