<div class="container mt-150">
    <div class="row">
        <div class="col-lg-12">
            <img class="imageHeadSingle"
                src="<?php if($dataSingle->gambar == "-") echo base_url('assets/img/cons.png'); else echo base_url('assets/upload/image/'.$dataSingle->gambar) ?>"
                alt="">
            <h3 class="titleText ms-1">
                <?= $dataSingle->judul ?>
            </h3>
            <!-- <ul class="inlinedetail mb-3">
                    <li class="inlinedetail2"><i class="bi bi-person-circle yeloow"></i>Zen</li>
                    <li class="inlinedetail2 ms-3"><i class="bi bi-bookmarks-fill yeloow"></i><a class="linkSS" href="">kategori</a></li>
                    <li class="inlinedetail2 ms-3"><i class="bi bi-tags-fill yeloow"></i>
                        <a class="linkSS href="">tag, </a>
                        <a class=" linkSS href="">tag, </a>
                        <a class="linkSS href="">tag, </a>
                    </li>
                </ul>
                <p class=" dateText ms-1">06 Desember 2022</p> -->
            <p class="contentsText ms-1">
                <div class="my-container">
                <style scoped>
        @import "<?= base_url('assets_client/css/contents.css?v=1.4'); ?>";
    </style>
                <?= $dataSingle->konten ?>
                </div>
                
            </p>
        </div>
    </div>
</div>