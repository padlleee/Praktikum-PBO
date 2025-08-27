<?php
class mobil {
    var $jumlah_roda=4;
    var $warna="merah";
    var $bahan_bakar="pertamax";
    var $harga="100000000";
    var $merk="Toyota";

    //deklarasi method
    public function statusHarga ()
    {
        if ($this->harga > 50000000) $status = "mahal";
        else $status = "murah";
        return $status;
    }
}

$object1 = new mobil();
$object2 = new mobil();
$object3 = new mobil();

echo $object1->statusHarga();
?>