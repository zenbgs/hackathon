<?php
// Error Warning
echo validation_errors('<div class="alert alert-warning">', '</div>');

//attribut
$attribut = '';
//form open
echo form_open(base_url('index.php/admin/pegawai/tambah'),$attribut);
?>

<div class="row">
<div class="col-md-6">

	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control" placeholder="Nama Pegawai" value="<?= set_value('nama') ?>" required>
	</div>

  <div class="form-group">
		<label>NIP</label>
		<input type="text" name="nip" class="form-control" placeholder="NIP" value="<?= set_value('nip') ?>" required>
	</div>

  <div class="form-group">
		<label>Jabatan</label>
		<input type="text" name="jabatan" class="form-control" placeholder="Jabatan Pegawai" value="<?= set_value('jabatan') ?>" required>
	</div>

  <div class="form-group">
    <label>Status</label>
    <select name="status" class="form-control">
      <option value="aktif">Aktif</option>
      <option value="nonaktif">Non Aktif</option>
    </select>
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
