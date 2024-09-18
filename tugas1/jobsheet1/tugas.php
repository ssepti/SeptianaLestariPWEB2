<?php
// Membuat Kelas Dosen
class Dosen {
    // Membuat atribut
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama         = $nama;
        $this->nip          = $nip;
        $this->mataKuliah   = $mataKuliah;
    } 

    //membuat Metode tampilkanDosen
    public function tampilkanDosen() {
        return "Dosen $this->nama dengan nip $this->nip mengajar mata kuliah $this->mataKuliah.";
    }
}

// Instansiasi Objek
$dosen1 = new Dosen("Dwi Novia Prasteyanti, S.Kom.M.Cs", "197911192021212009", "Praktikum Struktur Data");
echo $dosen1->tampilkanDosen();
?>