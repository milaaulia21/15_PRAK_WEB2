<?php
// Mendefinisikan class abstrak pengguna
abstract class Pengguna {
    // Metode aksesFitur yang harus diimplementasikan oleh subclass mahasiswa dan dosen
    abstract public function aksesFitur();
}

// Kelas mahasiswa yang mengimplementasikan metode abstrak akses fitur
class Mahasiswa extends Pengguna {
    // Metode akses fitur
    public function aksesFitur() {
        return "Akses fitur sebagai mahasiswa. Anda dapat mengakses fitur akademik.";
    }
}

// Kelas dosen yang mengimplementasikan metode abstrak akses fitur
class Dosen extends Pengguna {
    // Metode akses fitur
    public function aksesFitur() {
        return "Akses fitur sebagai dosen. Anda dapat mengakses fitur pengajaran.";
    }
}

// Instansiasi objek mahasiswa dan dosen
$mahasiswa = new Mahasiswa();
$dosen = new Dosen();

// Memanggil metode akses fitur pada objek mahasiswa dan dosen
echo $mahasiswa->aksesFitur();
echo "<br>";
echo $dosen->aksesFitur();
?>