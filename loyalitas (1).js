let namaPelanggan = "Andi";
let emailPelanggan = "andi@example.com";
let akun = "ya";

switch (akun.toLowerCase()) {
    case 'ya':
        console.log("Akun login berhasil.");
        break;
    case 'tidak':
        console.log("Akun baru berhasil dibuat.");
        break;
    default:
        console.log("Pilihan tidak valid.");
        break;
}

console.log("Pembelian berhasil.");
console.log("Transaksi tercatat.");

function transaksiMemenuhiSyaratPoin() {
    return true;
}

if (transaksiMemenuhiSyaratPoin()) {
    let pilihanPelanggan = "simpan";

    switch (pilihanPelanggan.toLowerCase()) {
        case 'simpan':
            console.log("Poin disimpan.");
            let gunakanPoin = "ya";
            switch (gunakanPoin.toLowerCase()) {
                case 'ya':
                    let poinTersimpan = 1000;
                    let syaratPoinMinimum = 500;
                    if (poinTersimpan >= syaratPoinMinimum) {
                        console.log("Poin ditukar dengan hadiah.");
                        console.log("Hadiah telah diproses.");
                    } else {
                        console.log("Poin tidak cukup untuk ditukar dengan hadiah.");
                        console.log("Poin tetap tersimpan.");
                    }
                    break;
                case 'tidak':
                    console.log("Poin tetap tersimpan.");
                    break;
                default:
                    console.log("Pilihan tidak valid.");
                    break;
            }
            break;
        case 'tukar dengan hadiah':
            if (1000 >= 500) {
                console.log("Poin ditukar dengan hadiah.");
                console.log("Hadiah telah diproses.");
            } else {
                console.log("Poin tidak cukup untuk ditukar dengan hadiah.");
                console.log("Poin tetap tersimpan.");
            }
            break;
        default:
            console.log("Pilihan tidak valid.");
            break;
    }
} else {
    console.log("Transaksi tidak memenuhi syarat poin. Poin tidak ditambahkan.");
}
