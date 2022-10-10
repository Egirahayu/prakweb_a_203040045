<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>

      <?php foreach ($data['mhs'] as $mhs) : ?>
        <ul>
          <li><?= $mhs['nama']; ?></li>
          <li><?= $mhs['nrp']; ?></li>
          <li><?= $mhs['email']; ?></li>
          <li><?= $mhs['jurusan']; ?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>