<div class="col-lg-4 top40">
    <div class="input-group rounded mb-5">
        <input type="search" class="form-control rounded yellow12" placeholder="Search" aria-label="Cari berita"
            aria-describedby="search-addon" />
        <span class="input-group-text border-0 yellow11" id="search-addon">
            <i class="bi bi-search green11"></i>
        </span>
    </div>

    <div style="position: sticky !important; top: 14% !important">
        <h5 class="title11 mb-3">Berita Terbaru</h5>
        <div class="contentNews mb-5">
            <?php
            foreach($listing as $listing){
            ?>
            <a class="news11" href="<?= base_url('berita/detail/'.$listing->slug_berita) ?>">
                <div class="row d-flex align-items-center">
                    <div class="col-4"><img class="imgFN"
                            src="<?= base_url('assets/upload/image/thumbs/'.$listing->gambar) ?>" alt="">
                    </div>
                    <div class="col-8">
                        <?= character_limiter(strip_tags(strtolower($listing->judul_berita)),50) ?>
                    </div>
                </div>
            </a>
            <?php } ?>
        </div>

        <h5 class="title11 mb-4">Kategori</h5>
        <ul class="inlinedetail">
            <?php
            foreach($kategori as $kategori){
            ?>
            <li class="inlinedetail"><a class="bagCatero"
                    href="<?= base_url('berita/kategori/'.$kategori->slug_kategori) ?>"><?= ucwords(strtolower($kategori->nama_kategori)) ?></a>
            </li>
            <?php } ?>
        </ul>
    </div>

</div>