<?php
        $username = $_POST["nama"];
        $password = md5($_POST["password"]);
   
        $conn = mysqli_connect("localhost", "root", "", "db_kelas2a_2022");
        $query = mysqli_query($conn, "select * from mahasiswa where nim='$username' password='$password'");
        $data = mysqli_fetch_array($query);
        if(empty($username) || empty($password)){
            echo "Username dan password tidak boleh kosong";
        }else{
        if($data){
        echo "selamat anda berhasil login";
        }else{
            echo "anda gagal login";
        }
    }
?>