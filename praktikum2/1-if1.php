<html>
    <body>
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $d = date("D");
        $date = date("d-m-Y H:i:s");
        if ($d == "Mon"){
            $d = "Senin";
            echo "Selamat Belajar <br>";
        } else
            echo "ini hari $d <br>";
            echo $d." ".$date;
            ?>
    </body>
</html>