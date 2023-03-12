<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/gilangharjo2.jpg" style="width:100%; height: 600px;" alt="...">
            <div class="centered" style="color:white; font-size:large; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">TRANSFORMASI DIGITAL KALURAHAN
                <p>Perluas Jangkauan, Lakukan Percepatan Pelayanan untuk Masyarakat</p>
            </div>
        </div>
    </div>
</div>

<div class="container p-3">
    <center>
        <div class="card">
            <div class="card-header">
                <i class="fa fa-phone" aria-hidden="true" style="font-size:large;"> Kontak</i>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="row">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>Pengaduan ke Pemerintah Kalurahan</td>
                                </tr>
                                <tr>
                                    <td>Pengaduan ke Bamuskal Gilangharjo</td>
                                </tr>
                                <tr>
                                    <td>Pengaduan ke Babinkantibmas</td>
                                </tr>
                                <tr>
                                    <td>Pengaduan ke Babinsa</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>0857-2998-2887</td>
                                </tr>
                                <tr>
                                    <td>0813-9209-4916</td>
                                </tr>
                                <tr>
                                    <td>0813-3636-2200</td>
                                </tr>
                                <tr>
                                    <td>0823-2469-7727</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </center>
</div>


<?= $this->endSection() ?>