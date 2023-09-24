<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Sinar Angan</title>

    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets_client/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link
        href="<?= base_url('assets_client/vendor/bootstrap/css/node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>"
        rel="stylesheet">


    <!-- Magnific Pop Up -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_client/vendor/macnific/magnific-popup.css') ?>">
    <script type="text/javascript" src="<?= base_url('assets_client/vendor/macnific/jquery.magnific-popup.min.js') ?>">
    </script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets_client/css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets_client/css/templatemo-digimedia-v1.css?v=1.0') ?>">
    <link rel="stylesheet" href="<?= base_url('assets_client/css/animated.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets_client/css/owl.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets_client/css/all.css?v=1.1') ?>">

    <!-- Style Pojok Berita -->
    <link rel="stylesheet" href="<?= base_url('assets_client/css/style.css?v=1.1') ?>">
  
  

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
    .scrolledBaw {
        box-shadow: 0px 0px 15px rgb(0 0 0 / 10%) !important;
        transition: background-color 1s linear;
        position: fixed;
        background-color: #fff !important;

    }

    .h-100vh {
        height: 130vh !important;
        object-fit: cover;
    }

    .bot0rem {
        bottom: 12rem !important;
        padding-bottom: 0px !important;
    }

    .bot2rem {
        margin-bottom: 17rem !important;
    }

    .footHero {
        border-radius: 30px 30px 0px 0px;
        /* background-color: rgba(255, 213, 0, 0.75) ; */
        background-color: rgba(255, 255, 255, 0.5);
        padding: 10px 0px;
    }

    .carousel-dark .carousel-indicators [data-bs-target] {
        background-color: #ffd500 !important;
    }

    .carousel-dark .carousel-control-next-icon,
    .carousel-dark .carousel-control-prev-icon {
        filter: none !important;
    }

    .yellow {
        color: #065206 !important;
        font-size: 20px
    }

    .bungkusSosmed {
        background-color: #ffd500 !important;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        padding: 2px 6px;
    }

    .textSosmed {
        color: #065206 !important;
        font-weight: 500 !important;
    }

    .headTitle22 {
        z-index: 2;
        position: relative;
        font-weight: 700;
        font-size: 40px;
        color: #2a2a2a;
        margin-bottom: 20px;

    }

    .mosqueStand {
        margin-top: -200px;
    }

    .bgMosque {
        background-color: #ffff;
        z-index: 90 !important;
        position: relative;
        border-radius: 40px 40px 0px 0px;
        padding: 30px 40px;
    }

    .imgMosque2 {
        height: 400px;
    }

    .buttonNone {
        background-color: transparent;
        text-decoration: none;
        border: none !important;
    }

    /* .mfp-no-margins img.mfp-img {
      padding: 40px;
    } */

    /* position of shadow behind the image */
    .mfp-no-margins .mfp-figure:after {
        top: 0;
        bottom: 0;
    }

    /* padding for main container */
    .mfp-no-margins .mfp-container {
        padding: 0;
    }


    /* 

for zoom animation 
uncomment this part if you haven't added this code anywhere else

*/


    .mfp-with-zoom .mfp-container,
    .mfp-with-zoom.mfp-bg {
        opacity: 0;
        -webkit-backface-visibility: hidden;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }

    .mfp-with-zoom.mfp-ready .mfp-container {
        opacity: 1;
    }

    .mfp-with-zoom.mfp-ready.mfp-bg {
        opacity: 0.8;
    }

    .mfp-with-zoom.mfp-removing .mfp-container,
    .mfp-with-zoom.mfp-removing.mfp-bg {
        opacity: 0;
    }


    /* .main-banner {
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
      padding: 0px 0px 120px 0px;
      position: relative;
      overflow: hidden;
    } */


    @media (max-width: 767px) {
        .headTitle22 {
            font-weight: 700;
            font-size: 20px;
            color: #2a2a2a;
            margin-bottom: 10px;

        }

        .mobketMosque {
            font-size: 12px;
            line-height: 15px;
        }

        .bgMosque {
            padding: 25px 20px 40px 20px;
        }

        .imgMosque2 {
            height: 50% !important;
        }

        .h-100vh {
            height: 80vh !important;
            object-fit: cover;
        }

        .mosqueStand {
            margin-top: -55%;
        }

        .bot2rem {
            margin-bottom: 60% !important;
        }

        .carousel-control-next,
        .carousel-control-prev {
            margin-bottom: 40% !important;
        }
    }

    <?php if($this->uri->segment(1)=='single') {
        ?>.imageHeadSingle {
            width: 100% !important;
            border-radius: 20px !important;
        }

        .titleText {
            color: #1b4332 !important;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            margin: 20px 0 10px 0;
            padding: 0;
        }

        .dateText {
            color: #40916c;
            font-weight: 500;
        }

        .contentsText {
            color: #344e41;
            margin: 20px 0;
            font-weight: 400;
        }


        /* END BERITA UTAMA */


        /* BERITAS SAMPING */
        .title11 {
            font-weight: 600;
            color: #1b4332 !important;
            margin: 0 0 15px 4px;
            padding-bottom: 5px;
            border-bottom: 2px solid #ffff3f;

            /* text-decoration: underline;
            text-decoration-color: #ffff3f;
            border-bottom-width: medium;
            padding-bottom: 12px; */
            /* border-bottom: 2px solid ; */

        }

        .contentNews {
            border-radius: 20px !important;
            margin-bottom: 20px;
        }

        .news11:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }

        .news11 {
            font-weight: 400;
            position: relative;
            display: block;
            padding: 0.7rem 1rem;
            color: #212529;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125);
        }

        .news11:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit;
        }

        .news11:hover {
            color: #55a630;
            transition: 0.5s;
        }

        .yellow11 {
            background-color: #ffd500;
        }

        .yellow12 {
            border-color: #ffd500 !important;
        }

        .green11 {
            color: #077907;
            font-size: 20px;
            font-weight: 600;
            cursor: pointer;
        }

        .yellow12:focus {
            outline: none !important;
            border-color: #077907 !important;
            box-shadow: 0 0 2px #077907 !important;
        }

        .yellow12[type="search"]::-webkit-search-cancel-button {
            color: #077907 !important;
        }

        textarea:focus {
            outline: none !important;
            border-color: #719ECE;
            box-shadow: 0 0 10px #719ECE;
        }

        @media (max-width: 767px) {
            .title11 {
                margin: 70px 0 15px 4px;
            }
        }

        input[type="search"]::-webkit-search-decoration,
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-results-button,
        input[type="search"]::-webkit-search-results-decoration {
            display: none;
        }

        input[type=search]::-ms-clear {
            display: none;
            width: 0;
            height: 0;
        }

        input[type=search]::-ms-reveal {
            display: none;
            width: 0;
            height: 0;
        }

        .imgFN {
            height: 63px !important;
            object-fit: cover;
            border-radius: 10px;
        }

        .inlinedetail2 {
            display: inline-block;
            text-decoration: none;
        }

        .inlinedetail {
            display: inline-block;
            text-decoration: none;
        }

        .yeloow {
            color: #077907;
            margin-right: 5px;
        }

        .linkSS {
            color: #1b4332;
            cursor: pointer;
        }

        .linkSS:hover {
            color: #55a630;
        }

        .bagCatero {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 7px 14px;
            border-radius: 10px;
            transition: 0.5s;
            line-height: 1;
            margin: 0px 7px 8px 0px;
            color: #077907;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
            border: 2px solid rgba(181, 201, 154, 1);
            background-color: transparent;

        }

        .bagCatero:hover {
            background-color: rgba(181, 201, 154, 1);
            color: #077907;
        }

        <?php
    }

    ?>
    </style>

    <?php
    if($this->uri->segment(1) == 'berita'){
    ?>
    <style>
    /* BERITA UTAMA */
    .center22 {
        text-align: center !important;
        margin: 30px 0 0 0;

    }

    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border-radius: 5px;
        color: #077907;
        font-weight: 600;
    }

    .pagination a.active {
        background-color: #ffd500;
        color: #077907;

    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }

    .imageNews {
        width: 100% !important;
        border-radius: 20px !important;
    }

    .titleText a {
        color: #1b4332 !important;
        font-family: 'Poppins', sans-serif;
        font-weight: 800;
        margin: 20px 0 10px 0;
        padding: 0;
    }

    .titleText {
        color: #1b4332 !important;
        font-family: 'Poppins', sans-serif;
        font-weight: 800;
        margin: 20px 0 10px 0;
        padding: 0;
    }

    .dateText {
        color: #40916c;
        font-weight: 500;
    }

    .contentsText {
        color: #344e41;
        margin: 20px 0;
        font-weight: 400;
    }


    /* END BERITA UTAMA */


    /* BERITAS SAMPING */
    .title11 {
        font-weight: 600;
        color: #1b4332 !important;
        margin: 0 0 15px 4px;
        padding-bottom: 5px;
        border-bottom: 2px solid #ffff3f;

        /* text-decoration: underline;
            text-decoration-color: #ffff3f;
            border-bottom-width: medium;
            padding-bottom: 12px; */
        /* border-bottom: 2px solid ; */

    }

    .contentNews {
        border-radius: 20px !important;
        margin-bottom: 20px;
    }

    .news11:first-child {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
    }

    .news11 {
        font-weight: 400;
        position: relative;
        display: block;
        padding: 0.7rem 1rem;
        color: #212529;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .125);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .news11:last-child {
        border-bottom-right-radius: inherit;
        border-bottom-left-radius: inherit;
    }

    .news11:hover {
        color: #55a630;
        transition: 0.5s;
    }

    .yellow11 {
        background-color: #ffd500;
    }

    .yellow12 {
        border-color: #ffd500 !important;
    }

    .green11 {
        color: #077907;
        font-size: 20px;
        font-weight: 600;
        cursor: pointer;
    }

    .yellow12:focus {
        outline: none !important;
        border-color: #077907 !important;
        box-shadow: 0 0 2px #077907 !important;
    }

    .yellow12[type="search"]::-webkit-search-cancel-button {
        color: #077907 !important;
    }

    textarea:focus {
        outline: none !important;
        border-color: #719ECE;
        box-shadow: 0 0 10px #719ECE;
    }

    @media (max-width: 767px) {

        .top40 {
            margin-top: 70px;
        }

        .title11 {
            margin: 30px 0 15px 4px;
        }

        .center22 {
            text-align: center !important;
            margin: 30px 0 10px 0;

        }

        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 7px 14px;
            text-decoration: none;
            transition: background-color .3s;
            border-radius: 4px;
            color: #077907;
            font-weight: 600;
        }

        .pagination a.active {
            background-color: #ffd500;
            color: #077907;

        }
    }

    input[type="search"]::-webkit-search-decoration,
    input[type="search"]::-webkit-search-cancel-button,
    input[type="search"]::-webkit-search-results-button,
    input[type="search"]::-webkit-search-results-decoration {
        display: none;
    }

    input[type=search]::-ms-clear {
        display: none;
        width: 0;
        height: 0;
    }

    input[type=search]::-ms-reveal {
        display: none;
        width: 0;
        height: 0;
    }

    .imgFN {
        height: 63px !important;
        object-fit: cover;
        border-radius: 10px;
    }

    .inlinedetail2 {
        display: inline-block;
        text-decoration: none;
    }

    .inlinedetail {
        display: inline-block;
        text-decoration: none;
    }

    .yeloow {
        color: #077907;
        margin-right: 5px;
    }

    .linkSS {
        color: #1b4332;
        cursor: pointer;
    }

    .linkSS:hover {
        color: #55a630;
    }

    .bagCatero {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 7px 14px;
        border-radius: 10px;
        transition: 0.5s;
        line-height: 1;
        margin: 0px 7px 8px 0px;
        color: #077907;
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
        border: 2px solid rgba(181, 201, 154, 1);
        background-color: transparent;

    }

    .bagCatero:hover {
        background-color: rgba(181, 201, 154, 1);
        color: #077907;
    }

    /* END BERITAS SAMPING */
    </style>
    <?php } ?>
</head>