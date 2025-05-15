<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
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
    
<div class="container">
    <h2>Data Member</h2>

    <div class="tambah">
        <a href="FormMember.php">+ Tambah Member</a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php
        require_once "Model.php";

        if (isset($_GET['hapus'])) {
            deleteMember($_GET['hapus']);
            header("Location: Member.php");
            exit;
        }

        $result = getAllMember();
        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama_member']}</td>
                        <td>{$row['nomor_member']}</td>
                        <td>{$row['alamat']}</td>
                        <td>{$row['tgl_mendaftar']}</td>
                        <td>{$row['tgl_terakhir_bayar']}</td>
                        <td>
                            <a class='button edit' href='FormMember.php?id={$row['id_member']}'>Edit</a>
                            <a class='button hapus' href='Member.php?hapus={$row['id_member']}' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a>
                        </td>
                    </tr>";
                $no++;
            }
        } else {
            echo "<tr><td colspan='7' style='text-align:center;'>Tidak ada daftar member.</td></tr>";
        }
        ?>
    </table>
</div>

<div class="kembali">
    <form action="home.php" method="get">
        <button type="submit"> Kembali </button>
    </form>
</div>

</body>
</html>