<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pegawai";

mysqli_report(flags : MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    //buat koneksi ke db
    $koneksi = mysqli_connect(hostname: $servername, username: $username, password: $password,
    database: $dbname);
    //jika berhasil
    echo "Koneksii berhasil";
} catch (mysqli_sql_exception $e) {
    //kalau terjadi kesalahan koneksi
    echo "Koneksi Gagal: " .$e->getMessage();
}
?>