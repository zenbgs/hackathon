<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Edit UMKM</h6>
            </div>
            <div class="card-body p-3">
                <?= form_open_multipart(base_url('admin/umkm/edit_single/'.$umkm->id)); ?>
                <div class="form-group">
                    <label for="">Nama Pelapak</label>
                    <input type="text" class="form-control" name="nama_pelapak" id="" value="<?= $umkm->nama_pelapak ?>" required=""></input>
                </div>
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" id="" value="<?= $umkm->nama_produk ?>" required=""></input>
                </div>
                <div class="form-group">
                    <label for="">Kategori Produk</label>
                    <input type="text" class="form-control" name="kategori_produk" id="" value="<?= $umkm->kategori_produk ?>" required=""></input>
                </div>
                <div class="form-group">
                    <label for="">Harga Produk</label>
                    <input type="number" class="form-control" name="harga_produk" placeholder="Rp." id="" value="<?= $umkm->harga_produk ?>" required=""></input>
                </div>
                <div class="form-group">
                    <label for="">Satuan Produk</label>
                    <input type="text" class="form-control" name="satuan_produk" id="" value="<?= $umkm->satuan_produk ?>" required=""></input>
                </div>
                <div class="form-group">
                    <label for="">Pilih Tipe Potongan Produk(optional)</label>
                    <select name="tipe_potongan_harga" class="form-control">
                        <option value="<?= $umkm->tipe_potongan_harga ?>" selected><?= $umkm->tipe_potongan_harga ?></option> 
                        <option value="persen">Persen(%)</option>
                        <option value="nominal">Nominal(Rp)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nominal Potongan Produk(optional)</label>
                    <input type="number" class="form-control" value="<?= $umkm->nominal_potongan_harga ?>" name="nominal_potongan_harga" id=""></input>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Produk</label>
                    <textarea class="form-control" name="desc_produk"  id="" rows="3" required=""><?= $umkm->desc_produk ?></textarea>
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
                    <img src="<?= base_url('assets/upload/image/thumbs/'.$umkm->photo) ?>" id="foto" class="fotoZenDua">
                    <br>
                    <br>
                    <input class="form-control" onchange="fotoShw(event)" name="photo" type="file" id="upload-photo">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-gradient-info">Submit</button>
                    <a href="<?= base_url('admin/umkm') ?>" class="btn bg-gradient-secondary"
                        style="float:right !important;">Kembali</a>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>