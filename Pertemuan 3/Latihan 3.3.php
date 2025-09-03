<?php
// akses properties dengan setter dan getter
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek($x) {
        $this->merek = $x;
    }

    function getMerek() {
        return $this->merek;
    }

    function setHarga($y) {
        $this->harga = $y;
    }

    function getHarga() {
        return $this->harga;
    }
}

// Membuat objek
$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek("Yamaha Mio");
$kendaraan1->setHarga(10000000);

// Output
echo $kendaraan1->getMerek();
echo "<br>";
echo $kendaraan1->getHarga();
?>
