<?php
    $gajiPokok = 3250000;

    $tunjanganJabatan = 1200000;

    $pajakPenghasilan = 0.1;

    $gajiKotor = $gajiPokok + $tunjanganJabatan;

    $pajakTerutang = $gajiKotor * $pajakPenghasilan;

    $gajiBersih = $gajiKotor - $pajakTerutang;

    echo "Gaji Pokok: Rp " . number_format($gajiPokok, 0, ',', '.') . "<br>";
    echo "Tunjangan Jabatan: Rp " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
    echo "Gaji Kotor: Rp " . number_format($gajiKotor, 0, ',', '.') . "<br>";
    echo "Pajak Penghasilan (10%): Rp " . number_format($pajakTerutang, 0, ',', '.') . "<br>";
    echo "Gaji Bersih: Rp " . number_format($gajiBersih, 0, ',', '.') . "<br>";
?>