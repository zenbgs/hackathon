<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
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
                <h6 style="float:left !important">Tabel User</h6>
                <a href="<?= base_url('admin/user/tambah') ?>"
                    class="btn btn-icon btn-sm bg-gradient-success pull-right" style="float: right !important;"
                    type="button">
                    <span class="btn-inner--icon"><i class="fas fa-plus" aria-hidden="true"></i></span>
                    <span class="btn-inner--text">Tambah User</span>
                </a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 dataTabl-table" id="datatable-search">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Username</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    NIK</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    No Telp</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Hak Akses</th>

                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $i = 1;
                        foreach($user as $user){
                        ?>
                            <tr>
                            <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="<?= base_url('assets/img/team-2.jpg') ?>" class="avatar avatar-sm me-3"
                                                alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <span class="mb-0 text-sm"><?= $user->nama ?></span>
                                            <p class="text-xs text-secondary mb-0"><?= $user->email ?></p>
                                        </div>
                                    </div>
                                </td>
                                
                                <td>
                                    <p class="text-xs text-secondary mb-0"><?= $user->username ?></p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0"><?= $user->nik ?></p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0"><?= $user->no_telp ?></p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0"><?= $user->akses_level ?></p>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" data-id="<?= $user->id_user ?>"
                                        data-nama="<?= $user->nama ?>"
                                        data-username="<?= $user->username ?>"
                                        data-hak_akses="<?= $user->akses_level ?>"
                                        data-email = "<?= $user->email ?>"
                                        data-no_telp = "<?= $user->no_telp ?>"
                                        data-nik = "<?= $user->nik ?>"
                                        class="text-gradient btn-edit text-warning font-weight-bold text-xs"
                                        data-toggle="tooltip" data-original-title="Edit berita">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href="javascript:;" class="text-gradient text-danger font-weight-bold text-xs"
                                        title="Hapus User" data-bs-toggle="modal"
                                        data-bs-target="#hapus<?= $user->id_user ?>">
                                        Hapus
                                    </a>
                                    <?php include('delete.php') ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('modal.php') ?>