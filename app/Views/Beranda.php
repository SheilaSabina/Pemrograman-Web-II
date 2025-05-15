<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Beranda Saya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

    <style>
    body {
        background-image: url("<?= base_url('background.jpg') ?>");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
    }

    .nav-tabs {
        border-bottom: 3px solid #0d6efd;
        justify-content: center;
        margin-bottom: 35px;
        background: #f0f5ff;
        box-shadow: inset 0 -3px 8px rgba(13, 110, 253, 0.15);
        border-radius: 10px 10px 0 0;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .nav-tabs .nav-link {
        color: #0d6efd;
        font-weight: 600;
        font-size: 1.15rem;
        padding: 12px 25px;
        border: none;
        border-bottom: 4px solid transparent;
        border-radius: 10px 10px 0 0;
    }

    .nav-tabs .nav-link.active {
        border-bottom: 4px solid #0d6efd;
        background-color: #ffffff;
        color: #0d6efd;
        font-weight: 700;
    }

    .nav-tabs .nav-link:hover {
        color: #084298;
        border-bottom: 4px solid #084298;
        background-color: #e6f0ff;
    }

    .beranda-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 25px 20px;
        margin: 30px auto;
        max-width: 600px;
        width: 90%;
        border-radius: 20px;

        background: rgba(255, 255, 255, 0.25);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);

        border: 1px solid rgba(255, 255, 255, 0.3);
        text-align: center;
    }

    .image-profil {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #0d6efd;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.25);
    }

    .title {
        font-size: 2rem;
        margin-bottom: 20px;
        letter-spacing: 1px;
        color: black;
        text-shadow: 1px 1px 3px rgba(13, 110, 253, 0.4);
        font-weight: 600;
    }

    .info {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 30px;
        line-height: 1.5;
    }
    </style>

</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('/') ?>">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/profil') ?>">Profil</a>
        </li>
    </ul>

    <div class="beranda-wrapper">
        <img src="<?= base_url('sheila.jpg') ?>" alt="Foto Profil" class="image-profil" />

        <div class="title">Saya <?= esc($biodata['nama']) ?></div>
        <div class="info">
            Mahasiswa <strong>Universitas Lambung Mangkurat</strong><br />
            NIM: <strong><?= esc($biodata['nim']) ?></strong>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>