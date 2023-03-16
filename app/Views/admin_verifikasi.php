<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verifikasi Surat | Kelurahan Gilangharjo</title>

    <link rel="icon" type="image/png" href="img/Bantul.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    < class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="img/Bantul.png" height="80" width="60">
            <p>Kelurahan Gilangharjo</p>
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="" href="<?= base_url("/logout") ?>" role="button">
                        <i class="fas fa-chevron-circle-right"> Logout</i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url(); ?>admin_dashboard" class="brand-link">
                <img src="img/Bantul.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                            <a href="<?php echo base_url(); ?>admin_dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <!-- data tabel -->
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>admin_verifikasi" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Verifikasi Surat
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
                            <h1 class="m-0">Verifikasi Surat</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin_dashboard">Beranda</a></li>
                                <li class="breadcrumb-item active">Verifikasi Surat</li>
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
                                <th style="width: 1%">
                                    No.
                                </th>
                                <th style="width: 20%">
                                    Nama Pemohon
                                </th>
                                <th style="width: 20%">
                                    Nama Surat
                                </th>
                                <!-- <th>
                                    Pedukuhan
                                </th>
                                <th style="width: 20%">
                                    Nomor Handphone
                                </th> -->
                                <th style="width:15%" class="text-center">
                                    Status
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 0;
                            foreach ($surat as $row) :
                                $nomor++;
                            ?>
                                <tr>
                                    <td>
                                        <?= $nomor ?>
                                    </td>
                                    <td>
                                        <?= $row['nama_pemohon'] ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            <?= $row['nama_surat'] ?>
                                        </button>
                                    </td>

                                    <!-- <td>
                                    Gunting
                                </td>
                                <td>
                                    +62812345690
                                </td> -->
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            Terima
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Batal
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.content -->
        </div>
        <!-- Surat Keterangan Usaha -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Alamat</th>
                                    <th>Nama/Jenis Usaha</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nama_data'] ?></td>
                                    <td><?= $row['keterangan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Usaha -->

        <!-- Surat Keterangan Domisili Usaha -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Keterangan Usaha</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['nama_data'] ?></td>
                                    <td><?= $row['keperluan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Domisili Usaha -->

        <!-- Surat Keterangan Tidak Mampu -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Alamat Usaha</th>
                                    <th>Keterangan Usaha</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['alamat_data'] ?></td>
                                    <td><?= $row['nama_data'] ?></td>
                                    <td><?= $row['keperluan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Tidak Mampu -->

        <!-- Surat Keterangan Penghasilan -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Jumlah Tanggungan Anak</th>
                                    <th>Keterangan Usaha</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['jml_tanggungan_anak'] ?></td>
                                    <td><?= $row['nama_data'] ?></td>
                                    <td><?= $row['keperluan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Penghasilan -->

        <!-- Surat Keterangan Beda Identitas -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Identitas dalam (Nama Kartu)</th>
                                    <th>Nomor Identitas</th>
                                    <th>Perbedaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['identitas_kartu'] ?></td>
                                    <td><?= $row['nomor_identitas'] ?></td>
                                    <td><?= $row['perbedaan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Beda Identitas -->

        <!-- Surat Keterangan KTP Dalam Proses -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['keperluan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan KTP Dalam Proses -->

        <!-- Surat Keterangan KTP Dalam Proses -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['keperluan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan KTP Dalam Proses -->

        <!-- Surat Keterangan Kematian -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Nama dan Alias</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Alamat</th>
                                    <th>Hari/Tanggal/jam</th>
                                    <th>Tempat Meninggal</th>
                                    <th>Penyebab Kematian</th>
                                    <th>Hubungan Pelapor Dengan Yang Meninggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['nama_data'] ?></td>
                                    <td><?= $row['umur'] ?></td>
                                    <td><?= $row['jenis_kelamin'] ?></td>
                                    <td><?= $row['agama'] ?></td>
                                    <td><?= $row['nama_ayah'] ?></td>
                                    <td><?= $row['nama_ibu'] ?></td>
                                    <td><?= $row['alamat_data'] ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td><?= $row['tempat'] ?></td>
                                    <td><?= $row['penyebab'] ?></td>
                                    <td><?= $row['hubungan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Kematian -->

        <!-- Surat Keterangan Kelahiran -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Pelapor</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Hari/Tanggal/jam</th>
                                    <th>Tempat Kelahiran</th>
                                    <th>Nama Bayi</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Hubungan Pelapor Dengan Bayi</th>
                                    <th>Anak Ke - </th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td><?= $row['tempat'] ?></td>
                                    <td><?= $row['nama_data'] ?></td>
                                    <td><?= $row['jenis_kelamin'] ?></td>
                                    <td><?= $row['hubungan'] ?></td>
                                    <td><?= $row['anak_ke'] ?></td>
                                    <td><?= $row['nama_ayah'] ?></td>
                                    <td><?= $row['nama_ibu'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Kelahiran -->

        <!-- Surat Keterangan Pengantar SKCK -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['keperluan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Pengantar SKCK -->

        <!-- Surat Keterangan Pengantar Kehilangan -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
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
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td><?= $row['tempat'] ?></td>
                                    <td><?= $row['nama_data'] ?></td>
                                    <td><?= $row['ciri_ciri'] ?></td>
                                    <td><?= $row['keterangan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Pengantar Kehilangan -->

        <!-- Surat Keterangan Pengantar Kehilangan -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Alamat Sesuai KTP</th>
                                    <th>Alamat Domisili</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['alamat_data'] ?></td>
                                    <td><?= $row['keterangan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan Pengantar Kehilangan -->

        <!-- Surat Keterangan -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $row['nama_surat'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Pelapor</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Keterangan</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $row['nama_pemohon'] ?></td>
                                    <td><?= $row['alamat_pemohon'] ?></td>
                                    <td><?= $row['nik_pemohon'] ?></td>
                                    <td><?= $row['keterangan'] ?></td>
                                    <td><?= $row['keperluan'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Surat Keterangan -->

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong style="color:orange;">Copyright &copy; 2023 KKN UAD 101 X Kelurahan Gilangharjo</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>