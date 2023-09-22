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
echo form_open_multipart(base_url('index.php/admin/galeri/edit/'.$galeri->id_galeri),$attribut);
?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Judul Galeri</label>
		<input type="text" name="judul_galeri" class="form-control" placeholder="Judul Galeri" value="<?= $galeri->judul_galeri ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Posisi Galeri</label>
		<select name="posisi_galeri" class="form-control">
			<option value="Galeri">Galeri</option>
			<option value="Homepage" <?php if($galeri->posisi_galeri == "Homepage") { echo "selected"; } ?>>Homepage Slider</option>
		</select>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Link / URL Galeri</label>
		<input type="url" name="website" class="form-control" placeholder="<?= site_url() ?>" value="<?= $galeri->website ?>">
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
		<label>Isi Galeri</label>
		<textarea name="isi_galeri" class="form-control tinymce" placeholder="Isi Galeri"><?= $galeri->isi_galeri ?></textarea>
	</div>

	<div class="form-group text-right">
		<button type="submit" name="submit" class=" btn btn-success btn-lg">
			<i class="fa fa-save"></i> Simpan Galeri			
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