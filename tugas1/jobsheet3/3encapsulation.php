<?php
class Person2 {
    protected $nama; // Masih protected agar bisa diakses oleh kelas turunan
    
    public function __construct($nama) {
        $this->nama = $nama;
    }
    
    public function getName() {
        return $this->nama;
    }
    
    public function setName($nama) {
        $this->nama = $nama;
    }
}

class Student2 extends Person2 {
    private $studentID; // Atribut private untuk studentID
    
    public function __construct($nama, $studentID) {
        parent::__construct($nama); // Memanggil constructor dari kelas induk
        $this->studentID = $studentID;
    }

    // Setter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
    
    // Getter untuk studentID
    public function getStudentID() {
        return "Nama: " . $this->nama . " | Student ID: " . $this->studentID;
    }

    // Override metode getName
    public function getName() {
        return $this->nama;
    }
}

class Teacher2 extends Person2 {
    private $TeacherID; // Atribut private untuk studentID
    
    public function __construct($nama, $TeacherID) {
        parent::__construct($nama); // Memanggil constructor dari kelas induk
        $this->TeacherID = $TeacherID;
    }
    public function setTeacherID($TeacherID) {
        $this->TeacherID = $TeacherID;
    }
    public function getTeacherID() {
        return "Nama: " . $this->nama . " | Teacher ID: " . $this->TeacherID;
    }
    
    public function getName() {
        return $this->nama;
    }
}

// Contoh penggunaan
$student1 = new Student2("Septiana", "230202089");
$teacher1 = new Teacher2("Lestari", "10101010");

echo $student1->getName(); // Menampilkan nama Student
echo "<br>";
echo $student1->getStudentID(); // Menampilkan nama dan student ID
echo "<br>";

// Mengubah studentID menggunakan setter
$student1->setStudentID("230000089");
echo $student1->getStudentID(); // Menampilkan student ID yang telah diubah
echo "<br>";

echo $teacher1->getName(); // Menampilkan nama Teacher
echo "<br>";
echo $teacher1->getTeacherID(); // Menampilkan teacher ID
?>