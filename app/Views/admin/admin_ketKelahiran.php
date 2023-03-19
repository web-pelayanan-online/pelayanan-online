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
                    <center>
                        <form action="<?= base_url('/pengajuan/surat_kelahiran'); ?>" method="post" class="data" style="padding:15px;">
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <input type="hidden" name="nama_surat" value="Surat Keterangan Kelahiran">
                                        <tr>
                                            <td>Nama Pelapor</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="nama_pemohon" value="<?= $nama_pemohon ?>" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Alamat</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="alamat_pemohon" value="<?= $alamat_pemohon ?>" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>NIK</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="nik_pemohon" value="<?= $nik_pemohon ?>" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <p>Data Kelahiran: </p>
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Hari/Tanggal/Jam</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="" name="tanggal" style="width:300px; border-radius:4px;" value="<?= $tanggal ?>" disabled></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Bayi</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="nama_data" value="<?= $nama_data ?>" disabled></td>
                                        </tr>
                                        <tr>
                                            <td>Hubungan Pelapor Dengan Bayi</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="hubungan" value="<?= $hubungan ?>" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Tempat Kelahiran</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="tempat" value="<?= $tempat ?>" disabled></td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>Jenis Kelamin Bayi</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="jenis_kelamin" value="<?= $jenis_kelamin ?>" disabled></td>
                                        </tr>
                                        <tr>
                                            <td>Anak Ke -</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="anak_ke" value="<?= $anak_ke ?>" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <p>Data Orang Tua: </p>
                            <div class="row">
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Nama Ayah</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="nama_ayah" value="<?= $nama_ayah ?>" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col">
                                    <table>
                                        <tr>
                                            <td>Nama Ibu</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" style="width:300px; border-radius:4px;" name="nama_ibu" value="<?= $nama_ibu ?>" disabled></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.content -->
    </div>
</div>
<!-- ./wrapper -->
<?= $this->endSection() ?>