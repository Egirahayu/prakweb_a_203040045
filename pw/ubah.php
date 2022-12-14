<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

<?php
require 'functions.php';

$id = $_GET['id'];
$kmk = query("SELECT * FROM buku_komik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'index.php';
                  </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'index.php';
                  </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- css lokal -->
    <link rel="stylesheet" href="style.css">
    <title>Ubah Data MC Anime</title>
</head>

<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $kmk["id"] ?>">
            <div class="card-panel">
                <h5>Form Ubah Data Main Character Anime</h5>
                <div class="input-field">
                    <input type="text" name="komik" id="komik" required value="<?= $kmk["komik"]; ?>">
                    <label for="komik">Komik</label>
                </div>
                <div class="input-field">
                    <input type="text" name="pengarang" id="pengarang" required value="<?= $kmk["pengarang"]; ?>">
                    <label for="pengarang">Pengarang</label>
                </div>
                <div class="file-field input-field">
                    <input type="hidden" name="gambar_lama" value="<?= $kmk['img']; ?>">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload Gambar">
                    </div>
                    <img src="image/<?= $kmk['img']; ?>" width="150px" style="display: block;" class="img-preview">
                </div>
                <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="ubah">Ubah Data!</button></a>
                <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
                    <a href="index.php" style='text-decoration: none; color: white;'>Kembali</a>
                </button>
            </div>
        </form>
    </div>

    <!-- script materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- script lokal -->
    <script src="script.js"></script>
</body>

</html>