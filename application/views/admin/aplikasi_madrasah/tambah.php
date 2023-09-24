<?php
// Error Warning
echo validation_errors('<div class="alert alert-warning">', '</div>');

//attribut
$attribut = '';
//form open
echo form_open(base_url('index.php/admin/konfigurasi/tambahAplikasiMadrasah'),$attribut);
?>

<div class="row">
<div class="col-md-6">

	<div class="form-group">
		<label>Nama Aplikasi</label>
		<input type="text" name="nama_aplikasi" class="form-control" placeholder="Contoh: SPDB (Seleksi Peserta Didik Baru)" value="<?= set_value('nama_aplikasi') ?>" required>
	</div>

  <div class="form-group">
		<label>Link Aplikasi</label>
		<input type="text" name="link_aplikasi" class="form-control" placeholder="https://aplikasi.com" value="<?= set_value('link_aplikasi') ?>" required>
	</div>

  <div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan">
		<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
	</div>

</div>

</div>

<?php
//Form close
echo form_close();
?>
