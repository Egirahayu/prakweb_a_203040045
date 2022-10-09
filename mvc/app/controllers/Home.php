<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Home';
    $this->view('templates/header', $data);
    $this->view('home/index');
    $this->view('templates/footer');
  }
}
