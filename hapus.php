<?php
include_once("koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id") or die(mysqli_error($koneksi));

if($query){
    echo "<script>
    alert('Data berhasil dihapus');
    window.location.assign('form3.php');
    </script>";
}else{
    echo "<script>
    alert('Data gagal dihapus');
    window.location.assign('form3.php');
    </script>";
}
?>
