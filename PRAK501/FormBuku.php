<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #eef5ff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 64, 128, 0.2);
        }

        h2 {
            text-align: center;
            color: #004080;
            margin-top: 0;
        }

        form label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: #003366;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #0073e6;
            border-radius: 6px;
            font-size: 15px;
            box-sizing: border-box;
        }

        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 25px;
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
        <h2>Form Buku</h2>
        <?php
        include 'koneksi.php';
        $conn = getKoneksi();

        $id = "";
        $judul = "";
        $penulis = "";
        $penerbit = "";
        $tahun = "";

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id'");
            $data = mysqli_fetch_assoc($result);
            $judul = $data['judul_buku'];
            $penulis = $data['penulis'];
            $penerbit = $data['penerbit'];
            $tahun = $data['tahun_terbit'];
        }

        if (isset($_POST['submit'])) {
            $judul = $_POST['judul_buku'];
            $penulis = $_POST['penulis'];
            $penerbit = $_POST['penerbit'];
            $tahun = $_POST['tahun'];

            if ($_POST['id'] == "") {
                $query = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit)
                          VALUES ('$judul', '$penulis', '$penerbit', '$tahun')";
            } else {
                $id = $_POST['id'];
                $query = "UPDATE buku SET judul_buku='$judul', penulis='$penulis', penerbit='$penerbit',
                          tahun_terbit='$tahun' WHERE id_buku='$id'";
            }

            if (mysqli_query($conn, $query)) {
                header("Location: buku.php");
            } else {
                echo "<p style='text-align:center; color:red;'>Gagal menyimpan data: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>

        <form method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label for="judul_buku">Judul Buku:</label>
            <input type="text" name="judul_buku" id="judul_buku" value="<?= $judul ?>" required>

            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" id="penulis" value="<?= $penulis ?>" required>

            <label for="penerbit">Penerbit:</label>
            <input type="text" name="penerbit" id="penerbit" value="<?= $penerbit ?>" required>

            <label for="tahun">Tahun Terbit:</label>
            <input type="number" name="tahun" id="tahun" value="<?= $tahun ?>" required>

            <div class="form-buttons">
                <button type="submit" name="submit">Submit</button>
                <a href="buku.php">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>