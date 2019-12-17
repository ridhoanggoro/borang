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

}
