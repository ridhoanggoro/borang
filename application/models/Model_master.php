<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_master extends CI_model {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
	}

	function tridharma_pendidikan_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'v' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'v' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'v' ELSE '' END AS lokal FROM `tridarma_pendidikan` WHERE prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function tridharma_pendidikan_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'prodi' => $prodi,
			'lembaga_mitra'  => $this->input->post('lembaga_mitra'),
      'tingkat'  => $this->input->post('tingkat'),
      'judul_kegiatan' => $this->input->post('judul_kegiatan'),
      'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
			'durasi' => $this->input->post('durasi'),
			'bukti_kerjasama' => $this->input->post('bukti'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir')
		);
		$result = $this->db->insert('tridarma_pendidikan', $data);
		return $result;
	}

	function tridharma_pendidikan_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'prodi' => $prodi,
			'lembaga_mitra'  => $this->input->post('lembaga_mitra'),
      'tingkat'  => $this->input->post('tingkat'),
      'judul_kegiatan' => $this->input->post('judul_kegiatan'),
      'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
			'durasi' => $this->input->post('durasi'),
			'bukti_kerjasama' => $this->input->post('bukti'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir')
    );
    $this->db->where('seq_id', $seq_id);
    $result = $this->db->update('tridarma_pendidikan', $data);
    return $result;
	}

	function tridharma_pendidikan_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    $result = $this->db->delete('tridarma_pendidikan');
    return $result;
	}

}
