<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tridharma extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
		$this->load->model('Model_master');
		$this->load->model('Model_upload');
	}

	public function pendidikan()
	{
		$this->Model_security->getsecurity();
		$isi['title'] = 'Tridharma Pendidikan';
		$isi['content'] = 'tridharma/pendidikan';
		$isi['template_link'] = base_url().'assets/upload/1.1.tridarma_pendidikan.xlsx';
		$this->load->view('default_page', $isi);
	}

	function pendidikan_data_list()
	{
		$data = $this->Model_master->tridharma_pendidikan_list();
		echo json_encode($data);
	}

	function pendidikan_add()
	{
		$data = $this->Model_master->tridharma_pendidikan_add();
		echo json_encode($data);
	}

	function pendidikan_edit()
	{
		$config['upload_path'] = "./assets/document";
		$config['allowed_types'] = 'xls|xlsx|jpg|png|pdf|docx|doc';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
		if ($this->upload->do_upload("file_edit")) {
			$docs = array('upload_data' => $this->upload->data());
			$file = $docs['upload_data']['file_name'];
			$data = array(
				'prodi' => $prodi,
				'lembaga_mitra' => $this->input->post('mitra_edit'),
				'tingkat' => $this->input->post('tingkat_edit'),
				'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
				'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps_edit'),
				'durasi' => $this->input->post('waktu_edit'),
				'bukti_kerjasama' => $this->input->post('bukti_edit'),
				'tahun_berakhir' => $this->input->post('tahun_berakhir_edit'),
				'doc' => $file
			);
		} else {
			$data = array(
				'prodi' => $prodi,
				'lembaga_mitra' => $this->input->post('mitra_edit'),
				'tingkat' => $this->input->post('tingkat_edit'),
				'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
				'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps_edit'),
				'durasi' => $this->input->post('waktu_edit'),
				'bukti_kerjasama' => $this->input->post('bukti_edit'),
				'tahun_berakhir' => $this->input->post('tahun_berakhir_edit'),
			);
		}
		$data = $this->Model_master->tridharma_pendidikan_edit($seq_id, $data);
		echo json_encode($data);
	}

	function pendidikan_delete()
	{
		$data = $this->Model_master->tridharma_pendidikan_delete();
		echo json_encode($data);
	}

	public function penelitian()
	{
		$this->Model_security->getsecurity();
		$isi['title'] = 'Tridharma Penelitian';
		$isi['content'] = 'tridharma/penelitian';
		$isi['template_link'] = base_url().'assets/upload/1.2.tridarma_penelitian.xlsx';
		$this->load->view('default_page', $isi);
	}

	function penelitian_data_list()
	{
		$data = $this->Model_master->tridharma_penelitian_list();
		echo json_encode($data);
	}

	function penelitian_add()
	{
		$data = $this->Model_master->tridharma_penelitian_add();
		echo json_encode($data);
	}

	function penelitian_edit()
	{
		$data = $this->Model_master->tridharma_penelitian_edit();
		echo json_encode($data);
	}

	function penelitian_delete()
	{
		$data = $this->Model_master->tridharma_penelitian_delete();
		echo json_encode($data);
	}

	public function pkm()
	{
		$this->Model_security->getsecurity();
		$isi['title'] = 'Kerjasama Pengabdian Kepada Masyarakat';
		$isi['content'] = 'tridharma/pkm';
		$isi['template_link'] = base_url().'assets/upload/1.1.tridarma_pendidikan.xlsx';
		$this->load->view('default_page', $isi);
	}

	function pkm_data_list()
	{
		$data = $this->Model_master->tridharma_pkm_list();
		echo json_encode($data);
	}

	function pkm_add()
	{
		$data = $this->Model_master->tridharma_pkm_add();
		echo json_encode($data);
	}

	function pkm_edit()
	{
		$data = $this->Model_master->tridharma_pkm_edit();
		echo json_encode($data);
	}

	function pkm_delete()
	{
		$data = $this->Model_master->tridharma_pkm_delete();
		echo json_encode($data);
	}
}
