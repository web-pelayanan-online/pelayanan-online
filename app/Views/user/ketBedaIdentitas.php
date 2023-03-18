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
    <div class="form">
        <center>
            <form action="<?= base_url('/pengajuan/surat_bedaidentitas'); ?>" method="post" class="data" style="padding:15px;">
                <div class="row">
                    <center>
                        <div class="header p-3" style="width:60%; color:black; background-color:#b78a02; border-radius: 10px;">
                            <h2>Surat Keterangan Beda Identitas</h2>
                        </div>
                    </center>
                    <div class="col">
                        <table>
                            <input type="hidden" name="nama_surat" value="Surat Keterangan Beda Identitas">
                            <tr>
                                <td>Nama</td>
                            </tr>
                            <tr>
                                <td><input type="text" style="width:500px; border-radius:4px;" name="nama_pemohon"></td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                            </tr>
                            <tr>
                                <td><input type="text" style="width:500px; border-radius:4px;" name="nik_pemohon"></td>
                            </tr>
                            <tr>
                                <td>Nomor Identitas</td>
                            </tr>
                            <tr>
                                <td><input type="text" style="width:500px; border-radius:4px;" name="nomor_identitas"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <table>
                            <tr>
                                <td>Alamat</td>
                            </tr>
                            <tr>
                                <td><input type="text" style="width:500px; border-radius:4px;" name="alamat_pemohon"></td>
                            </tr>
                            <tr>
                                <td>Identitas dalam (Nama Kartu)</td>
                            </tr>
                            <tr>
                                <td><input type="text" style="width:500px; border-radius:4px;" name="identitas_kartu"></td>
                            </tr>
                            <tr>
                                <td>Perbedaan</td>
                            </tr>
                            <tr>
                                <td><input type="text" style="width:500px; border-radius:4px;" name="perbedaan"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <button type="submit" style="width: 15%; height:40px; border-radius:4px; background-color:#b78a02; border:none; color:white;">Submit</button>
            </form>
        </center>
    </div>
</div>
<?= $this->endSection() ?>