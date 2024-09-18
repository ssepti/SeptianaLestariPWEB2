<?php
class Person {
    protected $nama;
    
    public function __construct($nama) {
    $this->nama = $nama;
    }
    public function getName() {
    return $this->nama;
    }
}
class Student extends Person {
    public function getStudentID() {
        return "Nama : $this->nama";
        }
}

$student1 = new Student("Septiana", "2");
echo $student1->getName();
echo "<br>";
echo $student1->getStudentID();
?>