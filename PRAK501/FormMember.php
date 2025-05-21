<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 102, 204, 0.2);
        }
        h2 {
            text-align: center;
            color: #0059b3;
        }
        form label {
            display: block;
            margin-bottom: 12px;
            font-weight: bold;
            color: #004080;
        }
        input[type="text"],
        input[type="datetime-local"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #b3d9ff;
            border-radius: 6px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }
        .form-buttons button,
        .form-buttons a {
            background-color: #007acc;
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
    </style>
</head>
<body>
<div class="container">
    <h2>Form Member</h2>
    <?php
    require_once "Model.php";
    $id = $nama = $nomor = $alamat = $tgl_daftar = $tgl_bayar = "";

    if (isset($_GET['id'])) {
        $data = getMemberById($_GET['id']);
        $id = $data['id_member'];
        $nama = $data['nama_member'];
        $nomor = $data['nomor_member'];
        $alamat = $data['alamat'];
        $tgl_daftar = $data['tgl_mendaftar'];
        $tgl_bayar = $data['tgl_terakhir_bayar'];
    }

    if (isset($_POST['submit'])) {
        if ($_POST['id'] == "") {
            insertMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
        } else {
            updateMember($_POST['id'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
        }
        header("Location: Member.php");
        exit;
    }
    ?>
    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>Nama Member:
            <input type="text" name="nama_member" value="<?= $nama ?>" required>
        </label>
        <label>Nomor Member:
            <input type="text" name="nomor_member" value="<?= $nomor ?>" required>
        </label>
        <label>Alamat:
            <textarea name="alamat" required><?= $alamat ?></textarea>
        </label>
        <label>Tanggal Daftar:
            <input type="datetime-local" name="tgl_mendaftar" value="<?= $tgl_daftar ? date('Y-m-d\TH:i', strtotime($tgl_daftar)) : '' ?>" required>
        </label>
        <label>Tanggal Terakhir Bayar:
            <input type="date" name="tgl_terakhir_bayar" value="<?= $tgl_bayar ?>" required>
        </label>

        <div class="form-buttons">
            <button type="submit" name="submit">Submit</button>
            <a href="Member.php">Kembali</a>
        </div>
    </form>
</div>
</body>
</html>