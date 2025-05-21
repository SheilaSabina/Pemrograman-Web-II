<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Profil Saya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url('<?= base_url("background.jpg") ?>');
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

        .profil-wrapper {
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
        }

        .profil-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 50px rgba(0, 0, 0, 0.25);
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

        .image-profil:hover {
            transform: scale(1.05);
        }

        .profil-title {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
            letter-spacing: 1px;
            text-shadow: 1px 1px 3px rgba(13, 110, 253, 0.4);
        }

        .list-group-container {
            max-width: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .list-group {
            width: 100%;
            max-width: 400px;
            background: #f8f9fa;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
            padding: 20px 15px;
            border: none;
        }

        .list-group-item {
            font-size: 1.1rem;
            color: #333;
            display: flex;
            gap: 15px;
            border: none;
            padding: 12px 10px;
            border-radius: 8px;
            align-items: center;
        }

        .list-group-item:not(:last-child) {
            margin-bottom: 12px;
        }

        .list-group-item:hover {
            background-color: #e6f0ff;
            color: #0d6efd;
            cursor: default;
        }

        .label {
            font-weight: 700;
            color: #0d6efd;
            min-width: 120px;
            text-align: right;
            user-select: none;
        }

        @media (max-width: 576px) {
            .profil-wrapper {
                padding: 20px 15px;
                margin: 20px 10px;
            }

            .profil-title {
                font-size: 1.5rem;
            }

            .label {
                font-size: 0.95rem;
                min-width: 100px;
            }

            .list-group-item {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('/profil') ?>">Profil</a>
        </li>
    </ul>

    <div class="profil-wrapper">
        <img src="<?= base_url('sheila.jpg') ?>" alt="Foto Profil" class="image-profil">
        <div class="profil-title">Profil Saya</div>

        <div class="list-group-container">
            <ul class="list-group">
                <li class="list-group-item"><span class="label">Nama:</span> <?= esc($biodata['nama']) ?></li>
                <li class="list-group-item"><span class="label">NIM:</span> <?= esc($biodata['nim']) ?></li>
                <li class="list-group-item"><span class="label">Program Studi:</span> <?= esc($biodata['prodi']) ?></li>
                <li class="list-group-item"><span class="label">Hobi:</span> <?= esc($biodata['hobi']) ?></li>
                <li class="list-group-item"><span class="label">Skill:</span> <?= esc($biodata['skill']) ?></li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>