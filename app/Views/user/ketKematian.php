<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="form">
        <form action="<?= base_url('/pengajuan/surat_kematian'); ?>" method="post" class="data" style="padding:15px;">
            <div class="row">
                <div class="header p-3 text-md text-center" style="color:black; background-color:#b78a02; border-radius: 10px;">
                    <h2>Surat Keterangan Kematian</h2>
                </div>
                <div class="batas p-3"></div>
                <div class="col">
                    <input type="hidden" name="nama_surat" value="Surat Keterangan Kematian">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_pemohon" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat_pemohon" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="number" class="form-control" name="nik_pemohon" placeholder="">
                    </div>
                </div>
            </div>
            <p><b>Data Yang Meninggal:</b></p>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Nama dan Alias</label>
                        <input type="text" class="form-control" name="nama_data" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="nama_ayah" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat_data" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Umur</label>
                        <input type="text" class="form-control" name="umur" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                        <select class="form-select" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="nama_ibu" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Tempat Meninggal</label>
                        <input type="text" class="form-control" name="tempat" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Penyebab Kematian</label>
                        <input type="text" class="form-control" name="penyebab" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Hubungan Pelapor Dengan Yang Meninggal</label>
                        <input type="text" class="form-control" name="hubungan" placeholder="">
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">
                <button class="btn" type="submit" style="background-color:#b78a02; color:white;">Submit</button>
            </div>
        </form>
    </div>
</div>


<?= $this->endSection() ?>