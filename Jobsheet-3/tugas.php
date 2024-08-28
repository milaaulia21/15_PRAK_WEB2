<?php
// 1. Kelas Person sebagai induk dari Dosen dan Mahasiswa
class Person {
    // Atribut atau properti untuk menyimpan nama
    public $nama;

    // Constructor untuk menginisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama; // Inisialisasi nama
    }

    // Metode ini dapat di-override di kelas turunan
    public function getRole() {
        return "Ini adalah person.";
    }
}


//Kelas Dosen mewarisi dari Person 
class Dosen extends Person {
    // Atribut atau properti yang hanya bisa diakses dari dalam kelas Dosen
    private $nidn;

    // Constructor untuk menginisialisasi nama dan nidn
    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn; // Inisialisasi nidn
    }

    // Override metode getRole untuk menunjukkan peran sebagai Dosen
    public function getRole() {
        return "Dosen";
    }

    // Metode getName untuk mendapatkan nama Dosen
    public function getName() {
        return "Nama : $this->nama";
    }

    // Metode getNidn untuk mendapatkan NIDN Dosen
    public function getNidn() {
        return "NIDN : $this->nidn";
    }

    // Metode setName untuk mengubah nama Dosen
    public function setName() {
        $this->nama = $nama;
    }

    // Metode setNidn untuk mengubah NIDN Dosen 
    public function setNidn() {
        $this->nidn = $nidn;
    }
}


// Kelas Mahasiswa mewari dari Person
class Mahasiswa extends Person {
    // Atribut atau properti yang hanya bisa diakses dari dalam kelas Mahasiswa
    private $nim;

    // Constructor untuk menginisialisasi nama dan nim
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim; // Inisialisasi nim
    }

    // Override metode getRole untuk menunjukkan peran sebagai Mahasiswa
    public function getRole() {
        return "Mahasiswa";
    }

    // Metode getName untuk mendapatkan nama Mahasiswa
    public function getName() {
        return "Nama : $this->nama";
    }

    // Metode getNim untuk mendapatkan NIM Mahasiswa
    public function getNim() {
        return "NIM : $this->nim";
    }

    // Metode setName untuk mengubah nama Mahasiswa
    public function setName() {
        $this->nama = $nama;
    }

    // Metode setNim untuk mengubah NIM Mahasiswa
    public function setNim() {
        $this->nim = $nim;
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    // Atribut atau properti yang hanya bisa diakses dari dalam kelas abstrak Jurnal
    protected $judul;

    // Constructor untuk menginisialisasi judul 
    public function __construct($judul) {
        $this->judul = $judul; // Inisialisasi judul
    }

    // Metode abstrak yang diimplementasikan di kelas turunan
    abstract public function pengajuanJurnal();
}


// Kelas JurnalDosen adalah turunan dari Jurnal
class JurnalDosen extends Jurnal {
    // Implementasi untuk pengajuan jurnal oleh Dosen
    public function pengajuanJurnal() {
        return "Jurnal '$this->judul' telah diajukan.";
    }
}

// Kelas JurnalMahasiswa adalah turunan dari Jurnal
class JurnalMahasiswa extends Jurnal {
    // Implementasi untuk pengajuan jurnal oleh Mahasiswa
    public function pengajuanJurnal() {
        return "Jurnal '$this->judul' telah diajukan.";
    }
}

// Instansiasi objek dari kelas-kelas yang telah dibuat
$dosen = new Dosen("Rosita", "12345");
$mahasiswa = new Mahasiswa("Nathan", "230102015");
$jurnaldosen = new JurnalDosen("Integral Tak Tentu");
$jurnalmahasiswa = new JurnalMahasiswa("Bisnis pada bidang olahraga");

// Output informasi mengenai Dosen
echo $dosen->getRole(), "<br>"; 
echo $dosen->getName(), "<br>";
echo $dosen->getNidn(), "<br>";
echo $jurnaldosen->pengajuanJurnal();
echo "<br><br>";
// Output informasi mengenai Mahasiswa
echo $mahasiswa->getRole(), "<br>";
echo $mahasiswa->getName(), "<br>";
echo $mahasiswa->getNim(), "<br>";
echo $jurnalmahasiswa->pengajuanJurnal();
?>