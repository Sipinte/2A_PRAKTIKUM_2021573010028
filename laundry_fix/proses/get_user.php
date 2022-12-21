<?php
    //open connection to mysql db
    include "connect.php";
    //fetch table rows from mysql db
    $q = intval($_GET['q']);

   $result = mysqli_query($conn, "SELECT id_user, username, nama, nohp, alamat FROM tb_user WHERE id_user = '$q'");

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
?>