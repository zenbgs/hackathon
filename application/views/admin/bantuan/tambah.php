<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <span class="mb-0">Tambah Bantuan</span>
            </div>
            <div class="card-body p-3">
                <?= form_open_multipart(base_url('admin/bantuan/tambah')); ?>
                <div class="form-group">
                    <label for="judul" style="color: #344767 !important;">Nama Program</label>
                    <input class="form-control" type="text" name="nama_program" id="judul" required="">
                </div>
                <div class="form-group">
                    <label for="editor" style="color: #344767 !important;">Keterangan</label>
                    <textarea class="form-control" name="keterangan"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-body p-3">
                <div class="form-group">
                    <label for="gambar" class="form-control-label" style="color: #344767 !important;">Asal Dana</label>
                    <select name="asal_dana" id="" class="form-control">
                      <option value="Pusat">Pusat</option>
                      <option value="Provinsi">Provinsi</option>
                      <option value="Kab/Kota">Kab/Kota</option>
                      <option value="Dana Desa">Dana Desa</option>
                      <option value="Lain-lain (Hibah)">Lain-lain (Hibah)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label" style="color: #344767 !important;">Tanggal Awal</label>
                    <input type="date" name="tgl_mulai" class="form-control" id="">
                    <br>
                    <label for="status" class="form-control-label" style="color: #344767 !important;">Tanggal Akhir</label>
                    <input type="date" name="tgl_akhir" class="form-control" id="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-gradient-info">Submit</button>
                    <a href="<?= base_url('admin/bantuan') ?>" class="btn bg-gradient-secondary"
                        style="float:right !important;">Kembali</a>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>