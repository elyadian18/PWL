<?php
    /*
    Nama : Elya Dian Alfatikha
    NIM : A11.2019.11653 
    */
 
    
    // soal no 2
    echo "<h4>Soal No 2</h4>";
    
    if(isset($_POST['nilai'])){
        $nilai = $_POST['nilai'];

        echo "Loop - For";
        echo "</br>";
        $hasil = 0;
        $txt = "Hasil <b>".$nilai."</b>! = ";
        if($nilai == 0){
            echo $txt." <b>".$hasil."</b>";
        }else{
            $hasil = 1;
            for ($i=1; $i<= $nilai ; $i++) { 
                $hasil *= $i; 
            }
            echo $txt." <b>".$hasil."</b>";
        }

        echo "</br> </br>";

        echo "Loop - While";
        echo "</br>";
        $hasil = 0;
        $a=1;
        if($nilai == 0){
            echo $txt." <b>".$hasil."</b>";
        }else{
            $hasil = 1;
            while ($a <= $nilai) {
                $hasil *= $a;
                $a++;
            }
            echo $txt." <b>".$hasil."</b>";
        }

        echo "</br> </br>";

        echo "Loop - Do While";
        echo "</br>";
        $hasil = 0;
        if($nilai == 0){
            echo $txt." <b>".$hasil."</b>";
        }else{
            $hasil = 1;
            $b=1;
            do {
                $hasil *= $b;
                $b++;
            } while ($b <= $nilai);
            echo $txt." <b>".$hasil."</b>";
        }
    }

?>

<form method="post">
    <h3>Program Hitung Faktorial</h3>
    <label>Nilai</label>
    <input type="number" name="nilai" placeholder="Masukan angka" required>
    <button type="submit">Submit</button>
</form>