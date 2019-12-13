<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tridharma extends CI_Controller {

    function __construct()
  	{
  		parent::__construct();
  		$this->load->model('Model_security');
  		$this->load->model('Model_master');
  	}

    public function pendidikan()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Tridharma Pendidikan';
  		$isi['content']	= 'tridharma/pendidikan';
  		$this->load->view('default_page', $isi);
  	}

  	function pendidikan_data_list(){
  		$data = $this->Model_master->tridharma_pendidikan_list();
  		echo json_encode($data);
  	}

    function pendidikan_add(){
      $data = $this->Model_master->tridharma_pendidikan_add();
      echo json_encode($data);
    }

    function pendidikan_edit(){
      $data = $this->Model_master->tridharma_pendidikan_edit();
      echo json_encode($data);
    }

    function pendidikan_delete(){
      $data = $this->Model_master->tridharma_pendidikan_delete();
      echo json_encode($data);
    }

    public function penelitian()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Tridharma Penelitian';
  		$isi['content']	= 'tridharma/penelitian';
  		$this->load->view('default_page', $isi);
  	}

    function penelitian_data_list(){
  		$data = $this->Model_master->tridharma_penelitian_list();
  		echo json_encode($data);
  	}

    function penelitian_add(){
      $data = $this->Model_master->tridharma_penelitian_add();
      echo json_encode($data);
    }

    function penelitian_edit(){
      $data = $this->Model_master->tridharma_penelitian_edit();
      echo json_encode($data);
    }

    function penelitian_delete(){
      $data = $this->Model_master->tridharma_penelitian_delete();
      echo json_encode($data);
    }

    public function pkm()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Kerjasama Pengabdian Kepada Masyarakat';
  		$isi['content']	= 'tridharma/pkm';
  		$this->load->view('default_page', $isi);
  	}

    function pkm_data_list(){
  		$data = $this->Model_master->tridharma_pkm_list();
  		echo json_encode($data);
  	}

    function pkm_add(){
      $data = $this->Model_master->tridharma_pkm_add();
      echo json_encode($data);
    }

    function pkm_edit(){
      $data = $this->Model_master->tridharma_pkm_edit();
      echo json_encode($data);
    }

    function pkm_delete(){
      $data = $this->Model_master->tridharma_pkm_delete();
      echo json_encode($data);
    }

}
