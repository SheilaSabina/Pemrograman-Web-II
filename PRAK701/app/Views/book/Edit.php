<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Edit Buku</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eef5ff;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #004080;
            margin-bottom: 25px;
            font-weight: 600;
        }

        form.book-form {
            max-width: 450px;
            margin: 0 auto;
            background: #f7faff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 64, 128, 0.15);
        }

        form.book-form label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #004080;
            font-size: 14px;
        }

        form.book-form input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1.8px solid #007acc;
            border-radius: 6px;
            font-size: 15px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        form.book-form input[type="text"]:focus {
            outline: none;
            border-color: #004080;
            box-shadow: 0 0 6px rgba(0, 64, 128, 0.4);
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .btn {
            display: inline-block;
            padding: 10px 22px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            font-size: 15px;
            transition: background-color 0.3s ease;
            text-align: center;
            user-select: none;
            background-color: #007acc;
            color: #fff;
            border: 1.5px solid #007acc;
        }

        .btn:hover {
            background-color: #005c99;
            border-color: #005c99;
            color: #fff;
            text-decoration: none;
        }

        @media (max-width: 480px) {
            .form-buttons {
                flex-direction: column;
                gap: 10px;
            }
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <h2>Edit Buku</h2>
    <form action="<?= base_url("/book/update/{$book['id']}") ?>" method="post" class="book-form">
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" value="<?= esc($book['judul']) ?>" required />

        <label for="penulis">Penulis:</label>
        <input type="text" id="penulis" name="penulis" value="<?= esc($book['penulis']) ?>" required />

        <label for="penerbit">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit" value="<?= esc($book['penerbit']) ?>" required />

        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="text" id="tahun_terbit" name="tahun_terbit" value="<?= esc($book['tahun_terbit']) ?>" required pattern="\d{4}" title="Masukkan tahun dengan 4 digit" />

        <div class="form-buttons">
            <a href="<?= base_url('/book') ?>" class="btn">Kembali</a>
            <button type="submit" class="btn">Update</button>
        </div>
    </form>

</body>
</html>