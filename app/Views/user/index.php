    <?= $this->include('nav/head'); ?>
    <style>
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 100%;
            height: 200px;
            filter: drop-shadow(8px 8px 10px #000);
            object-fit: cover;
            object-position: 20% 60%;
            display: block;
        }

        @keyframes example {
            0% {
                width: 100%;
                height: 200px;
            }

            100% {
                background-color: black;
                width: 100%;
                height: 85vh;
            }
        }

        img:hover {
            animation-name: example;
            animation-duration: 4s;
            /* animation-iteration-count: infinite; */
            animation-fill-mode: forwards;
            position: relative;
        }
    </style>
    <main>
        <div class="container-fluid mt-3">
            <!-- // -------------------------------------------------------------------------------------------------------------- -->
            <!--<div>
                <img src="<?= base_url('src/') ?>img/dash2.png">
            </div>
            <!-- // -------------------------------------------------------------------------------------------------------------- -->
            <hr>
            <div class="row">

                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Penduduk</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $penduduk; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data permintaan Penduduk</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $permintaan; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data ahliwaris</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $ahliwaris; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Datang Penduduk</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $datang; ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Keterangan Miskin</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $miskin; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Izin Usaha</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $usaha; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Pindah</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $pindah; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Kelahiran</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $lahir; ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Kematian</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $mati; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data KK</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $kk; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data KTP</div>
                        <div class="card-body">
                            <h6>Jumlah Data</h6>
                            <h3 class="card-title"><?= $ktp; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col"></div>

            </div>

            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31869.809217211903!2d115.0444070170538!3d-3.166666220674292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de5c8ade6add129%3A0x2a18b01b61a88c30!2sBinoeang%2C%20Tungkap%2C%20Binuang%2C%20Tapin%20Regency%2C%20South%20Kalimantan%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1704360905755!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
    <?= $this->include('nav/foot'); ?>