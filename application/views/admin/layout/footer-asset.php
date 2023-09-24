<script src="<?= base_url() ?>assets/js/core/jquery.min.js?v=1.0"></script>
<script src="<?= base_url() ?>assets/js/core/popper.min.js?v=1.0"></script>
<script src="<?= base_url() ?>assets/js/core/bootstrap.min.js?v=1.0"></script>
<script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/dragula.min.js?v=1.0"></script>
<script src="<?= base_url() ?>assets/js/plugins/jkanban.js?v=1.0"></script>
<script src="<?= base_url() ?>assets/js/plugins/tilt.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/quill.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/choices.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/flatpickr.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/dropzone.min.js"></script>
<script src="<?= base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/js/custom/custom.js"></script>


<script>
CKEDITOR.replace('editor', {
    toolbar: [{
            name: 'clipboard',
            items: ['PasteFromWord', '-', 'Undo', 'Redo']
        },
        {
            name: 'basicstyles',
            items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'Subscript', 'Superscript']
        },
        {
            name: 'links',
            items: ['Link', 'Unlink']
        },
        {
            name: 'paragraph',
            items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
        },
        {
            name: 'insert',
            items: ['Image', 'Table']
        },
        {
            name: 'editing',
            items: ['Scayt', 'Maximize']
        },
        '/',

        {
            name: 'styles',
            items: ['Format', 'Font', 'FontSize']
        },
        {
            name: 'colors',
            items: ['TextColor', 'BGColor', 'CopyFormatting']
        },
        {
            name: 'align',
            items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
        },
        {
            name: 'document',
            items: ['Print', 'PageBreak', 'Source']
        }
    ],
  
  on: {
        instanceReady: function( ev ) {
            // Output paragraphs as <p>Text</p>.
            this.dataProcessor.writer.setRules( 'p', {
                indent: false,
                breakBeforeOpen: true,
                breakAfterOpen: false,
                breakBeforeClose: false,
                breakAfterClose: true
            });
        }
    },

    customConfig: '',

    filebrowserImageBrowseUrl: '<?php echo base_url('assets/kcfinder/browse.php');?>',
    disallowedContent: 'img{width,height,float}',
    extraAllowedContent: 'img[width,height,align]',
    extraPlugins: 'colorbutton,font,justify,print,tableresize,uploadimage,uploadfile,pastefromword,liststyle,pagebreak',

    bodyClass: 'document-editor',

    format_tags: 'p;h1;h2;h3;pre',

    removeDialogTabs: 'image:advanced;link:advanced',

});
</script>
<?php
if(isset($sub_activator)){
?>
<script>
var selector = '.navbar-nav > .<?= $activator ?> > .collapse';
var selector2 = '.navbar-nav > .<?= $activator ?> > .collapse > ul > .<?= $sub_activator ?>';
var selector3 =
    '.navbar-nav > .<?= $activator ?> > .collapse > ul > .<?= $sub_activator ?> > .nav-link';
var selector4 = '.navbar-nav > .<?= $activator ?> > .nav-link';
var selector5 = '.navbar-nav > .<?= $activator ?> > .nav-link';
$(selector5).addClass('active');
$(selector).addClass('show');
$(selector2).addClass('active');
$(selector3).addClass('active');
$(selector4).attr("aria-expanded", "true");
</script>
<?php }else{ ?>
<script>
let selector = '.navbar-nav > .<?= $activator ?> > .nav-link';
let selector1 = '.navbar-nav > .<?= $activator ?> > .nav-link';
$(selector).attr("aria-expanded", "true");
$(selector1).addClass('active');
</script>
<?php } ?>

<?php
if ($activator == 'berita' || $activator == 'galeri') {
?>
<script src="<?= base_url() ?>assets/js/plugins/datatables.js"></script>
<script>
const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
    searchable: true,
    iDisplayLength: 10,
    language: {
        sEmptyTable: "Tidak Ada Data",
        sProcessing: "Sedang memproses...",
        sLengthMenu: "tampil : _MENU_",
        sZeroRecords: "Tidak ditemukan data yang sesuai",
        sInfo: "_END_ dari total _TOTAL_ data",
        sInfoEmpty: "0 data",
        sInfoFiltered: "(disaring dari _MAX_ data)",
        sInfoPostFix: "",
        sSearch: "Cari:",
        sUrl: "",
        oPaginate: {
            sFirst: "Pertama",
            sPrevious: "<<",
            sNext: ">>",
            sLast: "Terakhir",
        },
    },
});
</script>
<?php } ?>
<?php
if($this->uri->segment(2) == 'kategori'){
?>
<script>
$('.btn-lihat').on('click', function() {
    const nama = $(this).data('nama');
    const slug = $(this).data('slug');
    $('.nama').val(nama);
    $('.slug').val(slug);
    $('.lihatModal').modal('show');
});

$('.btn-edit').on('click', function() {
    const id = $(this).data('id');
    const nama = $(this).data('nama');
    const slug = $(this).data('slug');
    $('.id').val(id);
    $('.nama').val(nama);
    $('.slug').val(slug);
    $('.editModal').modal('show');
});
</script>
<?php } ?>

<?php
if($this->uri->segment(2) == 'user'){
?>
<script>

$('.btn-edit').on('click', function() {
    const id = $(this).data('id');
    const nama = $(this).data('nama');
    const username = $(this).data('username');
    const hak_akses = $(this).data('hak_akses');
    const email = $(this).data('email');
    const no_telp = $(this).data('no_telp');
    const nik = $(this).data('nik');
    $('.id').val(id);
    $('.nama').val(nama);
    $('.username').val(username);
    $('.hak_akses').val(hak_akses);
    $('.email').val(email);
    $('.no_telp').val(no_telp);
    $('.nik').val(nik);
    $('.editModal').modal('show');
});
</script>
<?php } ?>

<?php
if($activator == 'galeri'){
?>
<script>
$('.btn-lihat').on('click', function() {
    const judul = $(this).data('judul');
    const gambar = $(this).data('gambar');
    const tanggal = $(this).data('tanggal');
    $('.judul').val(judul);
    $('.tanggal').val(tanggal);
    $('.gambar').attr('src', '<?= base_url('assets/upload/image/thumbs/') ?>' + gambar)
    $('.lihatModal').modal('show');
});

$('.btn-edit').on('click', function() {
    const id = $(this).data('id');
    const judul = $(this).data('judul');
    const gambar = $(this).data('gambar');
    const tanggal = $(this).data('tanggal');
    $('.id').val(id);
    $('.judul').val(judul);
    $('.gambar').attr('src', '<?= base_url('assets/upload/image/thumbs/') ?>' + gambar)
    $('.editModal').modal('show');
});
</script>
<?php } ?>

<script>
if (document.getElementById("choices-multiple-remove-button")) {
    var element = document.getElementById("choices-multiple-remove-button");
    const example = new Choices(element, {
        removeItemButton: true,
    });

    example.setChoices(
        [{
                value: "One",
                label: "Label One",
                disabled: true,
            },
            {
                value: "Two",
                label: "Label Two",
                selected: true,
            },
            {
                value: "Three",
                label: "Label Three",
            },
        ],
        "value",
        "label",
        false
    );
}

if (document.querySelector(".datetimepicker")) {
    flatpickr(".datetimepicker", {
        allowInput: true,
    }); // flatpickr
}

Dropzone.autoDiscover = false;
var drop = document.getElementById("dropzone");
var myDropzone = new Dropzone(drop, {
    url: "/file/post",
    addRemoveLinks: true,
});
</script>
<script>
var win = navigator.platform.indexOf("Win") > -1;
if (win && document.querySelector("#sidenav-scrollbar")) {
    var options = {
        damping: "0.5",
    };
    Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
}

function drawCountyBoundary(search)
{
    var map =  L.map('map', {maxZoom: 30, minZoom: 1}).setView([-8.487384220496068, 116.04262340348217], 17);
    var url = `https://nominatim.openstreetmap.org/search.php?q=${search}&format=jsonv2`
    fetch(url, {mode: 'cors', headers: {'Access-Control-Allow-Origin':'*'}}).then(function(response) {
        // console.log(response.json())
    return response.json();
  })
  .then(function(json) {
    geojsonFeature = json[0].boundingbox;
    var bounds = [[geojsonFeature[1],geojsonFeature[0]], [geojsonFeature[3], geojsonFeature[2]]]
    console.log(bounds)
    // L.geoJSON(geojsonFeature).addTo(map);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

  });
}

$(window).on('load',function(){
        $(".lazy").slick({
            lazyLoad: 'ondemand',
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
        });

        $('.zenFade').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 2000,
            arrows:true,
        });

        $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows:false,
        });
     });

drawCountyBoundary('institut asia malang')
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url() ?>assets/js/soft-ui-dashboard.js?v=1.0.9"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>