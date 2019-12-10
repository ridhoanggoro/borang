<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
	}

	public function index()
	{
		$this->Model_security->getsecurity();
		$isi['title'] 	='Home';
		$isi['content']	= 'welcome';
		$this->load->view('default_page', $isi);
	}
}
