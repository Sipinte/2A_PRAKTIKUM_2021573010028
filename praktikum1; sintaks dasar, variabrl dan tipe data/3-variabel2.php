<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jalan ="Medan - B.Aceh";
    $noRumah = 29;
    $blok = "4C";
    $jumlahPenghuni = 3;

    echo "Hasil Variabel variabel jalan + variabel 
    noRumah adalah ";
    echo $alamat = $jalan.$noRumah;
    echo "<br>";

    echo "Hasil Variabel variabel noRumah + variabel
    jumlahPenghuni adalah";
    echo $hasil = $noRumah+$jumlahPenghuni;
    echo "<br>";

    echo "Hasil Variabel variabel blok + variabel noRumah
    adalah";
    echo $hasil = $blok.$noRumah;
    echo "<br>";
    ?>
</body>
</html>