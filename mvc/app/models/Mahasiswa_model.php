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

  private $dbh; // Database handler
  private $stmt;

  public function __construct()
  {
    // Data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    // return $this->mhs;

    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
