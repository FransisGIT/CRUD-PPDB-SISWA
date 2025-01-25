<?php
include 'database.php';
$id = $_GET['id'];

// query untuk delete data berdasarkan id di tabel siswa
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");
header("location: ../index.php");
