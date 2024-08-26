<?php
class Pengguna {
    public function __construct() {
    }

    public function aksesFitur() {
        return "Akses fitur untuk semua pengguna.";
    }
}

class Dosen extends Pengguna {
    private $nama;
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        $this->nama = $nama;
        $this->mataKuliah = $mataKuliah;
    }

    public function aksesFitur() {
        return "Dosen telah mengakses fitur pengajaran.";
    }
}

class Mahasiswa extends Pengguna {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan= $jurusan;
    }

    public function aksesFitur() {
        return "Mahasiswa mengakses fitur akademik.";
    }
}

$dosen = new Dosen("Abdau", "Praktkum Web 2");
$mahasiswa = new Mahasiswa("Mila Aulia", "230102015", "Komputer dan Bisnis");
echo $dosen->aksesFitur();
echo "<br>";
echo $mahasiswa->aksesFitur();
?>