<nav class="navbar fixed-top navbar-expand-lg" style="background-color:#b78a02;">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('') ?>">
            <img src="img/Bantul.png" style="width: 30px;" alt="">
            <img src="img/UAD-warna.png" style="width: 40px;" alt="">
            Kalurahan Gilangharjo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pelayanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('surat_usaha') ?>">Surat Keterangan Usaha (SKU)</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_domisili_usaha') ?>">Surat Keterangan Domisili Usaha</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_sktm') ?>">Surat Keterangan Tidak Mampu (SKTM)</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_penghasilan') ?>">Surat Keterangan Penghasilan</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_bedaidentitas') ?>">Surat Keterangan Beda Identitas</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_ktp') ?>">Surat Keterangan KTP dalam Proses</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_kematian') ?>">Surat Keterangan Kematian</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_kelahiran') ?>">Surat Keterangan Kelahiran</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_skck') ?>">Surat Pengantar SKCK</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_kehilangan') ?>">Surat Pengantar Kehilangan</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_domisili') ?>">Surat Pernyataan Domisili</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('surat_keterangan') ?>">Surat Keterangan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kontak') ?>">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>