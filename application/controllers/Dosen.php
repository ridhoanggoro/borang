<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    function __construct()
  	{
  		parent::__construct();
  		$this->load->model('Model_security');
  		$this->load->model('Model_master');
  	}

    public function dosen_tetap()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Dosen Tetap Perguruan Tinggi';
  		$isi['content']	= 'dosen/tetap';
		$isi['template_link'] = base_url().'assets/upload/3.a.1.dosen_tetap.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function dosen_tetap_data_list(){
  		$data = $this->Model_master->dosen_tetap_data_list();
  		echo json_encode($data);
  	}

    function dosen_tetap_add(){
  		$data = $this->Model_master->dosen_tetap_add();
  		echo json_encode($data);
  	}

    function dosen_tetap_edit(){
  		$data = $this->Model_master->dosen_tetap_edit();
  		echo json_encode($data);
  	}

    function dosen_tetap_delete(){
  		$data = $this->Model_master->dosen_tetap_delete();
  		echo json_encode($data);
  	}

    public function dosen_pa()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Dosen Pembimbing Utama Tugas Akhir';
  		$isi['content']	= 'dosen/pa';
      $isi['dosen'] = $this->Model_master->dosen_list();
  		$this->load->view('default_page', $isi);
  	}

    function dosen_pa_data_list(){
  		$data = $this->Model_master->dosen_pa_data_list();
  		echo json_encode($data);
  	}

    function dosen_pa_add(){
      $data = $this->Model_master->dosen_pa_add();
      echo json_encode($data);
    }

    public function ewmp()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi';
  		$isi['content']	= 'dosen/ewmp';
     	$isi['dosen'] = $this->Model_master->dosen_list();
	  	$isi['template_link'] = base_url().'assets/upload/3.a.3.ewmp_dosen_tetap.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function ewmp_data_list(){
  		$data = $this->Model_master->ewmp_data_list();
  		echo json_encode($data);
  	}

    function ewmp_add(){
  		$data = $this->Model_master->ewmp_add();
  		echo json_encode($data);
  	}

    function ewmp_edit(){
  		$data = $this->Model_master->ewmp_edit();
  		echo json_encode($data);
  	}

    function ewmp_delete(){
  		$data = $this->Model_master->ewmp_delete();
  		echo json_encode($data);
  	}

    public function dosen_tdk_tetap()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Dosen Tidak Tetap Perguruan Tinggi';
  		$isi['content']	= 'dosen/tidak_tetap';
		$isi['template_link'] = base_url().'assets/upload/3.a.4.dosen_tidak_tetap.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function dosen_tdk_tetap_data_list(){
  		$data = $this->Model_master->dosen_tdk_tetap_data_list();
  		echo json_encode($data);
  	}

    function dosen_tdk_tetap_add(){
  		$data = $this->Model_master->dosen_tdk_tetap_add();
  		echo json_encode($data);
  	}

    function dosen_tdk_tetap_edit(){
  		$data = $this->Model_master->dosen_tdk_tetap_edit();
  		echo json_encode($data);
  	}

    function dosen_tdk_tetap_delete(){
  		$data = $this->Model_master->dosen_tdk_tetap_delete();
  		echo json_encode($data);
  	}

    public function dosen_praktisi()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Dosen Industri/Praktisi';
  		$isi['content']	= 'dosen/praktisi';
		$isi['template_link'] = base_url().'assets/upload/3.a.5.dosen_praktisi.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function dosen_praktisi_data_list(){
  		$data = $this->Model_master->dosen_praktisi_data_list();
  		echo json_encode($data);
  	}

    function dosen_praktisi_add(){
  		$data = $this->Model_master->dosen_praktisi_add();
  		echo json_encode($data);
  	}

    function dosen_praktisi_edit(){
  		$data = $this->Model_master->dosen_praktisi_edit();
  		echo json_encode($data);
  	}

    function dosen_praktisi_delete(){
  		$data = $this->Model_master->dosen_praktisi_delete();
  		echo json_encode($data);
  	}

    public function rekognisi()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Pengakuan/Rekognisi Dosen';
  		$isi['content']	= 'dosen/rekognisi';
		$isi['template_link'] = base_url().'assets/upload/3.b.1.pengakuan_dtps.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function rekognisi_data_list(){
  		$data = $this->Model_master->rekognisi_data_list();
  		echo json_encode($data);
  	}

    function rekognisi_add(){
  		$data = $this->Model_master->rekognisi_add();
  		echo json_encode($data);
  	}

    function rekognisi_edit(){
  		$data = $this->Model_master->rekognisi_edit();
  		echo json_encode($data);
  	}

    function rekognisi_delete(){
  		$data = $this->Model_master->rekognisi_delete();
  		echo json_encode($data);
  	}

    public function penelitian_dtps()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Penelitian DTPS';
  		$isi['content']	= 'dosen/penelitian_dtps';
		$isi['template_link'] = base_url().'assets/upload/3.b.2.penelitian_dtps.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function penelitian_dtps_data_list(){
  		$data = $this->Model_master->penelitian_dtps_data_list();
  		echo json_encode($data);
  	}

    public function pkm_dtps()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='PkM DTPS';
  		$isi['content']	= 'dosen/pkm_dtps';
		$isi['template_link'] = base_url().'assets/upload/3.b.3.pkm_dosen.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function pkm_dtps_data_list(){
  		$data = $this->Model_master->pkm_dtps_data_list();
  		echo json_encode($data);
  	}

    public function publikasi_ilmiah_dtps()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Publikasi Ilmiah DTPS';
  		$isi['content']	= 'dosen/publikasi_ilmiah_dtps';
		$isi['template_link'] = base_url().'assets/upload/3.b.4-1.publikasi_ilmiah.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function publikasi_ilmiah_dtps_data_list(){
  		$data = $this->Model_master->publikasi_ilmiah_dtps_data_list();
  		echo json_encode($data);
  	}

    public function pagelaran_ilmiah()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS';
  		$isi['content']	= 'dosen/pagelaran_ilmiah';
		$isi['template_link'] = base_url().'assets/upload/3.b.4-2.pagelaran_dtps.xlsx';
  		$this->load->view('default_page', $isi);
  	}

    function pagelaran_ilmiah_data_list(){
  		$data = $this->Model_master->pagelaran_ilmiah_data_list();
  		echo json_encode($data);
  	}

    public function hki_paten()
    {
      $this->Model_security->getsecurity();
      $isi['title'] 	='Bagian-1 HKI (Paten, Paten Sederhana)';
      $isi['content']	= 'dosen/hki_paten';
	  $isi['template_link'] = base_url().'assets/upload/3.b.7-1.hki_paten.xlsx';
      $this->load->view('default_page', $isi);
    }

    function hki_paten_data_list(){
      $data = $this->Model_master->hki_paten_data_list();
      echo json_encode($data);
    }

    function hki_paten_add(){
  		$data = $this->Model_master->hki_paten_add();
  		echo json_encode($data);
  	}

    function hki_paten_edit(){
  		$data = $this->Model_master->hki_paten_edit();
  		echo json_encode($data);
  	}

    function hki_paten_delete(){
  		$data = $this->Model_master->hki_paten_delete();
  		echo json_encode($data);
  	}

    public function hki_hak_cipta()
    {
      $this->Model_security->getsecurity();
      $isi['title'] 	='Bagian-2 HKI (Hak Cipta, Desain Produk Industri, dll.)';
      $isi['content']	= 'dosen/hki_hak_cipta';
	  $isi['template_link'] = base_url().'assets/upload/3.b.7-2.hki_hak_cipta.xlsx';
      $this->load->view('default_page', $isi);
    }

    function hki_hak_cipta_data_list(){
      $data = $this->Model_master->hki_hak_cipta_data_list();
      echo json_encode($data);
    }

    function hki_hak_cipta_add(){
  		$data = $this->Model_master->hki_hak_cipta_add();
  		echo json_encode($data);
  	}

    function hki_hak_cipta_edit(){
  		$data = $this->Model_master->hki_hak_cipta_edit();
  		echo json_encode($data);
  	}

    function hki_hak_cipta_delete(){
  		$data = $this->Model_master->hki_hak_cipta_delete();
  		echo json_encode($data);
  	}

    public function hki_teknologi_tepatguna()
    {
      $this->Model_security->getsecurity();
      $isi['title'] 	='Bagian-3 Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial';
      $isi['content']	= 'dosen/hki_teknologi_tepatguna';
	  $isi['template_link'] = base_url().'assets/upload/3.b.7-3.hki_teknologi_tepatguna.xlsx';
      $this->load->view('default_page', $isi);
    }

    function hki_teknologi_tepatguna_data_list(){
      $data = $this->Model_master->hki_teknologi_tepatguna_data_list();
      echo json_encode($data);
    }

    function hki_teknologi_tepatguna_add(){
  		$data = $this->Model_master->hki_teknologi_tepatguna_add();
  		echo json_encode($data);
  	}

    function hki_teknologi_tepatguna_edit(){
  		$data = $this->Model_master->hki_teknologi_tepatguna_edit();
  		echo json_encode($data);
  	}

    function hki_teknologi_tepatguna_delete(){
  		$data = $this->Model_master->hki_teknologi_tepatguna_delete();
  		echo json_encode($data);
  	}

    public function buku_isbn()
    {
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Bagian-4 Buku Ber-ISBN, Book Chapter';
  		$isi['content']	= 'dosen/buku_isbn';
		$isi['template_link'] = base_url().'assets/upload/3.b.7-4.buku_isbn.xlsx';
  		$this->load->view('default_page', $isi);
    }

    function buku_isbn_data_list(){
		$data = $this->Model_master->buku_isbn_data_list();
		echo json_encode($data);
    }

    function buku_isbn_add(){
  		$data = $this->Model_master->buku_isbn_add();
  		echo json_encode($data);
  	}

    function buku_isbn_edit(){
  		$data = $this->Model_master->buku_isbn_edit();
  		echo json_encode($data);
  	}

    function buku_isbn_delete(){
  		$data = $this->Model_master->buku_isbn_delete();
  		echo json_encode($data);
	}

	public function karya_ilmiah_disitasi()
    {
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Karya Ilmiah DTPS yang Disitasi';
  		$isi['content']	= 'dosen/karya_ilmiah_disitasi';
		$isi['template_link'] = base_url().'assets/upload/3.b.5.karya_ilmiah_disitasi.xlsx';
  		$this->load->view('default_page', $isi);
    }

    function karya_ilmiah_disitasi_data_list(){
		$data = $this->Model_master->karya_ilmiah_disitasi_data_list();
		echo json_encode($data);
    }

    function karya_ilmiah_disitasi_add(){
  		$data = $this->Model_master->karya_ilmiah_disitasi_add();
  		echo json_encode($data);
  	}

    function karya_ilmiah_disitasi_edit(){
  		$data = $this->Model_master->karya_ilmiah_disitasi_edit();
  		echo json_encode($data);
  	}

    function karya_ilmiah_disitasi_delete(){
  		$data = $this->Model_master->karya_ilmiah_disitasi_delete();
  		echo json_encode($data);
  	}

    public function produk_dtps()
      {
    		$this->Model_security->getsecurity();
    		$isi['title'] 	='Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat';
			$isi['template_link'] = base_url().'assets/upload/3.b.6.produk_dtps.xlsx';
    		$isi['content']	= 'dosen/produk_dtps';
    		$this->load->view('default_page', $isi);
      }

      function produk_dtps_data_list(){
  		$data = $this->Model_master->produk_dtps_data_list();
  		echo json_encode($data);
      }

      function produk_dtps_add(){
    		$data = $this->Model_master->produk_dtps_add();
    		echo json_encode($data);
    	}

      function produk_dtps_edit(){
    		$data = $this->Model_master->produk_dtps_edit();
    		echo json_encode($data);
    	}

      function produk_dtps_delete(){
    		$data = $this->Model_master->produk_dtps_delete();
    		echo json_encode($data);
    	}

}
