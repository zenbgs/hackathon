<?php
if($this->session->flashdata('kosong')){
?>
<script>
swal({
    title: "<?= $this->session->flashdata('kosong') ?>",
    text: "menutup jendela...",
    icon: "info",
    buttons: false,
    timer: 3000,
});
</script>
<?php
}
?>