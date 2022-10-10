<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
?>

<?php

class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "Egi Rahayu",
  //     "nrp" => "203040045",
  //     "email" => "egirahayu@mail.com",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Andre Alfarisi",
  //     "nrp" => "203030048",
  //     "email" => "andrealfarisi@mail.com",
  //     "jurusan" => "Teknik Industri"
  //   ],
  //   [
  //     "nama" => "Fajar Nugraha",
  //     "nrp" => "203050048",
  //     "email" => "fajarnugraha@mail.com",
  //     "jurusan" => "Teknik Mesin"
  //   ]
  // ];

  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
