<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

<?php

class About extends Controller
{
  public function index($nama = 'Egi Rahayu', $pekerjaan = 'Mahasiswa', $umur = 20)
  {
    // echo 'about/index';
    // echo "Halo, nama saya Egi Rahayu, saya adalah seorang Mahasiswa";
    // echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";

    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $data['judul'] = 'Pages';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
