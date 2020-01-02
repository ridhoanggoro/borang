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
}
