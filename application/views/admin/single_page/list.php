<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0"><?= $dataSingle->nama_sub ?></h6>
            </div>
            <div class="card-body p-3">
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
                <?= form_open_multipart(base_url('admin/single/'.$dataSingle->nama_slug.'/simpan')); ?>
                <div class="form-group">
                    <label for="gambar" class="form-control-label">Gambar</label>
                    <br>
                    <img src="<?= base_url('assets/upload/image/'.$dataSingle->gambar) ?>" id="foto" class="fotoZenDua">
                    <br>
                    <br>
                    <input type="file" onchange="fotoShw(event)" name="gambar" class="form-control" id="gambar">
                </div>
                <div class="form-group">
                    <label for="judul" class="form-control-label">Judul</label>
                    <input type="text" name="judul" id="judul" value="<?= $dataSingle->judul ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="editor" class="form-control-label">Isi Konten</label>
                    <textarea class="form-control" name="konten" id="editor"><?= $dataSingle->konten ?></textarea>
                    <input type="hidden" name="id" value="<?= $dataSingle->id ?>">
                    <input type="hidden" name="slug" value="<?= $dataSingle->nama_slug ?>">
                </div>
                <div class="form-group">
                    <button id="submit" class="btn bg-gradient-info">Submit</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>