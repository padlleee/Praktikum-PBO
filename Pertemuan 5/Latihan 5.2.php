<?php
Class Bangundatar {
    public $Luas;
    public $Keliling;
    function output () {
        echo "Luas = " . $this->Luas . "<br/>";
        echo "Keliling = " . $this->Keliling . "<br/>";
    }
}
class Persegi extends Bangundatar {
    function HitungLuas($sisi) {
        $this->Luas = $sisi * $sisi;
    }
    function HitungKeliling($sisi) {
        $this->Keliling = 4 * $sisi;
    }
}
Class Lingkaran extends Bangundatar {
    function HitungLuas($jariJari) {
        $this->Luas = 3.14 * $jariJari * $jariJari;
    }
    function HitungKeliling($jariJari) {
        $this->Keliling = 2 * 3.14 * $jariJari;
    }
}
Class persegiPanjang extends Bangundatar {
    function HitungLuas($panjang, $lebar) {
        $this->Luas = $panjang * $lebar;
    }
    function HitungKeliling($panjang, $lebar) {
        $this->Keliling = 2 * ($panjang + $lebar);
    }
}
Class Segitiga extends Bangundatar {
    function HitungLuas($alas, $tinggi) {
        $this->Luas = 0.5 * $alas * $tinggi;
    }
    function HitungKeliling($sisi1, $sisi2, $sisi3) {
        $this->Keliling = $sisi1 + $sisi2 + $sisi3;
    }
}

$objekPersegi = new Persegi();
$objekPersegi->HitungLuas(4);
$objekPersegi->HitungKeliling(4);
echo "<b>Persegi</b><br/>";
$objekPersegi->output();
echo "<br/>";

$objekLingkaran = new Lingkaran();
$objekLingkaran->HitungLuas(7);
$objekLingkaran->HitungKeliling(7);
echo "<b>Lingkaran</b><br/>";
$objekLingkaran->output();
echo "<br/>";

$objekPersegiPanjang = new PersegiPanjang();
$objekPersegiPanjang->HitungLuas(6, 3);
$objekPersegiPanjang->HitungKeliling(6, 3);
echo "<b>Persegi Panjang</b><br/>";
$objekPersegiPanjang->output();
echo "<br/>";

$objekSegitiga = new Segitiga();
$objekSegitiga->HitungLuas(6, 4);
$objekSegitiga->HitungKeliling(6, 4, 5);
echo "<b>Segitiga</b><br/>";
$objekSegitiga->output();
echo "<br/>";

?>