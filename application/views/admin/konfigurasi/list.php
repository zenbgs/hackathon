<div class="row">
    <?php if($this->session->flashdata('sukses')){ ?>
    <div class="alert alert-success text-white alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>Sukses!</strong>
            <?= $this->session->flashdata('sukses') ?></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <?php } ?>
    <div class="col-12 col-xl-6">

        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Konfigurasi Website</h6>
            </div>
            <div class="card-body p-3">
                <?= form_open_multipart(base_url('admin/konfigurasi')); ?>
                <div class="form-group">
                    <label for="judul">Sejarah Singkat</label>
                    <textarea class="form-control" name="sejarah" id="editor" rows="3"
                        required=""><?= $konfigurasi->sejarah ?></textarea>
                </div>
                <div class="form-group">
                    <label for="editor">Logo Website</label>
                    <br>
                    <img src="<?= base_url('assets/upload/image/'.$konfigurasi->logo) ?>" id="foto" class="fotoZenDua">
                    <br>
                    <br>
                    <input type="file" name="logo" onchange="fotoShw(event)" class="form-control" id="upload-photo">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-body p-3">
                <div class="form-group">
                    <label for="gambar" class="form-control-label">Alamat</label>
                    <textarea name="alamat" id="" class="form-control" rows="3"><?= $konfigurasi->alamat ?></textarea>
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Telepon</label>
                    <input type="text" name="telepon" class="form-control" id="" value="<?= $konfigurasi->telepon ?>">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $konfigurasi->email ?>" id="">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Twitter</label>
                    <input type="text" name="twitter" class="form-control" value="<?= $konfigurasi->twitter ?>" id="">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="<?= $konfigurasi->facebook ?>" id="">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Instagram</label>
                    <input type="text" name="instagram" class="form-control" value="<?= $konfigurasi->instagram ?>"
                        id="">
                </div>

                <br>
                <div class="form-group">
                    <button type="submit" class="btn bg-gradient-info">Submit</button>
                    <a href="<?= base_url('admin/berita') ?>" class="btn bg-gradient-secondary"
                        style="float:right !important;">Kembali</a>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>