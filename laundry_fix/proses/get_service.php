<?php
    //open connection to mysql db
    include "connect.php";
    //fetch table rows from mysql db
    $q = intval($_GET['q']);

   $result = mysqli_query($conn, "SELECT id_paket, nama_paket, harga FROM tb_daftar_paket WHERE id_paket = '$q'");

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
?>