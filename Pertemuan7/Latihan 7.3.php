<?php

// Class manusia
class Manusia {
    // Menentukan property dengan protected
    protected $nama = "Ardi";
    protected $kelas = "SI 2";

    // Method protected
    protected function nama() {
        return "Nama: " . $this->nama;
    }

    public function tampilkanNama() {
        return $this->nama();
    }

    protected function tampilkanKelas() {
        return "Kelas: " . $this->kelas;
    }
}

// Instansiasi class manusia
$manusia = new Manusia();

// Memanggil method public tampilkanNama dari class manusia
echo $manusia->tampilkanNama() . "<br />";
// Memanggil method protected tampilkanKelas (tidak bisa langsung diakses)
echo "Tidak dapat memanggil method protected tampilkanKelas secara langsung.";