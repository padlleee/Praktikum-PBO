<?php
class Belanja {
    public $nama_barang;
    public $harga;
    public $jumlah;
    public $total;

    public function __construct($nama_barang, $harga, $jumlah) {
        $this->nama_barang = $nama_barang;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->total = $this->harga * $this->jumlah;
        echo "Constructor: data belanja $this->nama_barang dibuat. <br>";
    }
    public function getInfo() {
        return "Nama Barang : $this->nama_barang <br> Harga : $this->harga <br> Jumlah : $this->jumlah <br> Total : $this->total <br>";
         }
    public function __destruct() {
        echo "Destruktor : data belanja $this->nama_barang dihapus. <br>";
    }
}
echo "Masukkan jumlah barang belanja yang dibeli: ";
$jml = (int)trim(fgets(STDIN));

$barang = [];
$total_belanja = 0;
for ($i = 1; $i <= $jml; $i++) {
    echo "\n Barang ke-$i \n";
    echo "Masukkan nama barang ke-$i: ";
    echo "Nama Barang: "; 
    $nama_barang = trim(fgets(STDIN));
    echo "Harga satuan : "; $harga = (float)trim(fgets(STDIN));
    echo "Jumlah barang : "; $jumlah = (int)trim(fgets(STDIN));

$barang[] = new Belanja($nama_barang, $harga, $jumlah);
$total_belanja += $barang[$i - 1]->total;
}
echo "\n---------------Detail Belanja-------------------";
foreach ($barang as $b) {
    echo "\n" . $b->getInfo();
}
?>