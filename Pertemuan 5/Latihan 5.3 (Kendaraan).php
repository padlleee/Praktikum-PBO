<?php
class kendaraan {
    public $merk;
    public $harga;

    function getInfo() {
       echo "Biaya Operasional Pesawat" . $this->merk . " dengan harga Rp. " . $this->harga . "<br/>";
    }
}
class pesawat extends kendaraan {
    private $tinngimaks;
    private $makskecepatan;
    function setTinggiMaks($tinngimaks) {
        $this->tinngimaks = $tinngimaks;
    }
    function getTinggiMaks() {
        return $this->tinngimaks;
    }
    function setMaksKecepatan($makskecepatan) {
        $this->makskecepatan = $makskecepatan;
    }
    function getMaksKecepatan() {
        return $this->makskecepatan;
    }

    function hitungbiayaOperasional() {
        if ($this->makskecepatan > 800 and $this->tinngimaks > 5000) {
            $biaya = $this->harga * 0.3;
        } 
        elseif ($this->makskecepatan > 500 and $this->tinngimaks > 3000) {
            $biaya = $this->harga * 0.2;
        } 
        elseif ($this->makskecepatan < 500 and $this->tinngimaks < 3000) {
            $biaya = $this->harga * 0.1;
        }
        else {
            $biaya = $this-> harga * 0.05;
        }
        return $biaya;
    }
}

$Pesawat1 = new pesawat();
$Pesawat1->merk = "Boeing 737";
$Pesawat1->harga = 20000000000;
$Pesawat1->setTinggiMaks(7500);
$Pesawat1->setMaksKecepatan(650);
$Pesawat1->getInfo();
echo "dengan tinggi maksimum " . $Pesawat1->getTinggiMaks() . " meter dan kecepatan maksimum " . $Pesawat1->getMaksKecepatan() . " km/jam, adalah : Rp. " . $Pesawat1->hitungbiayaOperasional()."<br/> <br/>";
$Pesawat2 = new pesawat();
$Pesawat2->merk = "Boeing 747";
$Pesawat2->harga = 3500000000;
$Pesawat2->setTinggiMaks(5800);
$Pesawat2->setMaksKecepatan(750);
$Pesawat2->getInfo();
echo "dengan tinggi maksimum " . $Pesawat2->getTinggiMaks() . " meter dan kecepatan maksimum " . $Pesawat2->getMaksKecepatan() . " km/jam, adalah : Rp. " . $Pesawat2->hitungbiayaOperasional()."<br/> <br/>";
$Pesawat3 = new pesawat();
$Pesawat3->merk = "Cassa";
$Pesawat3->harga = 75000000;
$Pesawat3->setTinggiMaks(3500);
$Pesawat3->setMaksKecepatan(500);
$Pesawat3->getInfo();
echo "dengan tinggi maksimum " . $Pesawat3->getTinggiMaks() . " meter dan kecepatan maksimum " . $Pesawat3->getMaksKecepatan() . " km/jam, adalah : Rp. " . $Pesawat3->hitungbiayaOperasional()."<br/> <br/>";
?>