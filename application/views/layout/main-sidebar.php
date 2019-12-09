<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo site_url('welcome'); ?>">Gajihan Apps</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">GAS</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Report</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link <?php echo $this->uri->segment(2) == 'honor_tenaga_edukatif' ? 'active': '' ?>" href="<?php echo site_url('gaji/honor_tenaga_edukatif'); ?>">Honor Ajar</a></li>
            <li><a class="nav-link <?php echo $this->uri->segment(2) == 'rekap_honor' ? 'active': '' ?>" href="<?php echo site_url('gaji/rekap_honor'); ?>">Rekap Honor Ajar</a></li>
            <li><a class="nav-link <?php echo $this->uri->segment(2) == 'rekap_honor_per_dosen' ? 'active': '' ?>" href="<?php echo site_url('gaji/rekap_honor_per_dosen'); ?>">Rekap Honor Per Dosen</a></li>
            <li><a class="nav-link <?php echo $this->uri->segment(2) == 'rekap_tanda_terima' ? 'active': '' ?>" href="<?php echo site_url('gaji/rekap_tanda_terima'); ?>">Slip Per Dosen</a></li>
            <li><a class="nav-link <?php echo $this->uri->segment(2) == 'rekap_honor_perminggu' ? 'active': '' ?>" href="<?php echo site_url('gaji/rekap_honor_perminggu'); ?>">Rekap Mingguan</a></li>
            <li><a class="nav-link <?php echo $this->uri->segment(2) == 'rekap_honor_bank' ? 'active': '' ?>" href="<?php echo site_url('gaji/rekap_honor_bank'); ?>">Rekap Honor Bank</a></li>
            <li><a class="nav-link <?php echo $this->uri->segment(2) == 'rekap_honor_jurusan' ? 'active': '' ?>" href="<?php echo site_url('gaji/rekap_honor_jurusan'); ?>">Rekap Honor Jurusan</a></li>
          </ul>
        </li>
        <li class="menu-header">Gaji</li>
        <li class="dropdown <?php echo $this->uri->segment(1) == 'master' ? 'active': '' ?>">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master</span></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $this->uri->segment(2) == 'dosen' ? 'active': '' ?>"><a class="nav-link" href="<?php echo site_url('master/dosen'); ?>">Dosen</a></li>
            <li class="<?php echo $this->uri->segment(2) == 'matakuliah' ? 'active': '' ?>"><a class="nav-link" href="<?php echo site_url('master/matakuliah'); ?>">Mata Kuliah</a></li>
            <li class="<?php echo $this->uri->segment(2) == 'prodi' ? 'active': '' ?>"><a class="nav-link" href="<?php echo site_url('master/prodi'); ?>">Program Studi</a></li>
            <li class="<?php echo $this->uri->segment(2) == 'semester' ? 'active': '' ?>"><a class="nav-link" href="<?php echo site_url('master/semester'); ?>">Konfigurasi Sistem</a></li>
          </ul>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'jadwal_dosen' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>gaji/jadwal_dosen"><i class="fas fa-envelope-open-text"></i><span>Input Jadwal</span></a></li>
        <li class="<?php echo $this->uri->segment(2) == 'list_transaksi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>gaji/list_transaksi"><i class="fas fa-tasks"></i><span>List Transaksi</span></a></li>
        <li class="<?php echo $this->uri->segment(2) == 'input' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>gaji/input"><i class="fas fa-coins"></i><span>Input Gaji</span></a></li>
      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="#" data-toggle="modal" data-target="#Modal_About" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Tentang
        </a>
      </div>
  </aside>
</div>