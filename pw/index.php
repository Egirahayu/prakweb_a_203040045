<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query dari database
$komik = query("SELECT * FROM buku_komik");

if (isset($_POST["cari"])) {
  $komik = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css materialize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- materialize icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- icon medsos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- css lokal -->
  <link rel="stylesheet" href="css/style.css">
  <!-- shortcut icon -->
  <title>Buku Komik</title>
  <style>
    body {
      background-image: url(image/unsplash.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <h3 class="center">List Buku Komik</h3>

    <div class="row">
      <div class="col m9 s12">
        <div class="add">
          <a href="tambah.php" class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">add</i></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="search">
          <form action="" method="POST">
            <input type="text" name="keyword" size="30" autofocus autocomplete="off">
            <button type="submit" name="cari" class="waves-effect waves-light brown darken-4 btn" style="font-size: 18px;"><i class="material-icons" style="margin-right: 10px;">search</i>Search</button>
          </form>
        </div>
      </div>
    </div>

    <table class="striped">
      <tr class="orange darken-2">
        <th class="center">No</th>
        <th class="center">Opsi</th>
        <th class="center">Image</th>
        <th>Nama Komik</th>
        <th>Pengarang</th>
      </tr>

      <?Php if (empty($komik)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>

        <?php $i = 1; ?>

        <?php foreach ($komik as $kmk) : ?>
          <tr class="grey darken-3 white-text">
            <td class="center"><?= $i; ?></td>
            <td class="center">
              <a href="ubah.php?id=<?= $kmk['id']; ?>" class="waves-effect waves-light blue darken-2 btn">Ubah</a>
              <a href="hapus.php?id=<?= $kmk['id']; ?>" class="waves-effect waves-light red darken-2 btn" onclick="return confirm('Hapus Data?')">Hapus</a>
            </td>
            <td class="center"><img src="image/<?= $kmk['img']; ?>" width="150px"></td>
            <td><?= $kmk['komik']; ?></td>
            <td><?= $kmk['pengarang']; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
</body>

</html>