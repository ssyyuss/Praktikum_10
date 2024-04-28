<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 11 | Perulangan</title>
    <style>
        .star {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #ff0000;
            transform: rotate(45deg);
        }
    </style>
</head>
<body>
    <h1>NO 11 | Latihan Perulangan</h1>
    <?php
        $rows = 10;
        for ($row = 1; $row <= $rows; $row++) {
            for ($col = 1; $col <= $row; $col++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>