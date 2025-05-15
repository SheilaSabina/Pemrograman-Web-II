<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        Nilai : <input type="text" name="nilai" value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : ''; ?>"><br><br>
        
        Dari :<br>
        <input type="radio" name="dari" value="C" <?php if(isset($_POST['dari']) && $_POST['dari'] == 'C') echo 'checked'; ?>> Celcius<br>
        <input type="radio" name="dari" value="F" <?php if(isset($_POST['dari']) && $_POST['dari'] == 'F') echo 'checked'; ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="Re" <?php if(isset($_POST['dari']) && $_POST['dari'] == 'Re') echo 'checked'; ?>> Rheamur<br>
        <input type="radio" name="dari" value="K" <?php if(isset($_POST['dari']) && $_POST['dari'] == 'K') echo 'checked'; ?>> Kelvin<br><br>

        Ke :<br>
        <input type="radio" name="ke" value="C" <?php if(isset($_POST['ke']) && $_POST['ke'] == 'C') echo 'checked'; ?>> Celcius<br>
        <input type="radio" name="ke" value="F" <?php if(isset($_POST['ke']) && $_POST['ke'] == 'F') echo 'checked'; ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="Re" <?php if(isset($_POST['ke']) && $_POST['ke'] == 'Re') echo 'checked'; ?>> Rheamur<br>
        <input type="radio" name="ke" value="K" <?php if(isset($_POST['ke']) && $_POST['ke'] == 'K') echo 'checked'; ?>> Kelvin<br><br>

        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi']) && isset($_POST['nilai']) && isset($_POST['dari']) && isset($_POST['ke'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $hasil = 0;

        switch ($dari) {
            case 'C':
                $celcius = $nilai;
                break;
            case 'F':
                $celcius = ($nilai - 32) * 5/9;
                break;
            case 'Re':
                $celcius = $nilai * 5/4;
                break;
            case 'K':
                $celcius = $nilai - 273.15;
                break;
        }

        switch ($ke) {
            case 'C':
                $hasil = $celcius;
                $satuan = "°C";
                break;
            case 'F':
                $hasil = ($celcius * 9/5) + 32;
                $satuan = "°F";
                break;
            case 'Re':
                $hasil = $celcius * 4/5;
                $satuan = "°Re";
                break;
            case 'K':
                $hasil = $celcius + 273.15;
                $satuan = "K";
                break;
        }

        echo "<h3>Hasil Konversi: " . round($hasil, 1) . " $satuan</h3>";
    }
    ?>
</body>
</html>