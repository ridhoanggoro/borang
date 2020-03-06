<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
    	$this->load->model('Model_master');
	}

	function penggunaan_dana(){
	    $this->Model_security->getsecurity();
	    $isi['title'] 	='Penggunaan Dana';
	    $isi['content']	= 'dana/penggunaan_dana';
	    $this->load->view('default_page', $isi);
	 }

	function penggunaan_dana_data_list(){
		$data = $this->Model_master->penggunaan_dana_data_list();
		echo json_encode($data);
	}

	function add_dana(){
	    $this->Model_security->getsecurity();
	    $isi['title'] 	='Tambah/Rubah Penggunaan Dana';
	    $isi['content']	= 'dana/add_penggunaan_dana';
	    $this->load->view('default_page', $isi);
	 }

	 function save_dana(){

	 }
}
