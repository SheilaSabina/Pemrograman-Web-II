<!DOCTYPE html>
<html>
<body>
  <form method="post">
    <p style="margin: 0;">Tinggi :
      <input type="number" name="tinggi" value="<?php if (isset($_POST['tinggi'])) echo $_POST['tinggi']; ?>" />
    </p>
    <p style="margin: 0;">Alamat Gambar :
      <input type="text" name="gambar" size="20" value="<?php if (isset($_POST['gambar'])) echo $_POST['gambar']; ?>" />
    </p>
    <p style="margin: 5px 0 0 0;">
      <input type="submit" value="Cetak" />
    </p>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi = intval($_POST["tinggi"]);
    $gambar = $_POST["gambar"];

    echo "<div style='margin-top: 20px;'>";

    $baris = $tinggi;
    while ($baris >= 1) {
      $marginKiri = ($tinggi - $baris) * 32;
      echo "<div style='margin-left: {$marginKiri}px;'>";

      $kolom = 1;
      while ($kolom <= $baris) {
        echo "<img src='$gambar' width='30' height='30' style='margin:2px;' />";
        $kolom++;
      }

      echo "</div>";
      $baris--;
    }

    echo "</div>";
  }
  ?>
</body>
</html>