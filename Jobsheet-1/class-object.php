<?php
// Definisi Class
class Mahasiswa {
    // Atribute atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama=$nama;
        $this->nim=$nim;
        $this->jurusan=$jurusan;
    }

    // Metode atau Function
    public function tampilkanData() {
        echo "Nama: ". $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Instansiasi Objek
$mahasiswa=new Mahasiswa("Mila Aulia Putri", "230102015", "Komputer dan Bisnis");
echo $mahasiswa->tampilkanData();
?>