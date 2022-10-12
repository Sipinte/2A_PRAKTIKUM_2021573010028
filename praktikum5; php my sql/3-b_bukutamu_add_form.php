<html>
<head>
    <title>Simpan Buku Tamu</title>
</head>
<body>
    <h1>Simpan Buku Tamu MySQL</h1>
    <?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    $conn = mysqli_connect("localhost", "root", "", "db_saya")
    or die ("koneksi gagal");
    echo "Nama     : $nama <br>";
    echo "Email    : $email <br>";
    echo "Komentar    : $komentar <br>";
    $hasil = mysqli_query($conn, "insert into bukutamu (nama, email, komentar) values ('$nama', '$email', '$komentar')");
    echo "Simpan buku tamu berhasil dilakukan";
    ?>
    </body>
</html>