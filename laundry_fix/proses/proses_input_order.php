<?php
include "connect.php";

$user = (isset($_POST['user'])) ? htmlentities($_POST['user']) : "";
$notes = (isset($_POST['notes'])) ? htmlentities($_POST['notes']) : "";
$tanggal = (isset($_POST['tanggal'])) ? htmlentities($_POST['tanggal']) : "";
    function random($len)
    {

        $result = "";
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";

        $charArray = str_split($chars);

        for ($i = 0; $i < $len; $i++) {

            $randItem = array_rand($charArray);

            $result .= "" . $charArray[$randItem];
        }
        return $result;
    }

$invoice1 = random(4);
$invoice = mt_rand(100,999);

$getRandomId = "SI-CLEAN-$invoice$invoice1";

$sql="INSERT INTO tb_order (packet_id,user_id,total_price,qty,notes,status,tanggal,invoice_id) VALUES ";
$urut = 0;
for ($i=0;$i<count($_POST['layanan']);$i++) 
{
  	$sql .= "('".$_POST['layanan'][$i]."','".$user."','0','".$_POST['qty'][$i]."','".$notes."','0','".$tanggal."','".$getRandomId."'), ";
}
$sql = rtrim($sql, ', ');
$query = mysqli_query($conn, $sql);

if ($query) {
    $message = '<script>alert("Data berhasil dimasukkan")
window.location="../order"</script>
</script>';
} else {
    $message = '<script>alert("Data gagal dimasukkan")</script>';
}
echo $message;
?>