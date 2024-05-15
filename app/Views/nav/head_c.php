<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Halaman Cetak</title>
    <link href="<?= base_url('src/') ?>css/styles.css" rel="stylesheet" />

    <style>
        @page {
            size: auto;
            margin: 10px;
        }

        body {
            /* margin: 0; */
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        @media print {

            body {
                margin: 20px 40px;
                /* Atur nilai margin kanan dan kiri sesuai kebutuhan */
            }

            @page {
                margin-bottom: 0;
                orientation: landscape;
            }
        }

        img {
            width: 80px;
        }

        hr.pemisah {
            height: 5px;
            color: black;
            /* Atur tinggi garis sesuai kebutuhan */
            background-color: black;
            /* Atur warna lapisan atas */
            position: relative;
        }

        .bold {
            font-weight: bold;
            letter-spacing: 5px;
            text-transform: uppercase;
        }

        .uline {
            text-decoration: underline;
            margin-bottom: 0px;
        }



        /* Tambahkan gaya lain yang dibutuhkan untuk halaman cetak */
    </style>
</head>

<body>
    <!-- // -------------------------------------------------------------------------------------------------------------- -->
    <!-- Head -->
    <div class="row">
        <div class="col-3">
            <div class="float-end">
                <img src="<?= base_url('src/') ?>img/logo_fix.png" alt="">

            </div>
        </div>
        <div class="col text-center">
            <h4 class="bold">
                PEMERINTAH KABUPATEN TAPIN <br>
                KECAMATAN BINUANG
            </h4>
            Jl. By Pass Telp/Fax. (0526) 2894137 Kode Pos 71183 Email : humas.kec.binuang@gmail.com
        </div>
        <div class="col-2"></div>
    </div>
    <hr class="pemisah">