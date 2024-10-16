<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include_once "listdata.php"; ?>

<div class="container">

    <h2>Input Biodata Mahasiswa</h2>
    <div class="row mb-2">
        <div class="col-sm-12">
            <span class="m-1">
                <a href="viewall.php" class="btn btn-info" role="button">Kembali</a>
            </span>
        </div>
    </div>
<?php
include "koneksi.php";
include "fungsi.php";
$namaDepan = $namaBelakang = "";
if ($_)
</body>
</html>