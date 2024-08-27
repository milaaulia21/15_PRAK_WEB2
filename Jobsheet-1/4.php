<?php

// Mendefinisikan class mahasiswa
class Mahasiswa {
    // Atribute atau Properties bersifat public yang dapat diakses diluar class
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk mengatur nilai awal dari atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama=$nama;
        $this->nim=$nim;
        $this->jurusan=$jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }

    // Metode untuk mengubah jurusan mahasiswa
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Metode untuk mengubah nim mahasiswa
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Instansiasi Objek dari class mahasiswa
$mahasiswa=new Mahasiswa("Mila Aulia", "230102015", "Komputer dan Bisnis");
echo "Sebelum Update:";
echo "<br>";

// Menampilkan data mahasiswa
echo $mahasiswa->tampilkanData();
echo "<br>";

// Mengubah jurusan mahasiswa
echo $mahasiswa->updateJurusan("Teknik Informatika");

// Mengubah nim mahasiswa
echo $mahasiswa->setNim("12345");
echo "Setelah Update:";
echo "<br>";

// Menampilkan data mahasiswa yang sudah diperbarui
echo $mahasiswa->tampilkanData();
?>