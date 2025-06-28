<?php
$pelanggan = [
    "nama" => "Andi",
    "email" => "andi@example.com",
    "total_transaksi" => 500000,
    "poin" => 100
];

$syarat_poin = 100000;

function memenuhiSyaratPoin($total_transaksi, $syarat) {
    return $total_transaksi >= $syarat;
}

function tambahPoin(&$pelanggan, $jumlah_poin) {
    $pelanggan['poin'] += $jumlah_poin;
}

function tukarDenganHadiah(&$pelanggan, $poin_dibutuhkan) {
    if ($pelanggan['poin'] >= $poin_dibutuhkan) {
        $pelanggan['poin'] -= $poin_dibutuhkan;
        echo "Hadiah berhasil diproses untuk " . $pelanggan['nama'] . "\n";
    } else {
        echo "Poin tidak cukup untuk hadiah.\n";
    }
}

echo "Login: " . $pelanggan['nama'] . "\n";
echo "Total transaksi: Rp" . $pelanggan['total_transaksi'] . "\n";

if (memenuhiSyaratPoin($pelanggan['total_transaksi'], $syarat_poin)) {
    echo "Transaksi memenuhi syarat poin.\n";
    $pilihan = "simpan"; // "simpan" atau "tukar"
    if ($pilihan === "simpan") {
        tambahPoin($pelanggan, 10);
        echo "Poin berhasil ditambahkan. Total poin sekarang: " . $pelanggan['poin'] . "\n";
        $ingin_memakai_poin = true;
        if ($ingin_memakai_poin) {
            if ($pelanggan['poin'] >= 50) {
                tukarDenganHadiah($pelanggan, 50);
            } else {
                echo "Poin tidak cukup untuk ditukar dengan hadiah.\n";
            }
        } else {
            echo "Poin tetap tersimpan.\n";
        }
    } elseif ($pilihan === "tukar") {
        tukarDenganHadiah($pelanggan, 50);
    }
} else {
    echo "Transaksi tidak memenuhi syarat poin. Tidak ada poin ditambahkan.\n";
}
echo "Proses selesai.\n";
?>