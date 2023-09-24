<?php
// Error Warning
echo validation_errors('<div class="alert alert-warning">', '</div>');

//Error Upload
if(isset($error_upload)) {
	echo '<div class="alert alert-warning">'.$error_upload.'</div>';
}

//attribut
$attribut = 'class="alert alert-info"';
//form open
echo form_open_multipart(base_url('index.php/admin/layanan/edit/'.$layanan->id_layanan),$attribut);
?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Judul Program</label>
		<input type="text" name="judul_layanan" class="form-control" placeholder="Judul Layanan" value="<?= $layanan->judul_layanan ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Status Program</label>
		<select name="status_layanan" class="form-control">
			<option value="Publish">Publish</option>
			<option value="Draft" <?php if($layanan->status_layanan == "Draft") { echo "selected"; } ?>>Draft</option>
		</select>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Harga Program</label>
		<input type="number" name="harga" class="form-control" placeholder="Harga" value="<?= $layanan->harga ?>">
	</div>
</div>


<div class="col-md-6">
	<div class="form-group">
		<label>Upload Gambar</label>
		<input type="file" name="gambar" class="form-control">
	</div>
</div>

<div class="col-md-12">
	<div class="form-group">
		<label>Isi Program</label>
		<textarea name="isi_layanan" class="form-control tinymce" placeholder="Isi Layanan"><?= $layanan->isi_layanan ?></textarea>
	</div>

	<div class="form-group">
		<label>Keywords Program (Untuk SEO Program)</label>
		<textarea name="keywords" class="form-control" placeholder="Keywords Layanan"><?= $layanan->keywords ?></textarea>
	</div>

	<div class="form-group text-right">
		<button type="submit" name="submit" class=" btn btn-success btn-lg">
			<i class="fa fa-save"></i> Simpan Program			
		</button>
		<button type="reset" name="reset" class=" btn btn-default btn-lg">
			<i class="fa fa-times"></i> Reset			
		</button>
	</div>
</div>

<div class="clearfix"></div>
<?php
//form close
echo form_close();
?>