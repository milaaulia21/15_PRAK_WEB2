# PRAKTIKUM PEMROGRAMAN WEB II - PRINSIP DASAR PHP OOP

## MODUL PERTEMUAN 1 DAN 2


### JOBSHEET 1

#### Tujuan 
Dengan jobsheet ini, mahasiswa diharapkan mampu menerapkan konsep kelas dan 
objek dalam PHP melalui serangkaian tugas yang menekankan pada pembuatan dan 
penggunaan kelas serta objek

#### Instruksi Kerja
1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
2. Implementasi Constructor
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi 
atribut nama, nim, dan jurusan.
- Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
3. Membuat Metode Tambahan
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan 
perubahan jurusan.
- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode 
tampilkanData().

#### Hasil 

##### 1. Membuat Class dan Object
##### Code
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
    }
    
    // Instansiasi Objek dari class mahasiswa
    $mahasiswa=new Mahasiswa("Mila Aulia", "230102015", "Komputer dan Bisnis");
    // Menampilkan data mahasiswa
    echo $mahasiswa->tampilkanData();
    ?>

##### Penjelasan
- **Kelas Mahasiswa**: Kelas ini mendefinisikan tiga atribut publik (`nama`, `nim`, dan `jurusan`) yang dapat diakses dari luar kelas.
- **Constructor**: Metode `__construct()` digunakan untuk menginisialisasi nilai atribut ketika objek `Mahasiswa` baru dibuat. Ini memungkinkan pemberian nilai awal pada atribut `nama`, `nim`, dan `jurusan`.
- **Metode `tampilkanData()`**: Metode ini mengembalikan string yang berisi data mahasiswa dalam format yang telah ditentukan.
- **Instansiasi Objek**: Objek `Mahasiswa` dibuat dengan nama "Mila Aulia", NIM "230102015", dan jurusan "Komputer dan Bisnis". Metode `tampilkanData()` dipanggil untuk menampilkan data mahasiswa.

##### Output 
    Nama: Mila Aulia, NIM: 230102015, Jurusan: Komputer dan Bisnis

##### 2. Implementasi Constructor
##### Code
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
    }
    
    // Instansiasi Objek dari class mahasiswa
    $mahasiswa=new Mahasiswa("Mila Aulia", "230102015", "Komputer dan Bisnis");
    // Menampilkan data mahasiswa
    echo $mahasiswa->tampilkanData();
    ?>

##### Penjelasan 
- **Constructor**: Pada bagian ini, constructor `__construct()` sudah diterapkan pada kode sebelumnya, yang menginisialisasi atribut `nama`, `nim`, dan `jurusan` saat objek `Mahasiswa` dibuat. Dengan menggunakan constructor ini, Anda bisa mengatur nilai awal dari atribut objek saat objek dibuat.

##### Output 
Nama: Mila Aulia, NIM: 230102015, Jurusan: Komputer dan Bisnis

##### 3.  Membuat Metode Tambahan
##### Code
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
    }
    
    // Instansiasi Objek dari class mahasiswa
    $mahasiswa=new Mahasiswa("Mila Aulia", "230102015", "Komputer dan Bisnis");
    echo "Sebelum Update:";
    echo "<br>";
    
    // Menampilkan data mahasiswa
    echo $mahasiswa->tampilkanData();
    echo "<br>";
    
    // Mengubah jurusan mahasiswa
    $mahasiswa->updateJurusan("Teknik Informatika");
    echo "Setelah Update:";
    echo "<br>";
    
    // Menampilkan data mahasiswa yang sudah diperbarui
    echo $mahasiswa->tampilkanData();
    ?>

##### Penjelasan 
- **Metode `updateJurusan()`**: Metode ini ditambahkan untuk memungkinkan perubahan nilai atribut `jurusan`. Metode ini menerima parameter baru untuk `jurusan` dan mengubah nilai atribut `jurusan` pada objek.
- **Instansiasi dan Penggunaan**: Objek `Mahasiswa` dibuat dengan data awal, data mahasiswa ditampilkan sebelum dan setelah jurusan diubah menggunakan metode `updateJurusan()`, kemudian data mahasiswa yang diperbarui ditampilkan kembali.

##### Output
    Sebelum Update:
    Nama: Mila Aulia, NIM: 230102015, Jurusan: Komputer dan Bisnis
    Setelah Update:
    Nama: Mila Aulia, NIM: 230102015, Jurusan: Teknik Informatika

##### 4. Penggunaan Atribut dan Metode
##### Code
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
    $mahasiswa->updateJurusan("Teknik Informatika");
    
    // Mengubah nim mahasiswa
    $mahasiswa->setNim("12345");
    echo "Setelah Update:";
    echo "<br>";
    
    // Menampilkan data mahasiswa yang sudah diperbarui
    echo $mahasiswa->tampilkanData();
    ?>

##### Penjelasan 
- **Metode `setNim()`**: Metode ini ditambahkan untuk memungkinkan perubahan nilai atribut `nim`. Metode ini menerima parameter baru untuk `nim` dan mengubah nilai atribut `nim` pada objek.
- **Instansiasi dan Penggunaan**: Objek `Mahasiswa` dibuat dengan data awal. Data mahasiswa ditampilkan sebelum dan setelah atribut `jurusan` dan `nim` diubah menggunakan metode `updateJurusan()` dan `setNim()`. Data mahasiswa yang diperbarui ditampilkan kembali.

##### Output
    Sebelum Update:
    Nama: Mila Aulia, NIM: 230102015, Jurusan: Komputer dan Bisnis
    Setelah Update:
    Nama: Mila Aulia, NIM: 12345, Jurusan: Teknik Informatika

    
#### Tugas 
SOAL :
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk 
menampilkan informasi tersebut.
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses 
pembuatan kelas, penggunaan metode, dan hasil output.

#### Hasil

##### Code 
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
##### 1. Class 
Kelas Dosen dirancang untuk menyimpan dan mengelola informasi terkait seorang dosen. Kelas ini memiliki atribut untuk menyimpan nama, NIP (Nomor Induk Pegawai), dan mata kuliah yang diajarkan oleh dosen.
##### 2. Atribute atau Properties
- public $nama: Menyimpan nama dosen. Atribut ini dideklarasikan sebagai public, sehingga dapat diakses dan diubah dari luar kelas.
- public $nip: Menyimpan Nomor Induk Pegawai dosen. Atribut ini juga public, memudahkan akses dan modifikasi.
- public $mataKuliah: Menyimpan informasi mengenai mata kuliah yang diajarkan oleh dosen. Atribut ini public, sehingga dapat diakses langsung.

##### Metode

    public function __construct($nama, $nip, $mataKuliah) {
            $this->nama = $nama;
            $this->nip = $nip;
            $this->mataKuliah = $mataKuliah;
        }

Konstruktor ini digunakan untuk menginisialisasi atribut nama, nip, dan mataKuliah saat membuat objek baru dari kelas Dosen.

     public function tampilkanDosen() {
                return "Nama: $this->nama, NIP: $this->nip, Mata Kuliah: $this->mataKuliah";
            }
            
Metode ini mengembalikan string yang berisi informasi lengkap tentang dosen, termasuk nama, NIP, dan mata kuliah yang diajarkan.

##### Instansiasi Objek 

    $dosen = new Dosen("Abdau", "10102", "Praktikum Web 2");

Baris ini membuat objek baru dari kelas Dosen dengan nama "Abdau", NIP "10102", dan mata kuliah "Praktikum Web 2". Konstruktor kelas Dosen dipanggil secara otomatis untuk menginisialisasi atribut objek dengan nilai yang diberikan.

##### Menampilkan Informasi Dosen

     echo $dosen->tampilkanDosen();

Baris ini memanggil metode tampilkanDosen() pada objek $dosen. Metode ini mengembalikan string yang berisi informasi dosen, yang kemudian dicetak menggunakan echo.

##### Output 
    Nama: Abdau, NIP: 10102, Mata Kuliah: Praktikum Web 2
- Nama: Menampilkan nama dosen, "Abdau".
- NIM: Menampilkan Nomor Induk Pegawai dosen, "10102".
- Mata Kuliah: Menampilkan mata kuliah yang diajarkan oleh dosen, "Praktikum Web 2".

## MODUL PERTEMUAN 3 DAN 4

### JOBSHEET 2

#### Tujuan 
Melalui jobsheet ini, mahasiswa diharapkan mampu mengimplementasikan konsep 
dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta 
menerapkan prinsip Encapsulation, Inheritance, Polymorphism, dan Abstraction.

#### Instruksi 
1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
2. Encapsulation
- Ubah atribut dalam class Mahasiswa menjadi private.
- Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
- Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
3. Inheritance
- Buat class Pengguna dengan atribut nama dan metode getNama().
- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut 
mataKuliah.
- Instansiasi objek dari class Dosen dan tampilkan data dosen.
4. Polymorphism
- Buat class Pengguna dengan metode aksesFitur().
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan 
Mahasiswa.
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode 
aksesFitur().
5. Abstraction
- Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan 
metode abstrak tersebut.
- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang 
diinstansiasi.

#### Hasil 
#### 1. Membuat class dan Object
##### Code

    <?php
    // Definisi Kelas Mahasiswa 
    class Mahasiswa {
        // Atribut atau Properties dari kelas mahasiswa, bersifat publik yang dapat diakses dari luar class
        public $nama;
        public $nim;
        public $jurusan;
    
        // Constructor untuk menginisialisasi atribut saat objek dibuat
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
    
        // Metode untuk menampilkan data mahasiswa
        public function tampilkanData() {
            echo "Nama: " . $this->nama . "<br>";
            echo "NIM: " . $this->nim . "<br>";
            echo "Jurusan: " . $this->jurusan . "<br>";
        }
    }
    
    // Instansiasi objek mahasiswa dengan data
    $mahasiswa = new Mahasiswa("Mila Aulia Putri", "230102015", "Komputer dan Bisnis");
    // Memanggil metode tampilkanData untuk menampilkan informasi mahasiswa
    echo $mahasiswa->tampilkanData();
    ?>

##### Penjelasan 
- *Kelas Mahasiswa*: Memiliki atribut nama, nim, dan jurusan yang bersifat public, sehingga bisa diakses dan diubah dari luar kelas.
- *Constructor*: Menginisialisasi atribut dengan nilai yang diberikan saat objek dibuat.
- *Metode tampilkanData()*: Menampilkan data mahasiswa dengan format yang ditentukan.
- *Instansiasi Objek*: Membuat objek baru dari kelas Mahasiswa dengan data yang ditentukan, kemudian memanggil metode tampilkanData() untuk menampilkan data mahasiswa.

##### Output
    Nama: Mila Aulia Putri
    NIM: 230102015
    Jurusan: Komputer dan Bisnis

#### 2. Encapsulation
##### Code
    <?php
    // Mendefinisikan class mahasiswa dengan enkapsulasi
    class Mahasiswa {
        // Atribut private yang hanya bisa diakses dalam class
        private $nama;
        private $nim;
        private $jurusan;
    
        // Constructor untuk menginisialisasi atribut
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
    
        // Getter untuk mendapatkan nilai nama
        public function getNama() {
            return $this->nama;
        }
    
        // Getter untuk mendapatkan nilai nim
        public function getNim() {
            return $this->nim;
        }
    
        // Getter untuk mendapatkan nilai jurusan
        public function getJurusan() {
            return $this->jurusan;
        }
    
        // Setter untuk mengubah nilai nama 
        public function setNama($nama) {
            $this->nama = $nama;
        }
    
        // Setter untuk mengubah nilai nim
        public function setNim($nim) {
            $this->nim = $nim;
        } 
    
        // Setter untuk mengubah nilai jurusan
        public function setJurusan($jurusan) {
            $this->jurusan = $jurusan;
        }
    }
    
    // Instansiasi objek mahasiswa dengan data
    $mahasiswa = new Mahasiswa("Sandi Rizki", "1234", "Komputer dan Bisnis");
    // Mengakses data dengan menggunakan getter
    echo $mahasiswa->getNama(); 
    echo "<br>";
    echo $mahasiswa->setNim("555");
    echo $mahasiswa->getNim();
    echo "<br>";
    echo $mahasiswa->getJurusan();
    ?>
##### Penjelasan
- *Enkapsulasi*: Atribut nama, nim, dan jurusan dideklarasikan sebagai private, yang berarti hanya dapat diakses dan dimodifikasi melalui metode dalam kelas tersebut.
- *Getter dan Setter*: Metode getNama(), getNim(), dan getJurusan() digunakan untuk mengakses nilai atribut, sedangkan setNama(), setNim(), dan setJurusan() digunakan untuk mengubah nilai atribut.
- *Instansiasi dan Akses*: Objek Mahasiswa dibuat dengan data awal, dan data diakses atau diubah menggunakan metode getter dan setter.

##### Output 
    Sandi Rizki
    555
    Komputer dan Bisnis

#### Inheritance 
##### Code
    <?php
    // Mendefinisikan class Pengguna
    class Pengguna {
        // Atribut yang dapat diakses oleh subclass
        protected $nama;
    
        // Constructor untuk menginisialisasi atribut
        public function __construct($nama) {
            $this->nama = $nama;
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
            $this->mataKuliah = $mataKuliah;
        }
    
        // Getter untuk mendapatkan mata kuliah
        public function getMataKuliah() {
            return $this->mataKuliah;
        }
    }
    
    // Instansi objek dosen dengan data
    $dosen = new Dosen("Abdau", "Praktikum Web 2");
    // Menampilkan data dosen menggunakan getter 
    echo $dosen->getNama();
    echo "<br>";
    echo $dosen->getMataKuliah();
    ?>

##### Penjelasan 
- *Pewarisan*: Kelas Dosen mewarisi atribut dan metode dari kelas Pengguna. Kelas Dosen menambahkan atribut baru mataKuliah.
- *Constructor*: Menggunakan parent::__construct($nama) untuk memanggil constructor dari kelas Pengguna dan menginisialisasi atribut nama, sementara mataKuliah diinisialisasi di constructor kelas Dosen.
- *Instansiasi dan Akses*: Objek Dosen dibuat dengan data nama dan mata kuliah, kemudian metode getNama() dan getMataKuliah() digunakan untuk menampilkan data.

##### Output 
    Abdau
    Praktikum Web 2

#### 4. Polymorphism
##### Code
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
    
    // Instansiasi objek dosen dan mahasiswa
    $dosen = new Dosen();
    $mahasiswa = new Mahasiswa();
    
    // Memanggil metode aksesFitur pada objek dosen dan mahasiswa
    echo $dosen->aksesFitur();
    echo "<br>";
    echo $mahasiswa->aksesFitur();
    ?>

##### Penjelasan 
- *Polimorfisme*: Metode aksesFitur() didefinisikan di kelas Pengguna dan diimplementasikan secara berbeda di kelas Dosen dan Mahasiswa. Ini memungkinkan metode yang sama memiliki perilaku yang berbeda tergantung pada jenis objek yang memanggilnya.
- *Instansiasi dan Akses*: Objek Dosen dan Mahasiswa dibuat, dan masing-masing memanggil metode aksesFitur() yang memberikan hasil sesuai dengan implementasi di kelas masing-masing.

##### Output
Akses fitur pada dosen untuk mengelola nilai mahasiswa dan mata kuliah.
Akses fitur khusus pada mahasiswa untuk melihat jadwal dan nilai.

#### 5. Abstraction
##### Code
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
    $mahasiswa = new
    
     Mahasiswa();
    $dosen = new Dosen();
    
    // Memanggil metode akses fitur pada objek mahasiswa dan dosen
    echo $mahasiswa->aksesFitur();
    echo "<br>";
    echo $dosen->aksesFitur();
    ?>

##### Penjelasan
- *Abstraksi*: Kelas Pengguna adalah kelas abstrak yang mendefinisikan metode abstrak aksesFitur(). Metode ini harus diimplementasikan oleh setiap subclass.
- *Implementasi*: Kelas Mahasiswa dan Dosen mengimplementasikan metode aksesFitur() sesuai dengan kebutuhan spesifik mereka.
- *Instansiasi dan Akses*: Objek Mahasiswa dan Dosen dibuat, dan metode aksesFitur() dipanggil untuk menunjukkan fitur yang disediakan oleh masing-masing kelas.

##### Output
    Akses fitur sebagai mahasiswa. Anda dapat mengakses fitur akademik.
    Akses fitur sebagai dosen. Anda dapat mengakses fitur pengajaran.


## MODUL PERTEMUAN 5 DAN 6

### JOBSHEET 3

#### Tujuan
Mahasiswa diharapkan mampu menerapkan prinsip OOP dalam pemrograman PHP 
melalui tugas yang mengintegrasikan konsep Inheritance, Polymorphism, Encapsulation, 
dan Abstraction.

#### Instruksi Kerja
1. Inheritance 
- Buat kelas Person dengan atribut name dan metode getName().
- Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID 
serta metode getStudentID().
2. Polymorphism 
- Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut 
teacherID.
- Override metode getName() di kelas Student dan Teacher untuk menampilkan 
format berbeda.
3. Encapsulation 
- Ubah atribut name dan studentID dalam kelas Student menjadi private.
- Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai 
atribut name dan studentID.
4. Abstraction 
- Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
- Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan 
getCourseDetails() untuk memberikan detail yang berbeda.


#### Tugas
Buat proyek PHP dengan studi kasus sebagai berikut: 
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan 
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan 
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang 
berbeda.
4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di 
kelas Mahasiswa.
5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan 
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing 
memiliki cara tersendiri untuk mengelola pengajuan jurnal.

#### Penjelasan
#### Kelas 'Person'
*Deskripsi*:
Kelas Person adalah kelas dasar yang menyimpan informasi umum tentang seseorang, dalam hal ini nama. Kelas ini berfungsi sebagai induk bagi kelas Dosen dan Mahasiswa, menyediakan atribut dasar serta metode yang dapat digunakan dan diubah oleh kelas turunannya.

##### Code
    class Person {
        public $nama;
    
        public function __construct($nama) {
            $this->nama = $nama;
        }
    
        public function getRole() {
            return "Ini adalah person.";
        }
    }

##### Penjelasan 
- *Atribut*:
  - public $nama: Menyimpan nama orang. Atribut ini public, artinya dapat diakses langsung dari luar kelas.
- *Metode*:
  - __construct($nama): Konstruktor yang digunakan untuk menginisialisasi atribut nama saat membuat objek baru.
  - getRole(): Metode ini memberikan deskripsi umum "Ini adalah person." dan dirancang untuk di-override oleh kelas turunan untuk menunjukkan peran spesifik.

##### Output
Jika metode getRole() dipanggil dari objek Person, hasilnya adalah "Ini adalah person." Namun, dalam proyek ini, metode ini akan di-override di kelas turunan Dosen dan Mahasiswa.



1. *Output dari Person*: Metode getRole() yang digunakan di kelas dasar Person menunjukkan peran generik. Kelas turunan (Dosen dan Mahasiswa) meng-override metode ini untuk memberikan deskripsi peran yang lebih spesifik.

2. *Output dari Dosen*: Menggunakan getRole(), getName(), dan getNidn(), objek Dosen memberikan informasi yang relevan mengenai nama dan NIDN dosen serta mengkonfirmasi pengajuan jurnal.

3. *Output dari Mahasiswa*: Menggunakan getRole(), getName(), dan getNim(), objek Mahasiswa memberikan informasi mengenai nama dan NIM mahasiswa serta mengkonfirmasi pengajuan jurnal.

4. *Output dari JurnalDosen dan JurnalMahasiswa*: Kedua kelas ini memberikan pesan yang sesuai dengan peran pengaju jurnal, menunjukkan implementasi spesifik dari metode pengajuanJurnal().


#### Kelas 'Dosen'
Kelas Dosen mewarisi dari kelas Person dan menambahkan atribut serta metode khusus untuk mengelola informasi dosen seperti NIDN. Kelas ini juga meng-override metode getRole() untuk menunjukkan peran sebagai dosen.

##### Code
    class Dosen extends Person {
        private $nidn;
    
        public function __construct($nama, $nidn) {
            parent::__construct($nama);
            $this->nidn = $nidn;
        }
    
        public function getRole() {
            return "Dosen";
        }
    
        public function getName() {
            return "Nama : $this->nama";
        }
    
        public function getNidn() {
            return "NIDN : $this->nidn";
        }
    
        public function setName($nama) {
            $this->nama = $nama;
        }
    
        public function setNidn($nidn) {
            $this->nidn = $nidn;
        }
    }

##### Penjelasan 
- *Atribut*:
  - private $nidn: Menyimpan Nomor Induk Dosen Nasional, dilindungi dengan private untuk keamanan data.
- *Metode*:
  - __construct($nama, $nidn): Menginisialisasi nama dan nidn untuk objek dosen.
  - getRole(): Mengembalikan "Dosen" untuk menunjukkan peran objek.
  - getName(), getNidn(): Mengembalikan nama dan NIDN dosen.
  - setName($nama), setNidn($nidn): Mengubah nilai nama dan NIDN.

##### Output 
    Dosen
    Nama : Rosita
    NIDN : 12345

#### Class 'Mahasiswa'
Kelas Mahasiswa mewarisi dari kelas Person dan menambahkan atribut serta metode yang terkait dengan mahasiswa, seperti NIM. Seperti Dosen, kelas ini juga meng-override metode getRole() untuk menampilkan peran sebagai mahasiswa.

##### Code
    class Mahasiswa extends Person {
        private $nim;
    
        public function __construct($nama, $nim) {
            parent::__construct($nama);
            $this->nim = $nim;
        }
    
        public function getRole() {
            return "Mahasiswa";
        }
    
        public function getName() {
            return "Nama : $this->nama";
        }
    
        public function getNim() {
            return "NIM : $this->nim";
        }
    
        public function setName($nama) {
            $this->nama = $nama;
        }
    
        public function setNim($nim) {
            $this->nim = $nim;
        }
    }

##### Penjelasan 
- *Atribut*:
  - private $nim: Menyimpan Nomor Induk Mahasiswa, dilindungi dengan private.
- *Metode*:
  - __construct($nama, $nim): Menginisialisasi nama dan nim untuk objek mahasiswa.
  - getRole(): Mengembalikan "Mahasiswa" untuk menunjukkan peran objek.
  - getName(), getNim(): Mengembalikan nama dan NIM mahasiswa.
  - setName($nama), setNim($nim): Mengubah nilai nama dan NIM.

##### Output 
    Mahasiswa
    Nama : Nathan
    NIM : 230102015

#### Class Abstract 'Jurnal'
Kelas abstrak Jurnal mendefinisikan struktur dasar untuk pengelolaan jurnal, termasuk atribut judul dan metode abstrak pengajuanJurnal(). Kelas ini menetapkan kontrak yang harus diikuti oleh kelas-kelas turunannya.

##### Code
    abstract class Jurnal {
        protected $judul;
    
        public function __construct($judul) {
            $this->judul = $judul;
        }
    
        abstract public function pengajuanJurnal();
    }

##### Penjelasan
- *Atribut*:
  - protected $judul: Menyimpan judul jurnal. Atribut ini protected, artinya dapat diakses oleh kelas turunan.
- *Metode*:
  - __construct($judul): Menginisialisasi judul untuk objek jurnal.
  - pengajuanJurnal(): Metode abstrak yang harus diimplementasikan oleh kelas-kelas turunan. Tidak ada implementasi di kelas ini, sehingga kelas turunan harus memberikan implementasi spesifik.

#### Class 'JurnalDosen' dan 'JurnalMahasiswa'
Kelas-kelas ini adalah implementasi dari kelas abstrak Jurnal, masing-masing dengan cara tersendiri untuk mengelola pengajuan jurnal berdasarkan peran pengaju (Dosen atau Mahasiswa).

##### Code
*Kode JurnalDosen*:
    
    class JurnalDosen extends Jurnal {
        public function pengajuanJurnal() {
            return "Jurnal '$this->judul' telah diajukan oleh Dosen.";
        }
    }


*Kode JurnalMahasiswa*:

    class JurnalMahasiswa extends Jurnal {
        public function pengajuanJurnal() {
            return "Jurnal '$this->judul' telah diajukan oleh Mahasiswa.";
        }
    }

##### Penjelasan
- *Metode*:
  - pengajuanJurnal(): Mengimplementasikan cara pengajuan jurnal untuk masing-masing peran. JurnalDosen mengembalikan pesan bahwa jurnal telah diajukan oleh dosen, sedangkan JurnalMahasiswa mengembalikan pesan bahwa jurnal telah diajukan oleh mahasiswa.

##### Output 
- JurnalDosen: "Jurnal 'Integral Tak Tentu' telah diajukan oleh Dosen."
- JurnalMahasiswa: "Jurnal 'Bisnis pada bidang olahraga' telah diajukan oleh Mahasiswa."


##### Output Full
    Dosen
    Nama : Rosita
    NIDN : 12345
    Jurnal 'Integral Tak Tentu' telah diajukan.
    
    Mahasiswa
    Nama : Nathan
    NIM : 230102015
    Jurnal 'Bisnis pada bidang olahraga' telah diajukan.

##### Kesimpulan
1. *Output dari Person*: Metode getRole() yang digunakan di kelas dasar Person menunjukkan peran generik. Kelas turunan (Dosen dan Mahasiswa) meng-override metode ini untuk memberikan deskripsi peran yang lebih spesifik.

2. *Output dari Dosen*: Menggunakan getRole(), getName(), dan getNidn(), objek Dosen memberikan informasi yang relevan mengenai nama dan NIDN dosen serta mengkonfirmasi pengajuan jurnal.

3. *Output dari Mahasiswa*: Menggunakan getRole(), getName(), dan getNim(), objek Mahasiswa memberikan informasi mengenai nama dan NIM mahasiswa serta mengkonfirmasi pengajuan jurnal.

4. *Output dari JurnalDosen dan JurnalMahasiswa*: Kedua kelas ini memberikan pesan yang sesuai dengan peran pengaju jurnal, menunjukkan implementasi spesifik dari metode pengajuanJurnal().








