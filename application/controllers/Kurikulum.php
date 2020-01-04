<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
    $this->load->model('Model_master');
	}

  function cp_rencana_pembelajaran(){
    $this->Model_security->getsecurity();
    $isi['title'] 	='Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran';
    $isi['content']	= 'kurikulum/cp_rencana_pembelajaran';
    $this->load->view('default_page', $isi);
  }

  function cp_rencana_pembelajaran_list(){
    $data = $this->Model_master->cp_rencana_pembelajaran_list();
		echo json_encode($data);
  }

	function cp_rencana_pembelajaran_add(){
    $data = $this->Model_master->cp_rencana_pembelajaran_add();
		echo json_encode($data);
  }

	function cp_rencana_pembelajaran_edit(){
    $data = $this->Model_master->cp_rencana_pembelajaran_edit();
		echo json_encode($data);
  }

	function cp_rencana_pembelajaran_delete(){
    $data = $this->Model_master->cp_rencana_pembelajaran_delete();
		echo json_encode($data);
  }

	function integrasi_pkm(){
		$this->Model_security->getsecurity();
		$isi['title'] 	='Integrasi Kegiatan Penelitan/PkM dalam Pembelajaran';
		$isi['content']	= 'kurikulum/integrasi_pkm';
		$this->load->view('default_page', $isi);
	}

	function integrasi_pkm_list(){
    $data = $this->Model_master->integrasi_pkm_list();
		echo json_encode($data);
  }

	function integrasi_pkm_add(){
    $data = $this->Model_master->integrasi_pkm_add();
		echo json_encode($data);
  }

	function integrasi_pkm_edit(){
    $data = $this->Model_master->integrasi_pkm_edit();
		echo json_encode($data);
  }

	function integrasi_pkm_delete(){
    $data = $this->Model_master->integrasi_pkm_delete();
		echo json_encode($data);
  }

	function kepuasan_mahasiswa(){
		$this->Model_security->getsecurity();
		$isi['title'] 	='Kepuasan Mahasiswa';
		$isi['content']	= 'kurikulum/kepuasan_mahasiswa';
		$isi['aspek_list'] = $this->Model_master->aspek_list();
		$this->load->view('default_page', $isi);
	}

	function kepuasan_mahasiswa_list(){
    $data = $this->Model_master->kepuasan_mahasiswa_list();
		echo json_encode($data);
  }

	function kepuasan_mahasiswa_add(){
    $data = $this->Model_master->kepuasan_mahasiswa_add();
		echo json_encode($data);
  }

	function kepuasan_mahasiswa_edit(){
    $data = $this->Model_master->kepuasan_mahasiswa_edit();
		echo json_encode($data);
  }

	function kepuasan_mahasiswa_delete(){
    $data = $this->Model_master->kepuasan_mahasiswa_delete();
		echo json_encode($data);
  }
}
