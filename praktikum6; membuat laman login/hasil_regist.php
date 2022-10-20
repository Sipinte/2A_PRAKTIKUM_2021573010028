
    <?php
    $username = $_POST["nama"];
    $password = $_POST["password"];
    $password2 = $_POST["passwordd"];
    $nim = $_POST["nim"];
    $kelas = $_POST["kelas"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    
    if(empty($username) || empty ($password) || empty ($password2)){
        echo '<script type ="text/JavaScript">';  
         echo 'alert("masukkan username dan password")';  
         echo '</script>';
    }
    elseif ($password!=$password2){
        echo '<script type ="text/JavaScript">';  
         echo 'alert("harap masukkan password yang sesuai")';  
         echo '</script>';
    }else{
        $conn = mysqli_connect("localhost", "root", "", "db_kelas2a_2022");
        $hasil = mysqli_query($conn, "insert into mahasiswa (nim, password, nama, kelas, alamat, no_hp) values ('$nim',  '$password', '$username', '$kelas', ' $alamat', '$no_hp')");
        //$data = mysqli_fetch_array($hasil);
        if($hasil){
         echo '<script type ="text/JavaScript">';  
         echo 'alert("sign in berhasil dilakukan")';  
         echo '</script>';
    }
}
    
?>