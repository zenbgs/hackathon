<div class="container mt-150">
    <div class="row">
        <div class="col-lg-8">
            <img class="imageNews" src="<?= base_url('assets/upload/image/'.$berita->gambar) ?>" alt="">
            <h3 class="titleText">
                <?= ucwords(strtolower($berita->judul_berita)) ?>
            </h3>
            <ul class="inlinedetail mb-3">
                <li class="inlinedetail2"><i class="bi bi-person-circle yeloow"></i><?= $berita->nama ?></li>
                <li class="inlinedetail2 ms-3"><i class="bi bi-tags-fill yeloow"></i><a class="linkSS"
                        href=""><?= $berita->nama_kategori ?></a></li>
                <li class="inlinedetail2 ms-3"><i class="bi bi-clock-fill yeloow"></i><a class="linkSS"
                        href=""><?= date('d F Y', strtotime($berita->tanggal_post)) ?></a></li>
                <!-- <li class="inlinedetail2 ms-3"><i class="bi bi-tags-fill yeloow"></i>
                    <a class="linkSS" href="">tag, </a>
                    <a class="linkSS" href="">tag, </a>
                    <a class="linkSS" href="">tag, </a>
                </li> -->
            </ul>
            <p class="contentsText" style="text-align: justify !important">
              <div class="my-container">
              <style scoped>
        @import "<?= base_url('assets_client/css/contents.css?v=1.5'); ?>";
    </style>
                <?= $berita->isi_berita ?>
          </div>
            </p>
        </div>
        <!-- ----------------------------------------------------------  Sidebar  -------------------------------------------------------------------- -->
        <?php require_once('sidebar.php') ?>

        <div class="center22">
            <?php if(isset($paginasi) && $total > $limit){ ?>
            <div class="pagination">
                <?= $paginasi ?>
            </div>
            <?php } ?>
        </div>

    </div>
</div>
</div>
</div>
<?php include('alert.php') ?>