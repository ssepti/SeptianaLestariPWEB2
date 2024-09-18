<?php
// Membuat kelas mahasiswa
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Membuat metode tampilkanData
    public function tampilkanData() {
        return "nama: $this->nama nim: $this->nim jurusan: $this->jurusan.";
    }

    //Implementasi Constructor
    public function __construct($nama, $nim, $jurusan){
       $this->nama = $nama;
       $this->nim = $nim;
       $this->jurusan = $jurusan; 
    }
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
}
// Instansiasi objek
$mahasiswa1 = new Mahasiswa("Septiana", "230202089", "Komputer Dan Bisnis");
echo $mahasiswa1->tampilkanData();

$mahasiswa1->updateJurusan("Teknik Mesin");
echo "<br>";
echo $mahasiswa1->tampilkanData();

$mahasiswa1->setNim("230303089");
echo "<br>";
echo $mahasiswa1->tampilkanData();
?>