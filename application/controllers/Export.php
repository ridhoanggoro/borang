<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
    $this->load->model('Model_master');
	}

  public function export_excel(){
    $this->Model_security->getsecurity();
    $key = decode_url($this->uri->segment(3));
    $this->load->library('PHPExcel');
    $fileType = 'Excel2007';
    $objReader = PHPExcel_IOFactory::createReader($fileType);

    switch ($key) {
      case '1-1':
        $fileName = './assets/template/1-1.xlsx';
        $objPHPExcel = $objReader->load($fileName);
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet();
        $data = $this->Model_master->tridharma_pendidikan_list();
        $col = 12;
        foreach ($data as $val) {
          $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->lembaga_mitra);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->internasional);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->nasional);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->lokal);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->judul_kegiatan);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->manfaat_bagi_ps);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->durasi);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->bukti_kerjasama);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('J'.$col, $val->tahun_berakhir);
          $col++;
        }
        break;
      case '1-2':
        $fileName = './assets/template/1-2.xlsx';
        $objPHPExcel = $objReader->load($fileName);
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet();
        $data = $this->Model_master->tridharma_penelitian_list();
        $col = 12;
        foreach ($data as $val) {
          $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->lembaga_mitra);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->internasional);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->nasional);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->lokal);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->judul_kegiatan);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->manfaat_bagi_ps);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->durasi);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->bukti_kerjasama);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('J'.$col, $val->tahun_berakhir);
          $col++;
        }
        break;
      case '1-3':
        $fileName = './assets/template/1-3.xlsx';
        $objPHPExcel = $objReader->load($fileName);
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet();
        $data = $this->Model_master->tridharma_pkm_list();
        $col = 12;
        foreach ($data as $val) {
          $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->lembaga_mitra);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->internasional);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->nasional);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->lokal);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->judul_kegiatan);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->manfaat_bagi_ps);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->durasi);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->bukti_kerjasama);
          $objPHPExcel->setActiveSheetIndex()->setCellValue('J'.$col, $val->tahun_berakhir);
          $col++;
        }
        break;
			case '2a':
	      $fileName = './assets/template/2a.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->seleksi_mahasiswa_list();
	      $col = 6;
	      foreach ($data as $val) {
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $val->nama_ts);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->daya_tampung);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->pendaftar);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->lulus);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->reguler);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->pindahan);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->aktif_reguler);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->aktif_pindahan);
	        $col++;
	      }
	      break;
      default:
        // code...
        break;
    }

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
