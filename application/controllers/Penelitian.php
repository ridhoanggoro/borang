<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
    $this->load->model('Model_master');
	}

  function penelitian_dosen_dan_mhs(){
    $this->Model_security->getsecurity();
    $isi['title'] 	='Penelitian DTPS yang Melibatkan Mahasiswa';
    $isi['content']	= 'penelitian/penelitian_dosen_dan_mhs';
    $isi['template_link'] = base_url().'assets/upload/6.a.penelitian_dosen_mhs.xlsx';
    $this->load->view('default_page', $isi);
  }

  function penelitian_dosen_dan_mhs_list(){
    $data = $this->Model_master->penelitian_dosen_dan_mhs_list();
		echo json_encode($data);
  }

	function penelitian_dosen_dan_mhs_add(){
    $data = $this->Model_master->penelitian_dosen_dan_mhs_add();
		echo json_encode($data);
  }

	function penelitian_dosen_dan_mhs_edit(){
    $data = $this->Model_master->penelitian_dosen_dan_mhs_edit();
		echo json_encode($data);
  }

	function penelitian_dosen_dan_mhs_delete(){
    $data = $this->Model_master->penelitian_dosen_dan_mhs_delete();
		echo json_encode($data);
  }

	function penelitian_mhs_tesis(){
    $this->Model_security->getsecurity();
    $isi['title'] 	='Penelitian DTPS yang Menjadi Rujukan Tema Tesis/Disertasi';
    $isi['content']	= 'penelitian/penelitian_mhs_tesis';
    $this->load->view('default_page', $isi);
  }

  function penelitian_mhs_tesis_list(){
    $data = $this->Model_master->penelitian_mhs_tesis_list();
		echo json_encode($data);
  }

	function penelitian_mhs_tesis_add(){
    $data = $this->Model_master->penelitian_mhs_tesis_add();
		echo json_encode($data);
  }

	function penelitian_mhs_tesis_edit(){
    $data = $this->Model_master->penelitian_mhs_tesis_edit();
		echo json_encode($data);
  }

	function penelitian_mhs_tesis_delete(){
    $data = $this->Model_master->penelitian_mhs_tesis_delete();
		echo json_encode($data);
  }
}
