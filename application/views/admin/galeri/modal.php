<div class="modal fade lihatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">Detail Data</span>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="gambar" class="col-form-label" style="color: #344767 !important;">Gambar</label>
                    <br>
                    <img src="" class="fotoZenDua gambar" alt="">
                </div>
                <div class="form-group">
                    <label for="judul" class="col-form-label" style="color: #344767 !important;">Judul</label>
                    <input type="text" class="form-control judul" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal" class="col-form-label" style="color: #344767 !important;">Tanggal</label>
                    <input type="text" class="form-control tanggal" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn bg-gradient-primary">Send message</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">Edit Data</span>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?= form_open_multipart(base_url('admin/galeri/edit')) ?>
            <div class="modal-body">

                <div class="form-group">
                    <label for="gambar" class="col-form-label" style="color: #344767 !important;">Gambar</label>
                    <br>
                    <img src="" class="fotoZenDua gambar" alt="">
                    <br>
                    <br>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="judul" class="col-form-label" style="color: #344767 !important;">Judul</label>
                    <input type="text" name="judul" class="form-control judul">
                    <input type="hidden" name="id" class="id">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-info">Submit</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">Tambah Data</span>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?= form_open_multipart(base_url('admin/galeri/tambah')) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama" class="col-form-label" style="color: #344767 !important;">Judul</label>
                    <input type="text" name="judul" placeholder="Gambar Kamar Mandi" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama" class="col-form-label" style="color: #344767 !important;">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-gradient-info">Submit</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>