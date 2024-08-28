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

// Kelas Student dengan atribut name dan studentID sebagai private
class Student extends Person {
    // Atribut atau properti
    private $studentID;

    // Constructor untuk menginisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID=$studentID; //Inisialisasi studentID
    }

    // Getter untuk mendapatkan nama student
    public function getName() {
        return $this->name;
    }

    // Getter untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Setter untuk mengubah nama student
    public function setName($name) {
        $this->name=$name;
    }

    // Setter untuk mengubah studentID
    public function setStudentID($studentID) {
        $this->studentID=$studentID;
    }
}

// Instansiasi objek student
$student = new Student("Mila Aulia", "230102015");
// Menampilkan data student sebelum diperbarui
echo $student->getName();
echo "<br>";
echo $student->getStudentID();
echo "<hr>";
// Menampilkan data student setelah diperbarui
echo "Setelah diubah :";
echo "<br>";
echo $student->setName("Nathan Noel");
echo $student->getName();
echo "<br>";
echo $student->setStudentID("200122");
echo $student->getStudentID();

?>