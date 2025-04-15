<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        Nilai : 
        <input type="number" name="nilai" 
               value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : ''; ?>">
        <br><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];

        if ($nilai < 0 || $nilai >= 1000) {
            echo "<h3>Hasil: Anda Menginput Melebihi Limit Bilangan</h3>";
        } elseif ($nilai == 0) {
            echo "<h3>Hasil: Nol</h3>";
        } elseif ($nilai >= 1 && $nilai <= 9) {
            echo "<h3>Hasil: Satuan</h3>";
        } elseif ($nilai >= 10 && $nilai <= 19) {
            echo "<h3>Hasil: Belasan</h3>";
        } elseif ($nilai >= 20 && $nilai <= 99) {
            echo "<h3>Hasil: Puluhan</h3>";
        } elseif ($nilai >= 100 && $nilai <= 999) {
            echo "<h3>Hasil: Ratusan</h3>";
        }
    }
    ?>
</body>
</html>