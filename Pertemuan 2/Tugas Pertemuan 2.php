<?php
class PegadaianPinjaman
{
    public $namaToko = "TOKO PEGADAIAN SYARIAH";
    public $alamat = "Jl. Keadilan No 16";
    public $telepon = "72353459";

    public $pinjaman;       
    public $bunga;          
    public $lamaAngsuran;   
    public $hariTerlambat;  
    public static $dendaPerHari = 0.0015; 

    public function __construct($pinjaman, $bunga, $lamaAngsuran, $hariTerlambat)
    {
        $this->pinjaman = $pinjaman;
        $this->bunga = $bunga;
        $this->lamaAngsuran = $lamaAngsuran;
        $this->hariTerlambat = $hariTerlambat;
    }

    public function totalPinjaman()
    {
        $total = $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
        return $total;
    }

    public function angsuranPerBulan()
    {
        return $this->totalPinjaman() / $this->lamaAngsuran;
    }

    public function denda()
    {
        // gunakan static variable self::$dendaPerHari
        return $this->angsuranPerBulan() * self::$dendaPerHari * $this->hariTerlambat;
    }

    public function totalPembayaran()
    {
        return $this->angsuranPerBulan() + $this->denda();
    }

    public function cetakStruk()
    {
        echo "<h3>" . $this->namaToko . "</h3>";
        echo $this->alamat . "<br>";
        echo "Telp. " . $this->telepon . "<br><hr>";

        echo "Besaran Pinjaman : Rp " . number_format($this->pinjaman, 0, ',', '.') . "<br>";
        echo "Bunga : " . $this->bunga . "%<br>";
        echo "Total Pinjaman : Rp " . number_format($this->totalPinjaman(), 0, ',', '.') . "<br>";
        echo "Lama Angsuran : " . $this->lamaAngsuran . " bulan<br>";
        echo "Besaran Angsuran : Rp " . number_format($this->angsuranPerBulan(), 0, ',', '.') . "<br>";
        echo "Keterlambatan Angsuran (hari) : " . $this->hariTerlambat . "<br>";
        echo "Denda Keterlambatan : Rp " . number_format($this->denda(), 0, ',', '.') . "<br>";
        echo "Total Pembayaran : Rp " . number_format($this->totalPembayaran(), 0, ',', '.');
    }
}


// global variable 
$pinjaman = 1000000;
$bunga = 10;
$lamaAngsuran = 5;
$hariTerlambat = 40;


$objekPegadaian = new PegadaianPinjaman($pinjaman, $bunga, $lamaAngsuran, $hariTerlambat);

// Output
$objekPegadaian->cetakStruk();
?>
