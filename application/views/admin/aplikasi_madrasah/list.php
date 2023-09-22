<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<p>
  <a href="<?= base_url('index.php/admin/konfigurasi/tambahAplikasiMadrasah') ?>" title="Tambah Data Aplikasi Madrasah" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
</p>

 <table id="example1" class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th width="5%">No</th>
      <th>Nama Aplikasi</th>
      <th>Link Aplikasi</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($apl as $apl) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $apl->nama_aplikasi ?></td>
      <td><?= $apl->link_aplikasi ?></td>
      <td>

      <a href="<?= base_url('index.php/admin/konfigurasi/editAplikasiMadrasah/'.$apl->id_aplikasi) ?>" title="Edit Aplikasi Madrasah" class="btn btn-warning btn-xs">
        <i class="fa fa-edit"></i> Edit
      </a>

      <?php
      //Link Delete
      include('delete.php');
      ?>

      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
