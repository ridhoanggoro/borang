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
			case '3b5-1':
	      $fileName = './assets/template/3b5-1.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->hki_paten_data_list();
				$no = 1;
	      $col = 7;
	      foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->luaran_penelitian);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->th_perolehan);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->keterangan);
	        $col++;
	      }
	      break;
			case '3b5-2':
	      $fileName = './assets/template/3b5-2.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->hki_hak_cipta_data_list();
				$no = 1;
	      $col = 7;
	      foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->luaran_penelitian);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->th_perolehan);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->keterangan);
	        $col++;
	      }
	      break;
			case '3b5-3':
	      $fileName = './assets/template/3b5-3.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->hki_teknologi_tepatguna_data_list();
				$no = 1;
	      $col = 7;
	      foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->luaran_penelitian);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->th_perolehan);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->keterangan);
					$col++;
				}
	      break;
		case '3b5-4':
		$fileName = './assets/template/3b5-4.xlsx';
		$objPHPExcel = $objReader->load($fileName);
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet();
		$data = $this->Model_master->buku_isbn_data_list();
			$no = 1;
		$col = 7;
		foreach ($data as $val) {
				$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->luaran_penelitian);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->th_perolehan);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->keterangan);
				$col++;
		}
		break;
		case '3b6':
			$fileName = './assets/template/3b6.xlsx';
			$objPHPExcel = $objReader->load($fileName);
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet();
			$data = $this->Model_master->karya_ilmiah_disitasi_data_list();
			$no = 1;
			$col = 6;
			foreach ($data as $val) {
				$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->nama_dosen);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->judul_artikel_disitasi);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->jumlah);
				$col++;
			}
		break;
		case '3b7':
			$fileName = './assets/template/3b7.xlsx';
			$objPHPExcel = $objReader->load($fileName);
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet();
			$data = $this->Model_master->produk_dtps_data_list();
			$no = 1;
			$col = 6;
			foreach ($data as $val) {
				$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->nama_dosen);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->nama_produk);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->deskripsi);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->bukti);
				$col++;
			}
		break;
		case '4':
				$fileName = './assets/template/4.xlsx';
				$objPHPExcel = $objReader->load($fileName);
				$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet();
				$data = $this->Model_master->penggunaan_dana_data_list();
				foreach ($data as $val) {
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C7', $val->a_biaya_dosen_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D7', $val->a_biaya_dosen_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E7', $val->a_biaya_dosen_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G7', $val->b_biaya_dosen_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H7', $val->b_biaya_dosen_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I7', $val->b_biaya_dosen_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C8', $val->a_biaya_tenaga_kependidikan_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D8', $val->a_biaya_tenaga_kependidikan_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E8', $val->a_biaya_tenaga_kependidikan_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G8', $val->b_biaya_tenaga_kependidikan_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H8', $val->b_biaya_tenaga_kependidikan_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I8', $val->b_biaya_tenaga_kependidikan_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C9', $val->a_biaya_operasional_pembelajaran_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D9', $val->a_biaya_operasional_pembelajaran_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E9', $val->a_biaya_operasional_pembelajaran_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G9', $val->b_biaya_operasional_pembelajaran_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H9', $val->b_biaya_operasional_pembelajaran_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I9', $val->b_biaya_operasional_pembelajaran_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C10', $val->a_biaya_operasional_tidak_langsung_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D10', $val->a_biaya_operasional_tidak_langsung_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E10', $val->a_biaya_operasional_tidak_langsung_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G10', $val->b_biaya_operasional_tidak_langsung_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H10', $val->b_biaya_operasional_tidak_langsung_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I10', $val->b_biaya_operasional_tidak_langsung_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C11', $val->a_biaya_operasional_kemahasiswaan_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D11', $val->a_biaya_operasional_kemahasiswaan_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E11', $val->a_biaya_operasional_kemahasiswaan_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G11', $val->b_biaya_operasional_kemahasiswaan_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H11', $val->b_biaya_operasional_kemahasiswaan_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I11', $val->b_biaya_operasional_kemahasiswaan_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C13', $val->a_biaya_penelitian_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D13', $val->a_biaya_penelitian_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E13', $val->a_biaya_penelitian_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G13', $val->b_biaya_penelitian_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H13', $val->b_biaya_penelitian_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I13', $val->b_biaya_penelitian_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C14', $val->a_biaya_pkm_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D14', $val->a_biaya_pkm_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E14', $val->a_biaya_pkm_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G14', $val->b_biaya_pkm_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H14', $val->b_biaya_pkm_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I14', $val->b_biaya_pkm_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C16', $val->a_biaya_investasi_sdm_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D16', $val->a_biaya_investasi_sdm_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E16', $val->a_biaya_investasi_sdm_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G16', $val->b_biaya_investasi_sdm_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H16', $val->b_biaya_investasi_sdm_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I16', $val->b_biaya_investasi_sdm_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C17', $val->a_biaya_investasi_sarana_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D17', $val->a_biaya_investasi_sarana_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E17', $val->a_biaya_investasi_sarana_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G17', $val->b_biaya_investasi_sarana_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H17', $val->b_biaya_investasi_sarana_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I17', $val->b_biaya_investasi_sarana_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('C18', $val->a_biaya_investasi_prasarana_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('D18', $val->a_biaya_investasi_prasarana_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('E18', $val->a_biaya_investasi_prasarana_ts);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('G18', $val->b_biaya_investasi_prasarana_ts2);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('H18', $val->b_biaya_investasi_prasarana_ts1);
					$objPHPExcel->setActiveSheetIndex()->setCellValue('I18', $val->b_biaya_investasi_prasarana_ts);

					// $objPHPExcel->getActiveSheet()->getStyle('C7:J19')->getNumberFormat()->setFormatCode('#,##0.00');
				}
			break;
		case '5a':
      $fileName = './assets/template/5a.xlsx';
      $objPHPExcel = $objReader->load($fileName);
      $objPHPExcel->setActiveSheetIndex(0);
      $objPHPExcel->getActiveSheet();
      $data = $this->Model_master->cp_rencana_pembelajaran_list();
      $col = 10;
			$no = 1;
      foreach ($data as $val) {
				$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->semester);
        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->kode_matkul);
        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->nama_matkul);
        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->matkul_kopetensi);
        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->kuliah);
        $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->seminar);
        $objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->praktikum);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->konversi_jam);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('J'.$col, $val->sikap);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('K'.$col, $val->pengetahuan);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('L'.$col, $val->keterampilan_umum);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('M'.$col, $val->keterampilan_khusus);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('N'.$col, $val->dokumen_pembelajaran);
				$objPHPExcel->setActiveSheetIndex()->setCellValue('O'.$col, $val->unit_penyelenggara);
        $col++;
      }
      break;
			case '5b':
	      $fileName = './assets/template/5b.xlsx';
	      $objPHPExcel = $objReader->load($fileName);
	      $objPHPExcel->setActiveSheetIndex(0);
	      $objPHPExcel->getActiveSheet();
	      $data = $this->Model_master->integrasi_pkm_list();
	      $col = 5;
	      foreach ($data as $val) {
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->judul);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->nama_dosen);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->matkul);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->bentuk_integrasi);
	        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->tahun);
	        $col++;
	      }
	      break;
				case '5c':
		      $fileName = './assets/template/5c.xlsx';
		      $objPHPExcel = $objReader->load($fileName);
		      $objPHPExcel->setActiveSheetIndex(0);
		      $objPHPExcel->getActiveSheet();
		      $data = $this->Model_master->kepuasan_mahasiswa_list();
		      $col = 6;
		      foreach ($data as $val) {
		        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->sangat_baik);
		        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->baik);
		        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->cukup);
		        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->kurang);
		        $objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->rencana_tindaklanjut);
		        $col++;
		      }
		      break;
					case '6a':
			      $fileName = './assets/template/6a.xlsx';
			      $objPHPExcel = $objReader->load($fileName);
			      $objPHPExcel->setActiveSheetIndex(0);
			      $objPHPExcel->getActiveSheet();
			      $data = $this->Model_master->penelitian_dosen_dan_mhs_list();
			      $col = 6;
						$no = 1;
			      foreach ($data as $val) {
							$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->nama_dosen);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->tema_penelitian);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->nama_mhs);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->judul_kegiatan);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->tahun);
			        $col++;
			      }
			      break;
					case '6b':
			      $fileName = './assets/template/6b.xlsx';
			      $objPHPExcel = $objReader->load($fileName);
			      $objPHPExcel->setActiveSheetIndex(0);
			      $objPHPExcel->getActiveSheet();
			      $data = $this->Model_master->penelitian_mhs_tesis_list();
			      $col = 6;
						$no = 1;
			      foreach ($data as $val) {
							$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->nama_dosen);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->tema_penelitian);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->nama_mhs);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->judul_kegiatan);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->tahun);
			        $col++;
			      }
			      break;
					case '7':
			      $fileName = './assets/template/7.xlsx';
			      $objPHPExcel = $objReader->load($fileName);
			      $objPHPExcel->setActiveSheetIndex(0);
			      $objPHPExcel->getActiveSheet();
			      $data = $this->Model_master->pkm_dosen_dan_mhs_list();
			      $col = 6;
						$no = 1;
			      foreach ($data as $val) {
							$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->nama_dosen);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->tema_penelitian);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->nama_mhs);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->judul_kegiatan);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->tahun);
			        $col++;
			      }
			      break;
					case '8a':
			      $fileName = './assets/template/8a.xlsx';
			      $objPHPExcel = $objReader->load($fileName);
			      $objPHPExcel->setActiveSheetIndex(0);
			      $objPHPExcel->getActiveSheet();
			      $data = $this->Model_master->ipk_lulusan_data_list();
			      $col = 6;
						$no = 1;
			      foreach ($data as $val) {
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->nama_ts);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->jml);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ipk_min);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ipk_rata);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->ipk_maks);
			        $col++;
			      }
			      break;
					case '8b1':
			      $fileName = './assets/template/8b1.xlsx';
			      $objPHPExcel = $objReader->load($fileName);
			      $objPHPExcel->setActiveSheetIndex(0);
			      $objPHPExcel->getActiveSheet();
			      $data = $this->Model_master->prestasi_akademik_data_list();
			      $col = 10;
						$no = 1;
			      foreach ($data as $val) {
							$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->nama_kegiatan);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->waktu);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->lokal);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->nasional);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->internasional);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->prestasi);
			        $col++;
			      }
			      break;
					case '8b2':
			      $fileName = './assets/template/8b2.xlsx';
			      $objPHPExcel = $objReader->load($fileName);
			      $objPHPExcel->setActiveSheetIndex(0);
			      $objPHPExcel->getActiveSheet();
			      $data = $this->Model_master->prestasi_non_akademik_data_list();
			      $col = 10;
						$no = 1;
			      foreach ($data as $val) {
							$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $no++);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->nama_kegiatan);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->waktu);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->lokal);
			        $objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->nasional);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->internasional);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->prestasi);
			        $col++;
			      }
			      break;
					case '8c_s1':
						$fileName = './assets/template/8c_s1.xlsx';
						$objPHPExcel = $objReader->load($fileName);
						$objPHPExcel->setActiveSheetIndex(0);
						$objPHPExcel->getActiveSheet();
						$data = $this->Model_master->masa_studi_lulusan_list();
						$col = 8;
						$no = 1;
						foreach ($data as $val) {
							$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $val->nama_ts);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->jml);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->ts6);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ts5);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ts4);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->ts3);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->ts2);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('H'.$col, $val->ts1);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->ts);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('K'.$col, $val->masa_studi);
							$col++;
						}
						break;
					case '8c_d3':
						$fileName = './assets/template/8c_d3.xlsx';
						$objPHPExcel = $objReader->load($fileName);
						$objPHPExcel->setActiveSheetIndex(0);
						$objPHPExcel->getActiveSheet();
						$data = $this->Model_master->masa_studi_lulusan_list();
						$col = 7;
						$no = 1;
						foreach ($data as $val) {
							$objPHPExcel->setActiveSheetIndex()->setCellValue('A'.$col, $val->nama_ts);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('B'.$col, $val->jml);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('C'.$col, $val->ts4);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('D'.$col, $val->ts3);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('E'.$col, $val->ts2);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('F'.$col, $val->ts1);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('G'.$col, $val->ts);
							$objPHPExcel->setActiveSheetIndex()->setCellValue('I'.$col, $val->masa_studi);
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
