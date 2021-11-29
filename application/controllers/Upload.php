<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller
{
		function __construct()
		{
				parent::__construct();
				$this->load->model('Model_security');
				$this->load->model('Model_upload');
		}

		function excel_upload()
		{
				$config['upload_path'] = './assets/temp/';
				$config['allowed_types'] = 'xlsx|xls';
				$this->load->library('PHPExcel');
				$this->load->library('upload', $config);
				$category = decode_url($this->uri->segment(3));

				if ($this->upload->do_upload('file_upload')) {
						$data = array('upload_data' => $this->upload->data());
						$upload_data = $this->upload->data();
						$filename = $upload_data['file_name'];
						$filesize = $upload_data['file_size'];
						$jum = $this->Model_upload->upload_excel($filename, $category, $mode);
						unlink('./assets/temp/' . $filename);
						if ($jum['stat'] == -1) {
								$retval['jum'] = $jum['col'];
								$retval['msg'] = 'Terdapat error pada baris ke-' . $jum['col'] . ' <p>' . $jum['isi'] . '</p><br>Data berhasil disimpan : ' . $jum['data_ok'];
								echo json_encode($retval);
						} else {
								$retval['jum'] = $jum['stat'];
								$retval['msg'] = 'ok';
								echo json_encode($retval);
						}
				} else {
						$retval['jum'] = -1;
						$retval['msg'] = $this->upload->display_errors();
						echo json_encode($retval);
				}
		}
}
