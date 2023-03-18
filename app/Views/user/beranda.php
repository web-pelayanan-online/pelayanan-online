<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/gilangharjo2.jpg" style="width:100%; height: 600px;" alt="...">
            <div class="centered" style="color:white; font-size:large; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                <center>
                    <p>TRANSFORMASI DIGITAL KALURAHAN</p>
                </center>
                <p>Perluas Jangkauan, Lakukan Percepatan Pelayanan untuk Masyarakat</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/gilangharjo3.jpg" style="width:100%; height: 600px;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/gilangharjo4.jpg" style="width:100%; height: 600px;" alt="...">
        </div>
    </div>
</div>

<div class="container p-4">
    <div class="content">
        <div class="header text-center p-3">
            <h3 style="color: #b78a02; margin-bottom:2%;">Pelayanan Surat</h3>
            <h5 style="margin-bottom: 4%;">List Surat</h5>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_usaha') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan Usaha (SKU)</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_domisili_usaha') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan Domisili Usaha</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_sktm') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan Tidak Mampu (SKTM)</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_penghasilan') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan Penghasilan</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_bedaidentitas') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan Beda Identitas</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_ktp') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan KTP dalam Proses</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_kematian') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan Kematian</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_kelahiran') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan Kelahiran</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_skck') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Pengantar SKCK</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_kehilangan') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Pengantar Kehilangan</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_domisili') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Pernyataan Domisili</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_keterangan') ?>" style="text-decoration: none; color:black;">
                        <center>
                            <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        </center>
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title">Surat Keterangan</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>