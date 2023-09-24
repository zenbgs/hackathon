<div class="modal fade lihatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama" class="col-form-label">Gambar Iklan</label>
                    <input type="text" name="judul" class="form-control judul">
                </div>
                <div class="form-group">
                    <label for="nama" class="col-form-label">Judul Iklan</label>
                    <input type="text" name="judul" class="form-control judul">
                </div>
                <div class="form-group">
                    <label for="slug" class="col-form-label">Status Iklan</label>
                    <select name="status" id="" class="form-control status">
                        <option value="Publish">Publish</option>
                        <option value="Draft">Draft</option>
                    </select>
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?= form_open(base_url('admin/kategori/edit/'.$kategori->id_kategori)) ?>
            <div class="modal-body">

                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control nama">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?= form_open(base_url('admin/kategori')) ?>
            <div class="modal-body">

                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control">
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