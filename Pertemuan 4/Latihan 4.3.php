<?php

// Membuat array yang berisi nama buah-buahan
$buah = array('semangka', 'jeruk', 'apel', 'anggur');

// Menggunakan count() untuk menghitung isi array dan melakukan perulangan
for ($x = 0; $x < count($buah); $x++) {
    echo $buah[$x] . "<br/>";
}

?>