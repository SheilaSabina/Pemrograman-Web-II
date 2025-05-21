<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
  <style>
    :root {
        --primary-color: #1a73e8;
        --primary-hover: #155ab6;
        --overlay-color: rgba(0, 0, 0, 0.4);
        --text-color: #f0f4f8;
        --bg-white-transparent: rgba(255, 255, 255, 0.55);
        --bg-white-hover: rgba(255, 255, 255, 0.75);
        --shadow-dark: rgba(0, 0, 0, 0.35);
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-image: url('perpusimage.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        color: var(--text-color);
    }

    body::before {
        content: "";
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        background: var(--overlay-color);
        z-index: 0;
        pointer-events: none;
    }

    h2 {
        position: relative;
        z-index: 1;
        margin-top: 40px;
        font-size: clamp(1.4rem, 3vw, 2.2rem);
        font-weight: 700;
        text-shadow: 0 2px 8px var(--shadow-dark);
        letter-spacing: 1px;
    }

    .link-container {
        position: relative;
        z-index: 1;
        margin-top: 30px;
        background: var(--bg-white-transparent);
        padding: 30px 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px var(--shadow-dark);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        width: fit-content;
        min-width: 300px;
        margin-left: auto;
        margin-right: auto;
        transition: background-color 0.35s ease, box-shadow 0.35s ease;
    }

    .link-container:hover {
        background: var(--bg-white-hover);
        box-shadow: 0 15px 40px var(--shadow-dark);
    }

    a {
        display: inline-block;
        padding: 14px 34px;
        margin: 12px 10px;
        font-size: 1.1rem;
        background-color: var(--primary-color);
        color: #fff;
        text-decoration: none;
        border-radius: 10px;
        font-weight: 600;
        box-shadow: 0 5px 15px rgba(26, 115, 232, 0.45);
        transition: background-color 0.35s ease, box-shadow 0.35s ease, transform 0.25s ease;
        user-select: none;
        cursor: pointer;
        letter-spacing: 0.03em;
    }

    a:hover,
    a:focus {
        background-color: var(--primary-hover);
        box-shadow: 0 8px 25px rgba(21, 90, 182, 0.7);
        transform: translateY(-3px);
        outline: none;
    }

    p {
        margin: 0;
        line-height: 1.4;
    }

    @media (max-width: 400px) {
        .link-container {
            padding: 20px 25px;
            min-width: 90vw;
        }

        a {
            padding: 12px 20px;
            font-size: 1rem;
            margin: 8px 6px;
        }
    }
</style>
</head>
<body>

    <?php if (isset($username)): ?>
        <h2>Halo, <?= esc($username) ?>! Siap menambah koleksi pengetahuan hari ini?</h2>

        <div class="link-container">
            <p><a href="<?= base_url('/book') ?>">🔍 Kelola Data Buku</a></p>
            <p><a href="<?= base_url('/logout') ?>">🚪 Logout</a></p>
        </div>
    <?php else: ?>
        <p>Anda belum login. <a href="<?= base_url('/login') ?>">Login di sini</a></p>
    <?php endif; ?>
</body>
</html>