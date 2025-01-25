<?php
include 'database.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];

mysqli_query($koneksi, "UPDATE siswa SET id='$id', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id='$id'");

header("location: ../index.php");
