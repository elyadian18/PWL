<?php
include '../../conf.php';
include '../../conn.php';
ob_start();
$hasil = $koneksi->prepare("SELECT *FROM sekolah WHERE id ='".get('id')."'");
$hasil->execute();
$data =$hasil->fetch(PDO::FETCH_OBJ);

function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

$base_url = explode('proses', url());
$url = $base_url[0];
?>

<h1>
    <img style="max-width:50px;" src="<?php echo $url.'assets/foto/'.$data->logo;?>">
    <?php echo $data->nama;?>
</h1>
<h3>
    <?php echo $data->alamat;?>
</h3>


<?php
$html = ob_get_clean();
$dompdf = new Dompdf\Dompdf();
$dompdf->loadHtml($html);
$dompdf->set_option('isRemoteEnabled', TRUE);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream('laporan.pdf',array('Attachment'=>0));
?>