<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f9ff;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            color: #004080;
        }

        .tambah {
            width: 90%;
            margin: 20px auto;
            text-align: right;
        }

        .tambah a {
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto 30px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        a.button {
            padding: 6px 12px;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a.edit {
            background-color: #28a745;
        }

        a.hapus {
            background-color: #dc3545;
        }

        .kembali {
            text-align: center;
            margin: 30px 0;
        }

        .kembali button {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .kembali button:hover {
            background-color: #002244;
        }
    </style>
</head>
<body>

<h2>Daftar Peminjaman</h2>

<div class="tambah">
    <a href="formpeminjaman.php">+ Tambah Peminjaman</a>
</div>

<table>
    <tr>
        <th>ID Peminjaman</th>
        <th>Tanggal Peminjaman</th>
        <th>Tanggal Pengembalian</th>
        <th>Aksi</th>
    </tr>

    <?php
    require_once "Model.php";

    if (isset($_GET['hapus'])) {
        deletePeminjaman($_GET['hapus']);
        header("Location: peminjaman.php");
        exit;
    }

    $data = getAllPeminjaman();
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>{$row['id_peminjaman']}</td>
                    <td>{$row['tgl_pinjam']}</td>
                    <td>{$row['tgl_kembali']}</td>
                    <td>
                        <a class='button edit' href='formpeminjaman.php?id={$row['id_peminjaman']}'>Edit</a>
                        <a class='button hapus' href='peminjaman.php?hapus={$row['id_peminjaman']}' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Hapus</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4' style='text-align:center;'>Tidak ada data peminjaman.</td></tr>";
    }
    ?>
</table>

<div class="kembali">
    <form action="home.php" method="get">
        <button type="submit">Kembali</button>
    </form>
</div>

</body>
</html>