<?php
// Mendefinisikan class mahasiswa dengan enkapsulasi
class Mahasiswa {
    // Atribut private yang hanya bisa diakses dalam class
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama=$nama;
        $this->nim=$nim;
        $this->jurusan=$jurusan;
    }

    // Getter untuk mendapatkan nilai nama
    public function getNama() {
        return $this->nama;
    }

    // Getter untuk mendapatkan nilai nim
    public function getNim() {
        return $this->nim;
    }

    // Getter untuk mendapatkan nilai jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Setter untuk mengubah nilai nama 
    public function setNama($nama) {
        $this->nama=$nama;
    }


    // Setter untuk mengubah nilai nim
    public function setNim($nim) {
        $this->nim=$nim;
    } 

    // Setter untuk mengubah nilai jurusan
    public function setJurusan($jurusan) {
        $this->jurusan=$jurusan;
    }
}

// Instansiasi objek mahasiswa dengan data
$mahasiswa=new Mahasiswa("Sandi Rizki", "1234", "Komputer dan Bisnis");
// Mengakses data dengan menggunakan getter
echo $mahasiswa->getNama(); 
echo "<br>";
echo $mahasiswa->setNim("555");
echo $mahasiswa->getNim();
echo "<br>";
echo $mahasiswa->getJurusan();
?>