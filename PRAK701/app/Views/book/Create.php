<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #eef5ff;
    margin: 0;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .form-container {
    background-color: #ffffff;
    padding: 35px 45px;
    border-radius: 14px;
    box-shadow: 0 8px 22px rgba(0, 64, 128, 0.15);
    width: 100%;
    max-width: 520px;
    transition: box-shadow 0.3s ease;
  }

  .form-container:hover {
    box-shadow: 0 10px 28px rgba(0, 64, 128, 0.2);
  }

  h2 {
    color: #004080;
    text-align: center;
    margin-bottom: 30px;
    font-size: 1.8rem;
    font-weight: 600;
  }

  label {
    display: block;
    margin-bottom: 8px;
    color: #003366;
    font-weight: 500;
    font-size: 15px;
  }

  input[type="text"] {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 20px;
    border: 1.8px solid #aac4e6;
    border-radius: 8px;
    font-size: 15px;
    transition: border-color 0.3s, box-shadow 0.3s;
    box-sizing: border-box;
  }

  input[type="text"]:focus {
    border-color: #007acc;
    outline: none;
    box-shadow: 0 0 8px rgba(0, 122, 204, 0.2);
    background-color: #f0f6ff;
  }

  .button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 25px;
    gap: 12px;
  }

  .btn {
    flex: 1;
    background-color: #007acc;
    color: white;
    padding: 12px 20px;
    text-align: center;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
  }

  .btn:hover {
    background-color: #005c99;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 64, 128, 0.25);
  }

  .validation-errors {
    background-color: #ffe0e0;
    color: #b30000;
    padding: 12px 16px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 14px;
    border-left: 4px solid #b30000;
  }

  @media (max-width: 480px) {
    .form-container {
      padding: 25px 30px;
    }

    .button-group {
      flex-direction: column;
    }

    .btn {
      width: 100%;
    }
  }
</style>
</head>
<body>

<div class="form-container">
    <h2>Tambah Buku</h2>

    <?php if (isset($validation)): ?>
        <div class="validation-errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/book/store') ?>" method="post">
        <label>Judul:</label>
        <input type="text" name="judul" required>

        <label>Penulis:</label>
        <input type="text" name="penulis" required>

        <label>Penerbit:</label>
        <input type="text" name="penerbit" required>

        <label>Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" required>

        <div class="button-group">
            <button type="button" onclick="window.location.href='<?= base_url('/book') ?>'" class="btn">Kembali</button>
            <button type="submit" class="btn">Simpan</button>
        </div>
    </form>
</div>

</body>
</html>