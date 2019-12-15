<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct()
  	{
  		parent::__construct();
  		$this->load->model('Model_security');
  		$this->load->model('Model_master');
  	}

    public function seleksi_mahasiswa()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Seleksi Mahasiswa Baru';
  		$isi['content']	= 'mahasiswa/baru';
  		$this->load->view('default_page', $isi);
  	}

  	function seleksi_mahasiswa_data_list(){
  		$data = $this->Model_master->seleksi_mahasiswa_list();
  		echo json_encode($data);
  	}

    function seleksi_mahasiswa_add(){
      $data = $this->Model_master->tridharma_pendidikan_add();
      echo json_encode($data);
    }

    function seleksi_mahasiswa_edit(){
      $data = $this->Model_master->tridharma_pendidikan_edit();
      echo json_encode($data);
    }

    function seleksi_mahasiswa_delete(){
      $data = $this->Model_master->tridharma_pendidikan_delete();
      echo json_encode($data);
    }

}
