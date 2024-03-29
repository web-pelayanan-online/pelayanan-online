<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="form p-3">
        <form action="<?= base_url('/pengajuan/surat_kehilangan'); ?>" method="post" class="data" style="padding:15px;">
            <div class="row">
                <div class="header p-3 text-md text-center" style="color:black; background-color:#b78a02; border-radius: 10px;">
                    <h2>Surat Keterangan Pengantar Kehilangan</h2>
                </div>
                <div class="batas p-3"></div>
                <div class="col">
                    <input type="hidden" name="nama_surat" value="Surat Keterangan Pengantar Kehilangan">
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
            <p><b>KETERANGAN KEHILANGAN: </b></p>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Hari/Tanggal/Jam</label>
                        <input type="datetime-local" class="form-control" name="tanggal" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Barang Hilang</label>
                        <input type="text" class="form-control" name="nama_data" placeholder="KTP" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Tempat Kehilangan</label>
                        <input type="text" class="form-control" name="tempat" placeholder="Toko Fotocopy" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ciri-Ciri Barang</label>
                        <input type="text" class="form-control" name="ciri_ciri" placeholder="Nomor 3402061111110001 atau ciri lainnya" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan Kejadian</label>
                <textarea class="form-control" name="keterangan" rows="3" placeholder="Jelaskan kejadian hilang dengan detail dan jelas" required></textarea>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">
                <button class="btn" type="submit" style="background-color:#b78a02; color:white;">Submit</button>
            </div>
        </form>
    </div>
</div>


<?= $this->endSection() ?>