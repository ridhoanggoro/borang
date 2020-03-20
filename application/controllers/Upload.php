<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_security');
		$this->load->model('Model_upload');
	}

  function excel_upload(){
    $config['upload_path'] = './assets/temp/';
    $config['allowed_types'] = 'xlsx|xls';
    $this->load->library('PHPExcel');
    $this->load->library('upload', $config);
    $category = decode_url($this->uri->segment(3));


        if ($this->upload->do_upload('file_upload')){
          $data = array('upload_data' => $this->upload->data());
          $upload_data = $this->upload->data();
          $filename = $upload_data['orig_name'];
          $filesize = $upload_data['file_size'];
          $jum = $this->Model_upload->upload_excel($filename, $category);
          unlink('./assets/temp/'.$filename);
          echo json_encode($jum);
        }
      }

  }
