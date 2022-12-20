<?php
session_start();
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$passwordlama = md5('passwordlama') ? md5(htmlentities($_POST['passwordlama'])) : "";
$passwordbaru = md5('passwordbaru') ? md5(htmlentities($_POST['passwordbaru'])) : "";
$repasswordbaru = md5('repasswordbaru') ? md5(htmlentities($_POST['repasswordbaru'])) : "";

if (!empty($_POST['ubah_password_validate'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_user where username='$_SESSION[username_cafe]' && password='$passwordlama'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        if ($passwordbaru == $repasswordbaru) {
            $query = mysqli_query($conn, "UPDATE tb_user set password='$passwordbaru' where username='$_SESSION[username_cafe]'");
            if ($query) {
                $message = '<script>alert("Password berhasil diupdate");
                window.history.back()</script>
                </script>';
            } else {
                $message = '<script>alert("Password gagal diupdate");
                window.history.back()</script>
                </script>';
            }
        } else {
            $message = '<script>alert("Password baru tidak sama");
            window.history.back()</script>
            </script>';
        }
    } else {
        $message = '<script>alert("Password lama tidak sesuai");
                window.history.back()</script>
                </script>';
    }
}else{
    header('location:../home');
}
echo $message;
?>