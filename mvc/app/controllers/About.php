<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

<?php

class About
{
  public function index($nama = 'Egi Rahayu', $pekerjaan = 'Mahasiswa')
  {
    // echo 'about/index';
    // echo "Halo, nama saya Egi Rahayu, saya adalah seorang Mahasiswa";
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
  }

  public function page()
  {
    echo 'About/page';
  }
}
