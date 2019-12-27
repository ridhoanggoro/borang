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
        <h6 class="collapse-header">Kerjasama Tridharma:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'pendidikan' ? 'active': '' ?>" href="<?php echo site_url('tridharma/pendidikan'); ?>">Pendidikan</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'penelitian' ? 'active': '' ?>" href="<?php echo site_url('tridharma/penelitian'); ?>">Penelitian</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'pkm' ? 'active': '' ?>" href="<?php echo site_url('tridharma/pkm'); ?>">Pengabdian Masyarakat</a>
      </div>
    </div>
  </li>
  <li class="nav-item <?php echo $this->uri->segment(1) == 'mahasiswa' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 2</span>
    </a>
    <div id="collapse3" class="collapse <?php echo $this->uri->segment(1) == 'mahasiswa' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Mahasiswa:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'seleksi_mahasiswa' ? 'active': '' ?>" href="<?php echo site_url('mahasiswa/seleksi_mahasiswa'); ?>">Seleksi Mahasiswa</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'asing' ? 'active': '' ?>" href="<?php echo site_url('mahasiswa/asing'); ?>">Mahasiswa Asing</a>
      </div>
    </div>
  </li>
  <li class="nav-item <?php echo $this->uri->segment(1) == 'dosen' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 3</span>
    </a>
    <div id="collapse4" class="collapse <?php echo $this->uri->segment(1) == 'dosen' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Dosen:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_tetap' ? 'active': '' ?>" href="<?php echo site_url('dosen/dosen_tetap'); ?>">Dosen Tetap</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_pa' ? 'active': '' ?>" href="<?php echo site_url('dosen/dosen_pa'); ?>">Dosen Pembimbing</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'ewmp' ? 'active': '' ?>" href="<?php echo site_url('dosen/ewmp'); ?>">EWMP</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_tdk_tetap' ? 'active': '' ?>" href="<?php echo site_url('dosen/dosen_tdk_tetap'); ?>">Dosen Tidak Tetap </a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_praktisi' ? 'active': '' ?>" href="<?php echo site_url('dosen/dosen_praktisi'); ?>">Dosen Industri/Praktisi</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'rekognisi' ? 'active': '' ?>" href="<?php echo site_url('dosen/rekognisi'); ?>">Pengakuan/Rekognisi Dosen</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'penelitian_dtps' ? 'active': '' ?>" href="<?php echo site_url('dosen/penelitian_dtps'); ?>">Penelitian DTPS</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'pkm_dtps' ? 'active': '' ?>" href="<?php echo site_url('dosen/pkm_dtps'); ?>">PkM DTPS</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'publikasi_ilmiah_dtps' ? 'active': '' ?>" href="<?php echo site_url('dosen/publikasi_ilmiah_dtps'); ?>">Publikasi Ilmiah DTPS</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'pagelaran_ilmiah' ? 'active': '' ?>" href="<?php echo site_url('dosen/pagelaran_ilmiah'); ?>">Pagelaran Ilmiah DTPS</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_paten' ? 'active': '' ?>" href="<?php echo site_url('dosen/hki_paten'); ?>">Bagian-1 HKI Paten</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_hak_cipta' ? 'active': '' ?>" href="<?php echo site_url('dosen/hki_hak_cipta'); ?>">Bagian-2 HKI Hak Cipta</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_teknologi_tepatguna' ? 'active': '' ?>" href="<?php echo site_url('dosen/hki_teknologi_tepatguna'); ?>">Bagian-3 Teknologi Tepat Guna</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'buku_isbn' ? 'active': '' ?>" href="<?php echo site_url('dosen/buku_isbn'); ?>">Bagian-4 Buku Ber-ISBN</a>
      </div>
    </div>
  </li>
  <?php elseif($this->session->userdata('role')==='PIMPINAN'):?>
  <li class="nav-item active">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>SLIP GAJI</span>
    </a>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">User Menu:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(3) == 'slip_gaji' ? 'active': '' ?>" href="<?php echo site_url('admin/gaji/slip_gaji'); ?>">Cetak Slip</a>
        <a class="collapse-item <?php echo $this->uri->segment(3) == 'ganti_password' ? 'active': '' ?>" href="<?php echo site_url('admin/karyawan/ganti_password'); ?>">Ganti Password</a>
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
