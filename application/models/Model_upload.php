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
			$prodi       = $this->session->userdata('nama');

			switch ($modul) {
				case '1-1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $worksheet[$i]['0'],
							'lembaga_mitra' => $worksheet[$i]['1'],
							'tingkat' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'manfaat_bagi_ps' => $worksheet[$i]['4'],
							'durasi' => $worksheet[$i]['5'],
							'bukti_kerjasama' => $worksheet[$i]['6'],
							'tahun_berakhir' => $worksheet[$i]['7']
						);
						$this->db->insert('tridarma_pendidikan', $data);
					}
					break;

				case '1-2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $worksheet[$i]['0'],
							'lembaga_mitra' => $worksheet[$i]['1'],
							'tingkat' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'manfaat_bagi_ps' => $worksheet[$i]['4'],
							'durasi' => $worksheet[$i]['5'],
							'bukti_kerjasama' => $worksheet[$i]['6'],
							'tahun_berakhir' => $worksheet[$i]['7']
						);
						$this->db->insert('tridarma_penelitian', $data);
					}
					break;

				case '1-3':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $worksheet[$i]['0'],
							'lembaga_mitra' => $worksheet[$i]['1'],
							'tingkat' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'manfaat_bagi_ps' => $worksheet[$i]['4'],
							'durasi' => $worksheet[$i]['5'],
							'bukti_kerjasama' => $worksheet[$i]['6'],
							'tahun_berakhir' => $worksheet[$i]['7']
						);
						$this->db->insert('tridarma_pkm', $data);
					}
					break;

				case '3.a.1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
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
							'prodi' => $worksheet[$i]['15'],
							'sertifikasi' => $worksheet[$i]['16']
						);
						$this->db->insert('dosen', $data);
					}
					break;

				case '3.a.3':
					for ($i = 2; $i < ($numRows + 1); $i++) {
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
							'prodi' => $worksheet[$i]['9']
						);
						$this->db->insert('ekuivalen_dosen_mengajar', $data);
					}
					break;

				case '3.a.4':
					for ($i = 2; $i < ($numRows + 1); $i++) {
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
							'prodi' => $worksheet[$i]['13']
						);
						$this->db->insert('dosen', $data);
					}
					break;

				case '3.a.5':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nik_nidn' => $worksheet[$i]['0'],
							'nama_dosen' => $worksheet[$i]['1'],
							'perusahaan' => $worksheet[$i]['2'],
							'pendidikan_tertinggi' => $worksheet[$i]['3'],
							'bidang_keahlian' => $worksheet[$i]['4'],
							'sertifikat_profesi' => $worksheet[$i]['5'],
							'matakuliah_diampu' => $worksheet[$i]['6'],
							'sks' => $worksheet[$i]['7'],
							'prodi' => $worksheet[$i]['8']
						);
						$this->db->insert('dosen_praktisi', $data);
					}
					break;

				case '3.b.1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama' => $worksheet[$i]['0'],
							'bidang_keahlian' => $worksheet[$i]['1'],
							'bukti_pendukung' => $worksheet[$i]['2'],
							'tingkat'  => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi	' => $worksheet[$i]['5']
						);
						$this->db->insert('rekognisi_dpts', $data);
					}
					break;

				case '3.b.2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'sumber_biaya' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $worksheet[$i]['3']
						);
						$this->db->insert('penelitian_dosen', $data);
					}
					break;

				case '3.b.3':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'sumber_biaya' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $worksheet[$i]['3']
						);
						$this->db->insert('pkm_dosen', $data);
					}
					break;

				case '3.b.4-1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'jenis_publikasi' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $worksheet[$i]['3']
						);
						$this->db->insert('publikasi_ilmiah', $data);
					}
					break;

				case '3.b.4-2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'jenis_publikasi' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $worksheet[$i]['3']
						);
						$this->db->insert('pagelaran_ilmiah', $data);
					}
					break;

				case '3.b.6':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'nama_produk' => $worksheet[$i]['1'],
							'deskripsi' => $worksheet[$i]['2'],
							'bukti'  => $worksheet[$i]['3'],
							'tahun'  => $worksheet[$i]['4'],
							'prodi'  => $worksheet[$i]['5']
						);
						$this->db->insert('produk_dtps', $data);
					}
					break;

				case '3.b.7-1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'nama_produk' => $worksheet[$i]['1'],
							'deskripsi' => $worksheet[$i]['2'],
							'bukti'  => $worksheet[$i]['3'],
							'prodi'  => $worksheet[$i]['4']
						);
						$this->db->insert('hki_paten', $data);
					}
					break;

				case '3.b.7-2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $worksheet[$i]['0'],
							'luaran_penelitian' => $worksheet[$i]['1'],
							'th_perolehan' => $worksheet[$i]['2'],
							'keterangan' => $worksheet[$i]['3']
						);
						$this->db->insert('hki_hak_cipta', $data);
					}
					break;

				case '3.b.7-3':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $worksheet[$i]['0'],
							'luaran_penelitian' => $worksheet[$i]['1'],
							'th_perolehan' => $worksheet[$i]['2'],
							'keterangan' => $worksheet[$i]['3']
						);
						$this->db->insert('hki_teknologi_tepatguna', $data);
					}
					break;

				case '3.b.7-4':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'luaran_penelitian' => $worksheet[$i]['0'],
							'th_perolehan' => $worksheet[$i]['1'],
							'keterangan' => $worksheet[$i]['2'],
							'prodi' => $worksheet[$i]['3']
						);
						$this->db->insert('buku_isbn', $data);
					}
					break;

				case '5.a':
					for ($i = 2; $i < ($numRows + 1); $i++) {
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
							'prodi' => $worksheet[$i]['14']
						);
						$this->db->insert('kurikulum', $data);
					}
					break;

				case '5.b':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'judul' => $worksheet[$i]['0'],
							'nama_dosen' => $worksheet[$i]['1'],
							'matkul'  => $worksheet[$i]['2'],
							'bentuk_integrasi' => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi' => $worksheet[$i]['5']
						);
						$this->db->insert('integrasi_pkm', $data);
					}
					break;

				case '5.c':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'aspek_ukuran' => $worksheet[$i]['0'],
							'sangat_baik' => $worksheet[$i]['1'],
							'baik' => $worksheet[$i]['2'],
							'cukup'  => $worksheet[$i]['3'],
							'kurang' => $worksheet[$i]['4'],
							'rencana_tindaklanjut' => $worksheet[$i]['5'],
							'prodi' => $worksheet[$i]['6']
						);
						$this->db->insert('kepuasan_pelanggan', $data);
					}
					break;

				case '6.a':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'tema_penelitian' => $worksheet[$i]['1'],
							'nama_mhs' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi' => $worksheet[$i]['5']
						);
						$this->db->insert('penelitian_dosen_mhs', $data);
					}
					break;

				case '6.b':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'tema_penelitian' => $worksheet[$i]['1'],
							'nama_mhs' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi' => $worksheet[$i]['5']
						);
						$this->db->insert('penelitian_mhs_tesis', $data);
					}
					break;

				case '7':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'tema_penelitian' => $worksheet[$i]['1'],
							'nama_mhs' => $worksheet[$i]['2'],
							'judul_kegiatan' => $worksheet[$i]['3'],
							'tahun' => $worksheet[$i]['4'],
							'prodi' => $worksheet[$i]['5']
						);
						$this->db->insert('pkm_dosen_mhs', $data);
					}
					break;

				case '8.b.1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_kegiatan' => $worksheet[$i]['0'],
							'waktu' => $worksheet[$i]['1'],
							'tingkat'  => $worksheet[$i]['2'],
							'prestasi' => $worksheet[$i]['3'],
							'prodi' => $worksheet[$i]['4']
						);
						$this->db->insert('prestasi_akad_mhs', $data);
					}
					break;

				case '8.b.2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_kegiatan' => $worksheet[$i]['0'],
							'waktu' => $worksheet[$i]['1'],
							'tingkat'  => $worksheet[$i]['2'],
							'prestasi' => $worksheet[$i]['3'],
							'prodi' => $worksheet[$i]['4']
						);
						$this->db->insert('prestasi_non_akad_mhs', $data);
					}
					break;

				case '8.d.1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'jml_lulusan_terlacak' => $worksheet[$i]['0'],
							'jml_lulusan_dipesan' => $worksheet[$i]['1'],
							'wt_dibawah_3bln'  => $worksheet[$i]['2'],
							'wt_3sd6_bulan' => $worksheet[$i]['3'],
							'wt_diatas_6bulan' => $worksheet[$i]['4'],
							'prodi' => $worksheet[$i]['5'],
							'ts' => $worksheet[$i]['6']
						);
						$this->db->insert('waktu_tunggu_lulusan', $data);
					}
					break;

				case '8.d.2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'jml_lulusan_terlacak' => $worksheet[$i]['0'],
							'jml_lulusan_terlacak_rendah' => $worksheet[$i]['1'],
							'jml_lulusan_terlacak_sedang'  => $worksheet[$i]['2'],
							'jml_lulusan_terlacak_tinggi'  => $worksheet[$i]['3'],
							'prodi' => $worksheet[$i]['4'],
							'ts' => $worksheet[$i]['5']
						);
						$this->db->insert('kesesuaian_bidang_kerja_lulusan', $data);
					}
					break;

				case '8.e.1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'jml_lulusan_terlacak' => $worksheet[$i]['0'],
							'jml_lulusan_terlacak_lokal' => $worksheet[$i]['1'],
							'jml_lulusan_terlacak_nasional' => $worksheet[$i]['2'],
							'jml_lulusan_terlacak_internasional' => $worksheet[$i]['3'],
							'prodi' => $worksheet[$i]['4'],
							'ts' => $worksheet[$i]['5']
						);
						$this->db->insert('tempat_kerja_lulusan', $data);
					}
					break;

				case '8.e.2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'jns_kemampuan' => $worksheet[$i]['0'],
							'sangat_baik' => $worksheet[$i]['1'],
							'baik' => $worksheet[$i]['2'],
							'cukup'  => $worksheet[$i]['3'],
							'kurang' => $worksheet[$i]['4'],
							'rencana_tindak_lanjut' => $worksheet[$i]['5'],
							'prodi' => $worksheet[$i]['6']
						);
						$this->db->insert('kepuasan_pengguna_lulusan', $data);
					}
					break;

				case '8.e.2.ref':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'ts' => $worksheet[$i]['0'],
							'jml_tanggapan_terlacak' => $worksheet[$i]['1'],
							'podi' => $worksheet[$i]['2']
						);
						$this->db->insert('ref_kepuasan_pelanggan_lulusan', $data);
					}
					break;

				case '8.f.1-1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'jenis_publikasi' => $worksheet[$i]['0'],
							'jml_judul' => $worksheet[$i]['1'],
							'th_akademik'  => $worksheet[$i]['2'],
							'prodi' => $worksheet[$i]['3']
						);
						$this->db->insert('publikasi_ilmiah_mhs', $data);
					}
					break;

				case '8.f.1-2':
					break;

				case '8.f.2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'judul_artikel_disitasi' => $worksheet[$i]['1'],
							'jumlah' => $worksheet[$i]['2'],
							'prodi' => $worksheet[$i]['3']
						);
						$this->db->insert('karya_ilmiah_disitasi_mhs', $data);
					}
					break;

				case '8.f.3':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_mhs' => $worksheet[$i]['0'],
							'nama_produk' => $worksheet[$i]['1'],
							'deskripsi' => $worksheet[$i]['2'],
							'bukti'  => $worksheet[$i]['3'],
							'tahun'  => $worksheet[$i]['4'],
							'prodi'  => $worksheet[$i]['5']
						);
						$this->db->insert('produk_dtps_mhs', $data);
					}
					break;

				case '8.f.4-1':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'nama_dosen' => $worksheet[$i]['0'],
							'nama_produk' => $worksheet[$i]['1'],
							'deskripsi' => $worksheet[$i]['2'],
							'bukti'  => $worksheet[$i]['3'],
							'prodi'  => $worksheet[$i]['4']
						);
						$this->db->insert('hki_paten_mhs', $data);
					}
					break;

				case '8.f.4-2':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $worksheet[$i]['0'],
							'luaran_penelitian' => $worksheet[$i]['1'],
							'th_perolehan' => $worksheet[$i]['2'],
							'keterangan' => $worksheet[$i]['3']
						);
						$this->db->insert('hki_hak_cipta_mhs', $data);
					}
					break;

				case '8.f.4-3':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'prodi' => $worksheet[$i]['0'],
							'luaran_penelitian' => $worksheet[$i]['1'],
							'th_perolehan' => $worksheet[$i]['2'],
							'keterangan' => $worksheet[$i]['3']
						);
						$this->db->insert('hki_teknologi_tepatguna_mhs', $data);
					}
					break;

				case '8.f.4-4':
					for ($i = 2; $i < ($numRows + 1); $i++) {
						$data = array(
							'luaran_penelitian' => $worksheet[$i]['0'],
							'th_perolehan' => $worksheet[$i]['1'],
							'keterangan' => $worksheet[$i]['2'],
							'prodi' => $worksheet[$i]['3']
						);
						$this->db->insert('buku_isbn_mhs', $data);
					}
					break;

				default:
						// code...
					break;
			}
			return $numRows - 1;
		} catch (Exception $e) {
			return ('Error loading file :' . $e->getMessage());
		}
	}
}