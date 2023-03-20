<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>
<div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="img/Bantul.png" height="80" width="60">
            <p>Kelurahan Gilangharjo</p>
        </div> -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo base_url('admin_dashboard'); ?>" class="brand-link" style="text-decoration: none;">
            <img src="https://gilangharjo.bantulkab.go.id/assets/files/logo/logo-bantul-sid.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Kelurahan Gilangharjo</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="<?php echo base_url('admin_dashboard'); ?>" class="nav-link">
                            <i class="nav-icon fa fa-tachometer"></i>
                            <p>
                                Beranda
                            </p>
                        </a>
                    </li>
                    <!-- data tabel -->
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>admin_verifikasi" class="nav-link active">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                Verifikasi Surat
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>admin_terima" class="nav-link">
                            <i class="nav-icon fa fa-folder"></i>
                            <p>
                                Surat Yang Diterima
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>admin_tolak" class="nav-link">
                            <i class="nav-icon fa fa-trash"></i>
                            <p>
                                Surat Yang Ditolak
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Surat Keterangan Kelahiran</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin_dashboard" style="text-decoration: none;">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin_verifikasi" style="text-decoration: none;">Verifikasi Surat</a></li>
                            <li class="breadcrumb-item active">Surat Keterangan Kelahiran</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!-- Default box -->
        <div class="card p-3">
            <div class="container">
                <div class="form">
                    <form action="<?= base_url('/pengajuan/surat_kelahiran'); ?>" method="get" class="data" style="padding:15px;">
                        <div class="row">
                            <div class="batas p-3"></div>
                            <div class="col">
                                <input type="hidden" name="nama_surat" value="Surat Keterangan Kelahiran">
                                <div class="mb-3">
                                    <label class="form-label">Nama Pelapor</label>
                                    <input type="text" class="form-control" name="nama_pemohon" value="<?= $nama_pemohon ?>" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat_pemohon" value="<?= $alamat_pemohon ?>" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">NIK</label>
                                    <input type="number" class="form-control" name="nik_pemohon" value="<?= $nik_pemohon ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <p><b>Data Kelahiran:</b></p>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" value="<?= $tanggal ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Bayi</label>
                                    <input type="text" class="form-control" name="nama_data" value="<?= $nama_data ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Hubungan Pelapor Dengan Bayi</label>
                                    <input type="text" class="form-control" name="hubungan" value="<?= $hubungan ?>" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Alamat Kelahiran</label>
                                    <input type="text" class="form-control" name="tempat" value="<?= $tempat ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin Bayi</label>
                                    <select class="form-select" name="jenis_kelamin" value="<?= $jenis_kelamin ?>" disabled>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Anak Ke -</label>
                                    <input type="text" class="form-control" name="anak_ke" value="<?= $anak_ke ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <p><b>Data Orang Tua:</b></p>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" name="nama_ayah" value="<?= $nama_ayah ?>" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" name="nama_ibu" value="<?= $nama_ibu ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->
    <?= $this->endSection() ?>