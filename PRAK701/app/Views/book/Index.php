<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #eef5ff;
        margin: 0;
        padding: 30px 20px;
        color: #333;
        font-size: 16px;
        line-height: 1.5;
    }

    h2 {
        text-align: center;
        color: #004080;
        margin-bottom: 40px;
        font-weight: 600;
        font-size: 2.2rem;
        letter-spacing: 1px;
    }

    .button-container {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 25px;
        gap: 12px;
    }

    .bottom-button {
        margin-top: 40px;
        text-align: center;
    }

    .btn {
        background-color: #007acc;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0, 122, 204, 0.3);
        transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease;
        user-select: none;
    }

    .btn:hover, .btn:focus {
        background-color: #005c99;
        box-shadow: 0 6px 16px rgba(0, 92, 153, 0.5);
        transform: translateY(-2px);
        outline: none;
    }

    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background-color: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0, 64, 128, 0.12);
        font-size: 1rem;
    }

    th, td {
        padding: 16px 20px;
        text-align: left;
        color: #444;
        font-weight: 500;
    }

    th {
        background-color: #007acc;
        color: #fff;
        font-weight: 700;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #f7fbff;
    }

    tr:hover {
        background-color: #d1e6ff;
        transition: background-color 0.3s ease;
    }

    a.action-link {
        color: #004080;
        text-decoration: none;
        margin-right: 12px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: color 0.3s ease, text-decoration 0.3s ease;
    }

    a.action-link:hover, a.action-link:focus {
        color: #007acc;
        text-decoration: underline;
        outline: none;
    }

    @media (max-width: 600px) {
        body {
            padding: 20px 10px;
            font-size: 14px;
        }

        h2 {
            font-size: 1.6rem;
            margin-bottom: 25px;
        }

        .button-container {
            flex-direction: column;
            gap: 14px;
            justify-content: center;
        }

        .btn {
            width: 100%;
            padding: 14px 0;
            font-size: 1.1rem;
        }

        table {
            font-size: 0.9rem;
        }

        th, td {
            padding: 12px 10px;
        }
    }
</style>
</head>
<body>

    <h2>Daftar Buku</h2>

    <div class="button-container">
        <a href="<?= base_url('/book/create') ?>" class="btn">Tambah Buku</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($book)): ?>
                <tr>
                    <td colspan="6" style="text-align:center; padding: 20px;">Data buku belum tersedia.</td>
                </tr>
            <?php else: ?>
                <?php $no = 1; foreach ($book as $b): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= esc($b['judul']) ?></td>
                    <td><?= esc($b['penulis']) ?></td>
                    <td><?= esc($b['penerbit']) ?></td>
                    <td><?= esc($b['tahun_terbit']) ?></td>
                    <td>
                        <a href="<?= base_url("/book/edit/{$b['id']}") ?>" class="action-link">Edit</a>
                        <a href="<?= base_url("/book/delete/{$b['id']}") ?>" class="action-link" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="bottom-button">
        <a href="<?= base_url('/dashboard') ?>" class="btn">Kembali ke Dashboard</a>
    </div>

</body>
</html>