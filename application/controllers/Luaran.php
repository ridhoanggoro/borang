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

    public function prestasi_akademik()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Prestasi Akademik Mahasiswa';
  		$isi['content']	= 'luaran/prestasi_akad_mhs';
  		$this->load->view('default_page', $isi);
  	}

  	function prestasi_akademik_data_list(){
  		$data = $this->Model_master->prestasi_akademik_data_list();
  		echo json_encode($data);
  	}

    function prestasi_akademik_add(){
      $data = $this->Model_master->prestasi_akademik_add();
  		echo json_encode($data);
    }

  	function prestasi_akademik_edit(){
      $data = $this->Model_master->prestasi_akademik_edit();
  		echo json_encode($data);
    }

  	function prestasi_akademik_delete(){
      $data = $this->Model_master->prestasi_akademik_delete();
  		echo json_encode($data);
    }

    public function prestasi_non_akademik()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Prestasi Non-akademik Mahasiswa';
  		$isi['content']	= 'luaran/prestasi_non_akad_mhs';
  		$this->load->view('default_page', $isi);
  	}

    function prestasi_non_akademik_data_list(){
  		$data = $this->Model_master->prestasi_non_akademik_data_list();
  		echo json_encode($data);
  	}

    function prestasi_non_akademik_add(){
      $data = $this->Model_master->prestasi_non_akademik_add();
  		echo json_encode($data);
    }

  	function prestasi_non_akademik_edit(){
      $data = $this->Model_master->prestasi_non_akademik_edit();
  		echo json_encode($data);
    }

  	function prestasi_non_akademik_delete(){
      $data = $this->Model_master->prestasi_non_akademik_delete();
  		echo json_encode($data);
    }

    public function masa_studi_lulusan()
  	{
  		$this->Model_security->getsecurity();
      $prodi = $this->session->userdata('nama');
  		$role = substr($prodi, strlen($prodi)-2);
      if (strtoupper($role) == 'S1') { $view = 'luaran/masa_studi_lulusan_s1'; }
      else { $view = 'luaran/masa_studi_lulusan_d3'; }
  		$isi['title'] 	='Masa Studi Lulusan ';
  		$isi['content']	= $view;
  		$this->load->view('default_page', $isi);
  	}

    function masa_studi_lulusan_list(){
  		$data = $this->Model_master->masa_studi_lulusan_list();
  		echo json_encode($data);
  	}

    public function waktu_tunggu_lulusan()
  	{
  		$this->Model_security->getsecurity();
      $prodi = $this->session->userdata('nama');
  		$role = substr($prodi, strlen($prodi)-2);
      if (strtoupper($role) == 'S1') { $view = 'luaran/waktu_tunggu_lulusan_s1'; }
      else { $view = 'luaran/waktu_tunggu_lulusan_d3'; }
  		$isi['title'] 	='Waktu Tunggu Lulusan';
  		$isi['content']	= $view;
      $isi['ts_list'] = $this->Model_master->ts_list();
  		$this->load->view('default_page', $isi);
  	}

    function waktu_tunggu_lulusan_list(){
  		$data = $this->Model_master->waktu_tunggu_lulusan_list();
  		echo json_encode($data);
  	}

    function waktu_tunggu_lulusan_add(){
      $data = $this->Model_master->waktu_tunggu_lulusan_add();
  		echo json_encode($data);
    }

  	function waktu_tunggu_lulusan_edit(){
      $data = $this->Model_master->waktu_tunggu_lulusan_edit();
  		echo json_encode($data);
    }

  	function waktu_tunggu_lulusan_delete(){
      $data = $this->Model_master->waktu_tunggu_lulusan_delete();
  		echo json_encode($data);
    }

    public function kesesuaian_bidang_kerja_lulusan()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Tabel 8.d.2) Kesesuaian Bidang Kerja Lulusan';
  		$isi['content']	= 'luaran/kesesuaian_bidang_kerja_lulusan';
  		$this->load->view('default_page', $isi);
  	}
  }
