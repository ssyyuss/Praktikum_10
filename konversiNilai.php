<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Angka ke Huruf</title>
</head>
<body>
    <h1>Konversi Nilai Angka ke Huruf</h1>
    <?php
    // Fungsi untuk mengkonversi nilai angka ke huruf
    function konversiNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 59) {
            return "C";
        } elseif ($nilai >= 60 && $nilai <= 69) {
            return "BC";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            return "B";
        } elseif ($nilai >= 80 && $nilai <= 89) {
            return "AB";
        } elseif ($nilai >= 90 && $nilai <= 100) {
            return "A";
        } else {
            return "Nilai tidak valid";
        }
    }

    // Contoh penggunaan fungsi
    $nilai1 = 65;
    $nilai2 = 86;
    $nilai3 = 70;
    $nilai4 = 20;
    $nilai5 = 100;

    echo "Nilai $nilai1 = " . konversiNilai($nilai1) . "<br>";
    echo "Nilai $nilai2 = " . konversiNilai($nilai2) . "<br>";
    echo "Nilai $nilai3 = " . konversiNilai($nilai3) . "<br>";
    echo "Nilai $nilai4 = " . konversiNilai($nilai4) . "<br>";
    echo "Nilai $nilai5 = " . konversiNilai($nilai5) . "<br>";
    ?>
</body>
</html>