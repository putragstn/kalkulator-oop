<?php

// memanggil class Kalkulator
require_once "Kalkulator.php";

// membuat objek Kalkulator
$kalkulator = new Kalkulator();

?>

<!-- ============== Source Code HTML ============= -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator with OOP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body {
            background-color: whitesmoke;
        }

        .container {
            margin: 10px auto;
            padding: 10px;
            width: 850px;
            height: 400px;
        }

        label {
            color: whitesmoke;
        }

        input.result {
            margin: 10px auto;
            margin-top: 35px;
        }

        .result {
            width: 130px;
        }

        .footer {
            margin-top: 46px;
            background-color: #212529;
            padding: 20px;
        }
    </style>
</head>

<body>

    <h1 class="text-center mb-5 mt-5">Kalkulator Sederhana</h1>

    <div class="container border border-3 border-dark bg-dark">


        <form action="" method="POST">
            <div class="row text-center justify-content-md-center mt-5">
                <label for="firstValue" class="col-sm-2 col-form-label">Nilai Pertama</label>
                <div class="col-sm-2">

                    <!-- Jika tombol submit ditekan, isi value input dengan nilai -->
                    <?php if (isset($_POST["submit"])) { ?>
                        <input type="text" class="form-control form-control" name="nilaiPertama" id="firstValue" placeholder="Input Angka" value="<?= $_POST["nilaiPertama"]; ?>">

                        <!-- Jika tombol tidak ditekan, biarkan value kosong -->
                    <?php } else { ?>
                        <input type="text" class="form-control form-control" name="nilaiPertama" id="firstValue" placeholder="Input Angka" value="">
                    <?php } ?>

                </div>
            </div>


            <div class="row text-center justify-content-md-center mt-3 mb-3">
                <label class="col-sm-2"></label>
                <div class="col-sm-2">
                    <select class="form-select" name="operasi">
                        <option value="tambah"> + </option>
                        <option value="kurang"> - </option>
                        <option value="kali"> x </option>
                        <option value="bagi"> / </option>

                        <?php if (isset($_POST["submit"]) && $_POST["operasi"] == "kurang") { ?>
                            <option value="kurang"> - </option>
                        <?php } ?>
                    </select>

                    }
                    ?>
                </div>
            </div>

            <div class="row text-center justify-content-md-center">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label">Nilai Kedua</label>
                <div class="col-sm-2">

                    <!-- Jika tombol submit ditekan, isi value input dengan nilai -->
                    <?php if (isset($_POST["submit"])) { ?>
                        <input type="text" class="form-control mb-3" name="nilaiKedua" id="colFormLabelLg" placeholder="Input Angka" value="<?= $_POST["nilaiKedua"]; ?>">

                        <!-- Jika tombol tidak ditekan, biarkan value kosong -->
                    <?php } else { ?>
                        <input type="text" class="form-control mb-3" name="nilaiKedua" id="colFormLabelLg" placeholder="Input Angka" value="">
                    <?php } ?>

                </div>
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary me-3">Hitung</button>
                <button type="submit" name="reset" class="btn btn-danger">Reset</button>
            </div>


            <?php
            if (isset($_POST["submit"])) {

                // jika tombol submit ditekan, maka tampung value dan operasi ke dalam variabel
                $inputPertama = $_POST["nilaiPertama"];
                $inputKedua = $_POST["nilaiKedua"];
                $operasi = $_POST["operasi"];

                // lalu cek, operasi apa yang dipilih
                switch ($operasi) {
                    case "tambah":
                        $hasil = $kalkulator->tambah($inputPertama, $inputKedua);
                        echo "<input class='form-control text-center result' type='text' value='$hasil' disabled readonly>";
                        break;

                    case "kurang":
                        $hasil = $kalkulator->kurang($inputPertama, $inputKedua);
                        echo "<input class='form-control text-center result' type='text' value='$hasil' disabled readonly>";
                        break;

                    case "kali":
                        $hasil = $kalkulator->kali($inputPertama, $inputKedua);
                        echo "<input class='form-control text-center result' type='text' value='$hasil' disabled readonly>";
                        break;

                    case "bagi":
                        $hasil = $kalkulator->bagi($inputPertama, $inputKedua);
                        echo "<input class='form-control text-center result' type='text' value='$hasil' disabled readonly>";
                        break;
                }
            }

            ?>

        </form>
    </div>

    <footer class="text-center">

        <div class="footer">
            <h6 class="text-light text-center">Created by <a href="https://www.instagram.com/putragstn_/">Putra Agustiansyah</a></h6>
        </div>


    </footer>


    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<!-- ============== Akhir Source Code HTML ============= -->