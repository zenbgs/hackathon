<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<p>
  <a href="<?= base_url('index.php/admin/program/tambah') ?>" title="Tambah Data Program" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
</p>

 <table id="example1" class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th width="5%">No</th>
      <th>Gambar</th>
      <th>Nama Program</th>
      <th>Status</th>
      <th>Penulis</th>
      <th>Tanggal</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($program as $program) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><img src="<?= base_url('assets/upload/image/thumbs/'.$program->gambar) ?>" width="60" class="img img-thumbnail"></td>
      <td><?= $program->judul_program ?></td>
      <td><?= $program->status_program ?></td>
      <td><?= $program->nama ?></td>
      <td><?= $program->tanggal_post ?></td>
      <td>
        
      <a href="<?= base_url('index.php/admin/program/edit/'.$program->id_program) ?>" title="Edit Program" class="btn btn-warning btn-xs">
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