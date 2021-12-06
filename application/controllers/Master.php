<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
        $this->load->model('Model_master');
	}

    function details_by_id()
	{
		$id = $this->uri->segment(3);
		$tbl = decode_url($this->uri->segment(4));
		$result = $this->Model_master->getSelectedData($tbl, array('seq_id' => $id))->row();
		echo json_encode($result);
	}

	public function master_ts()
	{
		$this->Model_security->getsecurity();
        $role = $this->session->userdata('nama');
		$isi['title'] 	='Home';
		$isi['content']	= '_master/ts';
        $isi['data'] = $this->Model_master->getSelectedData("ts", array('prodi' => $role))->result();
		$this->load->view('default_page', $isi);
	}
	
}
