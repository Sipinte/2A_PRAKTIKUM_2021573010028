<?php

//1. buka koneksi database
$conn = mysqli_connect("LocalHost","root", "");
if($conn){
    echo "Koneksi Berhasil";
} else{
    echo "koneksi gagal";
}


//2. pilih database
mysqli_select_db($conn, "db_kelas2a_2022");



//3. query
$select = mysqli_select_db($conn,"SELECT * FROM mahasiswa");


//4. mengambil record/row
$data = mysqli_fetch_array($select);
echo $data ['nama']
?>