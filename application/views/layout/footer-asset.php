<!-- Scripts -->
<script src="<?= base_url('assets_client/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets_client/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets_client/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets_client/js/owl-carousel.js') ?>"></script>
<script src="<?= base_url('assets_client/js/animation.js') ?>"></script>
<script src="<?= base_url('assets_client/js/imagesloaded.js') ?>"></script>
<script src="<?= base_url('assets_client/js/custom.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets_client/vendor/macnific/jquery.magnific-popup.min.js') ?>"></script>

<script>
$(document).ready(function() {

    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });

    $('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });
  $('table').css({"width" : ""});
  $('table *').css({"width" : ""});
  //$('table *').removeAttr('style');

});
</script>