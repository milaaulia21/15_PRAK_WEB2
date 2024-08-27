# Praktikum Web 2


## JOBSHEET 1
### 1. Membuat Class dan Object 

## TUGAS 1
### 1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah

### Struktur Kode

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

### Penjelasan : 
### Class

    class Dosen
    
Pada potongan coding tersebut digunakan untuk mendefinisikan kelas 'Dosen'. Kelas ini adalah blueprint untuk membuat objek dosen dengan atribut atau properti dan metode tertentu.

### Atribute atau properties

    public $nama;
    
Atribut untuk menyimpan nama dosen.

    public $nip;

Atribut untuk menyimpan Nomor Induk Pegawai (NIP) dosen.
    
    public $mataKuliah;

Atribut untuk menyimpan mata kuliah yang diajarkan oleh dosen.

Atribut-atribut ini didefinisikan sebagai 'public yang berarti dapat diakses langsung dari luar kelas.

### Constructor

public function __construct($nama, $nip, $mataKuliah) 

Constructor digunakan untuk menginisialisasi atribut kelas ketika objek baru dibuat.

        $this->nama = $nama;

Mengatur nilai atribut nama dengan nilai yang diberikan.

        $this->nip = $nip;

Mengatur nilai atribut nip dengan nilai yang diberikan.

        $this->mataKuliah = $mataKuliah;

Mengatur nilai atribut mataKuliah dengan nilai yang diberikan.

### Metode tampilkanDosen() 

public function tampilkanDosen() 

Metode ini untuk menampilkan informasi dosen.

        return "Nama: $this->nama, NIP: $this->nip, Mata Kuliah: $this->mataKuliah";

Mengembalikan string format yang menampilkan nama, nip, dan mata kuliah dosen.

### Instansiasi Objek

$dosen = new Dosen("Abdau", "10102", "Praktikum Web 2");

Membuat objek Dosen baru dengan nama "Abdau", NIP "10102", dan mata kuliah "Praktikum Web 2".

### Menampilkan Informasi Dosen 

echo $dosen->tampilkanDosen();

Memanggil metode tampilkanDosen() pada objek $dosen untuk menampilkan informasi dosen. echo digunakan untuk menampilkan hasil metode ke layar.


### Hasil Output 










