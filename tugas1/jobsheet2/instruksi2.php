<?php
// Membuat Kelas Mahasiswa
class Mahasiswa2 {
    private $nama;
    private $nim;
    private $jurusan;

    // Membuat metode tampilkanData
    public function tampilkanData() {
        return "nama: $this->nama nim: $this->nim jurusan: $this->jurusan.";
    }
    // Constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan; 
     }
     // Membuat metode getter
     public function getNama() {
        return  $this->nama;
     }
     // Membuat metode setter
     public function setNama($nama) {
        $this->nama = $nama;
     }
     public function getNim() {
        return  $this->nim;
     }
     public function setNim($nim) {
        $this->nim = $nim;
     }
     public function getJurusan() {
        return  $this->jurusan;
     }
     public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
     }
     
}



$mahasiswa1 = new Mahasiswa2("Septiana", "230202089", "Komputer Dan Bisnis");

echo $mahasiswa1->tampilkanData();
echo "<br>";

// mendemonstrasikan setter
echo $mahasiswa1->setNama("Ana ");
echo $mahasiswa1->setNim("101010101 ");
echo $mahasiswa1->setJurusan("Teknik Mesin");
//mendemonstrasikan getter
echo $mahasiswa1->getNama();
echo $mahasiswa1->getNim();
echo $mahasiswa1->getJurusan();
echo "<br>";
?>