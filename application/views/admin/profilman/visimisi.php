<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

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
echo form_open_multipart(base_url('index.php/admin/profilman/simpan/'.$vm->id_profil),$attribut);
?>

<div class="col-md-12">
	<div class="form-group form-group-lg">
		<label>Visi Man 1 Kota Malang</label>
		<textarea class="form-control" id="editor" name="visi" rows="3" cols="30"><?= $vm->visi ?></textarea>
	</div>
</div>


<div class="col-md-12">
	<div class="form-group">
		<label>Misi Man 1 Kota Malang</label>
		<textarea name="misi" class="form-control" id="editor2" placeholder="Isi Program"><?= $vm->misi ?></textarea>
	</div>


	<div class="form-group text-right">
		<button type="submit" name="submit" class=" btn btn-success btn-lg">
			<i class="fa fa-save"></i> Simpan Visi & Misi
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
