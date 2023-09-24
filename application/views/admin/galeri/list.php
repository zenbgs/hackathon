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
                <h6 style="float:left !important">Tabel Galeri</h6>
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#tambahModal"
                    class="btn btn-icon btn-sm bg-gradient-success pull-right" style="float: right !important;"
                    type="button">
                    <span class="btn-inner--icon"><i class="fas fa-plus" aria-hidden="true"></i></span>
                    <span class="btn-inner--text">Tambah Galeri</span>
                </a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 dataTabl-table" id="datatable-search">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tanggal</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($galeri as $galeri){
                            ?>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="w-10 ms-3"
                                        style="border-radius: 8px;"
                                            src="<?= base_url('assets/upload/image/thumbs/'.$galeri->gambar) ?>"
                                            alt="hoodie">
                                        <span class="ms-3 text-sm my-auto"><?= $galeri->judul_galeri ?></span>
                                    </div>
                                </td>
                                <td class="text-sm">
                                    <?= $galeri->tanggal_post ?>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" data-judul="<?= $galeri->judul_galeri ?>"
                                        data-gambar="<?= $galeri->gambar ?>" data-tanggal="<?= $galeri->tanggal_post ?>"
                                        class="text-gradient text-success btn-lihat font-weight-bold text-xs"
                                        data-original-title="Lihat galeri">
                                        View
                                    </a>
                                    &nbsp;
                                    <a href="javascript:;"
                                        class="text-gradient btn-edit text-warning font-weight-bold text-xs"
                                        data-id="<?= $galeri->id_galeri ?>" data-judul="<?= $galeri->judul_galeri ?>"
                                        data-gambar="<?= $galeri->gambar ?>" data-tanggal="<?= $galeri->tanggal_post ?>"
                                        data-toggle="tooltip" data-original-title="Edit Galeri">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href="javascript:;" class="text-gradient text-danger font-weight-bold text-xs"
                                        title="Hapus galeri" data-bs-toggle="modal" data-bs-target="#hapus<?= $galeri->id_galeri ?>">
                                        Hapus
                                    </a>
                                    <?php include('delete.php') ?>

                                </td>
                            </tr>
                            <?php } ?>
                            <?php include('modal.php') ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div