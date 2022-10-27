<?php
session_start();
if(!empty($_SESSION['username_xyz'])){
    header("location:dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LOGIN</title>
</head>
<body>
    <form action="hasil_login.php" method="post">
        <h1> Untuk halaman login </h1>
            <hr>
            Username : <input type="text" name="username">
            <br>
            Password :  <input type="password" name="password">
            <br>

            <input type="submit" value="login">
            <a href="regist.php"> belum punya akun? daftar disini!</a>
    </form>

    
</body>
</html>