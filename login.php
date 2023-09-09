<?php 

$username = $_POST['username'];
$password = $_POST['password'];

echo '<pre>';
print_r($_POST);
echo '</pre>';

header('Location: admin.php');