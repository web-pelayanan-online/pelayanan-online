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
            <a href="<?php echo base_url('admin_dashboard'); ?>" class="nav-link active">
              <i class="nav-icon fa fa-tachometer"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <!-- data tabel -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin_verifikasi" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
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
            <h1 class="m-0">Beranda</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin_dashboard" style="text-decoration: none;">Beranda</a></li>
              <li class="breadcrumb-item active">Petunjuk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
      <div class="card-header">
        <b style="color:red;">Penting!</b>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0" style="font-size: large;">
          <p>Berikut ini merupakan User Guide untuk website Pelayanan Surat Online Kelurahan Gilangharjo: </p>
          <ul>
            <!-- Halaman Login -->
            <li><b>Halaman Login</b></li>
            <p>Link Akses Login suratonlinegilangharjo.com/auth : </p>
            <ol>
              <li>Username: admin </li>
              <li>Password: admin </li>
            </ol>

            <!-- Halaman Verifikasi -->
            <li><b>Halaman Verifikasi</b></li>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos similique aspernatur incidunt perspiciatis praesentium dolores consequatur fugiat ut suscipit excepturi, tempora libero inventore. Distinctio nobis in mollitia cum magni expedita.
            </p>
            <p>Cara Verifikasi :</p>
            <ol>
              <li>Lorem ipsum dolor sit amet consectetur</li>
              <li>Lorem ipsum dolor sit amet consectetur</li>
              <li>Lorem ipsum dolor sit amet consectetur</li>
              <li>Lorem ipsum dolor sit amet consectetur</li>
              <li>Lorem ipsum dolor sit amet consectetur</li>
              <li>Lorem ipsum dolor sit amet consectetur</li>
              <li>Lorem ipsum dolor sit amet consectetur</li>
            </ol>

          </ul>
        </blockquote>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<?= $this->endSection() ?>