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

  }
