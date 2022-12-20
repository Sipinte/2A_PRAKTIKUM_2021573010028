<html>
<head>
    <title>Koneksi database mysql</title>
</head>
<body>
    <h1>koneksi database dengan mysqli_fetch_assoc</h1>
    <?php
     $conn = mysqli_connect("localhost", "root", "", "db_saya")
     or die("koneksi gagal");
     $hasil = mysqli_query($conn, "select * from liga");
    while($row = mysqli_fetch_array($hasil)){
        echo "Liga" .$row["negara"]; 
        echo "mempunyai " .$row["champion"]; 
        echo "wakil di liga champion <br>";
    }
    ?>
</html>