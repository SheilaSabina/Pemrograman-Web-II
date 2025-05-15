<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 5px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #d3d3d3;
        }
        .revisi {
            background-color: red;
            color: black;
        }
        .tidak-revisi {
            background-color: green;
            color: black;
        }
    </style>
</head>
<body>

<?php
$data = [
    [
        "nama" => "Ridho",
        "mata_kuliah" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3],
        ]
    ],
    [
        "nama" => "Ratna",
        "mata_kuliah" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3],
        ]
    ],
    [
        "nama" => "Tono",
        "mata_kuliah" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3],
        ]
    ]
];

foreach ($data as $key => $mahasiswa) {
    $total_sks = 0;
    foreach ($mahasiswa["mata_kuliah"] as $mk) {
        $total_sks += $mk["sks"];
    }
    $data[$key]["total_sks"] = $total_sks;
    $data[$key]["keterangan"] = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi";
}
?>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data as $mahasiswa) {
        $first = true; // Flag untuk menampilkan Total SKS dan Keterangan hanya sekali
        foreach ($mahasiswa["mata_kuliah"] as $mk) {
            echo "<tr>";
            if ($first) {
                // Menampilkan No dan Nama hanya pada baris pertama mahasiswa
                echo "<td>{$no}</td>";
                echo "<td>{$mahasiswa['nama']}</td>";
                // Menampilkan Total SKS dan Keterangan hanya pada baris pertama
                echo "<td>{$mk['nama_mk']}</td>";
                echo "<td>{$mk['sks']}</td>";
                echo "<td>{$mahasiswa['total_sks']}</td>";
                $kelas = ($mahasiswa['keterangan'] == "Revisi KRS") ? "revisi" : "tidak-revisi";
                echo "<td class='$kelas'>{$mahasiswa['keterangan']}</td>";
                $first = false; // Setelah baris pertama, set flag menjadi false
            } else {
                // Menampilkan kolom No, Nama, Total SKS dan Keterangan kosong pada baris berikutnya
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>{$mk['nama_mk']}</td>";
                echo "<td>{$mk['sks']}</td>";
                echo "<td></td>";
                echo "<td></td>";
            }
            echo "</tr>";
        }
        $no++;
    }
    ?>

</table>

</body>
</html>