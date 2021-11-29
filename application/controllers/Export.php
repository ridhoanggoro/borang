<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Export extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
		$this->load->model('Model_master');
	}

	public function export_excel()
	{
		$this->Model_security->getsecurity();
		$key = decode_url($this->uri->segment(3));

		switch ($key) {
			case '1-1':
				$fileName = './assets/template/1-1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->tridharma_pendidikan_list();
				$no = 1;
				$col = 12;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->lembaga_mitra);
					$objPHPExcel->getCell('C' . $col)->setValue($val->internasional);
					$objPHPExcel->getCell('D' . $col)->setValue($val->nasional);
					$objPHPExcel->getCell('E' . $col)->setValue($val->lokal);
					$objPHPExcel->getCell('F' . $col)->setValue($val->judul_kegiatan);
					$objPHPExcel->getCell('G' . $col)->setValue($val->manfaat_bagi_ps);
					$objPHPExcel->getCell('H' . $col)->setValue($val->durasi);
					$objPHPExcel->getCell('I' . $col)->setValue($val->bukti_kerjasama);
					$objPHPExcel->getCell('J' . $col)->setValue($val->tahun_berakhir);
					$col++;
				}
				break;

			case '1-2':
				$fileName = './assets/template/1-2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->tridharma_penelitian_list();
				$col = 12;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->lembaga_mitra);
					$objPHPExcel->getCell('C' . $col)->setValue($val->internasional);
					$objPHPExcel->getCell('D' . $col)->setValue($val->nasional);
					$objPHPExcel->getCell('E' . $col)->setValue($val->lokal);
					$objPHPExcel->getCell('F' . $col)->setValue($val->judul_kegiatan);
					$objPHPExcel->getCell('G' . $col)->setValue($val->manfaat_bagi_ps);
					$objPHPExcel->getCell('H' . $col)->setValue($val->durasi);
					$objPHPExcel->getCell('I' . $col)->setValue($val->bukti_kerjasama);
					$objPHPExcel->getCell('J' . $col)->setValue($val->tahun_berakhir);
					$col++;
				}
				break;

			case '1-3':
				$fileName = './assets/template/1-3.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->tridharma_pkm_list();
				$col = 12;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->lembaga_mitra);
					$objPHPExcel->getCell('C' . $col)->setValue($val->internasional);
					$objPHPExcel->getCell('D' . $col)->setValue($val->nasional);
					$objPHPExcel->getCell('E' . $col)->setValue($val->lokal);
					$objPHPExcel->getCell('F' . $col)->setValue($val->judul_kegiatan);
					$objPHPExcel->getCell('G' . $col)->setValue($val->manfaat_bagi_ps);
					$objPHPExcel->getCell('H' . $col)->setValue($val->durasi);
					$objPHPExcel->getCell('I' . $col)->setValue($val->bukti_kerjasama);
					$objPHPExcel->getCell('J' . $col)->setValue($val->tahun_berakhir);
					$col++;
				}
				break;

			case '2a':
				$fileName = './assets/template/2a.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->seleksi_mahasiswa_list();
				$col = 6;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($val->nama_ts);
					$objPHPExcel->getCell('B' . $col)->setValue($val->daya_tampung);
					$objPHPExcel->getCell('C' . $col)->setValue($val->pendaftar);
					$objPHPExcel->getCell('D' . $col)->setValue($val->lulus);
					$objPHPExcel->getCell('E' . $col)->setValue($val->reguler);
					$objPHPExcel->getCell('F' . $col)->setValue($val->pindahan);
					$objPHPExcel->getCell('G' . $col)->setValue($val->aktif_reguler);
					$objPHPExcel->getCell('H' . $col)->setValue($val->aktif_pindahan);
					$col++;
				}
				break;

			case '2b':
				$fileName = './assets/template/2b.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->mahasiswa_asing_list();
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->prodi);
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts_2);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts_1);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts);
					$objPHPExcel->getCell('F' . $col)->setValue($val->asing_fulltime_ts2);
					$objPHPExcel->getCell('G' . $col)->setValue($val->asing_fulltime_ts1);
					$objPHPExcel->getCell('H' . $col)->setValue($val->asing_fulltime_ts);
					$objPHPExcel->getCell('I' . $col)->setValue($val->asing_partime_ts2);
					$objPHPExcel->getCell('J' . $col)->setValue($val->asing_partime_ts1);
					$objPHPExcel->getCell('K' . $col)->setValue($val->asing_partime_ts);
					$col++;
				}
				break;

			case '3a1':
				$fileName = './assets/template/3a1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->dosen_tetap_data_list();
				$no = 1;
				$col = 14;
				$tot = 0;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue(strtoupper($val->nama));
					$objPHPExcel->getCell('C' . $col)->setValue($val->nidn);
					$objPHPExcel->getCell('D' . $col)->setValue($val->pendidikan_magister);
					$objPHPExcel->getCell('E' . $col)->setValue($val->pendidikan_doktor);
					$objPHPExcel->getCell('F' . $col)->setValue($val->bidang_keahlian);
					$objPHPExcel->getCell('G' . $col)->setValue($val->chk_kesesuaian_kompetensi);
					$objPHPExcel->getCell('H' . $col)->setValue($val->jabatan_akademik);
					$objPHPExcel->getCell('I' . $col)->setValue($val->sertifikasi_profesional);
					$objPHPExcel->getCell('J' . $col)->setValue($val->sertifikasi_kompetensi);
					$objPHPExcel->getCell('K' . $col)->setValue($val->matakuliah_diampu);
					$objPHPExcel->getCell('L' . $col)->setValue($val->chk_kesesuaian_keahlian);
					$objPHPExcel->getCell('M' . $col)->setValue($val->matakuliah_diampu_ps_lain);
					$col++;
				}
				//Cell Style
				$styleArray = array(
					'borders' => array(
						'allborders' => array(
							'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
						)
					)
				);
				$objPHPExcel->getStyle('A18:G' . $col)->applyFromArray($styleArray);
				break;

			case '3a2':
				$fileName = './assets/template/3a2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->dosen_pa_data_list();
				$no = 1;
				$col = 7;
				$tot = 0;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue(strtoupper($val->nama));
					$objPHPExcel->getCell('C' . $col)->setValue($val->ps_sendiri_ts2);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ps_sendiri_ts1);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ps_sendiri_ts);
					$objPHPExcel->getCell('G' . $col)->setValue($val->ps_lain_ts2);
					$objPHPExcel->getCell('H' . $col)->setValue($val->ps_lain_ts1);
					$objPHPExcel->getCell('I' . $col)->setValue($val->ps_lain_ts);
					$col++;
				}
				break;

			case '3a3':
				$fileName = './assets/template/3a3.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->ewmp_data_list();
				$no = 1;
				$col = 11;
				$tot = 0;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue(strtoupper($val->nama));
					$objPHPExcel->getCell('C' . $col)->setValue($val->dtps);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ps_yang_diakreditasi);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ps_lain_di_dalam_pt);
					$objPHPExcel->getCell('F' . $col)->setValue($val->ps_lain_di_luar_pt);
					$objPHPExcel->getCell('G' . $col)->setValue($val->penelitian);
					$objPHPExcel->getCell('H' . $col)->setValue($val->pkm);
					$objPHPExcel->getCell('I' . $col)->setValue($val->tugas_tambahan);
					$col++;
				}
				break;

			case '3a5':
				$fileName = './assets/template/3a5.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->dosen_praktisi_data_list();
				$no = 1;
				$col = 6;
				$tot = 0;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue(strtoupper($val->nama_dosen));
					$objPHPExcel->getCell('C' . $col)->setValue($val->nik_nidn);
					$objPHPExcel->getCell('D' . $col)->setValue($val->perusahaan);
					$objPHPExcel->getCell('E' . $col)->setValue($val->pendidikan_tertinggi);
					$objPHPExcel->getCell('F' . $col)->setValue($val->bidang_keahlian);
					$objPHPExcel->getCell('G' . $col)->setValue($val->sertifikat_profesi);
					$objPHPExcel->getCell('H' . $col)->setValue($val->matakuliah_diampu);
					$objPHPExcel->getCell('I' . $col)->setValue($val->sks);
					$col++;
				}
				break;

			case '3b1':
				$fileName = './assets/template/3b1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->rekognisi_data_list();
				$no = 1;
				$col = 10;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue(strtoupper($val->nama));
					$objPHPExcel->getCell('C' . $col)->setValue($val->bidang_keahlian);
					$objPHPExcel->getCell('D' . $col)->setValue($val->bukti_pendukung);
					$objPHPExcel->getCell('E' . $col)->setValue($val->Wilayah);
					$objPHPExcel->getCell('F' . $col)->setValue($val->Nasional);
					$objPHPExcel->getCell('G' . $col)->setValue($val->Internasional);
					$objPHPExcel->getCell('H' . $col)->setValue($val->tahun);
					$col++;
				}
				break;

			case '3b2':
				$fileName = './assets/template/3b2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->penelitian_dtps_data_list();
				$no = 1;
				$col = 6;
				foreach ($data as $val) {
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts2);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts1);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts);
					$col++;
				}
				break;

			case '3b3':
				$fileName = './assets/template/3b3.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->pkm_dtps_data_list();
				$no = 1;
				$col = 6;
				foreach ($data as $val) {
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts2);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts1);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts);
					$col++;
				}
				break;

			case '3b4-1':
				$fileName = './assets/template/3b4-1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->publikasi_ilmiah_dtps_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts2);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts1);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts);
					$col++;
				}
				break;

			case '3b4-2':
				$fileName = './assets/template/3b4-2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->pagelaran_ilmiah_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts2);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts1);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts);
					$col++;
				}
				break;

			case '3b7-1':
				$fileName = './assets/template/3b7-1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->hki_paten_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->luaran_penelitian);
					$objPHPExcel->getCell('C' . $col)->setValue($val->th_perolehan);
					$objPHPExcel->getCell('D' . $col)->setValue($val->keterangan);
					$col++;
				}
				break;

			case '3b7-2':
				$fileName = './assets/template/3b7-2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->hki_hak_cipta_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->luaran_penelitian);
					$objPHPExcel->getCell('C' . $col)->setValue($val->th_perolehan);
					$objPHPExcel->getCell('D' . $col)->setValue($val->keterangan);
					$col++;
				}
				break;

			case '3b7-3':
				$fileName = './assets/template/3b7-3.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->hki_teknologi_tepatguna_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->luaran_penelitian);
					$objPHPExcel->getCell('C' . $col)->setValue($val->th_perolehan);
					$objPHPExcel->getCell('D' . $col)->setValue($val->keterangan);
					$col++;
				}
				break;

			case '3b7-4':
				$fileName = './assets/template/3b7-4.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->buku_isbn_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->luaran_penelitian);
					$objPHPExcel->getCell('C' . $col)->setValue($val->th_perolehan);
					$objPHPExcel->getCell('D' . $col)->setValue($val->keterangan);
					$col++;
				}
				break;

			case '3b5':
				$fileName = './assets/template/3b5.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->karya_ilmiah_disitasi_data_list();
				$no = 1;
				$col = 6;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_dosen);
					$objPHPExcel->getCell('C' . $col)->setValue($val->judul_artikel_disitasi);
					$objPHPExcel->getCell('D' . $col)->setValue($val->jumlah);
					$col++;
				}
				break;

			case '3b6':
				$fileName = './assets/template/3b6.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->produk_dtps_data_list();
				$no = 1;
				$col = 6;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_dosen);
					$objPHPExcel->getCell('C' . $col)->setValue($val->nama_produk);
					$objPHPExcel->getCell('D' . $col)->setValue($val->deskripsi);
					$objPHPExcel->getCell('E' . $col)->setValue($val->bukti);
					$objPHPExcel->getCell('F' . $col)->setValue($val->tahun);
					$col++;
				}
				break;

			case '4':
				$fileName = './assets/template/4.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->penggunaan_dana_data_list();
				foreach ($data as $val) {
					$objPHPExcel->getCell('C7')->setValue($val->a_biaya_dosen_ts2);
					$objPHPExcel->getCell('D7')->setValue($val->a_biaya_dosen_ts1);
					$objPHPExcel->getCell('E7')->setValue($val->a_biaya_dosen_ts);
					$objPHPExcel->getCell('G7')->setValue($val->b_biaya_dosen_ts2);
					$objPHPExcel->getCell('H7')->setValue($val->b_biaya_dosen_ts1);
					$objPHPExcel->getCell('I7')->setValue($val->b_biaya_dosen_ts);
					$objPHPExcel->getCell('C8')->setValue($val->a_biaya_tenaga_kependidikan_ts2);
					$objPHPExcel->getCell('D8')->setValue($val->a_biaya_tenaga_kependidikan_ts1);
					$objPHPExcel->getCell('E8')->setValue($val->a_biaya_tenaga_kependidikan_ts);
					$objPHPExcel->getCell('G8')->setValue($val->b_biaya_tenaga_kependidikan_ts2);
					$objPHPExcel->getCell('H8')->setValue($val->b_biaya_tenaga_kependidikan_ts1);
					$objPHPExcel->getCell('I8')->setValue($val->b_biaya_tenaga_kependidikan_ts);
					$objPHPExcel->getCell('C9')->setValue($val->a_biaya_operasional_pembelajaran_ts2);
					$objPHPExcel->getCell('D9')->setValue($val->a_biaya_operasional_pembelajaran_ts1);
					$objPHPExcel->getCell('E9')->setValue($val->a_biaya_operasional_pembelajaran_ts);
					$objPHPExcel->getCell('G9')->setValue($val->b_biaya_operasional_pembelajaran_ts2);
					$objPHPExcel->getCell('H9')->setValue($val->b_biaya_operasional_pembelajaran_ts1);
					$objPHPExcel->getCell('I9')->setValue($val->b_biaya_operasional_pembelajaran_ts);
					$objPHPExcel->getCell('C10')->setValue($val->a_biaya_operasional_tidak_langsung_ts2);
					$objPHPExcel->getCell('D10')->setValue($val->a_biaya_operasional_tidak_langsung_ts1);
					$objPHPExcel->getCell('E10')->setValue($val->a_biaya_operasional_tidak_langsung_ts);
					$objPHPExcel->getCell('G10')->setValue($val->b_biaya_operasional_tidak_langsung_ts2);
					$objPHPExcel->getCell('H10')->setValue($val->b_biaya_operasional_tidak_langsung_ts1);
					$objPHPExcel->getCell('I10')->setValue($val->b_biaya_operasional_tidak_langsung_ts);
					$objPHPExcel->getCell('C11')->setValue($val->a_biaya_operasional_kemahasiswaan_ts2);
					$objPHPExcel->getCell('D11')->setValue($val->a_biaya_operasional_kemahasiswaan_ts1);
					$objPHPExcel->getCell('E11')->setValue($val->a_biaya_operasional_kemahasiswaan_ts);
					$objPHPExcel->getCell('G11')->setValue($val->b_biaya_operasional_kemahasiswaan_ts2);
					$objPHPExcel->getCell('H11')->setValue($val->b_biaya_operasional_kemahasiswaan_ts1);
					$objPHPExcel->getCell('I11')->setValue($val->b_biaya_operasional_kemahasiswaan_ts);
					$objPHPExcel->getCell('C13')->setValue($val->a_biaya_penelitian_ts2);
					$objPHPExcel->getCell('D13')->setValue($val->a_biaya_penelitian_ts1);
					$objPHPExcel->getCell('E13')->setValue($val->a_biaya_penelitian_ts);
					$objPHPExcel->getCell('G13')->setValue($val->b_biaya_penelitian_ts2);
					$objPHPExcel->getCell('H13')->setValue($val->b_biaya_penelitian_ts1);
					$objPHPExcel->getCell('I13')->setValue($val->b_biaya_penelitian_ts);
					$objPHPExcel->getCell('C14')->setValue($val->a_biaya_pkm_ts2);
					$objPHPExcel->getCell('D14')->setValue($val->a_biaya_pkm_ts1);
					$objPHPExcel->getCell('E14')->setValue($val->a_biaya_pkm_ts);
					$objPHPExcel->getCell('G14')->setValue($val->b_biaya_pkm_ts2);
					$objPHPExcel->getCell('H14')->setValue($val->b_biaya_pkm_ts1);
					$objPHPExcel->getCell('I14')->setValue($val->b_biaya_pkm_ts);
					$objPHPExcel->getCell('C16')->setValue($val->a_biaya_investasi_sdm_ts2);
					$objPHPExcel->getCell('D16')->setValue($val->a_biaya_investasi_sdm_ts1);
					$objPHPExcel->getCell('E16')->setValue($val->a_biaya_investasi_sdm_ts);
					$objPHPExcel->getCell('G16')->setValue($val->b_biaya_investasi_sdm_ts2);
					$objPHPExcel->getCell('H16')->setValue($val->b_biaya_investasi_sdm_ts1);
					$objPHPExcel->getCell('I16')->setValue($val->b_biaya_investasi_sdm_ts);
					$objPHPExcel->getCell('C17')->setValue($val->a_biaya_investasi_sarana_ts2);
					$objPHPExcel->getCell('D17')->setValue($val->a_biaya_investasi_sarana_ts1);
					$objPHPExcel->getCell('E17')->setValue($val->a_biaya_investasi_sarana_ts);
					$objPHPExcel->getCell('G17')->setValue($val->b_biaya_investasi_sarana_ts2);
					$objPHPExcel->getCell('H17')->setValue($val->b_biaya_investasi_sarana_ts1);
					$objPHPExcel->getCell('I17')->setValue($val->b_biaya_investasi_sarana_ts);
					$objPHPExcel->getCell('C18')->setValue($val->a_biaya_investasi_prasarana_ts2);
					$objPHPExcel->getCell('D18')->setValue($val->a_biaya_investasi_prasarana_ts1);
					$objPHPExcel->getCell('E18')->setValue($val->a_biaya_investasi_prasarana_ts);
					$objPHPExcel->getCell('G18')->setValue($val->b_biaya_investasi_prasarana_ts2);
					$objPHPExcel->getCell('H18')->setValue($val->b_biaya_investasi_prasarana_ts1);
					$objPHPExcel->getCell('I18')->setValue($val->b_biaya_investasi_prasarana_ts);

					// $objPHPExcel->getActiveSheet()->getStyle('C7:J19')->getNumberFormat()->setFormatCode('#,##0.00');
				}
				break;

			case '5a':
				$fileName = './assets/template/5a.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->cp_rencana_pembelajaran_list();
				$col = 10;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->semester);
					$objPHPExcel->getCell('C' . $col)->setValue($val->kode_matkul);
					$objPHPExcel->getCell('D' . $col)->setValue($val->nama_matkul);
					$objPHPExcel->getCell('E' . $col)->setValue($val->matkul_kopetensi);
					$objPHPExcel->getCell('F' . $col)->setValue($val->kuliah);
					$objPHPExcel->getCell('G' . $col)->setValue($val->seminar);
					$objPHPExcel->getCell('H' . $col)->setValue($val->praktikum);
					$objPHPExcel->getCell('I' . $col)->setValue($val->konversi_jam);
					$objPHPExcel->getCell('J' . $col)->setValue($val->sikap);
					$objPHPExcel->getCell('K' . $col)->setValue($val->pengetahuan);
					$objPHPExcel->getCell('L' . $col)->setValue($val->keterampilan_umum);
					$objPHPExcel->getCell('M' . $col)->setValue($val->keterampilan_khusus);
					$objPHPExcel->getCell('N' . $col)->setValue($val->dokumen_pembelajaran);
					$objPHPExcel->getCell('O' . $col)->setValue($val->unit_penyelenggara);
					$col++;
				}
				break;

			case '5b':
				$fileName = './assets/template/5b.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->integrasi_pkm_list();
				$col = 5;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->judul);
					$objPHPExcel->getCell('C' . $col)->setValue($val->nama_dosen);
					$objPHPExcel->getCell('D' . $col)->setValue($val->matkul);
					$objPHPExcel->getCell('E' . $col)->setValue($val->bentuk_integrasi);
					$objPHPExcel->getCell('F' . $col)->setValue($val->tahun);
					$col++;
				}
				break;

			case '5c':
				$fileName = './assets/template/5c.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->kepuasan_mahasiswa_list();
				$col = 6;
				foreach ($data as $val) {
					$objPHPExcel->getCell('C' . $col)->setValue($val->sangat_baik);
					$objPHPExcel->getCell('D' . $col)->setValue($val->baik);
					$objPHPExcel->getCell('E' . $col)->setValue($val->cukup);
					$objPHPExcel->getCell('F' . $col)->setValue($val->kurang);
					$objPHPExcel->getCell('G' . $col)->setValue($val->rencana_tindaklanjut);
					$col++;
				}
				break;

			case '6a':
				$fileName = './assets/template/6a.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->penelitian_dosen_dan_mhs_list();
				$col = 6;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_dosen);
					$objPHPExcel->getCell('C' . $col)->setValue($val->tema_penelitian);
					$objPHPExcel->getCell('D' . $col)->setValue($val->nama_mhs);
					$objPHPExcel->getCell('E' . $col)->setValue($val->judul_kegiatan);
					$objPHPExcel->getCell('F' . $col)->setValue($val->tahun);
					$col++;
				}
				break;

			case '6b':
				$fileName = './assets/template/6b.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->penelitian_mhs_tesis_list();
				$col = 6;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_dosen);
					$objPHPExcel->getCell('C' . $col)->setValue($val->tema_penelitian);
					$objPHPExcel->getCell('D' . $col)->setValue($val->nama_mhs);
					$objPHPExcel->getCell('E' . $col)->setValue($val->judul_kegiatan);
					$objPHPExcel->getCell('F' . $col)->setValue($val->tahun);
					$col++;
				}
				break;

			case '7':
				$fileName = './assets/template/7.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->pkm_dosen_dan_mhs_list();
				$col = 6;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_dosen);
					$objPHPExcel->getCell('C' . $col)->setValue($val->tema_penelitian);
					$objPHPExcel->getCell('D' . $col)->setValue($val->nama_mhs);
					$objPHPExcel->getCell('E' . $col)->setValue($val->judul_kegiatan);
					$objPHPExcel->getCell('F' . $col)->setValue($val->tahun);
					$col++;
				}
				break;

			case '8a':
				$fileName = './assets/template/8a.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->ipk_lulusan_data_list();
				$col = 6;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_ts);
					$objPHPExcel->getCell('C' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ipk_min);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ipk_rata);
					$objPHPExcel->getCell('F' . $col)->setValue($val->ipk_maks);
					$col++;
				}
				break;

			case '8b1':
				$fileName = './assets/template/8b1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->prestasi_akademik_data_list();
				$col = 10;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_kegiatan);
					$objPHPExcel->getCell('C' . $col)->setValue($val->waktu);
					$objPHPExcel->getCell('D' . $col)->setValue($val->lokal);
					$objPHPExcel->getCell('E' . $col)->setValue($val->nasional);
					$objPHPExcel->getCell('F' . $col)->setValue($val->internasional);
					$objPHPExcel->getCell('G' . $col)->setValue($val->prestasi);
					$col++;
				}
				break;

			case '8b2':
				$fileName = './assets/template/8b2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->prestasi_non_akademik_data_list();
				$col = 11;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_kegiatan);
					$objPHPExcel->getCell('C' . $col)->setValue($val->waktu);
					$objPHPExcel->getCell('D' . $col)->setValue($val->lokal);
					$objPHPExcel->getCell('E' . $col)->setValue($val->nasional);
					$objPHPExcel->getCell('F' . $col)->setValue($val->internasional);
					$objPHPExcel->getCell('G' . $col)->setValue($val->prestasi);
					$col++;
				}
				break;

			case '8c_s1':
				$fileName = './assets/template/8c_s1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->masa_studi_lulusan_list();
				$col = 8;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($val->nama_ts);
					$objPHPExcel->getCell('B' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts6);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts5);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts4);
					$objPHPExcel->getCell('F' . $col)->setValue($val->ts3);
					$objPHPExcel->getCell('G' . $col)->setValue($val->ts2);
					$objPHPExcel->getCell('H' . $col)->setValue($val->ts1);
					$objPHPExcel->getCell('I' . $col)->setValue($val->ts);
					$objPHPExcel->getCell('K' . $col)->setValue($val->masa_studi);
					$col++;
				}
				break;

			case '8c_s2':
				$fileName = './assets/template/8c_s2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->masa_studi_lulusan_list();
				$col = 8;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($val->nama_ts);
					$objPHPExcel->getCell('B' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts3);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts2);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts1);
					$objPHPExcel->getCell('F' . $col)->setValue($val->ts);
					$objPHPExcel->getCell('H' . $col)->setValue($val->masa_studi);
					$col++;
				}
				break;

			case '8c_d3':
				$fileName = './assets/template/8c_d3.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->masa_studi_lulusan_list();
				$col = 7;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($val->nama_ts);
					$objPHPExcel->getCell('B' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts4);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts3);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts2);
					$objPHPExcel->getCell('F' . $col)->setValue($val->ts1);
					$objPHPExcel->getCell('G' . $col)->setValue($val->ts);
					$objPHPExcel->getCell('I' . $col)->setValue($val->masa_studi);
					$col++;
				}
				break;

			case '8d1_s1':
				$fileName = './assets/template/8d1_s1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->waktu_tunggu_lulusan_list();
				$col = 7;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('C' . $col)->setValue($val->jml_lulusan_terlacak);
					$objPHPExcel->getCell('D' . $col)->setValue($val->wt_dibawah_3bln);
					$objPHPExcel->getCell('E' . $col)->setValue($val->wt_3sd6_bulan);
					$objPHPExcel->getCell('F' . $col)->setValue($val->wt_diatas_6bulan);
					$col++;
				}
				break;

			case '8d1_d3':
				$fileName = './assets/template/8d1_d3.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->waktu_tunggu_lulusan_list();
				$col = 7;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('C' . $col)->setValue($val->jml_lulusan_terlacak);
					$objPHPExcel->getCell('D' . $col)->setValue($val->jml_lulusan_dipesan);
					$objPHPExcel->getCell('E' . $col)->setValue($val->wt_dibawah_3bln);
					$objPHPExcel->getCell('F' . $col)->setValue($val->wt_3sd6_bulan);
					$objPHPExcel->getCell('G' . $col)->setValue($val->wt_diatas_6bulan);
					$col++;
				}
				break;

			case '8d2':
				$fileName = './assets/template/8d2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->kesesuaian_bidang_kerja_lulusan_list();
				$col = 7;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('C' . $col)->setValue($val->jml_lulusan_terlacak);
					$objPHPExcel->getCell('D' . $col)->setValue($val->jml_lulusan_terlacak_rendah);
					$objPHPExcel->getCell('E' . $col)->setValue($val->jml_lulusan_terlacak_sedang);
					$objPHPExcel->getCell('F' . $col)->setValue($val->jml_lulusan_terlacak_tinggi);
					$col++;
				}
				break;

			case '8e1':
				$fileName = './assets/template/8e1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->tempat_kerja_lulusan_list();
				$col = 7;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('C' . $col)->setValue($val->jml_lulusan_terlacak);
					$objPHPExcel->getCell('D' . $col)->setValue($val->jml_lulusan_terlacak_lokal);
					$objPHPExcel->getCell('E' . $col)->setValue($val->jml_lulusan_terlacak_nasional);
					$objPHPExcel->getCell('F' . $col)->setValue($val->jml_lulusan_terlacak_internasional);
					$col++;
				}
				break;

			case 'Ref_8e2':
				$fileName = './assets/template/Ref_8e2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->ref_kepuasan_pelanggan_lulusan_list();
				$col = 7;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('B' . $col)->setValue($val->jml);
					$objPHPExcel->getCell('C' . $col)->setValue($val->jml_tanggapan_terlacak);
					$col++;
				}
				break;

			case '8e2':
				$fileName = './assets/template/8e2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->kepuasan_pengguna_lulusan_list();
				$col = 7;
				$no = 1;
				foreach ($data as $val) {
					$objPHPExcel->getCell('C' . $col)->setValue($val->sangat_baik);
					$objPHPExcel->getCell('D' . $col)->setValue($val->baik);
					$objPHPExcel->getCell('E' . $col)->setValue($val->cukup);
					$objPHPExcel->getCell('F' . $col)->setValue($val->kurang);
					$objPHPExcel->getCell('G' . $col)->setValue($val->rencana_tindak_lanjut);
					$col++;
				}
				break;

			case '8f1-1':
				$fileName = './assets/template/8f1-1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->publikasi_ilmiah_mhs_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('C' . $col)->setValue($val->ts2);
					$objPHPExcel->getCell('D' . $col)->setValue($val->ts1);
					$objPHPExcel->getCell('E' . $col)->setValue($val->ts);
					$col++;
				}
				break;

			case '8f2':
				$fileName = './assets/template/8f2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->karya_ilmiah_disitasi_mhs_data_list();
				$no = 1;
				$col = 6;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_dosen);
					$objPHPExcel->getCell('C' . $col)->setValue($val->judul_artikel_disitasi);
					$objPHPExcel->getCell('D' . $col)->setValue($val->jumlah);
					$col++;
				}
				break;

			case '8f3':
				$fileName = './assets/template/8f3.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->produk_dtps_mhs_data_list();
				$no = 1;
				$col = 6;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->nama_mhs);
					$objPHPExcel->getCell('C' . $col)->setValue($val->nama_produk);
					$objPHPExcel->getCell('D' . $col)->setValue($val->deskripsi);
					$objPHPExcel->getCell('E' . $col)->setValue($val->bukti);
					$objPHPExcel->getCell('F' . $col)->setValue($val->tahun);
					$col++;
				}
				break;

			case '8f4-1':
				$fileName = './assets/template/8f4-1.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->hki_paten_mhs_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->luaran_penelitian);
					$objPHPExcel->getCell('C' . $col)->setValue($val->th_perolehan);
					$objPHPExcel->getCell('D' . $col)->setValue($val->keterangan);
					$col++;
				}
				break;

			case '8f4-2':
				$fileName = './assets/template/8f4-2.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->hki_hak_cipta_mhs_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->luaran_penelitian);
					$objPHPExcel->getCell('C' . $col)->setValue($val->th_perolehan);
					$objPHPExcel->getCell('D' . $col)->setValue($val->keterangan);
					$col++;
				}
				break;

			case '8f4-3':
				$fileName = './assets/template/8f4-3.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->hki_teknologi_tepatguna_mhs_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->luaran_penelitian);
					$objPHPExcel->getCell('C' . $col)->setValue($val->th_perolehan);
					$objPHPExcel->getCell('D' . $col)->setValue($val->keterangan);
					$col++;
				}
				break;

			case '8f4-4':
				$fileName = './assets/template/8f4-4.xlsx';
				$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($fileName);
				$objPHPExcel = $spreadsheet->getActiveSheet();
				$data = $this->Model_master->buku_isbn_mhs_data_list();
				$no = 1;
				$col = 7;
				foreach ($data as $val) {
					$objPHPExcel->getCell('A' . $col)->setValue($no++);
					$objPHPExcel->getCell('B' . $col)->setValue($val->luaran_penelitian);
					$objPHPExcel->getCell('C' . $col)->setValue($val->th_perolehan);
					$objPHPExcel->getCell('D' . $col)->setValue($val->keterangan);
					$col++;
				}
				break;

			default:
        // code...
				break;
		}

    // Redirect output to a client’s web browser (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $key . '.xlsx"');
		header('Cache-Control: max-age=0');

    // If you're serving to IE over SSLthen the following may be needed
		header('Expires: Mon 26 Jul 2021 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('Dd M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cachemust-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

		$objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
		$objWriter->save('php://output');
		exit;
	}
}
