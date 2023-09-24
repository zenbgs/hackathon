<div class="album py-5 bg-light" id="pattern">
  <div class="container">

  <!-- <div class="row judul">
    <div class="col-md-12 text-center">
      <h1><?= $title ?></h1>
    </div>
  </div> -->

  
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">


                <div class="entry-img">

                </div>

                <h2 class="entry-title">
                  <a href="#">Visi & Misi Man 1 Kota Malang</a>
                </h2>

                <div class="entry-content" style="text-align: justify;">
                  <h2><span style="color:#c0392b"><span style="font-family:Comic Sans MS,cursive"><span style="font-size:20px"><u><strong>VISI:</strong></u></span></span></span></h2>
                  <p><em><span style="font-family:Arial,Helvetica,sans-serif">"<?= strip_tags($vm->visi) ?> "</span></em></p>
                  <h2><span style="color:#c0392b"><span style="font-family:Comic Sans MS,cursive"><span style="font-size:20px"><u><strong>MISI:</strong></u></span></span></span></h2>
                  <p><?= $vm->misi; ?></p>
                </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->



        </div>

      </div>
    </section>
  
</div>
