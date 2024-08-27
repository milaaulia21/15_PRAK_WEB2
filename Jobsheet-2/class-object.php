<?php
// Definisi Kelas Mahasiswa 
class Mahasiswa {
    // Atribute atau Properties dari kelas mahasiswa, bersifat publik yang dapat diakses dari luar class
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama=$nama;
        $this->nim=$nim;
        $this->jurusan=$jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: ". $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Instansiasi objek mahasiswa dengan data
$mahasiswa=new Mahasiswa("Mila Aulia Putri", "230102015", "Komputer dan Bisnis");
// Memanggil metode tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
?>