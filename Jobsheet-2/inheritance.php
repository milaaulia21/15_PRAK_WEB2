<?php
// Mendefinisikan class Pengguna
class Pengguna {
    // Atribut yang dapat diakses oleh subclass
    protected $nama;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama) {
        $this->nama=$nama;
    }

    // Getter untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Mendefinisikan class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    // Atribut private khusus untuk class Dosen
    private $mataKuliah;

    // Construtor yang memanggil constructor dari class pengguna dan menambahkan atribut baru 
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor class pengguna
        $this->mataKuliah=$mataKuliah;
    }

    // Getter untuk mendapatkan mata kuliah
    public function getmataKuliah() {
        return $this->mataKuliah;
    }
}

// Instansi objek dosen dengan data
$dosen=new Dosen("Abdau", "Praktikum Web 2");
// Menampilkan data dosen menggunakan getter 
echo $dosen->getNama();
echo "<br>";
echo $dosen->getmataKuliah();
?>