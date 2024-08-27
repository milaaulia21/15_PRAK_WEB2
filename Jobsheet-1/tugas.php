<?php 
// Mendefinisikan class dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Nama: $this->nama, NIP: $this->nip, Mata Kuliah: $this->mataKuliah";
    }
}

// // Instansiasi Objek dari class mdosen
$dosen = new Dosen("Abdau", "10102", "Praktikum Web 2");

// Menampilkan informasi dosen
echo $dosen->tampilkanDosen();
?>