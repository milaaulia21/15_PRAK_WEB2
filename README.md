# PRAKTIKUM PEMROGRAMAN WEB II - PRINSIP DASAR PHP OOP

## MODUL PERTEMUAN 1 DAN 2


### JOBSHEET 1

### TUGAS
SOAL :
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk 
menampilkan informasi tersebut.
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses 
pembuatan kelas, penggunaan metode, dan hasil output.

#### Hasil Kode 
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

#### Penjelasan 

   class Dosen {
          public $nama;
          public $nip;
          public $mataKuliah;
##### Class 
Kelas Dosen dirancang untuk menyimpan dan mengelola informasi terkait seorang dosen. Kelas ini memiliki atribut untuk menyimpan nama, NIP (Nomor Induk Pegawai), dan mata kuliah yang diajarkan oleh dosen.
##### Atribute atau Properties
- public $nama: Menyimpan nama dosen. Atribut ini dideklarasikan sebagai public, sehingga dapat diakses dan diubah dari luar kelas.
- public $nip: Menyimpan Nomor Induk Pegawai dosen. Atribut ini juga public, memudahkan akses dan modifikasi.
- public $mataKuliah: Menyimpan informasi mengenai mata kuliah yang diajarkan oleh dosen. Atribut ini public, sehingga dapat diakses langsung.









