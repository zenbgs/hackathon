
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
            <?= form_open(base_url('admin/user/edit/'.$user->id_user)) ?>
            <div class="modal-body">

                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama User</label>
                    <input type="text" name="nama" class="form-control nama">
                </div>

                <div class="form-group">
                    <label for="nama" class="col-form-label">Username</label>
                    <input type="text" name="username" class="form-control username">
                </div>

                <div class="form-group">
                    <label for="nama" class="col-form-label">Hak Akses</label>
                    <select name="hak_akses" id="" class="form-control hak_akses">
                    <option value="Penulis">Penulis</option>
                    <option value="Admin">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama" class="col-form-label">Password</label>
                    <input type="password" name="password" placeholder="kosongkan jika tidak ingin merubah..." class="form-control">
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
            <?= form_open(base_url('admin/user')) ?>
            <div class="modal-body">

                <div class="form-group">
                    <label for="nama" class="col-form-label">Nama User</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama" class="col-form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama" class="col-form-label">Hak Akses</label>
                    <select name="hak_akses" id="" class="form-control">
                    <option value="Penulis">Penulis</option>
                    <option value="Admin">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama" class="col-form-label">Password</label>
                    <input type="password" name="password" class="form-control">
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