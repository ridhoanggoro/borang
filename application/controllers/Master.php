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

	function hapus_data()
	{
		$tabel = decode_url($this->uri->segment(3));
		$id = $this->uri->segment(4);
		$retUrl = decode_url($this->uri->segment(5));

		$this->Model_master->deleteData($tabel, array('seq_id' => $id));
		$result['status'] 	= "ok";
		$result['caption']	= "hapus sukses";
		$result['url'] = $retUrl;
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

	public function master_opsi()
	{
		$this->Model_security->getsecurity();
        $role = $this->session->userdata('nama');
		$isi['title'] 	='Home';
		$isi['content']	= '_master/opsi';
        $isi['data'] = $this->Model_master->getAllData("jenis_publikasi")->result();
		$this->load->view('default_page', $isi);
	}

	public function tbl_ts_save()
	{
  		$seq_id = $this->input->post('seq_id');
		$data = array(
			'prodi ' => $this->input->post('prodi'),
			'nama_ts'  => $this->input->post('nama_ts'),
			'tahun' => $this->input->post('tahun')
		);
		if ($seq_id != 0) {
			$result = $this->Model_master->updateData("ts", $data, array('seq_id' => $seq_id));
		} else {
			$result = $this->Model_master->insertData("ts", $data);
		}
		
      	echo json_encode($result);
	}
	
}
