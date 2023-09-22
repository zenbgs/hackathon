<div class="container mt-150">
    <div class="row">
        <section id="blog-new" class="blog-new">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 entries">
                        <?php
                        foreach($berita as $berita){
                        ?>
                        <article class="entry">
                            <div class="entry-img">
                                <img class="card-img-top"
                                    src="<?= base_url('assets/upload/image/thumbs/'.$berita->gambar) ?>" alt="">
                            </div>

                            <h3 style="text-align:left" class="entry-title titleText">
                                <a
                                    href="<?= base_url('berita/detail/'.$berita->slug_berita) ?>"><?= ucwords(strtolower($berita->judul_berita)) ?></a>
                            </h3>

                            <div class="entry-meta">
                                <ul class="inlinedetail mb-3">
                                    <li class="inlinedetail2 linkSS"><i
                                            class="bi bi-person-circle yeloow"></i><?= $berita->nama ?></li>
                                    <li class="inlinedetail2 ms-3"><i class="bi bi-tags-fill yeloow"></i><a
                                            class="linkSS"
                                            href="<?= base_url('berita/kategori/'.$berita->slug_kategori) ?>"><?= $berita->nama_kategori ?></a>
                                    </li>
                                    <!-- <li class="inlinedetail2 ms-3"><i class="bi bi-tags-fill yeloow"></i>
                            <a class="linkSS" href="">tag, </a>
                            <a class="linkSS" href="">tag, </a>
                            <a class="linkSS" href="">tag, </a>
                        </li> -->
                                    <li class="inlinedetail2 ms-3"><i class="bi bi-clock-fill yeloow"></i><a
                                            class="linkSS"
                                            href=""><?= date('d F Y', strtotime($berita->tanggal_post)) ?></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p class="text-left contentsText" style="text-align: justify !important">
                                    <?= character_limiter(strip_tags($berita->isi_berita),349) ?>
                                </p>
                                <div class="read-more">
                                    <a href="<?= base_url('berita/detail/'.$berita->slug_berita) ?>">Baca
                                        Selanjutnya</a>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
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
        </section>
    </div>
</div>
<?php include('alert.php') ?>