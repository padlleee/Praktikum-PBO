<?php
class employee {
    public $Jabatan;
    public $Gaji;
    public $Masa;

    public function __construct($Jabatan, $Gaji, $Masa) {
        $this->Jabatan = $Jabatan;
        $this->Gaji = $Gaji;
        $this->Masa = $Masa;
    }

    public function totalgaji() {
        return $this->Gaji;
    }

    public function getInfo() {
        echo "- Jabatan anda adalah " . $this->Jabatan . ", dengan Gaji sebesar : Rp. " . $this->Gaji . ", dengan lama masa kerja " . $this->Masa . " Tahun, dengan Total Gaji : Rp. " . $this->totalgaji() . "<br/>";
    }
}

class Programmer extends employee {
    public function totalgaji() {
        if ($this->Masa < 1) {
            return $this->Gaji;
        } elseif ($this->Masa >= 1 && $this->Masa <= 10) {
            return $this->Gaji + ($this->Gaji * 0.01 * $this->Masa);
        } else {
            return $this->Gaji + ($this->Gaji * 0.02 * $this->Masa);
        }
    }
}

class Direktur extends employee {
    public function totalgaji() {
        $bonus = $this->Gaji * 0.5 * $this->Masa;
        $tunjangan = $this->Gaji * 0.1 * $this->Masa;
        return $this->Gaji + $bonus + $tunjangan;
    }
}

class PegawaiMingguan extends employee {
    private $hargaBarang;
    private $stockBarang;
    private $penjualan;

    public function __construct($Jabatan, $Gaji, $Masa, $hargaBarang, $stockBarang, $penjualan) {
        parent::__construct($Jabatan, $Gaji, $Masa);
        $this->hargaBarang = $hargaBarang;
        $this->stockBarang = $stockBarang;
        $this->penjualan = $penjualan;
    }

    public function totalgaji() {
        if ($this->penjualan > 0.7 * $this->stockBarang) {
            return $this->Gaji + ($this->penjualan * $this->hargaBarang * 0.1);
        } else {
            return $this->Gaji + ($this->penjualan * $this->hargaBarang * 0.03);
        }
    }

    public function getInfo() {
        echo "- Jabatan: " . $this->Jabatan . ", Gaji: " . $this->Gaji . ", Masa Kerja: " . $this->Masa . " Tahun, Harga Barang: " . $this->hargaBarang . ", Stock Barang: " . $this->stockBarang . ", Penjualan: " . $this->penjualan . ", Total Gaji: " . $this->totalgaji() . "<br/> <br/>";
    }
}

$employee1 = new Programmer("Programmer", 6000000, 5);
$employee1->getInfo();

$employee2 = new Direktur("Direktur", 10000000, 15);
$employee2->getInfo();

$employee3 = new PegawaiMingguan("Pegawai Mingguan", 3000000, 2, 5000, 100, 80);
$employee3->getInfo();
?>
