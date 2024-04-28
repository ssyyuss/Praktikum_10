<?php
    $jumlahUang = 1387500;

    $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

    $jumlahPecahan = array_fill_keys($pecahan, 0);

    foreach ($pecahan as $nominal) {
        $jumlahPecahan[$nominal] = floor($jumlahUang / $nominal);
        $jumlahUang %= $nominal;
    }

    echo "Jumlah uang yang diambil: Rp 1.387.500,- " . number_format($jumlahUang, 0, ',', '.') . "<br>";
    echo "Rincian pecahan uang: <br>";

    foreach ($jumlahPecahan as $nominal => $jumlah) {
        if ($jumlah > 0) {
            echo "- Rp " . number_format($nominal, 0, ',', '.') . " : " . $jumlah . " lembar<br>";
        }
    }
?>