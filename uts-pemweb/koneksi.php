<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "utspemrogramanweb";

    //buat koneksi
    $koneksi = mysqli_connect($serverName, $userName, $password, $dbName);

    //cek koneksi
    if (!$koneksi)
        die ("Koneksi Gagal".mysqli_connect());
?>