<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<div class="container">
    <div class="form">
        <form action="<?= base_url('/pengajuan/surat_domisili_usaha'); ?>" method="post" class="data" style="padding:15px;">
            <div class="row">
                <div class="header p-3 text-md text-center" style="color:black; background-color:#b78a02; border-radius: 10px;">
                    <h2>Surat Keterangan Domisili Usaha</h2>
                </div>
                <div class="batas p-3"></div>
                <div class="col">
                    <input type="hidden" name="nama_surat" value="Surat Keterangan Domisili Usaha">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
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
            <div class="mb-3">
                <label class="form-label">Alamat Usaha</label>
                <textarea class="form-control" name="alamat_data" rows="3" placeholder="Jodog RT 01 Gilangharjo Pandak Bantul" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan Usaha</label>
                <textarea class="form-control" name="nama_data" rows="3" placeholder="Ternak Kambing" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Keperluan</label>
                <textarea class="form-control" name="keperluan" rows="3" placeholder="Persyaratan Kredit Bank" required></textarea>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">
                <button class="btn" type="submit" style="background-color:#b78a02; color:white;">Submit</button>
            </div>
        </form>
    </div>
</div>


<?= $this->endSection() ?>