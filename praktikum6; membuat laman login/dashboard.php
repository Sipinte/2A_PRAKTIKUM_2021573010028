<?php
session_start();
if(empty($_SESSION['username_xyz'])){
    header("location:login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>dashboard</title>
</head>
<body>
    <h2>ini adalah halaman dashboard</h2>
    <a href="logout.php">logout</a>
</body>
</html>