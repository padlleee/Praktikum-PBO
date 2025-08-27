<?php
// Class Guru
class Guru {
    var $nama_nama = array("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

// Class Murid
class Murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;
}

// Class Kurikulum
class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

// Class Mobil
class Mobil {
    var $jumlahRoda = 4;
    var $warna = "Merah";
    var $bahanBakar = "Pertamax";
    var $harga = 1200000000;
    var $merek = 'A';

    public function statusHarga() {
        if ($this->harga > 50000000) 
            $status = 'Mahal';
        else 
            $status = 'Murah';
        return $status;
    }
}

// Membuat objek dari class Mobil
$ObjekBMW = new Mobil();   // objek BMW
$ObjekTesla = new Mobil(); // objek Tesla
$ObjekAudi = new Mobil();  // objek Audi

// Menampilkan hasil status harga dari masing-masing objek mobil
echo "BMW: " . $ObjekBMW->statusHarga() . "<br>";
echo "Tesla: " . $ObjekTesla->statusHarga() . "<br>";
echo "Audi: " . $ObjekAudi->statusHarga() . "<br>";
?>
