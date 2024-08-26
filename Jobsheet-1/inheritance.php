<?php
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama=$nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah=$mataKuliah;
    }

    public function getmataKuliah() {
        return $this->mataKuliah;
    }
}

$dosen=new Dosen("Abdau", "Praktikum Web 2");
echo $dosen->getNama();
echo "<br>";
echo $dosen->getmataKuliah();
?>