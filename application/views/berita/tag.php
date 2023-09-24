<div class="jarak"></div>
<div class="album py-5 bg-light" id="pattern">
  <div class="container">

  <!-- <div class="row judul">
    <div class="col-md-12 text-center">
      <h1><?= $title ?></h1>
    </div>
  </div> -->

  <div class="row">

    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

    <?php foreach ($berita as $berita) { ?>

              <article class="entry">

                <div class="entry-img">
                  <img src="<?=base_url('assets/upload/image/'.$berita->gambar)?>" alt="<?= $berita->judul_berita ?>" class="card-img-top">
                </div>

                <h2 style="text-align:left" class="entry-title">
                  <a href="<?= base_url('index.php/berita/read/'.$berita->slug_berita) ?>"><?= $berita->judul_berita ?></a>
                </h2>

                <!-- Tempat Pembuat berita, tanggal, tag -->
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= $berita->tanggal_post ?>"><?= date('d F Y', strtotime($berita->tanggal_post)); ?></time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-tags"></i> <a href="<?= base_url('index.php/berita/tag/'.$berita->slug_kategori) ?>"><?= $berita->nama_kategori; ?></a></li>
                    <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                  </ul>
                </div>

                <div class="entry-content">
                  <p style="text-align: justify">
                    <?= character_limiter(strip_tags($berita->isi_berita),349) ?>
                  </p>
                  <div class="read-more">
                    <a href="<?= base_url('index.php/berita/read/'.$berita->slug_berita) ?>">Baca Selanjutnya</a>
                  </div>
                </div>

              </article><!-- End blog entry -->

    <?php } ?>

  </div><!-- End blog entries list -->

  <!-- Tempat Berita Samping -->
  <div class="col-lg-4">

    <div class="sidebar">

      <h3 style="text-align: left" class="sidebar-title">Cari Berita</h3>
      <div class="sidebar-item search-form">
        <form  method="get">
          <input type="text" name="search" required>
          <button type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End sidebar search formn-->

      <!-- <h3 class="sidebar-title">Categories</h3>
                <div class="sidebar-item categories">
                  <ul>
                    <li><a href="#">General <span>(25)</span></a></li>
                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                    <li><a href="#">Travel <span>(5)</span></a></li>
                    <li><a href="#">Design <span>(22)</span></a></li>
                    <li><a href="#">Creative <span>(8)</span></a></li>
                    <li><a href="#">Educaion <span>(14)</span></a></li>
                  </ul>
                </div> -->
      <!-- End sidebar categories-->

      <h3 style="text-align: left" class="sidebar-title">Berita Terkini</h3>
      <div class="sidebar-item recent-posts">
        <?php foreach($listing as $listing) { ?>
          <div class="post-item clearfix">
            <img src="<?= base_url('assets/upload/image/thumbs/'.$listing->gambar) ?>" alt="<?= $listing->judul_berita ?>">
            <h4 style="text-align: left"><a href="<?= base_url('index.php/berita/read/'.$listing->slug_berita) ?>"><?= character_limiter(strip_tags($listing->judul_berita),50) ?></a></h4>

          </div>
        <?php
        }
        ?>

      </div><!-- End sidebar recent posts-->
      <h3 style="text-align:left" class="sidebar-title">Kategori</h3>
      <div style="text-align:left" class="sidebar-item tags">
        <ul>
          <?php foreach($kategori as $kategori) { ?>
            <li><a href="<?= base_url('index.php/berita/tag/'.$kategori->slug_kategori) ?>"><?= $kategori->nama_kategori ?></a></li>
          <?php } ?>
        </ul>
      </div><!-- End sidebar tags-->

    </div><!-- End sidebar -->

  </div><!-- End blog sidebar -->

</div>

</div>
</section><!-- End Blog Section -->

  </div>

  <div class="row">
      <?php if(isset($paginasi) && $total > $limit) { ?>
          <div class="paginasi col-md-12 text-center">
       <?php echo $paginasi; ?>
          <div class="clearfix"></div>
          </div>
      <?php } ?>

  </div>

</div>
</div>
