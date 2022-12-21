<?php
include "connect.php";
$id_paket = (isset($_POST['id_paket'])) ? htmlentities($_POST['id_paket']) : "" ;
$nama_paket = (isset($_POST['nama_paket'])) ? htmlentities($_POST['nama_paket']) : "";
$keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";
$harga = (isset($_POST['harga'])) ? htmlentities($_POST['harga']) : "";


$kode_rand = rand(10000, 99999)."-";
$targt_dir = "../assets/img/".$kode_rand;
$target_file = $targt_dir.basename($_FILES['foto']['name']);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (!empty($_POST['input_menu_validate'])){
// Cek Apakah gambar atau bukan
$cek = getimagesize($_FILES['foto']['tmp_name']);
if($cek == false){
    $message = "ini bukan file gambar";
    $statusUpload = 0;
}else{
    $statusUpload = 1;
    if(file_exists($target_file)){
        $message = "Maaf, file yang dimasukkan telah ada";
        $statusUpload = 0;
    }else{
        if($_FILES['foto']['size'] > 500000){ //500kb
            $message = "File foto yang diupload terlalu besar";
            $statusUpload = 0;
        }else{
            if($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif"){
                $message = "Maaf, hanya diperbolehkan gambar yang memiiki format JPG, JPEG, PNG dan GIF";
                $statusUpload = 0;
            }
        }
    }
}

if($statusUpload == 0){
    $message = '<script>alert("Gambar tidak dapat diupload");
                window.location="../menu"</script>';
}else{
    $select = mysqli_query($conn, "SELECT * FROM tb_daftar_paket WHERE nama_paket = '$nama_paket'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Nama Menu yang dimasukkan sudah ada");
        window.location="../menu"</script>';
    }else{
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
            $query = mysqli_query($conn, "UPDATE tb_daftar_paket SET foto='". $kode_rand . $_FILES['foto']['name'] . "', nama_paket='$nama_paket', keterangan='$keterangan', harga='$harga' WHERE id_paket='$id_paket'");
        if($query){
            $message = '<script>alert("Data berhasil dimasukkan");
                        window.location="../menu"</script>';
        }else{
            $message = '<script>alert("Data gagal dimasukkan");
                        window.location="../menu"</script>';
        }
        }else{
            $message = '<script>alert("Maaf, Terjadi Kesalahan File Tidak Dapat Diupload");
                        window.location="../menu"</script>';
        }
        }
    }
}
echo $message;
?>