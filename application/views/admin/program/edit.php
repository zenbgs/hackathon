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
echo form_open_multipart(base_url('index.php/admin/program/edit/'.$program->id_program),$attribut);
?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Judul Program</label>
		<input type="text" name="judul_program" class="form-control" placeholder="Judul Program" value="<?= $program->judul_program ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Status Program</label>
		<select name="status_program" class="form-control">
			<option value="Publish">Publish</option>
			<option value="Draft" <?php if($program->status_program == "Draft") { echo "selected"; } ?>>Draft</option>
		</select>
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
		<textarea name="isi_program" class="form-control tinymce" placeholder="Isi Program"><?= $program->isi_program ?></textarea>
	</div>

	<div class="form-group">
		<label>Keywords Program (Untuk SEO Program)</label>
		<textarea name="keywords" class="form-control" placeholder="Keywords Program"><?= $program->keywords ?></textarea>
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