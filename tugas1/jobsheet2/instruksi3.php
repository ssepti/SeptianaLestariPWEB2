<?php
// Membuat class pengguna
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
    return $this->nama;
    }
}
// Membuat kelas Dosen dari kelas turunan pengguna
class Dosen2 extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
    parent::__construct($nama);
    $this->mataKuliah = $mataKuliah;
    }

    public function getmataKuliah() {
    return $this->mataKuliah;
    }

    public function tampilData() {
        return "nama: $this->nama, mata kuliah: $this->mataKuliah";
    }
}
$dosen1 = new Dosen2("Septiana", "Konsep Basis Data");
echo $dosen1->tampilData(); // Output: Pemrograman PHP
?>