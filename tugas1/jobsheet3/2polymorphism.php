<?php
class Person1 {
    protected $nama;
    
    public function __construct($nama) {
    $this->nama = $nama;
    }
    public function getName() {
    return $this->nama;
    }
}
class Student1 extends Person1 {
    public function getStudentID() {
        return "Nama : $this->nama";
        }
    public function getName() {
        return $this->nama;
        }
}
class Teacher1 extends Person1 {
    public function getTeacherID() {
        return "Nama : $this->nama";
        }
    public function getName() {
        return $this->nama;
        }
}

$student1 = new Student1("Septiana");
$teacher1 = new Teacher1("Lestari");
echo $student1->getName();
echo "<br>";
echo $student1->getStudentID();
echo "<br>";
echo $teacher1->getName();
echo "<br>";
echo $teacher1->getTeacherID();
?>