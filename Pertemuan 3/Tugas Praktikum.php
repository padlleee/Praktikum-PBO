<?php
    
Class Praktikum3 {
    var $pembeli;
    var $kartu;
    var $TotalBelanja;
    var $Diskon;
    var $TotalBayar;

    function setPembeli($x) {
        $this->pembeli = $x;
    }
    function getPembeli() {
        return $this->pembeli;
    }

    function setKartu($x) {
        $this->kartu = $x;
    }
    function getKartu() {
        return $this->kartu;
    }

    function setTotalBelanja($x) {
        $this->TotalBelanja = $x;
    }
    function getTotalBelanja() {
        return $this->TotalBelanja;
    }
    
    function DiskonMember() {
       if ($this->kartu == "Memiliki") {
            if ($this->TotalBelanja > 500000) {
                $this->Diskon = 50000;
            } else {
                $this->Diskon = 15000;
            }
        } else {
            if ($this->TotalBelanja > 100000) {
                $this->Diskon = 5000;
            } else {
                $this->Diskon = 0;
            }
        }
        return $this->Diskon;
        
        
    }
    function TotalBayar() {
        $this->TotalBayar = $this->TotalBelanja - $this->DiskonMember();
        return $this->TotalBayar;

        
    }
    function output() {
        echo "Pembeli: " . $this->getPembeli(); echo "<br>";
        echo "Kartu Member: " . $this->getKartu(); echo "<br>";
        echo "Total Belanja: " . $this->getTotalBelanja(); echo "<br>";
        echo "Diskon: " . $this->DiskonMember(); echo "<br>";
        echo "Biaya Yang dikeluarkan :" . $this->TotalBayar(); echo "<br>"; echo "<br>";
    }
}

$pembeli1 = new Praktikum3();
$pembeli1->setPembeli("Pembeli 1");
$pembeli1->setKartu("Memiliki");
$pembeli1->setTotalBelanja(200000);

$pembeli2 = new Praktikum3();
$pembeli2->setPembeli("Pembeli 2");
$pembeli2->setKartu("Memiliki");
$pembeli2->setTotalBelanja(570000);

$pembeli3 = new Praktikum3();
$pembeli3->setPembeli("Pembeli 3");
$pembeli3->setKartu("Tidak Memiliki");
$pembeli3->setTotalBelanja(120000);

$pembeli4 = new Praktikum3();
$pembeli4->setPembeli("Pembeli 4");
$pembeli4->setKartu("Tidak Memiliki");
$pembeli4->setTotalBelanja(90000);

$pembeli1->output();
$pembeli2->output();
$pembeli3->output();
$pembeli4->output();
?>

