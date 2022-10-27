<?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(empty($username) || empty($password)){
            echo "<script> 
            alert('Username dan password tidak boleh kosong');
            window.location=history.go(-1); 
            </script>";
        }else{
        $conn = mysqli_connect("localhost", "root", "", "db_kelas2a_2022");
        $query = mysqli_query($conn, "select * from mahasiswa where nama='$username' && password='$password'");
        $data = mysqli_fetch_array($query);
        if($data){
            $_SESSION['username_xyz'];
            echo "selamat anda berhasil login";
             header("location:dashboard.php");
        }else{
            echo "<script>
            alert('anda gagal login);
            window.location=history.go(-1); 
            </script>";
        }
    }
        
 
?>