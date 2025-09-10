<?php

class Mahasiswa {
    // Properti (variabel) untuk menyimpan data mahasiswa
    private $nama;
    private $kelas;
    private $mataKuliah;
    private $nilai;

    // Setter untuk mengatur nilai properti
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setKelas($kelas) {
        $this->kelas = $kelas;
    }

    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    public function setNilai($nilai) {
        $this->nilai = $nilai;
    }

    // Getter untuk mendapatkan nilai properti
    public function getNama() {
        return $this->nama;
    }

    public function getKelas() {
        return $this->kelas;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    public function getNilai() {
        return $this->nilai;
    }

    // Metode untuk menentukan status kelulusan berdasarkan nilai
    public function cekStatusKuis() {
        if ($this->nilai >= 70) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }
}

// Data mahasiswa dalam bentuk array multidimensi
$dataMahasiswa = [
    [
        'nama' => 'Aditya',
        'kelas' => 'SI 2',
        'mataKuliah' => 'Pemrograman Berorientasi Objek',
        'nilai' => 80
    ],
    [
        'nama' => 'Shinta',
        'kelas' => 'SI 2',
        'mataKuliah' => 'Pemrograman Berorientasi Objek',
        'nilai' => 75
    ],
    [
        'nama' => 'Ineu',
        'kelas' => 'SI 2',
        'mataKuliah' => 'Pemrograman Berorientasi Objek',
        'nilai' => 55
    ]
];

// Perulangan untuk memproses dan menampilkan data setiap mahasiswa
foreach ($dataMahasiswa as $data) {
    $mahasiswa = new Mahasiswa();
    $mahasiswa->setNama($data['nama']);
    $mahasiswa->setKelas($data['kelas']);
    $mahasiswa->setMataKuliah($data['mataKuliah']);
    $mahasiswa->setNilai($data['nilai']);

    echo "Nama : " . $mahasiswa->getNama() . "<br>";
    echo "Kelas : " . $mahasiswa->getKelas() . "<br>";
    echo "Mata Kuliah : " . $mahasiswa->getMataKuliah() . "<br>";
    echo "Nilai : " . $mahasiswa->getNilai() . "<br>";
    echo $mahasiswa->cekStatusKuis() . "<br><br>";
}

?>