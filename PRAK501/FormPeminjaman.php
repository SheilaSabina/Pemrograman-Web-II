<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            color: #004080;
        }

        form {
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #003366;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .form-buttons button,
        .form-buttons a {
            background-color: #005c99;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .form-buttons button:hover,
        .form-buttons a:hover {
            background-color: #005c99;
        }

        .form-buttons a {
            background-color: #005c99;
        }
    </style>
</head>
<body>

<h2>Tambah Peminjaman</h2>

<?php
require_once "Model.php";

$id_peminjaman = '';
$id_member = '';
$id_buku = '';
$tgl_pinjam = '';
$tgl_kembali = '';

if (isset($_GET['id'])) {
    $data = getPeminjamanById($_GET['id']);
    $row = mysqli_fetch_assoc($data);
    $id_peminjaman = $row['id_peminjaman'];
    $id_member = $row['id_member'];
    $id_buku = $row['id_buku'];
    $tgl_pinjam = $row['tgl_pinjam'];
    $tgl_kembali = $row['tgl_kembali'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_peminjaman = $_POST['id_peminjaman'];
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if (isset($_GET['id'])) {
        updatePeminjaman($id_peminjaman, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    } else {
        insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    }

    header("Location: peminjaman.php");
    exit;
}
?>

<form method="post">
    <input type="hidden" name="id_peminjaman" value="<?= $id_peminjaman ?>">

    <label for="id_member">ID Member</label>
    <input type="text" name="id_member" id="id_member" value="<?= $id_member ?>" required>

    <label for="id_buku">ID Buku</label>
    <input type="text" name="id_buku" id="id_buku" value="<?= $id_buku ?>" required>

    <label for="tgl_pinjam">Tanggal Peminjaman</label>
    <input type="date" name="tgl_pinjam" id="tgl_pinjam" value="<?= $tgl_pinjam ?>" required>

    <label for="tgl_kembali">Tanggal Pengembalian</label>
    <input type="date" name="tgl_kembali" id="tgl_kembali" value="<?= $tgl_kembali ?>" required>

    <div class="form-buttons">
        <button type="submit" name="submit">Submit</button>
        <a href="peminjaman.php">Kembali</a>
    </div>
</form>

</body>
</html>