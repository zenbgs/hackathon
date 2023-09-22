<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Tambah">
    + Tambah Baru
</button>

<!-- Modal -->

<div class="modal modal-default fade" id="Tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">

                <?php
//attribut
$attribut = 'class="form-horizontal"';

//form Open
echo form_open(base_url('index.php/admin/video'),$attribut);
?>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Link Video</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="link_video" placeholder="Link Youtube" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Judul</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="judul" placeholder="Judul Video" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-9">
                        <input type="submit" class="btn btn-success" name="submit" value="Submit">
                    </div>
                </div>

                <?php 
//form close
echo form_close();
?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success pull-right" data-dismiss="modal">
                    <i class="fa fa-times"></i> Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->