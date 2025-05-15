<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid black;
            width: auto;
        }
        td {
            border: 2px solid black;
            padding: 3px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            text-align: left;
        }
        .inner-box {
            display: block;
            padding: 5px;
            border: 2px solid black;
        }
        .bold-text {
            font-weight: bold; 
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td><div class="inner-box bold-text">Daftar Smartphone Samsung</div></td>
    </tr>
    <?php
    $smartphones = [
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    ];

    foreach ($smartphones as $hp) {
        echo "<tr><td><div class='inner-box'>$hp</div></td></tr>";
    }
    ?>
</table>

</body>
</html>