<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tridharma extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
	}

    public function pendidikan()
	{
		$this->Model_security->getsecurity();
		$isi['title'] 	='Home';
		$isi['content']	= 'tridharma/pendidikan';
		$this->load->view('default_page', $isi);
	}

}