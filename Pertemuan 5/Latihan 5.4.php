<?php
class warung {
    private $Barang;

    public function __construct($barang) {
        $this->Barang = $barang;
    }
    public function getInfo() {
        foreach ($this->Barang as $nama => $harga) {
            echo "- " . $nama . ", Dengan Harga: " . $harga . "<br/>";
        }
    }
}

$barang = [
    "Kecap" => 5000,
    "Tepung Terigu" => 10000,
];
$barang1 = new warung ($barang);
echo $barang1->getInfo();
?>