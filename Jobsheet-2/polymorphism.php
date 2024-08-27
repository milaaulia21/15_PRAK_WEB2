<?php
class Pengguna {
    public function __construct() {
    }
    // Metode aksesFitur ini dapat mengakses fitur yang bisa digunakan oleh semua pengguna
    public function aksesFitur() {
        return "Akses fitur untuk semua pengguna.";
    }
}

// Membuat akses fitur khusus untuk dosen
class Dosen extends Pengguna {
    public function __construct() {

    }

    public function aksesFitur() {
        return "Akses fitur pada dosen untuk mengelola nilai mahasiswa dan mata kuliah.";
    }
}

// Membuat akses fitur khusus untuk mahasiswa
class Mahasiswa extends Pengguna {
    public function __construct() {
        
    }

    public function aksesFitur() {
        return "Akses fitur khusus pada mahasiswa untuk melihat jadwal dan nilai.";
    }
}

// Instansiasi objek mdosen dan mahasiswa
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Memanggil metode aksesFitur pada objek dosen dan mahasiswa
echo $dosen->aksesFitur();
echo "<br>";
echo $mahasiswa->aksesFitur();
?>