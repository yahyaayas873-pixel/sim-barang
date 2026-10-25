<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "sim_barang";
// Update koneksi untuk Pertemuan 7
$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>