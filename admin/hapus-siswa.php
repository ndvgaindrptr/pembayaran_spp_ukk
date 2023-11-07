<?php

$nisn = $_GET['nisn'];

include '../koneksi.php';

$sql = "DELETE FROM siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
header("Location:?url=siswa");
if ($query) {
    header("Location: ?url=siswa");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=siswa');</script>";
}
