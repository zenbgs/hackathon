<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Tambah Berita</h6>
            </div>
            <div class="card-body p-3">
                <?= form_open_multipart(base_url('admin/berita/tambah_single')); ?>
                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <textarea class="form-control" name="judul_berita" id="judul" rows="3" required=""></textarea>
                </div>
                <div class="form-group">
                    <label for="editor">Isi Berita</label>
                    <textarea class="form-control" name="isi_berita" id="editor"></textarea>
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
                    <img src="" id="foto" class="fotoZenDua">
                    <br>
                    <br>
                    <input class="form-control" onchange="fotoShw(event)" name="gambar" type="file" id="upload-photo"
                        required="">
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Kategori Berita</label>
                    <select id="status" name="kategori_berita" class="form-control" required="">
                        <?php foreach($kategori as $kategori) { ?>
                        <option value="<?= $kategori->id_kategori ?>">
                            <?= $kategori->nama_kategori ?>
                            <?php } ?>
                        </option>
                    </select>
                </div>
              
              <div class="form-group">
                    <label for="status" class="form-control-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" required>
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label">Status</label>
                    <select id="status" name="status_berita" class="form-control" required="">
                        <option value="1">Publish</option>
                        <option value="2">Draft</option>
                    </select>
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