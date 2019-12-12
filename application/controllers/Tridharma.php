<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tridharma extends CI_Controller {

    function __construct()
  	{
  		parent::__construct();
  		$this->load->model('Model_security');
  		$this->load->model('Model_master');
  	}

    public function pendidikan()
  	{
  		$this->Model_security->getsecurity();
  		$isi['title'] 	='Tridharma Pendidikan';
  		$isi['content']	= 'tridharma/pendidikan';
  		$this->load->view('default_page', $isi);
  	}

  	function pendidikan_data_list(){
  		$data = $this->Model_master->tridharma_pendidikan_list();
  		echo json_encode($data);
  	}

    function pendidikan_add(){
      $data = $this->Model_master->tridharma_pendidikan_add();
      echo json_encode($data);
    }

    function pendidikan_edit(){
      $data = $this->Model_master->tridharma_pendidikan_edit();
      echo json_encode($data);
    }

    function pendidikan_delete(){
      $data = $this->Model_master->tridharma_pendidikan_delete();
      echo json_encode($data);
    }

    public function export_excel(){
      $key = decode_url($this->uri->segment(3));
      $this->load->library('PHPExcel');
      // Template loading
      $fileType = 'Excel2007';
      switch ($key) {
        case '1-1':
          $fileName = './assets/template/1-1.xlsx';
          break;

        default:
          // code...
          break;
      }

      $objReader = PHPExcel_IOFactory::createReader($fileType);
      $objPHPExcel = $objReader->load($fileName);

      $objPHPExcel->setActiveSheetIndex(0)
      ->setCellValue('B12', 'ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ');

      // Redirect output to a client’s web browser (Excel2007)
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename="'.$key.'.xlsx"');
      header('Cache-Control: max-age=0');

      // If you're serving to IE over SSL, then the following may be needed
      header ('Expires: Mon, 26 Jul 2020 05:00:00 GMT'); // Date in the past
      header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
      header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
      header ('Pragma: public'); // HTTP/1.0

      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->save('php://output');
  }

}
