<?php
include "koneksi.php";

if (isset($_POST["proses"])) {
    $nama_mhs = $_POST['input1'];
    $prodi = $_POST['input2'];
    $id = $_POST['input3'];
    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mhs, prodi, id) VALUES ('$nama_mhs', '$prodi', '$id')") or die(mysqli_error($koneksi));
    $huruf_mutu = '';

    if ($proses) {
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }

}
?>