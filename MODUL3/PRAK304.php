<!DOCTYPE html>
<html>
<head>
    <style>
        .star {
            width: 70px;
            height: 70px;
            display: inline-block;
        }
        .button-group {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
$star_url = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
$jumlah_bintang = 0;

if (isset($_POST['submit'])) {
    $jumlah_bintang = intval($_POST['jumlah_bintang']);
    if ($jumlah_bintang < 1) $jumlah_bintang = 1;
}

if (isset($_POST['tambah'])) {
    $jumlah_bintang = intval($_POST['jumlah_bintang']) + 1;
}

if (isset($_POST['kurang'])) {
    $jumlah_bintang = intval($_POST['jumlah_bintang']) - 1;
    if ($jumlah_bintang < 1) $jumlah_bintang = 1;
}
?>

<?php if ($jumlah_bintang == 0) { ?>
    <form method="post">
        Jumlah bintang <input type="number" name="jumlah_bintang">
       <br>
    <button type="submit" name="submit">Submit</button>
    </form>
<?php } else { ?>
    <p>Jumlah bintang <?php echo $jumlah_bintang; ?></p>
    <?php
    for ($i = 0; $i < $jumlah_bintang; $i++) {
        echo "<img src='$star_url' class='star'>";
    }
    ?>
    <div class="button-group">
        <form method="post" style="display:inline;">
            <input type="hidden" name="jumlah_bintang" value="<?php echo $jumlah_bintang; ?>">
            <button type="submit" name="tambah">Tambah</button>
        </form>
        <form method="post" style="display:inline;">
            <input type="hidden" name="jumlah_bintang" value="<?php echo $jumlah_bintang; ?>">
            <button type="submit" name="kurang">Kurang</button>
        </form>
    </div>
<?php } ?>
</body>
</html>