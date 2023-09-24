<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}

//Error Warning
echo validation_errors('<div class="alert alert-warning">','</div>');

//Error Upload
if(isset($error_upload)){
	echo '<div class="alert alert-warning">'.$error_upload.'</div>';
}

//Atribut
$attribut = 'class="alert alert-info"';
//form open
echo form_open_multipart(base_url('index.php/admin/profilman/struktur'),$attribut);
?>

<input type="hidden" name="id_profil" value="<?= $struktur->id_profil ?>">
<input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user'); ?>">

<div class="col-md-6">

	<div class="form-group">
		<label>Struktur Organisasi</label>
		<input type="file" name="struktur" class="form-control" required="required">
	</div>

	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Struktur">
	</div>

</div>

<div class="col-md-6">

	<?php if($struktur->struktur_organisasi != "") { ?>
	<img src="<?= base_url('assets/upload/image/'.$struktur->struktur_organisasi) ?>" alt="Struktur Organisasi" class="img img-responsive img-thumbnail">
	<?php }else{ ?>

	<p class="alert alert-success text-center">Belum Ada Struktur Organisasi</p>

	<?php } ?>

</div>

<div class="clearfix"></div>

<?php
//form close
echo form_close();
?>
