<div class="container">
	<div class="row my-5">
		<div class="col-12">
			<div class="alert alert-success" role="alert">
				Data berhasil ditambahkan
			</div>
			<ul class="list-group">
				<li class="list-group-item">NRP : <?php echo $mahasiswa['nrp']; ?></li>
				<li class="list-group-item">Nama : <?php echo $mahasiswa['nama']; ?></li>
				<li class="list-group-item">Jenis Kelamin : <?php echo $mahasiswa['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></li>
			</ul>
			<a href="<?php base_url() . 'welcome' ?>">Kembali</a>
		</div>
	</div>
</div>
