<!DOCTYPE html>
<html>
<head>
    <title>Konversi Angka ke Huruf</title>
</head>
<body>
    <h1>Konversi Angka ke Huruf</h1>
    <?php
    // Fungsi untuk mengkonversi angka ke huruf
    function konversiAngka($angka) {
        switch ($angka) {
            case 1:
                $huruf = "satu";
                break;
            case 2:
                $huruf = "dua";
                break;
            case 3:
                $huruf = "tiga";
                break;
            case 4:
                $huruf = "empat";
                break;
            case 5:
                $huruf = "lima";
                break;
            case 6:
                $huruf = "enam";
                break;
            case 7:
                $huruf = "tujuh";
                break;
            case 8:
                $huruf = "delapan";
                break;
            case 9:
                $huruf = "sembilan";
                break;
            default:
                $huruf = "Angka tidak valid";
        }
        return $huruf;
    }

    // Contoh penggunaan fungsi
    $angka1 = 3;
    $angka2 = 7;
    $angka3 = 1;
    $angka4 = 9;
    $angka5 = 12;

    echo "Angka $angka1 = " . konversiAngka($angka1) . "<br>";
    echo "Angka $angka2 = " . konversiAngka($angka2) . "<br>";
    echo "Angka $angka3 = " . konversiAngka($angka3) . "<br>";
    echo "Angka $angka4 = " . konversiAngka($angka4) . "<br>";
    echo "Angka $angka5 = " . konversiAngka($angka5) . "<br>";
    ?>
</body>
</html>