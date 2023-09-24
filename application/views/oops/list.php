<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/favicon.png') ?>"> -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo png-09.png') ?>">
    <title>
    Sinar Angan Sign In
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/css/cssZen.css') ?>" rel="stylesheet" />
</head>

<body class="error-page">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<main class="main-content mt-0 ps">
<section class="my-10">
<div class="container">
<div class="row">
<div class="col-lg-6 my-auto">
<h1 class="display-1 text-bolder text-gradient text-danger">Error 404</h1>
<h2>Erm. Halaman tidak ditemukan</h2>
<p class="lead">Kami menyarankan anda untuk kembali ke halaman awal.</p>
<button type="button" onclick="window.location.href = 'https://sinar-angan.asia.ac.id/admin/dasbor'" class="btn bg-gradient-dark mt-4">Pergi ke halaman awal</button>
</div>
<div class="col-lg-6 my-auto position-relative">
<img class="w-100 position-relative" src="https://demos.creative-tim.com/soft-ui-dashboard-pro/assets/img/illustrations/error-404.png" alt="404-error">
</div>
</div>
</div>
</section>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></main>

<footer class="footer py-5">
<div class="container">
<div class="row">


</div>
<div class="row">
<div class="col-8 mx-auto text-center mt-1">
<p class="mb-0 text-secondary">
Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Sinar Angan.
</p>
</div>
</div>
</div>
</footer>


<script src="../../../assets/js/core/popper.min.js"></script>
<script src="../../../assets/js/core/bootstrap.min.js"></script>
<script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

<script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.1.1"></script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon="{&quot;rayId&quot;:&quot;80b301c64fc018c2&quot;,&quot;version&quot;:&quot;2023.8.0&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;1b7cbb72744b40c580f8633c6b62637e&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


<style>
  #ofBar {
    background: #fff;
    z-index: 999999999;
    font-size: 16px;
    color: #333;
    padding: 16px 40px;
    font-weight: 400;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 40px;
    width: 80%;
    border-radius: 8px;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 13px 27px -5px rgba(50,50,93,0.25), 0 8px 16px -8px rgba(0,0,0,0.3), 0 -6px 16px -6px rgba(0,0,0,0.025);
  }

  #ofBar-logo img {
    height: 50px;
  }

  #ofBar-content {
    display: inline;
    padding: 0 15px;
  }

  #ofBar-right {
    display: flex;
    align-items: center;
  }

  #ofBar b {
    font-size: 15px !important;
  }
  #count-down {
    display: initial;
    padding-left: 10px;
    font-weight: bold;
    font-size: 20px;
  }
  #close-bar {
    font-size: 17px;
    opacity: 0.5;
    cursor: pointer;
    color: #808080;
    font-weight: bold;
  }
  #close-bar:hover{
    opacity: 1;
  }
  #btn-bar {
    background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
    color: #fff;
    border-radius: 4px;
    padding: 10px 20px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    font-size: 12px;
    opacity: .95;
    margin-right: 20px;
    box-shadow: 0 5px 10px -3px rgba(0,0,0,.23), 0 6px 10px -5px rgba(0,0,0,.25);
  }
   #btn-bar, #btn-bar:hover, #btn-bar:focus, #btn-bar:active {
     text-decoration: none !important;
     color: #fff !important;
 }
  #btn-bar:hover{
    opacity: 1;
  }

  #btn-bar span, #ofBar-content span {
    color: red;
    font-weight: 700;
  }

  #oldPriceBar {
    text-decoration: line-through;
    font-size: 16px;
    color: #fff;
    font-weight: 400;
    top: 2px;
    position: relative;
  }
  #newPrice{
    color: #fff;
    font-size: 19px;
    font-weight: 700;
    top: 2px;
    position: relative;
    margin-left: 7px;
  }

  #fromText {
    font-size: 15px;
    color: #fff;
    font-weight: 400;
    margin-right: 3px;
    top: 0px;
    position: relative;
  }
  
  #stolenGA {
    position: absolute;
    color: white;
    width: 100%;
    height: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.9);
    z-index: 999;
    cursor: pointer;
    padding-top: 100px;
    padding-left: 50px;
  }

  @media(max-width: 991px){

  }
  @media (max-width: 768px) {
    #count-down {
      display: block;
      margin-top: 15px;
    }

    #ofBar {
      flex-direction: column;
      align-items: normal;
    }

    #ofBar-content {
      margin: 15px 0;
      text-align: center;
      font-size: 18px;
    }

    #ofBar-right {
      justify-content: flex-end;
    }
  }
</style>


</body>

</html>