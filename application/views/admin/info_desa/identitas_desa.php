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
                <h6 class="mb-0">Identitas Desa</h6>
            </div>
            <div class="card-body p-3">
                <?= form_open_multipart(base_url('admin/info_desa')); ?>
                <div class="form-group">
                    <label for="judul">Nama Desa</label>
                    <input type="text" name="nama_desa" class="form-control" id="" value="<?= $info_desa->nama_desa ?>">
                </div>
                <div class="form-group">
                    <label for="judul">Kode Desa</label>
                    <input type="text" name="kode_desa" class="form-control" id="" value="<?= $info_desa->kode_desa ?>">
                </div>
                <div class="form-group">
                    <label for="judul">Kode Pos Desa</label>
                    <input type="text" name="kode_pos_desa" class="form-control" id="" value="<?= $info_desa->kode_pos_desa ?>">
                </div>
                <div class="form-group">
                    <label for="editor">Logo Desa</label>
                    <br>
                    <img src="<?= base_url('assets/upload/image/'.$info_desa->foto_logo_desa) ?>" id="foto" class="fotoZenDua">
                    <br>
                    <br>
                    <input type="file" name="foto_logo_desa" onchange="fotoShw(event)" class="form-control" id="upload-photo">
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-body p-3">
            <div class="form-group">
                    <label for="judul">NIP Kepala Desa</label>
                    <input type="text" name="nip_kepala_desa" class="form-control" id="" value="<?= $info_desa->nip_kepala_desa ?>">
                </div>
                <div class="form-group">
                    <label for="judul">Nama Kepala Desa</label>
                    <input type="text" name="nama_kepala_desa" class="form-control" id="" value="<?= $info_desa->nama_kepala_desa ?>">
                </div>
                <div class="form-group">
                    <label for="gambar" class="form-control-label">Alamat KaDes</label>
                    <textarea name="alamat_kantor_desa" id="" class="form-control" rows="3"><?= $info_desa->alamat_kantor_desa ?></textarea>
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">No Telp</label>
                    <input type="text" name="no_telp_desa" class="form-control" id="" value="<?= $info_desa->no_telp_desa ?>">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Email</label>
                    <input type="email" name="email_desa" class="form-control" value="<?= $info_desa->email_desa ?>" id="">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Nama Camat</label>
                    <input type="text" name="nama_camat" class="form-control" value="<?= $info_desa->nama_camat ?>" id="">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Nama Kabupaten</label>
                    <input type="text" name="nama_kabupaten" class="form-control" value="<?= $info_desa->nama_kabupaten ?>" id="">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Kode Kabupaten</label>
                    <input type="text" name="kode_kabupaten" class="form-control" value="<?= $info_desa->kode_kabupaten ?>"
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