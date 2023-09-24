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

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4" style="display:none;">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="<?= base_url('/') ?>">
                Sinar Angan Dashboard
            </a>

            <ul class="navbar-nav ms-xl-auto me-xl-1">
                <li class="nav-item">
                    <a href="<?= base_url('/') ?>" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-light">Kembali</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('<?= base_url('assets/img/banner-login.png') ?>');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Log In!</h1>
                            <p class="text-lead text-white">Dashboard Admin Sistem Informasi Warga Kelurahan Pangongangan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <div style="width: 125px;margin: 0 auto;">
                                <img src="<?= base_url('assets/img/logo-notext.png') ?>" alt="" style="width:100%;">
                                    <span style="font-weight: bold;text-transform: uppercase;">Sinar Angan</span>
                                </div>
                                <h5>Login</h5>
                            </div>
                            <div class="card-body">
                                <?php if($this->session->flashdata('gagal')){ ?>
                                <div class="alert alert-danger text-white" role="alert">
                                    Username atau Password salah
                                </div>
                                <?php } ?>

                                <?php if($this->session->flashdata('sukses')){ ?>
                                <div class="alert alert-warning text-white" role="alert">
                                    <?= $this->session->flashdata('sukses'); ?>
                                </div>
                                <?php } ?>
                                <?= form_open(base_url('login')) ?>
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="nik" placeholder="NIK"
                                        aria-label="Nik" required aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" required class="form-control" placeholder="Password"
                                        aria-label="Password" aria-describedby="password-addon">
                                </div>
                                <div class="form-check form-check-info text-left">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        checked>
                                    <label class="form-check-label text-dark" for="flexCheckDefault">
                                        Remember <a href="javascript:;" class="text-dark font-weight-bolder">Me</a>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Log
                                        In</button>
                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-dribbble"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-twitter"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-instagram"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-pinterest"></span>
                        </a>
                        <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                            <span class="text-lg fab fa-github"></span>
                        </a>
                    </div>
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
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    </main>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('assets/js/soft-ui-dashboard.js') ?>"></script>
</body>

</html>