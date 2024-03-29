<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Model_upload extends CI_model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
	}

	function upload_excel($filename, $modul)
	{
		$inputFileName = './assets/temp/' . $filename;

		try {
			$i = 0;
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$reader->setReadDataOnly(true);
			$spreadsheet = $reader->load($inputFileName);
			$worksheet   = $spreadsheet->getActiveSheet()->toArray();
			$prodi       = strtoupper($this->session->userdata('nama'));
			$numRows     = count($worksheet)-1;

			switch ($modul) {
				case '1-1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $prodi,
							'lembaga_mitra' => $worksheet[$i]['0'],
							'tingkat' => $worksheet[$i]['1'],
							'judul_kegiatan' => $worksheet[$i]['2'],
							'manfaat_bagi_ps' => $worksheet[$i]['3'],
							'durasi' => $worksheet[$i]['4'],
							'bukti_kerjasama' => $worksheet[$i]['5'],
							'tahun_berakhir' => $worksheet[$i]['6']
						);

						if (!$this->db->insert('tridarma_pendidikan', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '1-2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $prodi,
							'lembaga_mitra' => $worksheet[$i]['0'],
							'tingkat' => $worksheet[$i]['1'],
							'judul_kegiatan' => $worksheet[$i]['2'],
							'manfaat_bagi_ps' => $worksheet[$i]['3'],
							'durasi' => $worksheet[$i]['4'],
							'bukti_kerjasama' => $worksheet[$i]['5'],
							'tahun_berakhir' => $worksheet[$i]['6']
						);
					
						if (!$this->db->insert('tridarma_penelitian', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '1-3':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $prodi,
							'lembaga_mitra' => $worksheet[$i]['0'],
							'tingkat' => $worksheet[$i]['1'],
							'judul_kegiatan' => $worksheet[$i]['2'],
							'manfaat_bagi_ps' => $worksheet[$i]['3'],
							'durasi' => $worksheet[$i]['4'],
							'bukti_kerjasama' => $worksheet[$i]['5'],
							'tahun_berakhir' => $worksheet[$i]['6']
						);
						
						if (!$this->db->insert('tridarma_pkm', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.a.1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'npd' => $worksheet[$i]['0'],
							'nidn' => $worksheet[$i]['1'],
							'nama' => $worksheet[$i]['2'],
							'pendidikan_magister'  => $worksheet[$i]['3'],
							'pendidikan_doktor' => $worksheet[$i]['4'],
							'bidang_keahlian' => $worksheet[$i]['5'],
							'kesesuaian_kompetensi_inti_ps' => $worksheet[$i]['6'],
							'jabatan_akademik' => $worksheet[$i]['7'],
							'sertifikasi_profesional' => $worksheet[$i]['8'],
							'sertifikasi_kompetensi' => $worksheet[$i]['9'],
							'matakuliah_diampu' => $worksheet[$i]['10'],
							'pendidikan_tertinggi	' => $worksheet[$i]['11'],
							'matakuliah_diampu_ps_lain' => $worksheet[$i]['12'],
							'kesesuaian_bidang_keahlian' => $worksheet[$i]['13'],
							'status' => $worksheet[$i]['14'],
							'status_forlap' =>$worksheet[$i]['16'],
							'prodi' => $prodi,
							'sertifikasi' => $worksheet[$i]['15']
						);
						
						if (!$this->db->insert('dosen', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.a.3':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nik_nidn' => $worksheet[$i]['0'],
							'nama_dosen' => $worksheet[$i]['1'],
							'dtps' => $worksheet[$i]['2'],
							'ps_yang_diakreditasi' => $worksheet[$i]['3'],
							'ps_lain_di_dalam_pt' => $worksheet[$i]['4'],
							'ps_lain_di_luar_pt' => $worksheet[$i]['5'],
							'penelitian' => $worksheet[$i]['6'],
							'pkm' => $worksheet[$i]['7'],
							'tugas_tambahan' => $worksheet[$i]['8'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('ekuivalen_dosen_mengajar', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.a.4':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'npd' => $worksheet[$i]['0'],
							'nidn' => $worksheet[$i]['1'],
							'nama' => $worksheet[$i]['2'],
							'pendidikan_magister' => $worksheet[$i]['3'],
							'bidang_keahlian' => $worksheet[$i]['4'],
							'jabatan_akademik' => $worksheet[$i]['5'],
							'sertifikasi_profesional' => $worksheet[$i]['6'],
							'sertifikasi_kompetensi' => $worksheet[$i]['7'],
							'matakuliah_diampu' => $worksheet[$i]['8'],
							'pendidikan_tertinggi	' => $worksheet[$i]['9'],
							'matakuliah_diampu_ps_lain' => $worksheet[$i]['10'],
							'kesesuaian_bidang_keahlian' => $worksheet[$i]['11'],
							'status' => $worksheet[$i]['12'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('dosen', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.a.5':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nik_nidn' => $worksheet[$i]['0'],
							'nama_dosen' => $worksheet[$i]['1'],
							'perusahaan' => $worksheet[$i]['2'],
							'pendidikan_tertinggi' => $worksheet[$i]['3'],
							'bidang_keahlian' => $worksheet[$i]['4'],
							'sertifikat_profesi' => $worksheet[$i]['5'],
							'matakuliah_diampu' => $worksheet[$i]['6'],
							'sks' => $worksheet[$i]['7'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('dosen_praktisi', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama' => $worksheet[$i]['0'],
							'bidang_keahlian' => $worksheet[$i]['1'],
							'bukti_pendukung' => $worksheet[$i]['2'],
							'tingkat'  => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi	' => $prodi
						);
						
						if (!$this->db->insert('rekognisi_dpts', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'sumber_biaya' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('penelitian_dosen', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.3':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'sumber_biaya' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('pkm_dosen', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.4-1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'jenis_publikasi' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $prodi
						);
					
						if (!$this->db->insert('publikasi_ilmiah', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.4-2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'jenis_publikasi' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('pagelaran_ilmiah', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.6':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'nama_produk' => $worksheet[$i]['1'],
							'deskripsi' => $worksheet[$i]['2'],
							'bukti'  => $worksheet[$i]['3'],
							'tahun'  => $worksheet[$i]['4'],
							'prodi'  => $prodi
						);
						
						if (!$this->db->insert('produk_dtps', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.7-1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'nama_produk' => $worksheet[$i]['1'],
							'deskripsi' => $worksheet[$i]['2'],
							'bukti'  => $worksheet[$i]['3'],
							'prodi'  => $prodi
						);
						
						if (!$this->db->insert('hki_paten', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.7-2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $prodi,
							'luaran_penelitian' => $worksheet[$i]['0'],
							'th_perolehan' => $worksheet[$i]['1'],
							'keterangan' => $worksheet[$i]['2']
						);
						
						if (!$this->db->insert('hki_hak_cipta', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.7-3':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $prodi,
							'luaran_penelitian' => $worksheet[$i]['0'],
							'th_perolehan' => $worksheet[$i]['1'],
							'keterangan' => $worksheet[$i]['2']
						);
						
						if (!$this->db->insert('hki_teknologi_tepatguna', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '3.b.7-4':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'luaran_penelitian' => $worksheet[$i]['0'],
							'th_perolehan' => $worksheet[$i]['1'],
							'keterangan' => $worksheet[$i]['2'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('buku_isbn', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '5.a':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'semester' => $worksheet[$i]['0'],
							'kode_matkul' => $worksheet[$i]['1'],
							'nama_matkul' => $worksheet[$i]['2'],
							'matkul_kopetensi'  => $worksheet[$i]['3'],
							'kuliah' => $worksheet[$i]['4'],
							'seminar' => $worksheet[$i]['5'],
							'praktikum' => $worksheet[$i]['6'],
							'konversi_jam' => $worksheet[$i]['7'],
							'sikap' => $worksheet[$i]['8'],
							'pengetahuan' => $worksheet[$i]['9'],
							'keterampilan_umum' => $worksheet[$i]['10'],
							'keterampilan_khusus	' => $worksheet[$i]['11'],
							'dokumen_pembelajaran' => $worksheet[$i]['12'],
							'unit_penyelenggara' => $worksheet[$i]['13'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('kurikulum', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '5.b':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'judul' => $worksheet[$i]['0'],
							'nama_dosen' => $worksheet[$i]['1'],
							'matkul'  => $worksheet[$i]['2'],
							'bentuk_integrasi' => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('integrasi_pkm', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '5.c':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'aspek_ukuran' => $worksheet[$i]['0'],
							'sangat_baik' => $worksheet[$i]['1'],
							'baik' => $worksheet[$i]['2'],
							'cukup'  => $worksheet[$i]['3'],
							'kurang' => $worksheet[$i]['4'],
							'rencana_tindaklanjut' => $worksheet[$i]['5'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('kepuasan_pelanggan', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '6.a':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'tema_penelitian' => $worksheet[$i]['1'],
							'nama_mhs' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('penelitian_dosen_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '6.b':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'tema_penelitian' => $worksheet[$i]['1'],
							'nama_mhs' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('penelitian_mhs_tesis', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '7':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'tema_penelitian' => $worksheet[$i]['1'],
							'nama_mhs' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('pkm_dosen_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.b.1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_kegiatan' => $worksheet[$i]['0'],
							'waktu' => $worksheet[$i]['1'],
							'tingkat'  => $worksheet[$i]['2'],
							'prestasi' => $worksheet[$i]['3'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('prestasi_akad_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.b.2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_kegiatan' => $worksheet[$i]['0'],
							'waktu' => $worksheet[$i]['1'],
							'tingkat'  => $worksheet[$i]['2'],
							'prestasi' => $worksheet[$i]['3'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('prestasi_non_akad_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.d.1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'jml_lulusan_terlacak' => $worksheet[$i]['0'],
							'jml_lulusan_dipesan' => $worksheet[$i]['1'],
							'wt_dibawah_3bln'  => $worksheet[$i]['2'],
							'wt_3sd6_bulan' => $worksheet[$i]['3'],
							'wt_diatas_6bulan' => $worksheet[$i]['4'],
							'prodi' => $prodi,
							'ts' => $worksheet[$i]['5']
						);
						
						if (!$this->db->insert('waktu_tunggu_lulusan', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.d.2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'jml_lulusan_terlacak' => $worksheet[$i]['0'],
							'jml_lulusan_terlacak_rendah' => $worksheet[$i]['1'],
							'jml_lulusan_terlacak_sedang'  => $worksheet[$i]['2'],
							'jml_lulusan_terlacak_tinggi'  => $worksheet[$i]['3'],
							'prodi' => $prodi,
							'ts' => $worksheet[$i]['4']
						);
						
						if (!$this->db->insert('kesesuaian_bidang_kerja_lulusan', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.e.1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'jml_lulusan_terlacak' => $worksheet[$i]['0'],
							'jml_lulusan_terlacak_lokal' => $worksheet[$i]['1'],
							'jml_lulusan_terlacak_nasional' => $worksheet[$i]['2'],
							'jml_lulusan_terlacak_internasional' => $worksheet[$i]['3'],
							'prodi' => $prodi,
							'ts' => $worksheet[$i]['4']
						);
						
						if (!$this->db->insert('tempat_kerja_lulusan', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.e.2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'jns_kemampuan' => $worksheet[$i]['0'],
							'sangat_baik' => $worksheet[$i]['1'],
							'baik' => $worksheet[$i]['2'],
							'cukup'  => $worksheet[$i]['3'],
							'kurang' => $worksheet[$i]['4'],
							'rencana_tindak_lanjut' => $worksheet[$i]['5'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('kepuasan_pengguna_lulusan', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.e.2.ref':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'ts' => $worksheet[$i]['0'],
							'jml_tanggapan_terlacak' => $worksheet[$i]['1'],
							'podi' => $prodi
						);
						
						if (!$this->db->insert('ref_kepuasan_pelanggan_lulusan', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.f.1-1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'jenis_publikasi' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('publikasi_ilmiah_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.f.1-2':
					break;

				case '8.f.2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'judul_artikel_disitasi' => $worksheet[$i]['1'],
							'jumlah' => $worksheet[$i]['2'],
							'prodi' => $prodi
						);
						
						if (!$this->db->insert('karya_ilmiah_disitasi_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.f.3':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_mhs' => $worksheet[$i]['0'],
							'nama_produk' => $worksheet[$i]['1'],
							'deskripsi' => $worksheet[$i]['2'],
							'bukti'  => $worksheet[$i]['3'],
							'tahun'  => $worksheet[$i]['4'],
							'prodi'  => $prodi
						);
						
						if (!$this->db->insert('produk_dtps_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.f.4-1':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'nama_produk' => $worksheet[$i]['1'],
							'deskripsi' => $worksheet[$i]['2'],
							'bukti'  => $worksheet[$i]['3'],
							'prodi'  => $prodi
						);
						
						if (!$this->db->insert('hki_paten_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.f.4-2':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $prodi,
							'luaran_penelitian' => $worksheet[$i]['0'],
							'th_perolehan' => $worksheet[$i]['1'],
							'keterangan' => $worksheet[$i]['2']
						);
						
						if (!$this->db->insert('hki_hak_cipta_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.f.4-3':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $prodi,
							'luaran_penelitian' => $worksheet[$i]['0'],
							'th_perolehan' => $worksheet[$i]['1'],
							'keterangan' => $worksheet[$i]['2']
						);
					
						if (!$this->db->insert('hki_teknologi_tepatguna_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				case '8.f.4-4':
					for ($i = 1; $i < ($numRows + 1); $i++) {
						$data = array(
							'luaran_penelitian' => $worksheet[$i]['0'],
							'th_perolehan' => $worksheet[$i]['1'],
							'keterangan' => $worksheet[$i]['2'],
							'prodi' => $prodi
						);

						if (!$this->db->insert('buku_isbn_mhs', $data))
                        {
                            $error = $this->db->error();
                            $retVal = array('stat' => -1, 'col' => $i, 'isi' => $error['message'], 'data_ok' => $i-1);
                            return $retVal;
                        }
					}
					break;

				default:
						// code...
					break;
			}
			$retVal = array('stat' => $numRows);
            return $retVal;
		} catch (Exception $e) {
			return $i;
		}
	}
}