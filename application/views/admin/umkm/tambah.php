<?php
// Error Warning


?>
<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <span class="mb-0">Tambah Umkm</span>
            </div>
            <div class="card-body p-3">
                <?= form_open_multipart(base_url('admin/umkm/tambah_single')); ?>
                <div class="form-group">
                    <label for="" style="color: #344767 !important;">Nama Pelapak</label>
                    <input type="text" class="form-control" name="nama_pelapak" id="" required=""></input>
                </div>
                <div class="form-group">
                    <label for="" style="color: #344767 !important;">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" id="" required=""></input>
                </div>
                <div class="form-group">
                    <label for="" style="color: #344767 !important;">Kategori Produk</label>
                    <input type="text" class="form-control" name="kategori_produk" id="" required=""></input>
                </div>
                <div class="form-group">
                    <label for="" style="color: #344767 !important;">Harga Produk</label>
                    <input type="number" class="form-control" name="harga_produk" placeholder="Rp." id="" required=""></input>
                </div>
                <div class="form-group">
                    <label for="" style="color: #344767 !important;">Satuan Produk</label>
                    <input type="text" class="form-control" name="satuan_produk" id="" required=""></input>
                </div>
                <div class="form-group">
                    <label for="" style="color: #344767 !important;">Pilih Tipe Potongan Produk(optional)</label>
                    <select name="tipe_potongan_harga" class="form-control">
                        <option value="persen">Persen(%)</option>
                        <option value="nominal">Nominal(Rp)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" style="color: #344767 !important;">Nominal Potongan Produk(optional)</label>
                    <input type="number" class="form-control" name="nominal_potongan_harga" id=""></input>
                </div>
                <div class="form-group">
                    <label for="" style="color: #344767 !important;">Deskripsi Produk</label>
                    <textarea class="form-control" name="desc_produk" id="" rows="3" required=""></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card h-100">
            <div class="card-body p-3">
                <div class="form-group">
                    <label for="gambar" class="form-control-label" style="color: #344767 !important;">Photo Produk</label>
                    <br>
                    <img src="" id="foto" class="fotoZenDua">
                    <br>
                    <br>
                    <input class="form-control" onchange="fotoShw(event)" name="photo_produk" type="file" id="upload-photo"
                        required="">
                </div>

                <br>
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