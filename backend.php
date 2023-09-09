<?php
$title = 'Admin Login';
require_once 'header.php';
?>
<body>
    <h1>Admin Login:</h1>
    <form action="login.php" method="POST">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>