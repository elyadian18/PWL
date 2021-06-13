<?php
//memanggil file daftar-sekolah
require 'model.php';

//mengakses class koneksi-database
$aksesModel = new Model();
$index = 1;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar sekolah di semarang</title>
    <link rel="stylesheet" type="text/css" href="assets/css/css.css"> 
</head>

<body>
    <div class="header"> 
    <div class="big-logo">Latihan CRUD PBO</div> 
    <?php include 'menu.php';?> 
    </div> 
    <div class="content">
    <div class="container"> 
    <br><br><a class="btn pull-right" href="tambah-data.php">Tambah Data Baru</a> 
    <h2>Data Sekolah</h2>
    <div style="clear:both">&nbsp;</div>      
    <table class="data">
        <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama Sekolah</th>
                <th>Alamat Sekolah</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>

        <!--  -->
        <tbody>
            <?php
            $hasil = $aksesModel->tampil_data();
            if (!empty($hasil)) {
                foreach ($hasil as $data) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->alamat ?></td>
                        <td>
                            <a name="edit" id="edit" href="edit.php?id=<?= $data->id_sekolah ?>">Edit</a>
                        </td>
                        <td>
                            <a name="hapus" id="hapus" href="proses.php?id=<?= $data->id_sekolah ?>">Hapus</a>                        
                        </td>
                    </tr>
                <?php endforeach;
            } else {
                ?>
                <tr>
                    <td colspan="9">belum ada data pada tabel 'sekolah_terdekat'</td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
    </div>
    </div>
</body>

</html>