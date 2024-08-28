<?php
// Kelas abstrak Course
abstract class Course {
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplemetasikan getCourseDetails
class OnlineCourse extends Course {
    // Implementasi metode getCourseDetails untuk kursus online
    public function getCourseDetails() {
        return "Ini adalah online course.";
    }
}

// Kelas OfflineCourse yang mengimplementasikan getCourseDetails
class OfflineCourse extends Course {
    // Implementasi metode getCourseDetails untuk kursus offline
    public function getCourseDetails() {
        return "Ini adalah offline course.";
    }
}

// Instansiasi objek onlinecourse dan offlinecourse
$onlinecourse = new OnlineCourse();
$offlinecourse = new OfflineCourse();
// Output dari onlinecourse dan offlinecourse
echo $onlinecourse->getCourseDetails();
echo "<br>";
echo $offlinecourse->getCourseDetails();
?>