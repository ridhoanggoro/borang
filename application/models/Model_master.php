<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_master extends CI_model {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
	}

	function tridharma_pendidikan_list()
	{
		$role = $this->session->userdata('nama');
		$sql = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'v' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'v' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'v' ELSE '' END AS lokal FROM `tridarma_pendidikan` WHERE prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

}