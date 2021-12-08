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
  <?php if($this->session->userdata('role')==='SUPER ADMIN' || $this->session->userdata('role')==='BORANG'):?>
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
  <li class="nav-item <?php echo $this->uri->segment(1) == 'mahasiswa' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 2</span>
    </a>
    <div id="collapse3" class="collapse <?php echo $this->uri->segment(1) == 'mahasiswa' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Mahasiswa:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'seleksi_mahasiswa' ? 'active': '' ?>" href="<?php echo site_url('mahasiswa/seleksi_mahasiswa'); ?>">*2.a.Seleksi Mahasiswa</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'asing' ? 'active': '' ?>" href="<?php echo site_url('mahasiswa/asing'); ?>">*2.b.Mahasiswa Asing</a>
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
        <h6 class="collapse-header">Sumber Daya Mahasiswa:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_tetap' ? 'active': '' ?>" href="<?php echo site_url('dosen/dosen_tetap'); ?>">*3.a.1.Dosen Tetap PT</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_pa' ? 'active': '' ?>" href="<?php echo site_url('dosen/dosen_pa'); ?>">*3.a.2.Dosen Pembimbing Utama TA</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'ewmp' ? 'active': '' ?>" href="<?php echo site_url('dosen/ewmp'); ?>">*3.a.3.EWMP Dosen Tetap PT</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_tdk_tetap' ? 'active': '' ?>" href="<?php echo site_url('dosen/dosen_tdk_tetap'); ?>">*3.a.4.Dosen Tidak Tetap </a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_praktisi' ? 'active': '' ?>" href="<?php echo site_url('dosen/dosen_praktisi'); ?>">*3.a.5.Dosen Industri / Praktisi</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'rekognisi' ? 'active': '' ?>" href="<?php echo site_url('dosen/rekognisi'); ?>">*3.b.1.Pengakuan / Rekognisi Dosen</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'penelitian_dtps' ? 'active': '' ?>" href="<?php echo site_url('dosen/penelitian_dtps'); ?>">*3.b.2.Penelitian DTPS</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'pkm_dtps' ? 'active': '' ?>" href="<?php echo site_url('dosen/pkm_dtps'); ?>">*3.b.3.PkM DTPS</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'publikasi_ilmiah_dtps' ? 'active': '' ?>" href="<?php echo site_url('dosen/publikasi_ilmiah_dtps'); ?>">*3.b.4-1.Publikasi Ilmiah DTPS</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'pagelaran_ilmiah' ? 'active': '' ?>" href="<?php echo site_url('dosen/pagelaran_ilmiah'); ?>">*3.b.4-2.Pagelaran / Pameran / Presentasi / Publikasi Ilmiah DTPS</a>
		    <a class="collapse-item <?php echo $this->uri->segment(2) == 'karya_ilmiah_disitasi' ? 'active': '' ?>" href="<?php echo site_url('dosen/karya_ilmiah_disitasi'); ?>">*3.b.5.Karya Ilmiah DTPS Disitasi</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'produk_dtps' ? 'active': '' ?>" href="<?php echo site_url('dosen/produk_dtps'); ?>">*3.b.6.Produk DTPS yang Diadopsi oleh Industri/Masyarakat</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_paten' ? 'active': '' ?>" href="<?php echo site_url('dosen/hki_paten'); ?>">*3.b.7-1.Luaran Penelitian-HKI Paten</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_hak_cipta' ? 'active': '' ?>" href="<?php echo site_url('dosen/hki_hak_cipta'); ?>">*3.b.7-2.Luaran Penelitian-HKI Hak Cipta</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_teknologi_tepatguna' ? 'active': '' ?>" href="<?php echo site_url('dosen/hki_teknologi_tepatguna'); ?>">*3.b.7-3.Luaran Penelitian-Teknologi Tepat Guna</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'buku_isbn' ? 'active': '' ?>" href="<?php echo site_url('dosen/buku_isbn'); ?>">*3.b.7-4.Luaran Penelitian-Buku Ber-ISBN</a>

      </div>
    </div>
  </li>
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
  <li class="nav-item <?php echo $this->uri->segment(1) == 'kurikulum' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 5</span>
    </a>
    <div id="collapse6" class="collapse <?php echo $this->uri->segment(1) == 'kurikulum' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Pendidikan:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'cp_rencana_pembelajaran' ? 'active': '' ?>" href="<?php echo site_url('kurikulum/cp_rencana_pembelajaran'); ?>">*5.a.Kurikulum, CP, Rencana Pembelajaran</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'integrasi_pkm' ? 'active': '' ?>" href="<?php echo site_url('kurikulum/integrasi_pkm'); ?>">*5.b.Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'kepuasan_mahasiswa' ? 'active': '' ?>" href="<?php echo site_url('kurikulum/kepuasan_mahasiswa'); ?>">*5.c.Kepuasan Mahasiswa</a>
      </div>
    </div>
  </li>
  <li class="nav-item <?php echo $this->uri->segment(1) == 'penelitian' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 6</span>
    </a>
    <div id="collapse7" class="collapse <?php echo $this->uri->segment(1) == 'penelitian' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Penelitian:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'penelitian_dosen_dan_mhs' ? 'active': '' ?>" href="<?php echo site_url('penelitian/penelitian_dosen_dan_mhs'); ?>">*6.a.Penelitian DTPS Melibatkan Mahasiswa</a>
		<!-- <a class="collapse-item <?php echo $this->uri->segment(2) == 'penelitian_mhs_tesis' ? 'active': '' ?>" href="<?php echo site_url('penelitian/penelitian_mhs_tesis'); ?>">*6.b.Penelitian DTPS Menjadi Rujukan Tema Tesis/Disertasi</a> -->
      </div>
    </div>
  </li>
   <li class="nav-item <?php echo $this->uri->segment(1) == 'pkm' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 7</span>
    </a>
    <div id="collapse8" class="collapse <?php echo $this->uri->segment(1) == 'pkm' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Pengabdian Kepada Masyarakat:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'dosen_dan_mhs' ? 'active': '' ?>" href="<?php echo site_url('pkm/dosen_dan_mhs'); ?>">*7.PkM DTPS Melibatkan Mahasiswa</a>
      </div>
    </div>
  </li>
   <li class="nav-item <?php echo $this->uri->segment(1) == 'luaran' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
      <i class="fas fa-fw fa-cog"></i>
      <span>Tabel 8</span>
    </a>
    <div id="collapse9" class="collapse <?php echo $this->uri->segment(1) == 'luaran' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Luaran & Capaian Tridharma:</h6>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'ipk_lulusan' ? 'active': '' ?>" href="<?php echo site_url('luaran/ipk_lulusan'); ?>">*8.a.IPK Lulusan</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'prestasi_akademik' ? 'active': '' ?>" href="<?php echo site_url('luaran/prestasi_akademik'); ?>">*8.b.1.Prestasi Akademik Mahasiswa</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'prestasi_non_akademik' ? 'active': '' ?>" href="<?php echo site_url('luaran/prestasi_non_akademik'); ?>">*8.b.2.Prestasi Non-Akademik Mahasiswa</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'masa_studi_lulusan' ? 'active': '' ?>" href="<?php echo site_url('luaran/masa_studi_lulusan'); ?>">*8.c.Masa Studi Lulusan </a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'waktu_tunggu_lulusan' ? 'active': '' ?>" href="<?php echo site_url('luaran/waktu_tunggu_lulusan'); ?>">*8.d.1.Waktu Tunggu Lulusan</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'kesesuaian_bidang_kerja_lulusan' ? 'active': '' ?>" href="<?php echo site_url('luaran/kesesuaian_bidang_kerja_lulusan'); ?>">*8.d.2.Kesesuaian Bidang Kerja Lulusan</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'tempat_kerja_lulusan' ? 'active': '' ?>" href="<?php echo site_url('luaran/tempat_kerja_lulusan'); ?>">*8.e.1.Tempat Kerja Lulusan</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'ref_kepuasan_pelanggan_lulusan' ? 'active': '' ?>" href="<?php echo site_url('luaran/ref_kepuasan_pelanggan_lulusan'); ?>">*Ref.8.e.2.Referensi Kepuasan Pengguna Lulusan</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'kepuasan_pengguna_lulusan' ? 'active': '' ?>" href="<?php echo site_url('luaran/kepuasan_pengguna_lulusan'); ?>">*8.e.2.Kepuasan Pengguna Lulusan</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'publikasi_ilmiah_mhs' ? 'active': '' ?>" href="<?php echo site_url('luaran/publikasi_ilmiah_mhs'); ?>">*8.f.1-1.Publikasi Ilmiah Mahasiswa</a>
		    <!-- <a class="collapse-item <?php echo $this->uri->segment(2) == 'karya_ilmiah_disitasi_mhs' ? 'active': '' ?>" href="<?php echo site_url('luaran/karya_ilmiah_disitasi_mhs'); ?>">*8.f.2.Karya Ilmiah yang Disitasi</a> -->
        <!-- <a class="collapse-item <?php echo $this->uri->segment(2) == 'produk_dtps_mhs' ? 'active': '' ?>" href="<?php echo site_url('luaran/produk_dtps_mhs'); ?>">*8.f.3.Produk Mahasiswa yang Diadopsi oleh Industri/Masyarakat</a> -->
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_paten_mhs' ? 'active': '' ?>" href="<?php echo site_url('luaran/hki_paten_mhs'); ?>">*8.f.4-1.Luaran Penelitian Mahasiswa-HKI Paten</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_hak_cipta_mhs' ? 'active': '' ?>" href="<?php echo site_url('luaran/hki_hak_cipta_mhs'); ?>">*8.f.4-2.Luaran Penelitian Mahasiswa-HKI Hak Cipta</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'hki_teknologi_tepatguna_mhs' ? 'active': '' ?>" href="<?php echo site_url('luaran/hki_teknologi_tepatguna_mhs'); ?>">*8.f.4-3.Luaran Penelitian Mahasiswa-Teknologi Tepat Guna</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'buku_isbn_mhs' ? 'active': '' ?>" href="<?php echo site_url('luaran/buku_isbn_mhs'); ?>">*8.f.4-4.Luaran Penelitian Mahasiswa-Buku Ber-ISBN</a>
      </div>
    </div>
  </li>

  <?php endif;?>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <div class="sidebar-heading">
    Pengaturan Aplikasi
  </div>

  <li class="nav-item <?php echo $this->uri->segment(1) == 'master' ? 'active': '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Manajemen Data</span>
    </a>
    <div id="collapse10" class="collapse <?php echo $this->uri->segment(1) == 'master' ? 'show': '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Konfigurasi Data Awal e-Borang</h6>        
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'master_ts' ? 'active': '' ?>" href="<?php echo site_url('master/master_ts'); ?>">Master TS</a>
        <a class="collapse-item <?php echo $this->uri->segment(2) == 'buku_isbn_mhs' ? 'active': '' ?>" href="<?php echo site_url('page/master_lab'); ?>">Master Laboratorium</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
