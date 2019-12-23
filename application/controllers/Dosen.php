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
  		$this->load->view('default_page', $isi);
  	}

    function dosen_pa_data_list(){
  		$data = $this->Model_master->dosen_pa_data_list();
  		echo json_encode($data);
  	}

    public function ewmp()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi';
  		$isi['content']	= 'dosen/ewmp';
      $isi['dosen'] = $this->Model_master->dosen_list();
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
  		$this->load->view('default_page', $isi);
  	}

    function rekognisi_data_list(){
  		$data = $this->Model_master->rekognisi_data_list();
  		echo json_encode($data);
  	}

    function rekognisi_add(){
  		$data = $this->Model_master->dosen_praktisi_add();
  		echo json_encode($data);
  	}

}
