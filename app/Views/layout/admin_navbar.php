 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto p-1">
         <!-- Navbar Search -->
         <li class="nav-item">
             <div class="navbar-search-block">
                 <form class="form-inline">
                     <div class="input-group input-group-sm">
                         <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-navbar" type="submit">
                                 <i class="fa fa-search"></i>
                             </button>
                             <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                 <i class="fa fa-times"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </li>

         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fa fa-expand-arrows-alt"></i>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-widget="" href="<?= base_url("/logout") ?>" role="button">
                 <i class="fa fa-chevron-circle-right"> Logout</i>
             </a>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->