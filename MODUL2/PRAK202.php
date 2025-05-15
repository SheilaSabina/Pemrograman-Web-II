<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
    <style>
        .error {color: red;}
    </style>
</head>
<body>

<?php
$nama = $nim = $gender = "";
$namaerror = $nimerror = $gendererror = "";
$output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    if (empty($_POST["nama"])) {
        $namaerror = "<span class='error'> nama tidak boleh kosong</span>";
        $isValid = false;
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
    }

    if (empty($_POST["nim"])) {
        $nimerror = "<span class='error'> nim tidak boleh kosong</span>";
        $isValid = false;
    } else {
        $nim = htmlspecialchars($_POST["nim"]);
    }

    if (empty($_POST["gender"])) {
        $gendererror = "<span class='error'> jenis kelamin tidak boleh kosong</span>";
        $isValid = false;
    } else {
        $gender = htmlspecialchars($_POST["gender"]);
    }

    if ($isValid) {
        $output = "<p>$nama<br>$nim<br>$gender</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="nama" value="<?php echo $nama;?>"> <span class="error">*</span> <?php echo $namaerror; ?>
    <br><br>
    NIM: <input type="text" name="nim" value="<?php echo $nim;?>"> <span class="error">*</span> <?php echo $nimerror; ?>
    <br><br>
    Jenis Kelamin: <span class="error">*</span> <?php echo $gendererror; ?><br>
    <input type="radio" name="gender" <?php if ($gender=="Laki-laki") echo "checked";?> value="Laki-laki">Laki-Laki<br>
    <input type="radio" name="gender" <?php if ($gender=="Perempuan") echo "checked";?> value="Perempuan">Perempuan<br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php

    if (!empty($output)) {
        echo $output;
    }
?>

</body>
</html>