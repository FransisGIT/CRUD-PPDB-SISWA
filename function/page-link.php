<?php
// untuk mengambil input pada variabel page
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
            // jika page berisi list siswa manggil file list-siswa.php
        case 'list-siswa':
            include 'pages/list-siswa.php';
            break;

            // jika page berisi tambah-siswa siswa manggil file tambah-siswa.php
        case 'tambah-siswa':
            include 'pages/tambah-siswa.php';
            break;

            // jika page berisi update-siswa siswa manggil file update-siswa.php
        case 'update-siswa':
            include 'pages/update-siswa.php';
            break;

            // jika tidak ada isi maka panggil file list-siswa.php
        default:
            include 'pages/list-siswa.php';
            break;
    }
    // jika tidak ada isi maka panggil file list-siswa.php
} else {
    include 'pages/list-siswa.php';
}
