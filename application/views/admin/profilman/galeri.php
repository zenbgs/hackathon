<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}

if($this->session->flashdata('gagal')){
    echo '<div class="alert alert-danger">';
    echo $this->session->flashdata('gagal');
    echo '</div>';
  }
?>

<style>
.counterwhite {
    color: #000000 !important;
}
</style>

<?php
// Error Warning
echo validation_errors('<div class="alert alert-warning">', '</div>');

//Error Upload
if(isset($error_upload)) {
	echo '<div class="alert alert-warning">'.$error_upload.'</div>';
}
?>



<section class="content alert alert-info">
    <div class="row">
        <div class="col-lg-6">
            <?= form_open_multipart(base_url('index.php/admin/profilman/galeri_simpan')); ?>
            <div class="box box-primary">

                <div class="box-body">

                    <div class="form-group">
                        <label class="counterwhite">Upload Galeri</label>
                        <input type="file" class="form-control" required name="galeri">
                    </div>

                    <div class="form-group">
                        <label class="counterwhite">Caption Galeri (singkat saja)</label>
                        <input type="text" class="form-control" required name="caption">
                    </div>

                    <br>
                    <br>

                    <input type="submit" name="status" value="Submit" class="btn btn-primary btn-block">
                </div>
            </div>
        </div>
        <?= form_close(); ?>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-body counterwhite">
                    <table id="example3" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th width="30">Gambar</th>
                                <th>Caption</th>
                                <th width="110">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($galeri as $galeri) {
                            ?>
                            <tr>
                                <td><img src="<?= base_url('assets/upload/galeri/'.$galeri->gambar_galeri) ?>"
                                        width="60" class="img img-thumbnail"></td>
                                <td>
                                    <?= $galeri->caption_galeri ?>
                                </td>
                                <td>
                                    <button type="button" data-toggle="modal"
                                        data-target="#yourModal<?= $galeri->id_galeri ?>" title="Edit Program"
                                        class="btn btn-warning btn-xs">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>

                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                        data-target="#Delete<?= $galeri->id_galeri ?>">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </button>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="yourModal<?= $galeri->id_galeri ?>" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Slider</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <?= form_open_multipart(base_url('index.php/admin/profilman/galeri_edit/' . $galeri->id_galeri)); ?>
                                                    <div class="form-group">
                                                        <img src="<?= base_url('assets/upload/galeri/'.$galeri->gambar_galeri) ?>"
                                                            id="imageSlider" class="img-responsive" alt="">
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <input type="file" name="galeri_edit"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="counterwhite">Caption Galeri (singkat
                                                                    saja)</label>
                                                                <input type="text" required name="caption_edit"
                                                                    class="form-control"
                                                                    value="<?= $galeri->caption_galeri ?>">
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                    <?= form_close() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal Edit -->

                                    <!-- Modal -->

                                    <div class="modal modal-danger fade" id="Delete<?= $galeri->id_galeri ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Menghapus data: </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Yakin ingin menghapus data ini ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline pull-left"
                                                        data-dismiss="modal">Close</button>

                                                    <button type="button" class="btn btn-outline pull-right"
                                                        data-dismiss="modal"><i class="fa fa-backward"></i> Tidak,
                                                        Batalkan</button>

                                                    <a href="<?= base_url('index.php/admin/profilman/galeri_delete/'.$galeri->id_galeri) ?>"
                                                        class="btn btn-outline pull-right"><i class="fa fa-trash-o"></i>
                                                        Ya, Hapus Data Ini</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->


                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>