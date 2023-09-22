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
                <h6 style="float:left !important">Tabel Kategori</h6>
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#tambahModal"
                    class="btn btn-icon btn-sm bg-gradient-success pull-right" style="float: right !important;"
                    type="button">
                    <span class="btn-inner--icon"><i class="fas fa-plus" aria-hidden="true"></i></span>
                    <span class="btn-inner--text">Tambah Kategori</span>
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
                                    Slug</th>

                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $i = 1;
                        foreach($kategori as $kategori){
                        ?>
                            <tr>
                                <td>
                                    <p class="text-xs text-secondary mb-0"><?= $kategori->nama_kategori ?></p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0"><?= $kategori->slug_kategori ?></p>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" data-id="<?= $kategori->id_kategori ?>"
                                        data-nama="<?= $kategori->nama_kategori ?>"
                                        data-slug="<?= $kategori->slug_kategori ?>"
                                        class="text-gradient btn-lihat text-success font-weight-bold text-xs"
                                        data-original-title="Lihat berita">
                                        Lihat
                                    </a>
                                    &nbsp;
                                    <a href="javascript:;" data-id="<?= $kategori->id_kategori ?>"
                                        data-nama="<?= $kategori->nama_kategori ?>"
                                        data-slug="<?= $kategori->slug_kategori ?>"
                                        class="text-gradient btn-edit text-warning font-weight-bold text-xs"
                                        data-toggle="tooltip" data-original-title="Edit berita">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href="javascript:;" class="text-gradient text-danger font-weight-bold text-xs"
                                        title="Hapus Berita" data-bs-toggle="modal"
                                        data-bs-target="#hapus<?= $kategori->id_kategori ?>">
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