<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$status = (isset($_POST['status'])) ? htmlentities($_POST['status']) : "";



if (!empty($_POST['edit_order_validate'])) {
        $query = mysqli_query($conn, "UPDATE tb_order set status='$status' where id='$id'");
        if ($query) {
            $message = '<script>alert("Berhasil rubah status order")
        window.location="../order"</script>
        </script>';
        } else {
            $message = '<script>alert("Data gagal dimasukkan")</script>';
        }
}
echo $message;
?>