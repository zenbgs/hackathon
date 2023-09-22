<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}

//validasi
echo validation_errors('<div class="alert alert-warning">','</div>');

//include tambah
include('tambah.php');
?>

<br>
<hr>

<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="5%">No</th>
            <th>Link Video</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $i = 1;
    foreach ($video as $video) {
    ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $video->link_video ?></td>
            <td><?= character_limiter($video->judul,50) ?></td>
            <td><?= date("d/m/Y", strtotime($video->tanggal)); ?></td>
            <td>

                <button title="Edit Video" data-toggle="modal" data-target="#yourModal<?= $video->id_video ?>"
                    class="btn btn-warning btn-xs">
                    <i class="fa fa-edit"></i> Edit
                </button>
                
                <?php include('edit.php'); ?>

                <?php include('delete.php'); ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>