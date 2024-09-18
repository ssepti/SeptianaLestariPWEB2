<?php
// Membuat kelas Pengguna baru
class Pengguna2 {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function aksesFitur() {
    return "Pengguna : $this->nama memiliki akses fitur umum";
    }
    
}
class Dosen4 extends Pengguna2 {
    public function aksesFitur(){
        return "Dosen : $this->nama memiliki akses fitur memasukan nilai";
    }
}
class Mahasiswa4 extends Pengguna2 {
    public function aksesFitur(){
        return "Mahasiswa : $this->nama memiliki akses fitur melihat nilai";
    }
}
$dosen4 = new Dosen4("septiana");
echo $dosen1->aksesFitur();
echo "<br>";
$mahasiswa1 = new Mahasiswa4("Dedi");
echo $mahasiswa1->aksesFitur();
echo "<br>";

?>