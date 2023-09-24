<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <span class="mb-0">Edit Bantuan</span>
            </div>
            <div class="card-body p-3">
                <?= form_open_multipart(base_url('admin/bantuan/edit/'.$bantuan_detail->id)); ?>
                <div class="form-group">
                    <label for="judul" style="color: #344767 !important;">Nama Program</label>
                    <input class="form-control" value="<?= $bantuan_detail->nama_program ?>" name="nama_program" required="">
                </div>
                <div class="form-group">
                    <label for="editor" style="color: #344767 !important;">Keterangan</label>
                    <textarea class="form-control" name="keterangan"><?= $bantuan_detail->keterangan ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-body p-3">
                <div class="form-group">
                    <label for="gambar" class="form-control-label" style="color: #344767 !important;">Asal Dana</label>
                    <select name="asal_dana" id="" value="<?= $bantuan_detail->asal_dana ?>" class="form-control">
                      <option value="Pusat">Pusat</option>
                      <option value="Provinsi">Provinsi</option>
                      <option value="Kab/Kota">Kab/Kota</option>
                      <option value="Dana Desa">Dana Desa</option>
                      <option value="Lain-lain (Hibah)">Lain-lain (Hibah)</option>
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="status" class="form-control-label" style="color: #344767 !important;">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tgl_mulai" value="<?= date('Y-m-d', strtotime($bantuan_detail->tgl_mulai)) ?>" required  >
                </div>
              
              <div class="form-group">
                    <label for="status" class="form-control-label" style="color: #344767 !important;">Tanggal Akhir</label>
                    <input type="date" class="form-control" name="tgl_akhir" value="<?= date('Y-m-d', strtotime($bantuan_detail->tgl_akhir)) ?>" required  >
                </div>
               
                <br>
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