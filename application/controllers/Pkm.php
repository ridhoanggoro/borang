<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pkm extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
    $this->load->model('Model_master');
	}

  function dosen_dan_mhs(){
    $this->Model_security->getsecurity();
    $isi['title'] 	='PkM DTPS yang Melibatkan Mahasiswa';
    $isi['content']	= 'penelitian/pkm_dosen_dan_mhs';
    $this->load->view('default_page', $isi);
  }

  function pkm_dosen_dan_mhs_list(){
    $data = $this->Model_master->pkm_dosen_dan_mhs_list();
		echo json_encode($data);
  }

	function pkm_dosen_dan_mhs_add(){
    $data = $this->Model_master->pkm_dosen_dan_mhs_add();
		echo json_encode($data);
  }

	function pkm_dosen_dan_mhs_edit(){
    $data = $this->Model_master->pkm_dosen_dan_mhs_edit();
		echo json_encode($data);
  }

	function pkm_dosen_dan_mhs_delete(){
    $data = $this->Model_master->pkm_dosen_dan_mhs_delete();
		echo json_encode($data);
  }
}
