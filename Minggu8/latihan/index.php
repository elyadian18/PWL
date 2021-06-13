<!-- bagian htmlnya -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO CRUDSRUD</title> 

    <!-- link ke google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">

    <!-- lokasi css -->
    <link rel="stylesheet" type="text/css" href="assets/css/css2.css"> 
</head>

<body>
    <!-- menampilkan pesan setelah login -->
    <?php
    if (isset($_GET['pesan-login'])) {
        if ($_GET['pesan-login'] == "gagal") {
            echo ("Yah, loginnya gagal! username dan password kamu salah");
        } else if ($_GET['pesan-login'] == "logout") {
            echo ("Kamu berhasi logout. Sampai jumpa lagi, ya!");
        }
    }
    ?>
    <!-- akhir dari pesan login -->    
    <div class="kotak_login">
    <h2 class="tulisan_login">Silahkan login</h2>  
        <form action="proses/sekolah/cek_login.php" method="post">      
            <label>Username</label> 
            <input class="form_login"type="text" name="username" placeholder="username" required>                                       
            <label>Password</label>
            <input class="form_login" type="password" name="passwords" placeholder="password" required>                     
            <input type="submit" class="tombol_login" value="LOGIN">        
        </form>
    </div>
</body>

</html>