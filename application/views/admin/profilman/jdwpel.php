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
echo form_open_multipart(base_url('index.php/admin/profilman/simpan/'.$jdwpel->id_profil),$attribut);
?>



<section class="content">
        <div class="row">
            <div class="col-lg-12">

                <div class="box box-primary">

                    <div class="box-body">

                        <div class="form-group">
                            <label>Jadwal Pelajaran MAN 1 Kota Malang</label>
                            <textarea name="jdwpel" id="editor" class="form-control"
                                placeholder="Masukkan Jadwal Pelajaran Baru..."><?= $jdwpel->jdwpel ?></textarea>
                        </div>
                        <button class="btn btn-primary center-block">Submit</button>
                    </div>
                </div>

            </div>

        </div>
</section>

<div class="clearfix"></div>
<?php
//form close
echo form_close();
?>