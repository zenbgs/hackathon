<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/favicon.png') ?>" />
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>" />
    <title>Madrasah Tsanawiyah - Nurul Ulum</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>assets/css/cssZen.css?v=1.2" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    .cke_maximized {
        /* top: 47px !important; */
        z-index: 99999999 !important;

    }

    .cke {
        /*visibility: hidden;*/
    }

    .fotoZenDua {
        width: 7cm;
        height: 4cm;
        object-fit: cover;
        border-radius: 12px;
    }

    .fotoZenDua::before {
        content: '';
        background-image: url('<?= base_url() ?>assets/img/noimage.png');
        background-size: 100%;
        width: 7cm;
        height: 4cm;
        position: absolute;
        object-fit: cover;
        border: 1px solid rgba(199, 199, 199, 0.5);
    }
    </style>
</head>