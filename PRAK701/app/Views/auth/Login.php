<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #cce0ff, #e6f0ff);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 100, 0.1);
            max-width: 400px;
            width: 90%;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-4px);
        }

        h2 {
            text-align: center;
            color: #004080;
            margin-bottom: 30px;
            font-weight: 600;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #003366;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #0073e6;
            border-radius: 8px;
            font-size: 15px;
            margin-bottom: 20px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #005bb5;
            box-shadow: 0 0 8px rgba(0, 115, 230, 0.3);
            outline: none;
        }

        .error-message {
            color: #ff4444;
            font-size: 14px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007acc;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #005c99;
            transform: translateY(-2px);
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .register-link a {
            color: #005c99;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }

            h2 {
                font-size: 20px;
            }

            button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

       <?php if(session()->getFlashdata('error')): ?>
    <div class="error-message">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<form action="/login" method="post" autocomplete="off">
    <?= csrf_field() ?>
    <label for="username">Username</label>
   <input type="text" name="username" value="<?= set_value('username') ?>" />

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required autocomplete="off">

    <button type="submit">Login</button>
</form>

        <div class="register-link">
            Belum punya akun? <a href="/register">Daftar di sini</a>
        </div>
    </div>
</body>
</html>