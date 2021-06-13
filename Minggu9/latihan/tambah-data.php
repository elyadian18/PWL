<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
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
    <h1>Tambah data sekolah</h1>    
    <div style="clear:both">&nbsp;</div>   
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama-sekolah" ></td>
                </tr>
                <tr>
                    <td>Alamat sekolah</td>
                    <td><input type="text" name="alamat-sekolah"></td>
                </tr>
                <tr>                
                    <td></td> 
                    <td><button type="submit" name="kirim" value="kirim">Simpan</button>
                        <button type="reset" value="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div>
        
</body>

</html>