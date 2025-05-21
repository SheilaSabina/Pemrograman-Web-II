<!DOCTYPE html>
<html>
<body>

  <form method="post">
  <p style="margin-bottom: 5px;">Jumlah Peserta :
    <input type="number" name="jumlah" value="<?php if (isset($_POST['jumlah'])) echo $_POST['jumlah']; ?>" />
  </p>
  <p style="margin-top: 0;">
    <input type="submit" value="Cetak" />
  </p>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah = intval($_POST["jumlah"]);
    $i = 1;

    echo "<div style='margin-top: 20px;'>";

    while ($i <= $jumlah) {
      $warna = ($i % 2 == 1) ? "red" : "green";
      echo "<p style='color: $warna; font-weight: bold; font-size: 20px;'>Peserta ke-$i</p>";
      $i++;
    }

    echo "</div>";
  }
  ?>
</body>
</html>