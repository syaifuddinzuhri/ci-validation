<div class="container">
	<div class="row my-5">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					Form Mahasiswa
				</div>
				<div class="card-body">
					<?php
					$attribute = array('id' => 'form-mahasiswa');
					echo form_open(base_url() . 'welcome/create', $attribute);

					echo form_label('NRP', 'nrp');
					echo form_input(array(
						'type'  => 'text',
						'name'  => 'nrp',
						'id'    => 'nrp',
						'placeholder'    => 'Masukkan NRP',
						'class' => 'form-control'
					), set_value('nrp'));
					echo form_error('nrp', '<div class="text-danger small">', '</div>');
					echo form_label('Nama', 'nama', array('class' => 'mt-3'));
					echo form_input(array(
						'type'  => 'text',
						'name'  => 'nama',
						'id'    => 'nama',
						'placeholder'    => 'Masukkan nama',
						'class' => 'form-control'
					), set_value('nama'));
					echo form_error('nama', '<div class="text-danger small">', '</div>');
					echo form_label('Jenis Kelamin', 'jenis_kelamin', array('class' => 'mt-3'));
					echo '<div class="form-check">';
					echo form_radio(array('name' => 'jenis_kelamin', 'class' => 'form-check-input', 'id' => 'jk1', 'value' => 'L')) . form_label('Laki-laki', 'L', array('class' => 'form-check-label', 'for' => 'jk1'));
					echo '</div>';
					echo '<div class="form-check">';
					echo form_radio(array('name' => 'jenis_kelamin', 'class' => 'form-check-input', 'id' => 'jk2', 'value' => 'P')) . form_label('Perempuan', 'P', array('class' => 'form-check-label', 'for' => 'jk2'));
					echo '</div>';
					echo form_error('jenis_kelamin', '<div class="text-danger small">', '</div>');
					echo form_submit('submit', 'Simpan', array('class' => 'btn btn-primary mt-4'));
					echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
