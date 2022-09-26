<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
                alert('Data Berhasil dihapus!');
                document.location.href = 'index.php';
              </script>";
} else {
    echo "<script>
                alert('Data Gagal dihapus!');
                document.location.href = 'index.php';
              </script>";
}
?>