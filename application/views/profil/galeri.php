<?php
$site_info = $this->konfigurasi_model->listing();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url('assets/upload/image/logo-man1-new.png') ?>">
    <!-- Deskription -->
    <meta name="description" content="<?= $site_info->deskripsi ?>">
    <!-- Keywords -->
    <meta name="keywords" content="<?= $title.', '.$site_info->keywords ?>">
    <!-- Author -->
    <meta name="author" content="<?= $title ?>">
    <meta property="og:title" content="<?= $title ?>" />
    <meta property="og:image" content="<?=base_url('assets/upload/image/logo-man1-new.png')?>" />
    <meta property="og:description" content="<?= $site_info->deskripsi ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="627" />
    <!-- TYPE BELOW IS PROBABLY: 'website' or 'article' or look on https://ogp.me/#types -->
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en_GB" />

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/template/css/bootstrap.min.css">
    <!-- CSS Buatan Sendiri -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/template/css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <!-- Style Berita Baru -->
    <link href="<?= base_url() ?>assets/templateberitabaru/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>./assets/assets_cust/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets_cust/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets_cust/css/templatemo-style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/slick/slick-theme.css">


    <style type="text/css">
    #myBtn {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Fixed/sticky position */
        bottom: 20px;
        /* Place the button at the bottom of the page */
        right: 30px;
        /* Place the button 30px from the right */
        z-index: 99;
        /* Make sure it does not overlap */
        border: none;
        /* Remove borders */
        outline: none;
        /* Remove outline */
        background-color: #ff7e00;
        /* Set a background color */
        color: white;
        /* Text color */
        cursor: pointer;
        /* Add a mouse pointer on hover */
        padding: 15px;
        /* Some padding */
        border-radius: 10px;
        /* Rounded corners */
        font-size: 18px;
        /* Increase font size */
    }

    #myBtn:hover {
        background-color: #e57100;
        /* Add a dark-grey background on hover */
    }

    #pattern {
        border-radius: 10px;
        background-color: #f1f1f1;
        background-size: 48px 48px;
        background-image: radial-gradient(transparent 20px,
                #ffffff 20px,
                #ffffff 24px,
                transparent 24px),
            radial-gradient(transparent 20px,
                #ffffff 20px,
                #ffffff 24px,
                transparent 24px);
        background-position: 0 0, 24px 24px;
    }
    </style>
    <style type="text/css">
    #loader {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid orange;
        border-bottom: 16px solid green;
        margin: -37px 0 0 -37px;
        width: 74px;
        height: 74px;
        -webkit-animation: spin 1s linear infinite;
        animation: spin 1s linear infinite;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }

    #myDiv {
        display: none;
        /* text-align: center; */
    }
    </style>
</head>

<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
        <?php
//Menu Berita
$site_info = $this->konfigurasi_model->listing();
$menu_berita = $this->konfigurasi_model->menu_berita();
$menu_program = $this->konfigurasi_model->menu_program();
$menu_profil = $this->konfigurasi_model->menu_profil();
?>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark" id="top">
            <a class="navbar-brand" href="<?= base_url() ?>"><img
                    src="<?= base_url() ?>assets/template/images/logo-web.png" style="height: 70px; width: auto;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">

                    <!-- Home -->
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>

                    <!-- Berita -->
                    <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BERITA</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">

          <?php foreach($menu_berita as $menu_berita) { ?>
          <a class="dropdown-item" href="<?= base_url('index.php/berita/kategori/'.$menu_berita->slug_kategori) ?>"><?= $menu_berita->nama_kategori ?></a>
          <?php } ?>

          <a class="dropdown-item" href="<?= base_url('index.php/berita') ?>">Index Berita</a>
        </div>
      </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/berita') ?>">Berita</a>
                    </li>

                    <!-- Services -->
                    <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PROGRAM</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">

          <?php foreach($menu_program as $menu_program) { ?>
          <a class="dropdown-item" href="<?= base_url('index.php/program/read/'.$menu_program->slug_program) ?>"><?= $menu_program->judul_program ?></a>
          <?php } ?>

          <a class="dropdown-item" href="<?= base_url('index.php/program') ?>">Index Program</a>
        </div>
      </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/program') ?>">Program Unggulan</a>
                    </li>

                    <!-- Profil -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Profil</a>
                        <div class="dropdown-menu" style="background: #04352b!important" aria-labelledby="dropdown01">


                            <a class="dropdown-item text-center" style="font-weight: bold; font-size: 18px"
                                href="<?= base_url('index.php/profilman') ?>">Sejarah</a>
                            <a class="dropdown-item text-center" style="font-weight: bold; font-size: 18px"
                                href="<?= base_url('index.php/profilman/visimisi') ?>">Visi & Misi</a>
                            <a class="dropdown-item text-center" style="font-weight: bold; font-size: 18px"
                                href="<?= base_url('index.php/profilman/struktur') ?>">Struktur Organisasi</a>
                            <a class="dropdown-item text-center" style="font-weight: bold; font-size: 18px"
                                href="<?= base_url('index.php/profilman/struktur') ?>">Galeri</a>
                            <a class="dropdown-item text-center" style="font-weight: bold; font-size: 18px"
                                href="<?= base_url('index.php/profilman/ekstrakurikuler') ?>">Ekstrakurikuler</a>
                            <a class="dropdown-item text-center" style="font-weight: bold; font-size: 18px"
                                href="<?= base_url('index.php/profilman/jdwpel') ?>">Jadwal Pelajaran</a>
                        </div>
                    </li>

                    <!-- Kontak -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/kontak') ?>">Kontak</a>
                    </li>

                    <!-- LTMPT -->
                    <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">LTMPT</a>
                <div class="dropdown-menu" style="background: #04352b!important" aria-labelledby="dropdown01">
                    <a class="dropdown-item text-center" style="font-weight: bold; font-size: 18px"
                        href="#">Pengumuman</a>
                    <a class="dropdown-item text-center" style="font-weight: bold; font-size: 18px" href="#">Cek
                        Eligible</a>
                </div>
            </li> -->
                </ul>
            </div>
        </nav>



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
                                        <a href="#">Galeri Man 1 Kota Malang</a>
                                    </h2>

                                    <div class="entry-content" style="text-align: center;">
                                        <div class="container-fluid tm-container-content tm-mt-60">
                                            <div class="row tm-mb-90 tm-gallery">
                                                <?php
                                                foreach($galeri as $galeri){
                                                ?>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                                                    <figure class="effect-ming tm-video-item"
                                                        style="border-radius: 8px">
                                                        <img style="width: 230px; height: 130px; object-fit: cover;"
                                                            src="<?= base_url('assets/upload/galeri/'.$galeri->gambar_galeri) ?>"
                                                            alt="Image" class="img-fluid">
                                                        <figcaption
                                                            class="d-flex align-items-center justify-content-center">
                                                            <h2><?= $galeri->caption_galeri ?></h2>
                                                            <a href="<?= base_url('assets/upload/galeri/'.$galeri->gambar_galeri) ?>"
                                                                target="__blank">View more</a>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="d-flex justify-content-between tm-text-gray">
                                                        <span
                                                            class="tm-text-gray-light"><?= date('d/m/Y' , strtotime($galeri->tanggal)) ?></span>
                                                        <span></span>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div> <!-- row -->
                                            <!-- <div class="row tm-mb-90">
                                                <div
                                                    class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                                                    <div class="tm-paging d-flex">
                                                        <a href="javascript:void(0);"
                                                            class="active tm-paging-link">1</a>
                                                        <a href="javascript:void(0);" class="tm-paging-link">2</a>
                                                        <a href="javascript:void(0);" class="tm-paging-link">3</a>
                                                        <a href="javascript:void(0);" class="tm-paging-link">4</a>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-primary tm-btn-next">Next Page</a>
                                                </div>
                                            </div> -->

                                            <div class="row">
                                                <?php if(isset($paginasi) && $total > $limit) { ?>
                                                <div class="paginasi col-md-12 text-center">
                                                    <?=  $paginasi; ?>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>

                                </article><!-- End blog entry -->

                            </div><!-- End blog entries list -->



                        </div>

                    </div>
                </section>

            </div>





            <?php
$site_info = $this->konfigurasi_model->listing();
?>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
            <div class="clearfix"></div>
            <!-- Footer -->
            <!-- ======= Footer ======= -->
            <footer id="footer" class="footer">

                <!-- <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        </div>
        <div class="col-lg-6">
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div> -->

                <div class="footer-top text-left">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-5 col-md-12 footer-info">
                                <a href="index.html" class="logo d-flex align-items-center">
                                    <img src="<?= base_url() ?>assets/template/images/logo-web.png" alt="">
                                    <!-- <span>FlexStart</span> -->
                                </a>
                                <p><?= $conf->deskripsi ?></p>
                                <div class="social-links mt-3">
                                    <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
                                    <a href="<?= $conf->facebook ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="<?= $conf->instagram ?>" class="instagram"><i
                                            class="bi bi-instagram bx bxl-instagram"></i></a>
                                    <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a> -->
                                </div>
                            </div>

                            <div class="col-lg-2 col-6 footer-links">
                                <h4>Link Terkait</h4>
                                <ul class="zenFontFooter">
                                    <?php foreach ($link as $link) { ?>
                                    <li><i class="bi bi-chevron-right"></i> <a
                                            href="<?= $link->link ?>"><?= $link->nama_link ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-6 footer-links">
                                <h4>Aplikasi Madrasah</h4>
                                <ul class="zenFontFooter">
                                    <?php foreach ($apl as $apl) { ?>
                                    <li><i class="bi bi-chevron-right"></i> <a
                                            href="<?= $apl->link_aplikasi ?>"><?= $apl->nama_aplikasi ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="col-lg-2 col-md-12 footer-contact text-left text-md-start">
                                <h4>Kontak</h4>
                                <p class="zenFontFooter">
                                    <?= $conf->alamat ?> <br><br>
                                    <!-- United States <br><br> -->
                                    <strong>Telepon:</strong> <?= $conf->telepon ?><br>
                                    <strong>Email:</strong> <?= $conf->email ?><br>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="copyright">
                        &copy; Copyright 2021 MAN 1 Kota Malang
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                        Madrasah Aliyah Negeri 1 Kota Malang. All Rights Reserved
                    </div>
                </div>
            </footer><!-- End Footer -->
        </div>
        <!--End Loader-->
</body>
<!-- Load Javascript jquery -->
<script src="<?= base_url() ?>assets/template/jquery-ui/external/jquery/jquery.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/slick/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>./assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<!-- Load Javascript bootstrap -->
<script src="<?= base_url() ?>assets/template/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Holder JS -->
<script src="<?= base_url() ?>assets/template/bootstrap/site/docs/4.1/assets/js/vendor/holder.min.js"></script>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 250);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
}
</script>

<script type="text/javascript">
$(window).on('load', function() {
    $(".lazy").slick({
        lazyLoad: 'ondemand',
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('.zenFade').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
    });
});
</script>

<script>
$(document).ready(function() {
    $('.entry-content > p > img').addClass('img-fluid');
    $('.entry-content').find('img').addClass('img-fluid');
    // let ambilImg = document.getElementsByClassName('entry-content').getElementsByTagName('img');
    // ambilImg.classList.add('img-fluid');
});
</script>

</html>