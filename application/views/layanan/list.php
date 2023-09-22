<!-- Marketing messaging and featurettes
================================================== -->
<div class="jarak"></div>
<div class="album py-5 bg-light" id="pattern">
<div class="container">

	<div class="row judul">  
    <div class="col-md-12 text-center">
      <h1><?= $title ?></h1>
    </div>
  	</div>
    <!-- Three columns of text below the carousel -->
    <div class="row">

      <?php foreach ($layanan as $layanan) { ?>

      <div class="col-lg-4">
        <img class="rounded-circle" src="<?= base_url('assets/upload/image/thumbs/'.$layanan->gambar) ?>" alt="<?=$layanan->judul_layanan?>" height="70">
        <h3><b><?=$layanan->judul_layanan?></b></h3>
        <p><?=strip_tags(character_limiter($layanan->isi_layanan,125))?></p>
        <p><a class="btn btn-success" href="<?= base_url('index.php/layanan/read/'.$layanan->slug_layanan) ?>" role="button">
          <i class="fa fa-forward"></i> Telusuri &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <?php } ?>
     
    </div><!-- /.row -->

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
<div class="jarak"></div>
