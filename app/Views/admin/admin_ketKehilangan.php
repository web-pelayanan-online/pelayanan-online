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
                        <h1 class="m-0">Surat Keterangan Pengantar Kehilangan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin_dashboard" style="text-decoration: none;">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin_verifikasi" style="text-decoration: none;">Verifikasi Surat</a></li>
                            <li class="breadcrumb-item active">Surat Keterangan Pengantar Kehilangan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!-- Default box -->
        <div class="card p-3">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>NIK</th>
                            <th>Hari/Tanggal/Jam</th>
                            <th>Tempat Kehilangan</th>
                            <th>Nama Barang Hilang</th>
                            <th>Ciri-Ciri Barang</th>
                            <th>Keterangan Kejadian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><?= $nama_pemohon ?></td>
                            <td><?= $alamat_pemohon ?></td>
                            <td><?= $nik_pemohon ?></td>
                            <td><?= $tanggal ?></td>
                            <td><?= $tempat ?></td>
                            <td><?= $nama_data ?></td>
                            <td><?= $ciri_ciri ?></td>
                            <td><?= $keterangan ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.content -->
    </div>
</div>
<!-- ./wrapper -->
<?= $this->endSection() ?>