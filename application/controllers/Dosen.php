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

    function dosen_tetap_add(){
  		$data = $this->Model_master->dosen_tetap_add();
  		echo json_encode($data);
  	}

    function dosen_tetap_edit(){
  		$data = $this->Model_master->dosen_tetap_edit();
  		echo json_encode($data);
  	}

    function dosen_tetap_delete(){
  		$data = $this->Model_master->dosen_tetap_delete();
  		echo json_encode($data);
  	}

    public function dosen_pa()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Dosen Pembimbing Utama Tugas Akhir';
  		$isi['content']	= 'dosen/pa';
  		$this->load->view('default_page', $isi);
  	}

    function dosen_pa_data_list(){
  		$data = $this->Model_master->dosen_pa_data_list();
  		echo json_encode($data);
  	}

    public function ewmp()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi';
  		$isi['content']	= 'dosen/ewmp';
      $isi['dosen'] = $this->Model_master->dosen_list();
  		$this->load->view('default_page', $isi);
  	}

    function ewmp_data_list(){
  		$data = $this->Model_master->ewmp_data_list();
  		echo json_encode($data);
  	}

}
