<?php

class Praktikum3 {
    public $pembeli;
    public $kartu;
    public $TotalBelanja;
    public $Diskon;
    public $TotalBayar;

    function setPembeli($x) {
        $this->pembeli = $x;
    }
    function getPembeli() {
        return $this->pembeli;
    }

    function setKartu($x) {
        $this->kartu = $x;
    }
    function getKartu() {
        return $this->kartu;
    }

    function setTotalBelanja($x) {
        $this->TotalBelanja = $x;
    }
    function getTotalBelanja() {
        return $this->TotalBelanja;
    }
    
    function hitungDiskon() {
        if ($this->kartu == "Memiliki") {
            if ($this->TotalBelanja > 500000) {
                $this->Diskon = 50000;
            } elseif ($this->TotalBelanja > 100000) {
                $this->Diskon = 15000;
            } else {
                $this->Diskon = 5000;
            }
        } else {
            if ($this->TotalBelanja > 100000) {
                $this->Diskon = 5000;
            } else {
                $this->Diskon = 0;
            }
        }
        return $this->Diskon;
    }

    function hitungTotalBayar() {
        $this->TotalBayar = $this->TotalBelanja - $this->hitungDiskon();
        return $this->TotalBayar;
    }
}

// Data Pembeli
$pembeli1 = new Praktikum3();
$pembeli1->setPembeli("Pembeli 1");
$pembeli1->setKartu("Memiliki");
$pembeli1->setTotalBelanja(200000);

$pembeli2 = new Praktikum3();
$pembeli2->setPembeli("Pembeli 2");
$pembeli2->setKartu("Memiliki");
$pembeli2->setTotalBelanja(570000);

$pembeli3 = new Praktikum3();
$pembeli3->setPembeli("Pembeli 3");
$pembeli3->setKartu("Tidak Memiliki");
$pembeli3->setTotalBelanja(120000);

$pembeli4 = new Praktikum3();
$pembeli4->setPembeli("Pembeli 4");
$pembeli4->setKartu("Tidak Memiliki");
$pembeli4->setTotalBelanja(90000);

// Simpan objek pembeli dalam array untuk mempermudah perulangan
$daftarPembeli = [$pembeli1, $pembeli2, $pembeli3, $pembeli4];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Output Praktikum dalam Tabel</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Pembeli</h2>
<table>
    <thead>
        <tr>
            <th>Pembeli</th>
            <th>Kartu Member</th>
            <th>Total Belanja</th>
            <th>Diskon</th>
            <th>Biaya yang dikeluarkan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarPembeli as $pembeli): ?>
            <tr>
                <td><?php echo $pembeli->getPembeli(); ?></td>
                <td><?php echo $pembeli->getKartu(); ?></td>
                <td><?php echo $pembeli->getTotalBelanja(); ?></td>
                <td><?php echo $pembeli->hitungDiskon(); ?></td>
                <td><?php echo $pembeli->hitungTotalBayar(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>