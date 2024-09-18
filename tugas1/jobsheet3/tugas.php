<?php
class Person1 {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
        }
        public function getRole() {
            return "Unknown Role";
        }
        public function getName() {
        return $this->nama;
        }
    }
class Dosen1 extends Person1 {
    private $nidn;
    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getRole() {
        return "Dosen $this->nama memiliki nidn $this->nidn";
    }
}
class Mahasiswa1 extends Person1 {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getRole() {
        return "Mahasiswa $this->nama memiliki nim $this->nim";
    }
}
abstract class Jurnal {
    protected $namajurnal;
    protected $penulis;

    public function __construct($namajurnal, $penulis) {
        $this->namajurnal = $namajurnal;
        $this->penulis = $penulis;
    }

    abstract public function PengajuanJurnal();
}

class JurnalDosen extends Jurnal {

    public function PengajuanJurnal() {
        return "Jurnal Dosen berjudul $this->namajurnal oleh $this->penulis telah diajukan.";
    }
}
class JurnalMahasiswa extends Jurnal {

    public function PengajuanJurnal() {
        return "Jurnal Mahasiswa berjudul $this->namajurnal oleh $this->penulis telah diajukan.";
    }
}
$dosen1 = new Dosen1 ("septi", "19191919");
echo $dosen1->getRole();
echo "<br>";
$mahasiswa1 = new Mahasiswa1 ("Ana", "230202089");
echo $mahasiswa1->getRole();
echo "<br>";
$jurnalDosen = new JurnalDosen("Pemrograman Berorientasi Objek", "Dedi Sudedi");
echo $jurnalDosen->PengajuanJurnal();
echo "<br>";
$jurnalMahasiswa = new JurnalMahasiswa("User Persona", "Septiana Lestari");
echo $jurnalMahasiswa->PengajuanJurnal(); 
?>