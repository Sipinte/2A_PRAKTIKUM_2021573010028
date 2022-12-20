<html>
    <body>
        <?php
            echo "Mencari jumlah huruf vokal dalam suatu kata";
            echo "<br>";
            $jumlah = 0;
            $kata = "Belajar PHP";
            $huruf = "a";
    for ($i=0; $i<=strlen($kata); $i++)
                {
                    if(substr($kata, $i, 1) == $huruf)
                    {
                        $jumlah ++;
                    }

                }
                echo "Jumlah Huruf ". $huruf." Dalam Kata ". $kata." : ";
                echo "<br>";
                echo $jumlah;
                ?> 
    </body>
</html>