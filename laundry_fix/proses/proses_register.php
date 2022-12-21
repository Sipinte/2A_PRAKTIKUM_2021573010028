<?php
include "connect.php";
$name = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$level = ('5');
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";


$kode_rand=rand(10000,99999);
$target_dir = "../assets/img/".$kode_rand;
$target_file = $target_dir.basename($_FILES['foto']['name']);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (!empty($_POST['input_register_validate'])) {
    if ($_FILES['foto']['tmp_name']) {
        //apakah gambar apa bukan
        $cek = getimagesize($_FILES['foto']['tmp_name']);
        if ($cek === false) {
            $message = "Ini Bukan File Gambar/Foto";
            $statusUpload = 0;
        } else {
            $statusUpload = 1;
            if (file_exists($target_file)) {
                $message = "Maaf, File yang dimasukkan sudah ada";
                $statusUpload = 0;
            } else {
                if ($_FILES['foto']['size'] > 500000) { //500000 = 500Kb
                    $message = "File Foto yang diupload terlalu besar";
                    $statusUpload = 0;
                } else {
                    if ($imageType != "jpg" && $imageType != "jpeg" && $imageType != "png" && $imageType != "gif") {
                        $message = "Maaf,hanya diperbolehkan gambar yang memiliki format JPG , JPEG , PNG , dan  GIF";
                        $statusUpload = 0;
                    }
                }
            }
        }
        if ($statusUpload == 0) {
            $message = '<script>alert ("' . $message . ', Gambar tidak dapat diupload");
                window.location="../register"
                </script>';
        } else {
            $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
            if (mysqli_num_rows($select) > 0) {
                $message = '<script>alert("Akun yang dimasukkan telah ada");
                        window.location="../register"</script>';
            } else {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
                    $query = mysqli_query($conn, "INSERT INTO tb_user (foto,nama,username,level,nohp,alamat,password)
                values ('$kode_rand','$name', '$username', '$level', '$nohp', '$alamat', '$password')");

                    if ($query) {
                        $message = '<script>alert ("Data berhasil dimasukkan")
                                window.location="../login"
                                </script>';
                    } else {
                        $message = '<script>alert ("Data gagal dimasukkan")
                                window.location="../register"
                                </script>';
                    }
                } else {
                    $message = '<script>alert ("Maaf terjadi kesalahan, file tidak dapat diupload")
                                window.location="../register"
                                </script>';
                }
            }
        }
        echo $message;
    }else{
        $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Akun yang dimasukkan telah ada");
                    window.location="../register"</script>';
        } else {
            $query = mysqli_query($conn, "INSERT INTO tb_user (foto,nama,username,level,nohp,alamat,password)
            values ('','$name', '$username', '$level', '$nohp', '$alamat', '$password')");
            if ($query) {
                $message = '<script>alert ("Data berhasil dimasukkan")
                        window.location="../login"
                        </script>';
            } else {
                $message = '<script>alert ("Data gagal dimasukkan")
                        window.location="../register"
                        </script>';
            }
            echo $message;
        }
         
    }
}

?>

<!-- if (!empty($_POST['input_register_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Akun yang dimasukkan telah ada");
                    window.location="../register"</script>';
    } else {
        $query = mysqli_query($conn, "INSERT INTO tb_user (nama,username,level,nohp,alamat,password) 
        values ('$name', '$username', '$level', '$nohp', '$alamat', '$password')");
        if ($query) {
            $message = '<script>alert("Akun anda berhasil didaftarkan")
                    window.location="../login"</script>';

        } else {
            $message = '<script>alert("Data Gagal dimasukkan")</script>';
        }
    }
}
echo $message;
?> -->