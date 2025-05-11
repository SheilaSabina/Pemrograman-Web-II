<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus Online</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #eef5ff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            background-image: url('perpusimage.jpg');
            background-size: cover;
            background-position: center;
        }           

 h2 {
    color: #ffffff;
    margin-top: 40px;
    font-size: 2em;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

        .button-container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        button {
            padding: 15px 30px;
            font-size: 18px;
            margin: 10px;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>

    <h2>Perpustakaan</h2>
    <div class="button-container">
        <button onclick="window.location.href='buku.php'"> Buku </button>
        <button onclick="window.location.href='member.php'"> Member </button>
        <button onclick="window.location.href='peminjaman.php'"> Peminjaman </button>
    </div>

</body>
</html>