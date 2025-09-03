<?php 
class barang_harian{
    var $nama_barang;
    var $harga;
    var $jumlah;

    function setnama_barang($x) {
        $this->nama_barang = $x;
    }
    function getnama_barang() {
        return $this->nama_barang;
    }

    function setharga($x) {
        $this->harga = $x;
    }
    function getharga() {
        return $this->harga;
    }
    
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
$barang1 -> setnama_barang("Sabun Mandi");
$barang1 -> setharga(5000);
$barang1 -> jumlah = 4;

    
$barang2 = new barang_harian();
$barang2 -> setnama_barang("Sikat Gigi");
$barang2 -> setharga(7000);
$barang2 -> jumlah = 3;

$barang3 = new barang_harian();  
$barang3 -> setnama_barang("Pasta Gigi");
$barang3 -> setharga(12000);
$barang3 -> jumlah = 2;

echo $barang1 -> getnama_barang(); echo "<br>";
echo $barang1 -> getharga(); echo "<br>";
echo $barang1 -> hitungTotal(); echo "<br>";echo "<br>";
echo $barang1 -> statuspembayaran(); echo "<br>"; echo "<br>";

echo $barang2 -> getnama_barang(); echo "<br>";
echo $barang2 -> getharga(); echo "<br>";
echo $barang2 -> hitungTotal(); echo "<br>"; echo "<br>";   
echo $barang2 -> statuspembayaran(); echo "<br>"; echo "<br>";

echo $barang3 -> getnama_barang(); echo "<br>";
echo $barang3 -> getharga(); echo "<br>";
echo $barang3 -> hitungTotal(); echo "<br>"; echo "<br>";
echo $barang3 -> statuspembayaran();

 
?>
