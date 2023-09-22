<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Tambah Berita</h6>
            </div>
            <div class="card-body p-3">
                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <textarea class="form-control" name="judul_berita" id="judul" rows="3" readonly=""><?= $berita->judul_berita ?></textarea>
                </div>
                <div class="form-group">
                    <label for="editor">Isi Berita</label>
                    <textarea class="form-control" name="isi_berita" id="editor" readonly><?= $berita->isi_berita ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-body p-3">
                <div class="form-group">
                    <label for="gambar" class="form-control-label">Gambar Berita</label>
                    <br>
                    <img src="<?= base_url('assets/upload/image/'.$berita->gambar) ?>" id="foto" class="fotoZenDua">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Tanggal Berita</label>
                    <input type="text" class="form-control" value="<?= $berita->tanggal_post ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Kategori Berita</label>
                    <input type="text" class="form-control" value="<?= $berita->nama_kategori ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Status</label>
                    <input type="text" class="form-control" value="<?= $berita->status_berita ?>" readonly>
                </div>
                <br>
                <div class="form-group">
                    <a href="<?= base_url('admin/berita') ?>" class="btn bg-gradient-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>