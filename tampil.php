<?php
include_once ("koneksi.php");

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

if (isset($_POST["cari"])) {
    $cari = $_POST["cari"];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama_mhs LIKE '%$cari' 
    OR id LIKE '%$cari%' 
    OR prodi LIKE '%$cari%'");
}