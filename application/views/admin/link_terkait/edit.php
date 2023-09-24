<?php
// Error Warning
echo validation_errors('<div class="alert alert-warning">', '</div>');

//attribut
$attribut = '';
//form open
echo form_open(base_url('index.php/admin/konfigurasi/editLinkTerkait/'.$link->id_link),$attribut);
?>

<div class="row">
<div class="col-md-6">

	<div class="form-group">
		<label>Nama Link</label>
		<input type="text" name="nama_link" class="form-control" placeholder="Nama Link" value="<?= $link->nama_link ?>" required>
	</div>

  <div class="form-group">
		<label>Link</label>
		<input type="text" name="link" class="form-control" placeholder="Link" value="<?= $link->link ?>" required>
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
