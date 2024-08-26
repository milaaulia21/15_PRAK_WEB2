<?php
abstract class Pengguna {
    abstract public function aksesFitur();
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur akademik.";
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        return "Dosen telah mengakses fitur pengajaran.";
    }
}

$mahasiswa = new Mahasiswa();
$dosen = new Dosen();
echo $mahasiswa->aksesFitur();
echo "<br>";
echo $dosen->aksesFitur();
?>