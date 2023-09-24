<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
?>

<p>
  <a href="<?= base_url('index.php/admin/pegawai/tambah') ?>" title="Tambah Data Pegawai" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
</p>

 <table id="example1" class="table table-bordered table-striped table-responsive">
  <thead>
    <tr>
      <th width="5%">No</th>
      <th>Nama</th>
      <th>NIP</th>
      <th>Jabatan</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($pegawai as $pegawai) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $pegawai->nama_pegawai ?></td>
      <td><?= $pegawai->nip_pegawai ?></td>
      <td><?= $pegawai->jabatan_pegawai ?></td>
      <td>
        <?php
        if ($pegawai->status_pegawai == "aktif") {
        ?>
          <span class="badge rounded-pill label-success">Aktif</span>
        <?php } else { ?>
          <span class="badge rounded-pill label-danger">Non-Aktif</span>
        <?php } ?>
      </td>
      <td>
      <a href="<?= base_url('index.php/admin/pegawai/edit/'.$pegawai->id_pegawai) ?>" title="Edit Pegawai" class="btn btn-warning btn-xs">
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
