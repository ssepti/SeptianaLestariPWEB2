<?php
abstract class Course {
    abstract public function getCourseDetails();
}
Class OnlineCourse extends Course {
    private $nama;
    private $platform;

    public function __construct($nama, $platform) {
        $this->nama = $nama;
        $this->platform = $platform;
    }
    public function getCourseDetails() {
        return " Online Course : $this->nama, PLatform : $this->platform";
    }
}
class OfflineCourse extends Course {
    private $nama;
    private $tempat;

    public function __construct($nama, $tempat) {
        $this->nama = $nama;
        $this->tempat = $tempat;
    }
    public function getCourseDetails()
    {
        return " Offline Course : $this->nama, Tempat : $this->tempat";
    }
}
$OnlineCourse = new OnlineCourse("Ruanguji", "Ruang Guru");
echo $OnlineCourse->getCourseDetails();
echo "<br>";

$OfflineCourse = new OfflineCourse("JWD", "PNC");
echo $OfflineCourse->getCourseDetails();
?>