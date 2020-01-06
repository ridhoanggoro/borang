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

  }
