<?php
// Mendefinisikan kelas Person
class Person {
    // Atribut atau properti
    protected $name;

    // Constructor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name=$name;
    }

    // Metode untuk mendapatkan nama 
    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    // Atribut private khusus untuk kelas Student
    private $studentID;

    // Contructor untuk menginisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID=$studentID; // Inisialisasi studentID
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// Instansiasi objek student
$student=new Student("Mila Aulia", "0978");
// Menampilkan data Student
echo "Student Name : ";
echo $student->getName();
echo "<br>";
echo "Student ID :";
echo $student->getStudentID();
?>