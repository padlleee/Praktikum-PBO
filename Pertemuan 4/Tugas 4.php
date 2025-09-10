<?php
Class Tugas4 {
   var $BangunRuang;
   var $sisi;
    var $jariJari;
    var $tinggi;
    var $volume;

    function setBangunRuang($x) {
        $this->BangunRuang = $x;
    }
    function getBangunRuang() {
        return $this->BangunRuang;
    }
    function setSisi($x) {
        $this->sisi = $x;
    }
    function getSisi() {
        return $this->sisi;
    }
    function setJariJari($x) {
        $this->jariJari = $x;
    }
    function getJariJari() {
        return $this->jariJari;
    }
    function setTinggi($x) {
        $this->tinggi = $x;
    }
    function getTinggi() {
        return $this->tinggi;
    }
    function HitungVolume() {
        if ($this->BangunRuang == "Kubus") {
            $this->volume = $this->sisi * $this->sisi * $this->sisi;
        } elseif ($this->BangunRuang == "Tabung") {
            $this->volume = 3.14 * $this->jariJari * $this->jariJari * $this->tinggi;
        }
            elseif ($this->BangunRuang == "Limas Segiempat") {
               $this->volume = (1/3) * $this->sisi * $this->sisi * $this->tinggi ;
        } 
        elseif ($this->BangunRuang == "Kerucut") {
            $this->volume = (1/3) * 3.14 * $this->jariJari * $this->jariJari * $this->tinggi;
        }
        elseif ($this->BangunRuang == "Bola") {
            $this->volume = (4/3) * 3.14 * $this->jariJari * $this->jariJari * $this->jariJari;
        }
        else {
            $this->volume = 0;
        }
        return $this->volume;
    }
}
$Ruang = [
    [
        'Bangun Ruang' => "Bola", 
        'sisi' => 0, 
        'jari jari' => 7, 
        'Tinggi' => 0
    ],
    [
        'Bangun Ruang' => "Kerucut",
        'sisi' => 0,
        'jari jari' => 14, 
        'Tinggi' => 10
    ],
    [
        'Bangun Ruang' => "Limas Segiempat",
        'sisi' => 8, 
        'jari jari' => 0, 
        'Tinggi' => 24
    ],
    [
        'Bangun Ruang' =>"Kubus",
        'sisi' =>30, 
        'jari jari' =>0, 
        'Tinggi' => 0
    ],
    [
        'Bangun Ruang' =>"Tabung", 
        'sisi' => 0, 
        'jari jari' => 7, 
        'Tinggi' => 10
    ],   
];
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-Jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
      </tr>";

foreach ($Ruang as $data) {
    $objek = new Tugas4();
    $objek->setBangunRuang($data['Bangun Ruang']);
    $objek->setSisi($data['sisi']);
    $objek->setJariJari($data['jari jari']);
    $objek->setTinggi($data['Tinggi']);

    echo "<tr>";
    echo "<td>" . $objek->getBangunRuang() . "</td>";
    echo "<td>" . $objek->getSisi() . "</td>";
    echo "<td>" . $objek->getJariJari() . "</td>";
    echo "<td>" . $objek->getTinggi() . "</td>";
    echo "<td>" . $objek->HitungVolume() . "</td>";
    echo "</tr>";
}

echo "</table>";
?>