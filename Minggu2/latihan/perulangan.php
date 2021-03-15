<?php
    /*
    Nama : Elya Dian Alfatikha
    NIM : A11.2019.11653 
    */

    // soal no 1
    echo "<h4>Soal No 1</h4>";
    echo "Loop - For";
    for ($i=1; $i <= 5; $i++) { 
        echo "</br>";
        for ($j=1; $j <=$i; $j++) { 
            echo $i;
        }
    }
    echo "</br> </br>";
    echo "Loop - While";
    $a = 1;
    while ($a <= 5) {
        echo "</br>";
        $b = 1;
        while ($b <= $a) {
            echo $a;
            $b++;
        }
        $a++;
    }
?>