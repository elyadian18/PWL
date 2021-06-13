<?php
$id = $_GET['id'];
require 'model.php';

$model = new Model();
$data = $model->find($id);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <link rel="stylesheet" type="text/css" href="assets/css/css.css"> 

</head>

<body>
    <div class="header"> 
    <div class="big-logo">Latihan CRUD PBO</div> 
    <?php include 'menu.php';?> 
    </div>
    <div class="content">
    <div class="container">
    <br><br><a class="btn pull-right" href="index.php">Kembali</a>      
    <h1>Edit data sekolah</h1>    
    <div style="clear:both">&nbsp;</div>
        <form action="proses.php?" method="post">
            <table>
                <tr>
                    <td>
                    <td><input type="hidden" name="id" value="<?= $data->id_sekolah ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama-sekolah" id="" value="<?php echo $data->nama; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat-sekolah" id="" value="<?php echo $data->alamat; ?>"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit_edit">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
    </div>
</body>

</html>