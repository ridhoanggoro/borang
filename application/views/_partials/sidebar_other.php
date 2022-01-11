<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
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
    
  <li class="nav-item <?php echo $this->uri->segment(1) == 'dana' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse3">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 4</span>
    </a>
    <div id="collapse5" class="collapse <?php echo $this->uri->segment(1) == 'dana' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">*Keuangan, Sarana, dan Prasarana:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'penggunaan_dana' ? 'active': '' ?>" href="<?php echo site_url('dana/penggunaan_dana'); ?>">*4.Penggunaan Dana</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
