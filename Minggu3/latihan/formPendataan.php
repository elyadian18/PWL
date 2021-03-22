<!DOCTYPE html>
<html>
    <!--
    Nama : Elya Dian Alfatikha
    NIM : A11.2019.11653 
    --> 
    <head>
        <title>Form Pendataan Mahasiswa</title>
    </head>
    <body>
        <form method="post">  
            <table border="0">
                <tr>
                    <th bgcolor="#DCDCDC">NIM</th>
                    <td>
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <th bgcolor="#DCDCDC">Program Studi</th>
                    <td>
                        <select name="prodi">
                            <option value="" disabled selected>Pilih Program Studi</option>
                            <option value="A11">Teknik Informatika S1</option>
                            <option value="A12">Sistem Informatika S1</option>
                            <option value="A22">Teknik Informatika D3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th bgcolor="#DCDCDC">Nilai Tugas</th>
                    <td>
                        <input type="number" name="Ntugas">
                    </td>
                </tr>
                <tr>
                    <th bgcolor="#DCDCDC">Nilai UTS</th>
                    <td>
                        <input type="number" name="Nuts">
                    </td>
                </tr>
                <tr>
                    <th bgcolor="#DCDCDC">Nilai UAS</th>
                    <td>
                        <input type="number" name="Nuas">
                    </td>
                </tr>
                <tr>
                    <th bgcolor="#DCDCDC" rowspan="3">Catatan Khusus</th>
                    <td>
                        <input type="checkbox" name="note1" value="Kehadiran >= 70%">
                        <label>Kehadiran >= 70%</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="note2" value="Interaktif dikelas">
                        <label>Interaktif dikelas</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="note3" value="Kehadiran >= 70%">
                        <label>Tidak terlambat mengumpulkan tugas</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="proses" value="Simpan">
                    </td>
                </tr>
            </table>
        </form>
        </br>
        </br>
        <hr>
        </br>
        </br>
    </body>
</html>

<?php

$nilai_akhir = 0;

if(isset($_POST['proses'])){

    $nim = $_POST['nim'];
    $kode_ps = $_POST['prodi'];
    $Ntugas = $_POST['Ntugas'];
    $Nuts = $_POST['Nuts'];
    $Nuas = $_POST['Nuas'];
    $cat_1 = '';
    $cat_2 = '';
    $cat_3 = '';

    if (isset($_POST['note1'])) {
        $cat1 = $_POST['note1'];
        $cat_1 = '<li>'.$cat1.'</li>';
    }

    if (isset($_POST['note2'])) {
        $cat2 = $_POST['note2'];
        $cat_2 = '<li>'.$cat2.'</li>';
    }

    if (isset($_POST['note3'])) {
        $cat3 = $_POST['note3'];
        $cat_3 = '<li>'.$cat3.'</li>';
    }

    if($kode_ps == 'A11'){
        $prodi = 'Teknik Informatika S1';
    }elseif ($kode_ps == 'A12') {
        $prodi = 'Sistem Informatika S1';
    }elseif ($kode_ps == 'A22') {
        $prodi = 'Teknik Informatika D3';
    }

    if (is_numeric($Ntugas) && is_numeric($Nuas) && is_numeric($Nuts)) {
        if ($Ntugas <= 100 && $Nuts <= 100 && $Nuas <= 100) {
            $nilai_akhir = (0.4*$Ntugas) + (0.3*$Nuts) + (0.3*$Nuas);
            $status = '';
            if ($nilai_akhir >= 60) {
                $status = "LULUS";
            }else{
                $status = "TIDAK LULUS";
            }
            $nilai_lulus = '';
            if ($nilai_akhir > 84 ) {
                $nilai_lulus = 'A';
            }elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
                $nilai_lulus = 'B';
            }elseif ($nilai_akhir >= 60 && $nilai_akhir <= 69) {
                $nilai_lulus = 'C';
            }elseif ($nilai_akhir >= 50 && $nilai_akhir <= 59) {
                $nilai_lulus = 'D';
            }else{
                $nilai_lulus = 'E';
            }

            echo '<table border="0">
                    <tr>
                        <th bgcolor="#DCDCDC">Program Studi</th>
                        <th bgcolor="#DCDCDC">NIM</th>
                        <th bgcolor="#DCDCDC">Nilai Akhir</th>
                        <th bgcolor="#DCDCDC">Status</th>
                        <th bgcolor="#DCDCDC">Catatan Khusus</th>
                    </tr>
                    <tr>
                        <td>'.$prodi.'</td>
                        <td>'.$nim.'</td>
                        <td>'.$nilai_lulus.'</td>
                        <td>'.$status.'</td>
                        <td><ul>'.$cat_1.''.$cat_2.''.$cat_3.'</ul></td>
                    </tr>
                </table>';
        }
        else{
            echo "<h3>Maaf nilai yang anda inputkan lebih dari 100 !</h3>";
        }
    }
    else{
        echo "<h3>Maaf nilai yang anda inputkan salah !</h3>";
    }
}

echo "";

?>