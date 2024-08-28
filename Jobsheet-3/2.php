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

    // Overide metode getName untuk format berbeda
    public function getName() {
        return "Student Name: $this->name";
    }
}

// Kelas Teacher yang mewarisi dari Person
class Teacher extends Person {
    // Atribut private khusus untuk kelas Teacher
    private $teacherID;
 
    // Contructor untuk menginisialisasi nama dan teacherID
    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID=$teacherID; // Inisialisasi teacherID
    }

    // Overide metode getName untuk format berbeda
    public function getName() {
        return "Teacher Name: $this->name ";
    }
 }

 // Instansiasi objek student dan teacher
 $student= new Student("Mila Aulia", "230102015");
 $teacher= new Teacher("Abdau", "1234");
 // Menampilkan nama student dan teacher
 echo $student->getName();
 echo "<br>";
 echo $teacher->getName();
 ?>