<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="form">
        <form action="<?= base_url('/pengajuan/surat_kelahiran'); ?>" method="post" class="data" style="padding:15px;">
            <div class="row">
                <div class="header p-3 text-md text-center" style="color:black; background-color:#b78a02; border-radius: 10px;">
                    <h2>Surat Keterangan Kelahiran</h2>
                </div>
                <div class="batas p-3"></div>
                <div class="col">
                    <input type="hidden" name="nama_surat" value="Surat Keterangan Kelahiran">
                    <div class="mb-3">
                        <label class="form-label">Nama Pelapor</label>
                        <input type="text" class="form-control" name="nama_pemohon" placeholder="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat_pemohon" placeholder="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="number" class="form-control" name="nik_pemohon" placeholder="" required>
                    </div>
                </div>
            </div>
            <p><b>Data Kelahiran:</b></p>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Bayi</label>
                        <input type="text" class="form-control" name="nama_data" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hubungan Pelapor Dengan Bayi</label>
                        <input type="text" class="form-control" name="hubungan" placeholder="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Alamat Kelahiran</label>
                        <input type="text" class="form-control" name="tempat" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin Bayi</label>
                        <select class="form-select" name="jenis_kelamin" required>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Anak Ke -</label>
                        <input type="text" class="form-control" name="anak_ke" placeholder="" required>
                    </div>
                </div>
            </div>
            <p><b>Data Orang Tua:</b></p>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="nama_ayah" placeholder="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="nama_ibu" placeholder="" required>
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