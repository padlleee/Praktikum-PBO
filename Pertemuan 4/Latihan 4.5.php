<?php

// Assume a class named 'Kendaraan' exists
class Kendaraan {
    public $merek;
    public $roda;
    public $harga;
    public $warna;
    public $bhnBakar;
    public $tahun;

    public function setMerek($m) { $this->merek = $m; }
    public function getMerek() { return $this->merek; }
    public function setJmlRoda($r) { $this->roda = $r; }
    public function getJmlRoda() { return $this->roda; }
    public function setHarga($h) { $this->harga = $h; }
    public function getHarga() { return $this->harga; }
    public function setWarna($w) { $this->warna = $w; }
    public function getWarna() { return $this->warna; }
    public function setBhnBakar($b) { $this->bhnBakar = $b; }
    public function getBhnBakar() { return $this->bhnBakar; }
    public function setTahun($t) { $this->tahun = $t; }
    public function getTahun() { return $this->tahun; }
    
    // Placeholder methods for analysis
    public function statusHarga() { return "Status Harga: (Logic Missing)"; }
    public function dapatSubsidi() { return "Status Subsidi: (Logic Missing)"; }
    public function hargaSecondKendaraan() { return "Harga Bekas: (Logic Missing)"; }
}

$Data = [
    ['Toyota Yaris', '4', '160000000', 'Merah', 'Pertamax', '2014'],
    ['Honda Scoopy', '2', '13000000', 'Putih', 'Premium', '2005'],
    ['Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994']
];

$kendaraan = [];

// Loop to create and initialize each Kendaraan object
for ($i = 0; $i < count($Data); $i++) {
    $kendaraan[$i] = new Kendaraan();
    $kendaraan[$i]->setMerek($Data[$i][0]);
    $kendaraan[$i]->setJmlRoda($Data[$i][1]);
    $kendaraan[$i]->setHarga($Data[$i][2]);
    $kendaraan[$i]->setWarna($Data[$i][3]);
    $kendaraan[$i]->setBhnBakar($Data[$i][4]);
    $kendaraan[$i]->setTahun($Data[$i][5]);
}

// Loop to display the data for each Kendaraan object
for ($i = 0; $i < count($kendaraan); $i++) {
    echo "Kendaraan " . ($i + 1) . "<br>";
    echo "Merek: " . $kendaraan[$i]->getMerek() . "<br>";
    echo "Jumlah Roda: " . $kendaraan[$i]->getJmlRoda() . "<br>";
    echo "Harga: " . $kendaraan[$i]->getHarga() . "<br>";
    echo "Warna: " . $kendaraan[$i]->getWarna() . "<br>";
    echo "Bahan Bakar: " . $kendaraan[$i]->getBhnBakar() . "<br>";
    echo "Tahun: " . $kendaraan[$i]->getTahun() . "<br>";
    echo $kendaraan[$i]->statusHarga() . "<br>";
    echo $kendaraan[$i]->dapatSubsidi() . "<br>";
    echo $kendaraan[$i]->hargaSecondKendaraan() . "<br><br>";
}

?>