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

<div class="container">
    <center>
        <div class="header p-5" style="color:#b78a02;">
            <h2>Surat Keterangan Usaha</h2>
        </div>
    </center>
    <div class="form">
        <form action="">
            <table>
                <tr>Nama
                    <td><input type="text"></td>
                </tr>
                <tr>Alamat
                    <td><input type="text"></td>
                </tr>

                td

            </table>
            <label for="">Keterangan</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button type="submit">submit</button>
        </form>
    </div>
</div>


<?= $this->endSection() ?>