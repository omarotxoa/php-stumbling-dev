<?php 
require_once 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];

echo '<pre>';
print_r($_POST);
echo '</pre>';
$admin_password = 'admin';

if ($password == $admin_password) {
    header('Location: ' . HOME_PATH . 'admin/index.php');
} else {
    echo 'wrong password'; 
}
