<?php
require_once 'koneksi.php';

function getAllMember() {
    $conn = getKoneksi();
    $query = "SELECT * FROM member";
    return mysqli_query($conn, $query);
}

function getMemberById($id) {
    $conn = getKoneksi();
    $query = "SELECT * FROM member WHERE id_member = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = getKoneksi();
    $query = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
              VALUES ('$nama', '$nomor', '$alamat', '$tgl_daftar', '$tgl_bayar')";
    mysqli_query($conn, $query);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar) {
    $conn = getKoneksi();
    $query = "UPDATE member 
              SET nama_member = '$nama', nomor_member = '$nomor', alamat = '$alamat', 
                  tgl_mendaftar = '$tgl_daftar', tgl_terakhir_bayar = '$tgl_bayar' 
              WHERE id_member = $id";
    mysqli_query($conn, $query);
}

function deleteMember($id) {
    $conn = getKoneksi();
    $query = "DELETE FROM member WHERE id_member = $id";
    mysqli_query($conn, $query);
}

function getAllBuku() {
    $conn = getKoneksi();
    $query = "SELECT * FROM buku";
    return mysqli_query($conn, $query);
}

function getBukuById($id) {
    $conn = getKoneksi();
    $query = "SELECT * FROM buku WHERE id_buku = $id";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function insertBuku($judul, $penulis, $penerbit, $tahun, $stok) {
    $conn = getKoneksi();
    $query = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, stok) 
              VALUES ('$judul', '$penulis', '$penerbit', '$tahun', '$stok')";
    mysqli_query($conn, $query);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun, $stok) {
    $conn = getKoneksi();
    $query = "UPDATE buku 
              SET judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', 
                  tahun_terbit = '$tahun', stok = '$stok' 
              WHERE id_buku = $id";
    mysqli_query($conn, $query);
}

function deleteBuku($id) {
    $conn = getKoneksi();
    $query = "DELETE FROM buku WHERE id_buku = $id";
    mysqli_query($conn, $query);
}

function getAllPeminjaman() {
    $conn = getKoneksi();
    $query = "SELECT * FROM peminjaman";
    return mysqli_query($conn, $query);
}

function getPeminjamanById($id) {
    $conn = getKoneksi();
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali)
{
    $conn = getKoneksi();
    $query = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) 
              VALUES ('$id_member', '$id_buku', '$tgl_pinjam', '$tgl_kembali')";
    return mysqli_query($conn, $query);
}

function updatePeminjaman($id_peminjaman, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $conn = getKoneksi();
    $query = "UPDATE peminjaman 
              SET id_member = '$id_member', id_buku = '$id_buku', tgl_pinjam = '$tgl_pinjam', tgl_kembali = '$tgl_kembali' 
              WHERE id_peminjaman = '$id_peminjaman'";
    mysqli_query($conn, $query);
}

function deletePeminjaman($id) {
    $conn = getKoneksi();
    $query = "DELETE FROM peminjaman WHERE id_peminjaman = $id";
    mysqli_query($conn, $query);
}
?>