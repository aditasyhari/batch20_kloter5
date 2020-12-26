function hitungGaji(nama, gajiPokok, bulan, statusTunjangan){
    var tunjangan;

    if(statusTunjangan == true){
        tunjangan = 500000;
    } else {
        tunjangan = 0;
    }

    var bpjs = 3 / 100 * gajiPokok,
        pajak = 5 / 100 * gajiPokok,
        gajiPerBulan = gajiPokok + tunjangan - bpjs - pajak,
        totalGaji = gajiPerBulan * bulan;

    var rp_gajiPokok = formatRupiah(gajiPokok);
        rp_bpjs = formatRupiah(bpjs),
        rp_pajak = formatRupiah(pajak),
        rp_tunjangan = formatRupiah(tunjangan),
        rp_gajiPerBulan = formatRupiah(gajiPerBulan),
        rp_totalGaji = formatRupiah(totalGaji);


    var cetak = `
        ========================================
        Nama Karyawan   = ${nama}
        Gaji Pokok      = Rp ${rp_gajiPokok}
        Tunjangan       = Rp ${rp_tunjangan}
        BPJS            = Rp ${rp_bpjs}
        Pajak           = Rp ${rp_pajak}
        ========================================
        Gaji Bersih     = Rp ${rp_gajiPerBulan}/bulan
        ========================================
        Total Gaji      = Rp ${rp_totalGaji}
    `;

    return cetak;
}

function formatRupiah(angka) {
    var	number_string = angka.toString(),
        sisa 	= number_string.length % 3,
        rupiah 	= number_string.substr(0, sisa),
        ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
		
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    return rupiah;
}

console.log(hitungGaji("Andi", 1500000, 2, true))