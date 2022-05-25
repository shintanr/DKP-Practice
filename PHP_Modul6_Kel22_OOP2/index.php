<?php 
class PemainBola {
    private $nama;
    private $club;
    private $posisi;

    public function __construct($nama, $club, $posisi){
        $this->nama = $nama;
        $this->club = $club;
        $this->posisi = $posisi;
    }


    public function setClub($clubBaru){
        $this->posisi = $clubBaru;
    }


    public function setPosisi($posisiBaru){
        $this->posisi = $$posisiBaru;
    }


    public function getNama(){
        return $this->nama;
    }


    public function getClub(){
        return $this->club;
    }


    public function getPosisi(){
        return $this->posisi;
    }
}


$aubameyang = new PemainBola("Pierre-Emerik Aubameyang", "Arsenal", "Striker");

echo "-- Tahun 2018 --";
echo "<br>";
echo $aubameyang->getNama();
echo "<br>";
echo $aubameyang->getClub();
echo "<br>";
echo $aubameyang->getPosisi();
echo "<hr>";


$aubameyang->setClub("FC Barcelona");
echo "-- Tahun 2022 --<br>";
echo $aubameyang->getNama(). "<br>";
echo $aubameyang->getClub(). "<br>"; 
echo $aubameyang->getPosisi(). "<br>";
?>

