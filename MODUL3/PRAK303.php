<!DOCTYPE html>
<html>
<body>
  <form method="post">
    <p style="margin: 0;">Batas Bawah : 
      <input type="number" name="bawah" value="<?php if (isset($_POST['bawah'])) echo $_POST['bawah']; ?>" />
    </p>
    <p style="margin: 0;">Batas Atas : 
      <input type="number" name="atas" value="<?php if (isset($_POST['atas'])) echo $_POST['atas']; ?>" />
    </p>
    <p style="margin: 5px 0 0 0;"><input type="submit" value="Cetak" /></p>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bawah = intval($_POST["bawah"]);
    $atas = intval($_POST["atas"]);
    $bintang = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

    echo "<div style='margin-top: 20px;'>";

    $i = $bawah;
    while ($i <= $atas) {
      if ( ($i + 7) % 5 == 0 ) {
        echo "<img src='$bintang' width='20' height='20' style='margin-right:5px;'>";
      } else {
        echo "$i ";
      }
      $i++;
    }

    echo "</div>";
  }
  ?>
</body>
</html>