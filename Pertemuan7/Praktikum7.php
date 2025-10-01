<?php
// Class induk untuk tabungan sekolah
class Tabungan {
    private $saldo;
    protected $namaSiswa;

    public function __construct($namaSiswa, $saldoAwal) {
        $this->namaSiswa = $namaSiswa;
        $this->saldo = $saldoAwal;
    }

    // Method untuk menampilkan saldo
    public function getSaldo() {
        return $this->saldo;
    }

    // Method untuk menambah saldo (setor tunai)
    public function setorTunai($jumlah) {
        $this->saldo += $jumlah;
    }

    // Method untuk mengurangi saldo (tarik tunai)
    public function tarikTunai($jumlah) {
        if ($jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
        } else {
            echo "Saldo tidak mencukupi untuk melakukan penarikan.\n";
        }
    }

    public function tampilkanSaldo() {
        echo "Saldo " . $this->namaSiswa . ": " . $this->getSaldo() . "\n";
    }
}

// Membuat array siswa
$siswaArray = [
    new Tabungan("Siswa 1", 100000),
    new Tabungan("Siswa 2", 150000),
    new Tabungan("Siswa 3", 200000)
];

// Menampilkan saldo awal menggunakan perulangan
echo "Saldo Awal:\n";
foreach ($siswaArray as $siswa) {
    $siswa->tampilkanSaldo();
}

// Melakukan transaksi berkali-kali
do {
    echo "\nPilih siswa untuk transaksi (1, 2, atau 3): ";
    $handle = fopen("php://stdin", "r");
    $input = fgets($handle);
    $siswaIndex = (int)trim($input) - 1;

    if ($siswaIndex < 0 || $siswaIndex >= count($siswaArray)) {
        echo "Pilihan siswa tidak valid.\n";
        continue;
    }

    echo "\nMenu Transaksi:\n";
    echo "1. Setor Tunai\n";
    echo "2. Tarik Tunai\n";
    echo "3. Batalkan Transaksi\n";
    echo "Pilih menu (1, 2, atau 3): ";
    $input = fgets($handle);
    $menu = (int)trim($input);

    switch ($menu) {
        case 1:
            echo "Masukkan jumlah setor: ";
            $input = fgets($handle);
            $jumlah = (int)trim($input);
            if ($jumlah > 0) {
                $siswaArray[$siswaIndex]->setorTunai($jumlah);
                echo "Setor tunai berhasil.\n";
            } else {
                echo "Jumlah setor harus lebih dari 0.\n";
            }
            break;

        case 2:
            echo "Masukkan jumlah tarik: ";
            $input = fgets($handle);
            $jumlah = (int)trim($input);
            if ($jumlah > 0) {
                $siswaArray[$siswaIndex]->tarikTunai($jumlah);
                echo "Tarik tunai berhasil.\n";
            } else {
                echo "Jumlah tarik harus lebih dari 0.\n";
            }
            break;

        case 3:
            echo "Transaksi dibatalkan.\n";
            break;

        default:
            echo "Pilihan menu tidak valid.\n";
            break;
    }

    // Menampilkan saldo setelah transaksi
    echo "\nSaldo Setelah Transaksi:\n";
    foreach ($siswaArray as $siswa) {
        $siswa->tampilkanSaldo();
    }

    echo "\nApakah ingin melanjutkan transaksi? (yes/no): ";
    $input = fgets($handle);
    $lanjut = strtolower(trim($input));
} while ($lanjut === "yes");

echo "\nTransaksi selesai. Saldo akhir:\n";
foreach ($siswaArray as $siswa) {
    $siswa->tampilkanSaldo();
}
?>