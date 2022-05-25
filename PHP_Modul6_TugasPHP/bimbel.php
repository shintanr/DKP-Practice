<?php

echo "Masukkan nama: ";
$nama = trim(fgets(STDIN));
echo "Masukkan id: ";
$id = trim(fgets(STDIN));


class Bimbel {
    private $nama;
    private $mapel;
    private $materi;
    private $durasi;



    public function __construct($nama, $mapel, $materi, $durasi){
        $this->nama = $nama;
        $this->mapel = $mapel;
        $this->materi = $materi;
        $this->durasi = $durasi;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setMapel($mapel){
        $this->mapel = $mapel;
    }

    public function setMateri($materi){
        $this->materi = $materi;
    }

    public function setDurasi($durasi){
        $this->durasi = $durasi;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getMapel(){
        return $this->mapel;
    }

    public function getMateri(){
        return $this->materi;
    }

    public function getDurasi(){
        return $this->durasi;
    }

    }

    
$siswa1 = new Bimbel("Salsa", "IPA", "Sistem Pernapasan");
$siswa2 = new Bimbel("Lina", "IPS", "Sejarah G20");
$siswa3 = new Bimbel("Shinta", "Matematika", "Geometri");
$siswa4 = new Bimbel("Hamdi", "Bahasa Indonesia", "Kalimat Efektif");


echo "Hai " . $nama . "Selama datang di Bimbel Bimbelan <br>";
echo "Mau belajar apa hari ini? ";

