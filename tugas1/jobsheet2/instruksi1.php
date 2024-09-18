<?php
// Definisi Class
class Mahasiswa {
// Atribut atau Properties
public $nama;
public $nim;
public $jurusan;
// Constructor
public function __construct($nama, $nim, $jurusan) {
$this->nama = $nama;
$this->nim = $nim;
$this->jurusan = $jurusan;
}
// Metode atau Function
public function tampilkanData() {
return "Nama : $this->nama, NIM : $this->nim, JURUSAN : $this->jurusan";
}
}
// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Septiana", "230202089", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>