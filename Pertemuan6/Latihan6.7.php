<?php
class karyawan {
    public $NamaKaryawan;
    public $Golongan;
    PUBLIC $jamlembur;
    public $gajipokok;
    public function __construct($NamaKaryawan, $Golongan, $jamlembur) {
        $this->NamaKaryawan = $NamaKaryawan;
        $this->Golongan = $Golongan;
        $this->jamlembur = $jamlembur;
        $this->gajipokok = $this->getGajiPokok();
    }

    public function __destruct() {
        unset($this->NamaKaryawan);
        unset($this->Golongan);
        unset($this->jamlembur);
        unset($this->gajipokok);
    }

    public function setNamaKaryawan($NamaKaryawan) {
        $this->NamaKaryawan = $NamaKaryawan;
    }

    public function getNamaKaryawan() {
        return $this->NamaKaryawan;
    }

    public function setGolongan($Golongan) {
        $this->Golongan = $Golongan;
    }

    public function getGolongan() {
        return $this->Golongan;
    }

    public function setJamLembur($jamlembur) {
        $this->jamlembur = $jamlembur;
    }

    public function getJamLembur() {
        return $this->jamlembur;
    }

    public function getGajiPokok() {
        $gajiGolongan = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
        return $gajiGolongan[$this->Golongan] ?? 0;
    }

    public function getTotalGaji() {
        $lemburPerJam = 15000;
        $totalLembur = $this->jamlembur * $lemburPerJam;
        return $this->gajipokok + $totalLembur;
    }
}
$karyawanList = [
    new karyawan("Vinny", "IIb", 20),
    new karyawan("Steady", "IIIc", 32),
    new karyawan("Alfred", "IVb", 30),
    new karyawan("Ferdinand", "IIIc", 40)
];

echo "Nama Karyawan\tGolongan\tTotal Jam Lembur\tTotal Gaji\n";
foreach ($karyawanList as $karyawan) {
    echo $karyawan->getNamaKaryawan() . "\t\t" . $karyawan->getGolongan() . "\t\t" . $karyawan->getJamLembur() . "\t\t\t" . number_format($karyawan->getTotalGaji(), 0, ',', '.') . "\n";
}


?>