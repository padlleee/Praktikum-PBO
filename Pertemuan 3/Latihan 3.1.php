<?php 
class barang_harian{
    var $nama_barang;
    var $harga;
    var $jumlah;
    

    function hitungTotal() {
        $total = $this->harga * $this->jumlah;
        return $total;
        
    }
    function statuspembayaran() {
        if ($this->hitungTotal() > 50000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }
}

$barang1 = new barang_harian();
$barang1 -> nama_barang = "Sabun Mandi";
$barang1 -> harga = 5000;
$barang1 -> jumlah = 4;

    
$barang2 = new barang_harian();
$barang2 -> nama_barang = "Sikat Gigi";
$barang2 -> harga = 7000;
$barang2 -> jumlah = 3;

$barang3 = new barang_harian();  
$barang3 -> nama_barang = "Pasta Gigi";
$barang3 -> harga = 12000;
$barang3 -> jumlah = 2;

echo $barang1 -> nama_barang; echo "<br>";
echo $barang1 -> harga; echo "<br>";
echo $barang1 -> hitungTotal(); echo "<br>";echo "<br>";
echo $barang1 -> statuspembayaran(); echo "<br>"; echo "<br>";

echo $barang2 -> nama_barang; echo "<br>";
echo $barang2 -> harga; echo "<br>";
echo $barang2 -> hitungTotal(); echo "<br>"; echo "<br>";   
echo $barang2 -> statuspembayaran(); echo "<br>"; echo "<br>";

echo $barang3 -> nama_barang; echo "<br>";
echo $barang3 -> harga; echo "<br>";
echo $barang3 -> hitungTotal(); echo "<br>"; echo "<br>";
echo $barang3 -> statuspembayaran();

 
?>
