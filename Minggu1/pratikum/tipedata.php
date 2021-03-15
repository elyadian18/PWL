<?php
$nim = "A11.2019.11653";
$nama = 'Elya Dian Alfatikha';
$umur = 22;
$nilai = 3.84;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>