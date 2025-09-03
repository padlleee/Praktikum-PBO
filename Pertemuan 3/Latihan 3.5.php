<?php
$umur = 6; // Contoh: Definisikan umur di sini.
$berhitung = true; // Contoh: Definisikan kemampuan berhitung di sini.

if ($umur >= 6) {
    if ($berhitung) {
        echo "Selamat anda diperbolehkan masuk kelas 1 SD!";
    } else {
        echo "Anda diperbolehkan masuk ke kelas 1 SD dengan catatan harus lancar berhitung!";
    }
} else {
    echo "Maaf belum cukup umur untuk masuk kelas 1 SD";
}
?>