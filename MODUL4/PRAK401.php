<!DOCTYPE html>
<html>
    <style>
        table {
            margin-top: 20px;
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post">
        <label>Panjang : </label>
        <input type="number" name="panjang" required 
               value="<?= isset($_POST['panjang']) ? htmlspecialchars($_POST['panjang']) : '' ?>"><br>
        
        <label>Lebar : </label>
        <input type="number" name="lebar" required 
               value="<?= isset($_POST['lebar']) ? htmlspecialchars($_POST['lebar']) : '' ?>"><br>
        
        <label>Nilai : </label>
        <input type="text" name="nilai" size="20" required 
               value="<?= isset($_POST['nilai']) ? htmlspecialchars($_POST['nilai']) : '' ?>"><br>
        
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $panjang = intval($_POST['panjang']);
        $lebar = intval($_POST['lebar']);
        $nilai_input = $_POST['nilai'];
        $nilai_array = explode(" ", trim($nilai_input));

        if (count($nilai_array) != $panjang * $lebar) {
            echo "<p style='color:black;'>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
        } else {
            echo "<table>";
            $index = 0;
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>".$nilai_array[$index++]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>