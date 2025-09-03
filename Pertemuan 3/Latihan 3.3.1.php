<?php
Class Kendaraan {
    var $merek;
    var $jmlroda;
    var $harga;
    

    function setMerek($x) {
        $this->merek = $x;
    }
    function getMerek() {
        return $this->merek;
    }
    function setHarga($x) {
        $this->harga = $x;
    }

    function setJmlRoda($x) {
        $this->jmlroda = $x;
    }

    function statusHarga() {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek('Toyota Yaris');

echo "Merek: " . $kendaraan1->getMerek();
echo "<br>";
?>