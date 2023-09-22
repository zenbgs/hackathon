<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<p>
  <a href="<?= base_url('index.php/admin/konfigurasi/tambahLinkTerkait') ?>" title="Tambah Data Link Terkait" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
</p>

 <table id="example1" class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th width="5%">No</th>
      <th>Nama Link</th>
      <th>Link</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($link as $link) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $link->nama_link ?></td>
      <td><?= $link->link ?></td>
      <td>

      <a href="<?= base_url('index.php/admin/konfigurasi/editLinkTerkait/'.$link->id_link) ?>" title="Edit Link Terkait" class="btn btn-warning btn-xs">
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
