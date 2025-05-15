<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border-collapse: collapse;
            width: 430px; /* Perbesar ukuran tabel */
            border: 2px solid black;
        }
        th {
            background-color: red;
            color: black;
            font-weight: bold;
            text-align: left;
            font-size: 32px; /* Perbesar ukuran teks */
            padding: 3px; /* Perbesar padding agar title terlihat besar */
            border: 2px solid black;
            font-family: 'Times New Roman', Times, serif, sans-serif;
        }
        td {
            border: 2px solid black;
            padding: 3px;
            text-align: left;
            font-size: 18px;
            font-family: 'Times New Roman', Times, serif, sans-serif;
        }
        .inner-box {
            display: block;
            padding: 3px; /* Perbesar padding agar teks tidak terlalu kecil */
            border: 2px solid black;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th colspan="2"><div class="inner-box">Daftar Smartphone Samsung</div></th> <!-- Title tetap dengan border di dalamnya -->
    </tr>
    <?php
    $smartphones = [
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    ];

    foreach ($smartphones as $hp) {
        echo "<tr><td colspan='2'><div class='inner-box'>$hp</div></td></tr>"; // Setiap kalimat memiliki border dan diperlebar
    }
    ?>
</table>

</body>
</html>
