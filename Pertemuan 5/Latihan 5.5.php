<?php
class warung {
    public $namaBarang;
    public $hargaBarang;

    public function __construct($nama, $harga) {
        $this->namaBarang = $nama;
        $this->hargaBarang = $harga;
    }

    public function informasi() {
        echo "Barang: ". $this->namaBarang . ", Harga: " . $this->hargaBarang . "<br/>";
    }
}
class warung2 extends warung {
   public $exp;
    public function __construct($nama, $harga, $exp) {
         parent::__construct($nama, $harga);
         $this->exp = $exp;
    }
    //Overriding
    public function informasi() {
        echo "Barang2: $this->namaBarang , Harga: $this->hargaBarang , Expired: $this->exp <br/>";
    }
}

class warung3 {
    public function __call($namaBarang, $x){
        if ($namaBarang == "total"){
          if (count($x) == 1){
            return $x[0];
        }
        else if (count($x) == 2){
            return $x[0] * $x[1];
        }
        else {
            return 0;
        }
        
        
    }
}
}
$barang1 = new warung("SUSU Kotak", 6000);
$barang1->informasi();

$barang2 = new warung2("Yogurt", 12000, "12-11-2025");
$barang2->informasi();

$barang3 = new warung3();
echo "Harga Indomie: Rp." . $barang3->total(4000) . "<br/>";
echo "Harga Telur : Rp. " . $barang3->total(2000, 5) . "<br/>";
?>