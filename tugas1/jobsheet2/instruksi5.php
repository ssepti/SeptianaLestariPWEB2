<?php
abstract class Pengguna1 {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function aksesFitur();
}

class Dosen3 extends Pengguna1 {
    public function aksesFitur() {
        return "Dosen : $this->nama memiliki akses fitur memasukan nilai";
    }
}
class Mahasiswa3 extends Pengguna1 {
    public function aksesFitur() {
        return "Mahasiswa : $this->nama memiliki akses fitur melihat nilai";
    }
}

$dosen1 = new Dosen3("septiana");
$mahasiswa1 = new Mahasiswa3("Lestari", "230202089", "TI");

echo $dosen1->aksesFitur();
echo "<br>";
echo $mahasiswa1->aksesFitur();
?>