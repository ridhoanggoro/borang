<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
	  <i class="fas fa-chart-bar"></i>
    </div>
    <div class="sidebar-brand-text mx-3">e-Borang <sup>v.1</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
    <a class="nav-link" href="<?php echo site_url('Home') ?>">
      <i class="fas fa-fw fa-home"></i>
      <span>Home</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu Utama
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <?php if($this->session->userdata('role')==='SUPER ADMIN' || $this->session->userdata('role')==='ADMIN'):?>
  <li class="nav-item <?php echo $this->uri->segment(1) == 'tridharma' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 1</span>
    </a>
    <div id="collapseTwo" class="collapse <?php echo $this->uri->segment(1) == 'tridharma' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Tata Pamong, Tata Kelola, Kerjasama</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'pendidikan' ? 'active': '' ?>" href="<?php echo site_url('tridharma/pendidikan'); ?>">*1-1.Pendidikan</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'penelitian' ? 'active': '' ?>" href="<?php echo site_url('tridharma/penelitian'); ?>">*1-2.Penelitian</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'pkm' ? 'active': '' ?>" href="<?php echo site_url('tridharma/pkm'); ?>">*1-3.Pengabdian Masyarakat</a>
      </div>
    </div>
  </li>
  <?php endif;?>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
