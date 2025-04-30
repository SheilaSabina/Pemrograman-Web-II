<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #d3d3d3;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
];

function hitungNilaiAkhir($uts, $uas) {
    return round(0.4 * $uts + 0.6 * $uas, 1);
}

function konversiHuruf($nilai) {
    if ($nilai >= 80) return "A";
    elseif ($nilai >= 70) return "B";
    elseif ($nilai >= 60) return "C";
    elseif ($nilai >= 50) return "D";
    else return "E";
}
?>

<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
    </tr>

    <?php foreach ($mahasiswa as $mhs): 
        $nilaiAkhir = hitungNilaiAkhir($mhs['uts'], $mhs['uas']);
        $huruf = konversiHuruf($nilaiAkhir);
    ?>
    <tr>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['nim'] ?></td>
        <td><?= $mhs['uts'] ?></td>
        <td><?= $mhs['uas'] ?></td>
        <td><?= $nilaiAkhir ?></td>
        <td><?= $huruf ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>