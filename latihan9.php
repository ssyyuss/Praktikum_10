<?php

// Contoh fungsi
function writeMsg($nama){
    echo"Selamat Datang!".$nama."<br>";
}
writeMsg(nama:"Ahmad"); // pemanggilan fungsi

// fungsi dengan mengirim nilai balik
function tambah(int $angka1,int $angka2){
    $a = $angka1 + $angka2;
    return $a;// mengirim nilai $a ke pemanggil
}
$hasil= tambah(angka1:5, angka2:5);
echo($hasil);
?>