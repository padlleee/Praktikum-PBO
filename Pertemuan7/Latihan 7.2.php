<?php
class Manusia {
    // Properti
    private $nama = "Ardi";
    private $kelas = "SI 2";

    // Method untuk mengakses properti secara privat
    private function m_nama() {
        return $this->nama;
    }

    public function tampilkan_nama() {
        return $this->m_nama();
    }

    public function tampilkan_kelas() {
        return $this->kelas;
    }
}

// Instansiasi class Manusia
$manusia = new Manusia();

// Memanggil method tampilkan_nama dan tampilkan_kelas dari class Manusia
echo "Nama : " . $manusia->tampilkan_nama() . "<br />";
echo "Kelas : " . $manusia->tampilkan_kelas();
?>