<div class="content">
	<div class="container">
		<?php
			Flasher::Message();
		?>
	</div>

	<div class="container">
		<div class="col-sm-12">
			<br><br><a class="btn pull-right" href="<?= BASEURL; ?>/sekolah/tambah">Tambah Data Baru</a> 
			<h2>Data Sekolah</h2>			
			<div style="clear:both">&nbsp;</div>    
			<table class="data">
				<thead>
					<tr>
						<th>Nomer</th>
						<th>Nama Sekolah</th>
						<th>Alamat</th>
						<th colspan="2">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>	
					<?php foreach ($data['skl'] as $skl) :?>
						<tr>
							<td><?= $no ++ ?></td>
							<td><?= $skl['nama'];?></td>
							<td><?= $skl['alamat'];?></td>
							<td>
								<a href="<?= BASEURL; ?>/sekolah/edit/<?= $skl['id'] ?>" class="badge badge-primary badge-pill tampilModalUbah" data-toggle="modal" data-target="#exampleModal" data-id="<?= $skl['id'] ?>" data-zurl="<?= BASEURL; ?>">Edit</a>
							</td>
							<td>
							<a href="<?= BASEURL; ?>/sekolah/hapus/<?= $skl['id'] ?>" class="badge badge-primary badge-pill" onclick="return confirm('Hapus data?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>		
		</div>	
</div>

