<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Konfirmasi Kontak'; ?></title>
</head>
<body>
    <h1><?php echo 'KONFIRMASI KONTAK'; ?></h1>

    <?php
        $nama = $_POST["nama"];
        $url = $_POST["url"];
        $hobi = $_POST['hobi'];
        $jenisKelamin = $_POST["jenis_kelamin"];
        $tgllahir = $_POST["tgllahir"];

        echo '
        Nama: '.$nama.'
        <br>URL yang Anda masukkan '.$url.'';

        //Function
        //PERIKSA JENIS KELAMIN
        if ($jenisKelamin == "L")
        {
            $jenisKelamin = "Laki-laki";
        }
        else {
            $jenisKelamin = "Perempuan";
        }
        //END PERIKSA JENIS KELAMIN

        //HITUNG UMUR
        function hitung_umur($tgllahir) {
            $lahir = new DateTime($tgllahir);
            $tanggal_sekarang = new DateTime();
            $umur = $tanggal_sekarang->diff($lahir);
            return $umur->y;
        }
        $umur = hitung_umur($tgllahir);
        //END HITUNG UMUR

        //PRINT HOBI
        if (count($hobi) > 1) {
            //gabungin dengan comma
            $hobi_terakhir = array_pop($hobi);
            $strhobi = implode(", ", $hobi) ." dan ". $hobi_terakhir;
        }
        else {
            $strhobi = $hobi[0];
        }
        echo 
        '<br>hobi: '.$strhobi.
        '<br>Jenis kelamin: '.$jenisKelamin.
        '<br>Umur: '.$umur.'';

    ?>

    <form action="insert.php" method="post">
        <!-- DATA YANG SUDAH DIINPUT -->
        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="hobi[]" value="<?php echo implode(",", $_POST["hobi"]); ?>">
        <input type="hidden" name="jenis_kelamin" value="<?php echo $_POST["jenis_kelamin"]; ?>">
        <input type="hidden" name="tglLahir" value="<?php echo $_POST["tglLahir"]; ?>">
        <!-- END DATA YANG SUDAH DIINPUT -->

        <!-- BUTTON SUBMIT -->
        <div class="row p-0 m-0">
            <div class="col-auto p-0 mx-auto mt-3">
                <button type="submit" class="btn btn-primary ml-0">Submit</button>
            </div>
        </div>
        <!-- END BUTTON SUBMIT -->
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>
</html>