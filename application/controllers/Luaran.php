<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Luaran extends CI_Controller {

    function __construct()
  	{
  		parent::__construct();
  		$this->load->model('Model_security');
  		$this->load->model('Model_master');
  	}

    public function ipk_lulusan()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='IPK Lulusan';
  		$isi['content']	= 'luaran/ipk_lulusan';
  		$this->load->view('default_page', $isi);
  	}

  	function ipk_lulusan_data_list(){
  		$data = $this->Model_master->ipk_lulusan_data_list();
  		echo json_encode($data);
  	}

    public function prestasi_akademik()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Prestasi Akademik Mahasiswa';
  		$isi['content']	= 'luaran/prestasi_akad_mhs';
  		$this->load->view('default_page', $isi);
  	}

  	function prestasi_akademik_data_list(){
  		$data = $this->Model_master->prestasi_akademik_data_list();
  		echo json_encode($data);
  	}

    function prestasi_akademik_add(){
      $data = $this->Model_master->prestasi_akademik_add();
  		echo json_encode($data);
    }

  	function prestasi_akademik_edit(){
      $data = $this->Model_master->prestasi_akademik_edit();
  		echo json_encode($data);
    }

  	function prestasi_akademik_delete(){
      $data = $this->Model_master->prestasi_akademik_delete();
  		echo json_encode($data);
    }

    public function prestasi_non_akademik()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Prestasi Non-akademik Mahasiswa';
  		$isi['content']	= 'luaran/prestasi_non_akad_mhs';
  		$this->load->view('default_page', $isi);
  	}

    function prestasi_non_akademik_data_list(){
  		$data = $this->Model_master->prestasi_non_akademik_data_list();
  		echo json_encode($data);
  	}

    function prestasi_non_akademik_add(){
      $data = $this->Model_master->prestasi_non_akademik_add();
  		echo json_encode($data);
    }

  	function prestasi_non_akademik_edit(){
      $data = $this->Model_master->prestasi_non_akademik_edit();
  		echo json_encode($data);
    }

  	function prestasi_non_akademik_delete(){
      $data = $this->Model_master->prestasi_non_akademik_delete();
  		echo json_encode($data);
    }

    public function masa_studi_lulusan()
  	{
  		$this->Model_security->getsecurity();
      $prodi = $this->session->userdata('nama');
  		$role = substr($prodi, strlen($prodi)-2);
      if (strtoupper($role) == 'S1') { $view = 'luaran/masa_studi_lulusan_s1'; }
      else { $view = 'luaran/masa_studi_lulusan_d3'; }
  		$isi['title'] 	='Masa Studi Lulusan ';
  		$isi['content']	= $view;
  		$this->load->view('default_page', $isi);
  	}

    function masa_studi_lulusan_list(){
  		$data = $this->Model_master->masa_studi_lulusan_list();
  		echo json_encode($data);
  	}

    public function waktu_tunggu_lulusan()
  	{
  		$this->Model_security->getsecurity();
      $prodi = $this->session->userdata('nama');
  		$role = substr($prodi, strlen($prodi)-2);
      if (strtoupper($role) == 'S1') { $view = 'luaran/waktu_tunggu_lulusan_s1'; }
      else if (strtoupper($role) == 'S1') { $view = 'luaran/waktu_tunggu_lulusan_d3'; }
      else { $view = 'luaran/waktu_tunggu_lulusan_s2'; }
  		$isi['title'] 	='Waktu Tunggu Lulusan';
  		$isi['content']	= $view;
      $isi['ts_list'] = $this->Model_master->ts_list();
  		$this->load->view('default_page', $isi);
  	}

    function waktu_tunggu_lulusan_list(){
  		$data = $this->Model_master->waktu_tunggu_lulusan_list();
  		echo json_encode($data);
  	}

    function waktu_tunggu_lulusan_add(){
      $data = $this->Model_master->waktu_tunggu_lulusan_add();
  		echo json_encode($data);
    }

  	function waktu_tunggu_lulusan_edit(){
      $data = $this->Model_master->waktu_tunggu_lulusan_edit();
  		echo json_encode($data);
    }

  	function waktu_tunggu_lulusan_delete(){
      $data = $this->Model_master->waktu_tunggu_lulusan_delete();
  		echo json_encode($data);
    }

    public function kesesuaian_bidang_kerja_lulusan()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Tabel 8.d.2) Kesesuaian Bidang Kerja Lulusan';
  		$isi['content']	= 'luaran/kesesuaian_bidang_kerja_lulusan';
      $isi['ts_list'] = $this->Model_master->ts_list();
  		$this->load->view('default_page', $isi);
  	}

    function kesesuaian_bidang_kerja_lulusan_list(){
  		$data = $this->Model_master->kesesuaian_bidang_kerja_lulusan_list();
  		echo json_encode($data);
  	}

    function kesesuaian_bidang_kerja_lulusan_add(){
      $data = $this->Model_master->kesesuaian_bidang_kerja_lulusan_add();
  		echo json_encode($data);
    }

  	function kesesuaian_bidang_kerja_lulusan_edit(){
      $data = $this->Model_master->kesesuaian_bidang_kerja_lulusan_edit();
  		echo json_encode($data);
    }

  	function kesesuaian_bidang_kerja_lulusan_delete(){
      $data = $this->Model_master->kesesuaian_bidang_kerja_lulusan_delete();
  		echo json_encode($data);
    }

    public function tempat_kerja_lulusan()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Tabel 8.e.1) Tempat Kerja Lulusan';
  		$isi['content']	= 'luaran/tempat_kerja_lulusan';
      $isi['ts_list'] = $this->Model_master->ts_list();
  		$this->load->view('default_page', $isi);
  	}

    function tempat_kerja_lulusan_list(){
  		$data = $this->Model_master->tempat_kerja_lulusan_list();
  		echo json_encode($data);
  	}

    function tempat_kerja_lulusan_add(){
      $data = $this->Model_master->tempat_kerja_lulusan_add();
  		echo json_encode($data);
    }

  	function tempat_kerja_lulusan_edit(){
      $data = $this->Model_master->tempat_kerja_lulusan_edit();
  		echo json_encode($data);
    }

  	function tempat_kerja_lulusan_delete(){
      $data = $this->Model_master->tempat_kerja_lulusan_delete();
  		echo json_encode($data);
    }

    public function ref_kepuasan_pelanggan_lulusan()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Tabel Referensi untuk Tabel (8.e.2) Kepuasan Pengguna Lulusan';
  		$isi['content']	= 'luaran/kepuasan_pelanggan_lulusan';
      $isi['ts_list'] = $this->Model_master->ts_list();
  		$this->load->view('default_page', $isi);
  	}

    function ref_kepuasan_pelanggan_lulusan_list(){
  		$data = $this->Model_master->ref_kepuasan_pelanggan_lulusan_list();
  		echo json_encode($data);
  	}

    function ref_kepuasan_pelanggan_lulusan_add(){
      $data = $this->Model_master->ref_kepuasan_pelanggan_lulusan_add();
  		echo json_encode($data);
    }

  	function ref_kepuasan_pelanggan_lulusan_edit(){
      $data = $this->Model_master->ref_kepuasan_pelanggan_lulusan_edit();
  		echo json_encode($data);
    }

  	function ref_kepuasan_pelanggan_lulusan_delete(){
      $data = $this->Model_master->ref_kepuasan_pelanggan_lulusan_delete();
  		echo json_encode($data);
    }

    public function kepuasan_pengguna_lulusan()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Tabel (8.e.2) Kepuasan Pengguna Lulusan';
  		$isi['content']	= 'luaran/kepuasan_pengguna_lulusan';
      $isi['data'] = $this->Model_master->jenis_kemampuan_list();
  		$this->load->view('default_page', $isi);
  	}

    function kepuasan_pengguna_lulusan_list(){
  		$data = $this->Model_master->kepuasan_pengguna_lulusan_list();
  		echo json_encode($data);
  	}

    function kepuasan_pengguna_lulusan_add(){
      $data = $this->Model_master->kepuasan_pengguna_lulusan_add();
  		echo json_encode($data);
    }

  	function kepuasan_pengguna_lulusan_edit(){
      $data = $this->Model_master->kepuasan_pengguna_lulusan_edit();
  		echo json_encode($data);
    }

  	function kepuasan_pengguna_lulusan_delete(){
      $data = $this->Model_master->kepuasan_pengguna_lulusan_delete();
  		echo json_encode($data);
    }

    public function publikasi_ilmiah_mhs()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Publikasi Ilmiah Mahasiswa';
  		$isi['content']	= 'luaran/publikasi_ilmiah_mhs';
  		$this->load->view('default_page', $isi);
  	}

    function publikasi_ilmiah_mhs_data_list(){
  		$data = $this->Model_master->publikasi_ilmiah_mhs_data_list();
  		echo json_encode($data);
  	}

    public function pagelaran_ilmiah_mhs()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Pagelaran/Pameran/Presentasi/Publikasi Ilmiah Mahasiswa';
  		$isi['content']	= 'luaran/pagelaran_ilmiah';
  		$this->load->view('default_page', $isi);
  	}

    function pagelaran_ilmiah_mhs_data_list(){
  		$data = $this->Model_master->pagelaran_ilmiah_mhs_data_list();
  		echo json_encode($data);
  	}

    public function karya_ilmiah_disitasi_mhs()
    {
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Karya Ilmiah Mahasiswa yang Disitasi';
  		$isi['content']	= 'luaran/karya_ilmiah_disitasi';
  		$this->load->view('default_page', $isi);
    }

    function karya_ilmiah_disitasi_data_list(){
  		$data = $this->Model_master->karya_ilmiah_disitasi_mhs_data_list();
  		echo json_encode($data);
    }

    function karya_ilmiah_disitasi_add(){
  		$data = $this->Model_master->karya_ilmiah_disitasi_mhs_add();
  		echo json_encode($data);
  	}

    function karya_ilmiah_disitasi_edit(){
  		$data = $this->Model_master->karya_ilmiah_disitasi_mhs_edit();
  		echo json_encode($data);
  	}

    function karya_ilmiah_disitasi_delete(){
  		$data = $this->Model_master->karya_ilmiah_disitasi_mhs_delete();
  		echo json_encode($data);
  	}

    public function produk_dtps_mhs()
    {
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat';
  		$isi['content']	= 'luaran/produk_dtps';
  		$this->load->view('default_page', $isi);
    }

    function produk_dtps_data_list(){
		$data = $this->Model_master->produk_dtps_mhs_data_list();
		echo json_encode($data);
    }

    function produk_dtps_add(){
  		$data = $this->Model_master->produk_dtps_mhs_add();
  		echo json_encode($data);
  	}

    function produk_dtps_edit(){
  		$data = $this->Model_master->produk_dtps_mhs_edit();
  		echo json_encode($data);
  	}

    function produk_dtps_delete(){
  		$data = $this->Model_master->produk_dtps_mhs_delete();
  		echo json_encode($data);
  	}

    public function hki_paten_mhs()
    {
      $this->Model_security->getsecurity();
      $isi['title'] 	='Luaran Penelitian/PkM yang Dihasilkan oleh Mahasiswa';
      $isi['content']	= 'luaran/hki_paten';
      $this->load->view('default_page', $isi);
    }

    function hki_paten_mhs_data_list(){
      $data = $this->Model_master->hki_paten_mhs_data_list();
      echo json_encode($data);
    }

    function hki_paten_mhs_add(){
  		$data = $this->Model_master->hki_paten_mhs_add();
  		echo json_encode($data);
  	}

    function hki_paten_mhs_edit(){
  		$data = $this->Model_master->hki_paten_mhs_edit();
  		echo json_encode($data);
  	}

    function hki_paten_mhs_delete(){
  		$data = $this->Model_master->hki_paten_mhs_delete();
  		echo json_encode($data);
  	}

    public function hki_hak_cipta_mhs()
    {
      $this->Model_security->getsecurity();
      $isi['title'] 	='Luaran Penelitian/PkM yang Dihasilkan oleh Mahasiswa';
      $isi['content']	= 'luaran/hki_hak_cipta';
      $this->load->view('default_page', $isi);
    }

    function hki_hak_cipta_mhs_data_list(){
      $data = $this->Model_master->hki_hak_cipta_mhs_data_list();
      echo json_encode($data);
    }

    function hki_hak_cipta_mhs_add(){
  		$data = $this->Model_master->hki_hak_cipta_mhs_add();
  		echo json_encode($data);
  	}

    function hki_hak_cipta_mhs_edit(){
  		$data = $this->Model_master->hki_hak_cipta_mhs_edit();
  		echo json_encode($data);
  	}

    function hki_hak_cipta_mhs_delete(){
  		$data = $this->Model_master->hki_hak_cipta_mhs_delete();
  		echo json_encode($data);
  	}

    public function hki_teknologi_tepatguna_mhs()
    {
      $this->Model_security->getsecurity();
      $isi['title'] 	='Luaran Penelitian/PkM yang Dihasilkan oleh Mahasiswa';
      $isi['content']	= 'luaran/hki_teknologi_tepatguna';
      $this->load->view('default_page', $isi);
    }

    function hki_teknologi_tepatguna_mhs_data_list(){
      $data = $this->Model_master->hki_teknologi_tepatguna_mhs_data_list();
      echo json_encode($data);
    }

    function hki_teknologi_tepatguna_mhs_add(){
  		$data = $this->Model_master->hki_teknologi_tepatguna_mhs_add();
  		echo json_encode($data);
  	}

    function hki_teknologi_tepatguna_mhs_edit(){
  		$data = $this->Model_master->hki_teknologi_tepatguna_mhs_edit();
  		echo json_encode($data);
  	}

    function hki_teknologi_tepatguna_mhs_delete(){
  		$data = $this->Model_master->hki_teknologi_tepatguna_mhs_delete();
  		echo json_encode($data);
  	}

    public function buku_isbn_mhs()
    {
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Bagian-4 Buku Ber-ISBN, Book Chapter';
  		$isi['content']	= 'luaran/buku_isbn';
  		$this->load->view('default_page', $isi);
    }

    function buku_isbn_mhs_data_list(){
  		$data = $this->Model_master->buku_isbn_mhs_data_list();
  		echo json_encode($data);
    }

    function buku_isbn_mhs_add(){
  		$data = $this->Model_master->buku_isbn_mhs_add();
  		echo json_encode($data);
  	}

    function buku_isbn_mhs_edit(){
  		$data = $this->Model_master->buku_isbn_mhs_edit();
  		echo json_encode($data);
  	}

    function buku_isbn_mhs_delete(){
  		$data = $this->Model_master->buku_isbn_mhs_delete();
  		echo json_encode($data);
	  }
}
