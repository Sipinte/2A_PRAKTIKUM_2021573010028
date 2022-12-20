<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <form action="proses_select.php" method="post">
            <label for="">Tanggal :</label>
            <select name="tanggal">
                <?php
                for($i=1;$i<32;$i++){
                    echo "<option value='$i'> $i </option>";
                }
                ?>
            </select>
            <input type="submit" value="Kirim">
        </form>
    </body>
</html>