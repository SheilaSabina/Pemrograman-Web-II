<?php

function getKoneksi() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpustakaan";
    
    $conn = mysqli_connect($host, $username, $password, $dbname);
    
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
    return $conn;
}
?>
