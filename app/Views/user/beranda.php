<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

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
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan Usaha</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_domisili_usaha') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan Domisili Usaha</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_sktm') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan Tidak Mampu</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_penghasilan') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan Penghasilan</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_bedaidentitas') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan Beda Identitas</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_ktp') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan KTP dalam Proses</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_kematian') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan Kematian</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_kelahiran') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan Kelahiran</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_skck') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Pengantar SKCK</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_kehilangan') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Pengantar Kehilangan</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_domisili') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Pernyataan Domisili</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-80">
                    <a href="<?= base_url('surat_keterangan') ?>" style="text-decoration: none; color:black;">
                        <img src="img/icon-surat.png" style="width:30%;" class="card-img-top" alt="...">
                        <hr>
                        <div class="card-body">
                            <h5>Surat Keterangan</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>