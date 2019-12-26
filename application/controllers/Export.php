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
			case '2b':
	      $fileName = './assets/template/2b.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->mahasiswa_asing_list();
	      $col = 7;
	      foreach ($data as $val) {
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->prodi);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->ts_2);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ts_1);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ts);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->asing_fulltime_ts2);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->asing_fulltime_ts1);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->asing_fulltime_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->asing_partime_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('J'.$col, $val->asing_partime_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('K'.$col, $val->asing_partime_ts);
	        $col++;
	      }
	      break;
			case '3a1':
	      $fileName = './assets/template/3a1.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->dosen_tetap_data_list();
				$no = 1;
	      $col = 14;
				$tot = 0;
	      foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, strtoupper($val->nama));
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->nidn);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->pendidikan_magister);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->pendidikan_doktor);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->bidang_keahlian);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->chk_kesesuaian_kompetensi);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->jabatan_akademik);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->sertifikasi_profesional);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('J'.$col, $val->sertifikasi_kompetensi);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('K'.$col, $val->matakuliah_diampu);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('L'.$col, $val->chk_kesesuaian_keahlian);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('M'.$col, $val->matakuliah_diampu_ps_lain);
	        $col++;
	      }
				//Cell Style
				$styleArray = array(
						 'borders' => array(
								 'allborders' => array(
										 'style' => PHPExcel_Style_Border::BORDER_THIN
								 )
						 )
				 );
				$tot = 14 + ($no-2);
				$objPHPExcel->getActiveSheet()->getStyle('A14:M'.$tot)->applyFromArray($styleArray);
	      break;
			case '3a2':
	      $fileName = './assets/template/3a2.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->dosen_pa_data_list();
				$no = 1;
	      $col = 7;
				$tot = 0;
	      foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, strtoupper($val->nama));
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->ps_sendiri_ts2);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ps_sendiri_ts1);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ps_sendiri_ts);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->ps_lain_ts2);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->ps_lain_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->ps_lain_ts);
	        $col++;
	      }
	      break;
			case '3a3':
	      $fileName = './assets/template/3a3.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->ewmp_data_list();
				$no = 1;
	      $col = 11;
				$tot = 0;
	      foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, strtoupper($val->nama));
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->dtps);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ps_yang_diakreditasi);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ps_lain_di_dalam_pt);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->ps_lain_di_luar_pt);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->penelitian);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->pkm);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->tugas_tambahan);
	        $col++;
	      }
	      break;
			case '3a5':
	      $fileName = './assets/template/3a5.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->dosen_praktisi_data_list();
				$no = 1;
	      $col = 6;
				$tot = 0;
	      foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, strtoupper($val->nama_dosen));
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->nik_nidn);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->perusahaan);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->pendidikan_tertinggi);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->bidang_keahlian);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->sertifikat_profesi);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->matakuliah_diampu);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->sks);
	        $col++;
	      }
	      break;
			case '3b1':
	      $fileName = './assets/template/3b1.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->rekognisi_data_list();
				$no = 1;
	      $col = 10;
	      foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, strtoupper($val->nama));
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->bidang_keahlian);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->bukti_pendukung);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->Wilayah);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->Nasional);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->Internasional);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->tahun);
	        $col++;
	      }
	      break;
			case '3b2':
	      $fileName = './assets/template/3b2.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->penelitian_dtps_data_list();
				$no = 1;
	      $col = 6;
	      foreach ($data as $val) {
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->ts2);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ts1);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ts);
	        $col++;
	      }
	      break;
			case '3b3':
	      $fileName = './assets/template/3b3.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->publikasi_ilmiah_data_list();
				$no = 1;
	      $col = 6;
	      foreach ($data as $val) {
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->ts2);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ts1);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ts);
	        $col++;
	      }
	      break;
			case '3b4-1':
	      $fileName = './assets/template/3b4-1.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->publikasi_ilmiah_dtps_data_list();
				$no = 1;
	      $col = 7;
	      foreach ($data as $val) {
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->ts2);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ts1);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ts);
	        $col++;
	      }
	      break;
			case '3b4-2':
	      $fileName = './assets/template/3b4-2.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->pagelaran_ilmiah_data_list();
				$no = 1;
	      $col = 7;
	      foreach ($data as $val) {
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->ts2);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ts1);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ts);
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
