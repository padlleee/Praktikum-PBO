<?php
// Buat class komputer
class komputer {
    // Property dengan hak akses private, protected, dan public
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
    protected $jenis_RAM = "DDR 4";
    public $jenis_VGA = "PCI Express";

    // Method untuk menampilkan jenis processor
    public function tampilkan_processor() {
        return $this->jenis_processor;
    }

    public function tampilkan_jenisprocessor() {
        return $this->jenis_processor;
    }

    // Method untuk menampilkan jenis RAM
    protected function tampilkan_ram() {
        return $this->jenis_RAM;
    }

    // Method untuk menampilkan jenis VGA
    protected function tampilkan_vga() {
        return $this->jenis_VGA;
    }

    public function tampilkan_vga2() {
        return $this->jenis_VGA;
    }
}

// Buat class laptop yang mewarisi class komputer
class laptop extends komputer {
    public function display_processor() {
        // Menggunakan method public untuk mengakses properti private
        return $this->tampilkan_processor();
    }

    public function display_processor2() {
        return $this->tampilkan_processor();
    }

    public function display_ram() {
        // Mengakses properti protected langsung karena diwarisi
        return $this->jenis_RAM;
    }

    public function display_ram2() {
        // Menggunakan method protected untuk mengakses properti protected
        return $this->tampilkan_ram();
    }

    public function display_vga() {
        // Menggunakan method public untuk mengakses properti public
        return $this->tampilkan_vga2();
    }
}

// Buat objek dari class komputer dan laptop (instansiasi)
$komputer = new komputer();
$laptop = new laptop();

// Jalankan method dari class komputer dan laptop
echo "Line 61: " . $komputer->tampilkan_processor() . "<br />";
echo "Line 62: " . $laptop->display_processor() . "<br />";
echo "Line 63: " . $laptop->display_processor2() . "<br />";
echo "Line 64: " . $komputer->tampilkan_jenisprocessor() . "<br />";
echo "Line 65: " . $laptop->display_ram() . "<br />";
echo "Line 66: " . $laptop->display_vga() . "<br />";
?>
