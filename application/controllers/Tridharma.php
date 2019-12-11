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

}