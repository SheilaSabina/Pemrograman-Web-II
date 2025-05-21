<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f0ff;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            color: #003366;
        }

        .tambah {
            width: 90%;
            margin: 20px auto;
            text-align: right;
        }

        .tambah a {
            background-color: #007bff;
            color: #fff;
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

        a.delete {
            background-color: #dc3545;
        }

        .kembali {
            text-align: center;
            margin: 30px 0;
        }

        .kembali a {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .kembali a:hover {
            background-color: #002244;
        }
    </style>
</head>
<body>
    
<?php
include 'koneksi.php';
$conn = getKoneksi();

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = '$id'");
    header("Location: buku.php");
    exit;
}
?>


<h2>Daftar Buku</h2>

<div class="tambah">
    <a href="formbuku.php">+ Tambah Buku</a>
</div>

<table>
    <thead>
        <tr>
            <th>ID Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM buku";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "<tr><td colspan='6'>Query gagal: " . mysqli_error($conn) . "</td></tr>";
        } elseif (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id_buku']}</td>
                        <td>{$row['judul_buku']}</td>
                        <td>{$row['penulis']}</td>
                        <td>{$row['penerbit']}</td>
                        <td>{$row['tahun_terbit']}</td>
                        <td>
                            <a href='formbuku.php?id={$row['id_buku']}' class='button edit'>Edit</a>
                            <a href='buku.php?hapus={$row['id_buku']}' class='button delete' onclick=\"return confirm('Yakin ingin menghapus buku ini?');\">Hapus</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data buku.</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </tbody>
</table>

<div class="kembali">
    <a href="home.php"> Kembali </a>
</div>

</body>
</html>