 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin')?>" class="brand-link">
    <img src="<?= base_url();?>back-end/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url();?>back-end/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama_user')?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="<?= base_url('admin');?>" class="nav-link <?php if($this->uri->segment(1)
              =='admin'){echo "active";}?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('banner');?>" class="nav-link <?php if($this->uri->segment(1)
              =='banner'){echo "active";}?>">
              <i class="nav-icon fas fa-fw fa-photo-video"></i>
              <p>
                Banner Image
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('partner');?>" class="nav-link <?php if($this->uri->segment(1)
            =='partner'){echo "active";}?>">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Partner
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fas fa-th"></i>
              <p>
                Tentang Aplikasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('about')?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('header_about')?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Header</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('content_about')?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Konten</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('header_about2')?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Header 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('content_about2')?>" class="nav-link">
                  <i class="fas fa-angle-double-right nav-icon"></i>
                  <p>Konten 2</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="<?= base_url('service');?>" class="nav-link <?php if($this->uri->segment(1)
                  =='service'){echo "active";}?>">
              <i class="nav-icon fas fa-fax"></i>
              <p>
                Service
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('hub');?>" class="nav-link <?php if($this->uri->segment(1)
                  =='hub'){echo "active";}?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Under Service
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('portofolio')?>" class="nav-link <?php if($this->uri->segment(1)
                  =='portofolio'){echo "active";}?>">
              <i class="nav-icon fas fas fa-file"></i>
              <p>
                Portofolio
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fas fa-comment-dollar"></i>
              <p>
                Pricing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="<?= base_url('header_pricing')?>" class="nav-link">
              <i class="nav-icon fas fa-pen-square"></i>
              <p>
                Header
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pricing')?>" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Konten
              </p>
            </a>
          </li>
          </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('footer')?>" class="nav-link <?php if($this->uri->segment(1)
              =='footer'){echo "active";}?>">
              <i class="nav-icon fas fa-sticky-note"></i>
              <p>
                Footer
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('media_sosial')?>" class="nav-link <?php if($this->uri->segment(1)
              =='media_sosial'){echo "active";}?>">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Media Sosial
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('address')?>" class="nav-link <?php if($this->uri->segment(1)
              =='address'){echo "active";}?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Address
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('user');?>" class="nav-link <?php if($this->uri->segment(1)
              =='user'){echo "active";}?>">
              <i class="nav-icon fas fa-users "></i>
              <p>
                User
              </p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="<?= base_url('auth/logout_user');?>" class="nav-link">
              <i class="nav-icon fas fa-sign"></i>
              <p>
                Logout
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
            <h1 class="m-0"><?= $title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
           