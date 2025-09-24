<?php
class KonversiSuhu {
    private $suhuCelcius;

    public function __construct($suhuCelcius) {
        $this->suhuCelcius = $suhuCelcius;
    }

    public function convert() {
        $konversi = [
            'kelvin' => $this->suhuCelcius + 273.15,
            'fahrenheit' => ($this->suhuCelcius * 9/5) + 32,
        ];

        return $konversi;
    }

    public function display() {
        echo "<h1>Konversi Suhu dari Celcius</h1>";
        echo "<p>suhu dalam celcius = {$this->suhuCelcius} derajat</p>";

        $konversi = $this->convert();
        foreach ($konversi as $jenis => $nilai) {
            echo "<p>suhu dalam {$jenis} = {$nilai} derajat</p>";
        }

        echo "<p>Sekian konversi suhu yang bisa dilakukan</p>";
    }
}

$suhuCelcius = isset($_GET['suhu']) ? (float)$_GET['suhu'] : 0;
$konversiSuhu = new KonversiSuhu($suhuCelcius);
$konversiSuhu->display();
?>