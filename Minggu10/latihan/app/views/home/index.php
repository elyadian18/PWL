<div class="content">
	<div class="container">
	<h2>Tambah Data Sekolah</h2>			
	<div style="clear:both">&nbsp;</div>  
      	<form action="<?= BASEURL; ?>/sekolah/simpansekolah" method="POST" enctype="multipart/form-data">
		  	<table>
				<tr>
					<td>Nama Sekolah</td>
					<td><input type="text" name="nama" id="nama"></td>
			  	</tr>			  
			  	<tr>
					<td>Alamat Sekolah</td>
					<td><input type="text" name="alamat" id="alamat"></td>
			 	</tr>
	      		<tr>
				  <td></td>
				  <td>				  
				  	<button type="submit">Simpan</button>
				  	<a class="btn" href="<?= BASEURL; ?>/sekolah">Kembali</a>
				  </td>
				</tr>
		  </table>
      	</form>
	</div>
</div>
  