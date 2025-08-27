<?php  
class Kendaraan 
{
    public $jumlahRoda = 4;
    public $warna;
    public $bahanBakar = "Premium";
    public $harga = 100000000;
    public $merek; 
    public $tahunPembuatan = 2004;

    // Cek status harga
    public function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Harga Kendaraan Mahal"; 
        } else {
            $status = "Harga Kendaraan Murah"; 
        }
        return $status;
    }

    // Cek status subsidi
    public function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }

    // Alias method agar sesuai dengan yang kamu tulis
    public function dapatSubsidi()
    {
        return $this->statusSubsidi();
    }

    // Hitung harga second (misal berkurang 20% per 5 tahun)
    public function hargaSecondKendaraan()
    {
        $umur = date("Y") - $this->tahunPembuatan;
        $penurunan = floor($umur / 5) * 0.2; // 20% per 5 tahun
        $nilaiAkhir = $this->harga * (1 - $penurunan);
        if ($nilaiAkhir < 0) {
            $nilaiAkhir = 0;
        }
        return $nilaiAkhir;
    }
}

// ============================
// Objek 1
// ============================
$objekKendaraan1 = new Kendaraan;
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;

echo "Status Harga : " . $objekKendaraan1->statusHarga();
echo "<br>";

// ============================
// Objek 2
// ============================
$objekKendaraan2 = new Kendaraan;
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>
