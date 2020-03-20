<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_upload extends CI_model
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_security');
    }
    
    function upload_excel($filename, $modul)
    {
        ini_set('memory_limit', '-1');
        $inputFileName = './assets/temp/' . $filename;
        
        try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
            $prodi       = $this->session->userdata('nama');
            $worksheet   = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
            $numRows     = count($worksheet);
            
            switch ($modul) {
                case '1-1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'prodi' => $worksheet[$i]["A"],
                            'lembaga_mitra' => $worksheet[$i]["B"],
                            'tingkat' => $worksheet[$i]["C"],
                            'judul_kegiatan' => $worksheet[$i]["D"],
                            'manfaat_bagi_ps' => $worksheet[$i]["E"],
                            'durasi' => $worksheet[$i]["F"],
                            'bukti_kerjasama' => $worksheet[$i]["G"],
                            'tahun_berakhir' => $worksheet[$i]["H"]
                        );
                        $this->db->insert('tridarma_pendidikan', $data);
                    }
                    break;
                case '1-2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'prodi' => $worksheet[$i]["A"],
                            'lembaga_mitra' => $worksheet[$i]["B"],
                            'tingkat' => $worksheet[$i]["C"],
                            'judul_kegiatan' => $worksheet[$i]["D"],
                            'manfaat_bagi_ps' => $worksheet[$i]["E"],
                            'durasi' => $worksheet[$i]["F"],
                            'bukti_kerjasama' => $worksheet[$i]["G"],
                            'tahun_berakhir' => $worksheet[$i]["H"]
                        );
                        $this->db->insert('tridarma_penelitian', $data);
                    }
                    break;
                case '1-3':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'prodi' => $worksheet[$i]["A"],
                            'lembaga_mitra' => $worksheet[$i]["B"],
                            'tingkat' => $worksheet[$i]["C"],
                            'judul_kegiatan' => $worksheet[$i]["D"],
                            'manfaat_bagi_ps' => $worksheet[$i]["E"],
                            'durasi' => $worksheet[$i]["F"],
                            'bukti_kerjasama' => $worksheet[$i]["G"],
                            'tahun_berakhir' => $worksheet[$i]["H"]
                        );
                        $this->db->insert('tridarma_pkm', $data);
                    }
                    break;
                case '3.a.1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'npd' => $worksheet[$i]["A"],
                            'nidn' => $worksheet[$i]["B"],
                            'nama' => $worksheet[$i]["C"],
                            'pendidikan_magister' => $worksheet[$i]["D"],
                            'pendidikan_doktor' => $worksheet[$i]["E"],
                            'bidang_keahlian' => $worksheet[$i]["F"],
                            'kesesuaian_kompetensi_inti_ps' => $worksheet[$i]["G"],
                            'jabatan_akademik' => $worksheet[$i]["H"],
                            'sertifikasi_profesional' => $worksheet[$i]["I"],
                            'sertifikasi_kompetensi' => $worksheet[$i]["J"],
                            'matakuliah_diampu' => $worksheet[$i]["K"],
                            'pendidikan_tertinggi	' => $worksheet[$i]["L"],
                            'matakuliah_diampu_ps_lain' => $worksheet[$i]["M"],
                            'kesesuaian_bidang_keahlian' => $worksheet[$i]["N"],
                            'status' => $worksheet[$i]["O"],
                            'prodi' => $worksheet[$i]["P"],
                            'sertifikasi' => $worksheet[$i]["Q"]
                        );
                        $this->db->insert('dosen', $data);
                    }
                    break;
                case '3.a.3':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nik_nidn' => $worksheet[$i]["A"],
                            'nama_dosen' => $worksheet[$i]["B"],
                            'dtps' => $worksheet[$i]["C"],
                            'ps_yang_diakreditasi' => $worksheet[$i]["D"],
                            'ps_lain_di_dalam_pt' => $worksheet[$i]["E"],
                            'ps_lain_di_luar_pt' => $worksheet[$i]["F"],
                            'penelitian' => $worksheet[$i]["G"],
                            'pkm' => $worksheet[$i]["H"],
                            'tugas_tambahan' => $worksheet[$i]["I"],
                            'prodi' => $worksheet[$i]["J"]
                        );
                        $this->db->insert('ekuivalen_dosen_mengajar', $data);
                    }
                    break;
                case '3.a.4':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'npd' => $worksheet[$i]["A"],
                            'nidn' => $worksheet[$i]["B"],
                            'nama' => $worksheet[$i]["C"],
                            'pendidikan_magister' => $worksheet[$i]["D"],
                            'bidang_keahlian' => $worksheet[$i]["E"],
                            'jabatan_akademik' => $worksheet[$i]["F"],
                            'sertifikasi_profesional' => $worksheet[$i]["G"],
                            'sertifikasi_kompetensi' => $worksheet[$i]["H"],
                            'matakuliah_diampu' => $worksheet[$i]["I"],
                            'pendidikan_tertinggi	' => $worksheet[$i]["J"],
                            'matakuliah_diampu_ps_lain' => $worksheet[$i]["K"],
                            'kesesuaian_bidang_keahlian' => $worksheet[$i]["L"],
                            'status' => $worksheet[$i]["M"],
                            'prodi' => $worksheet[$i]["N"]
                        );
                        $this->db->insert('dosen', $data);
                    }
                    break;
                case '3.a.5':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nik_nidn' => $worksheet[$i]["A"],
                            'nama_dosen' => $worksheet[$i]["B"],
                            'perusahaan' => $worksheet[$i]["C"],
                            'pendidikan_tertinggi' => $worksheet[$i]["D"],
                            'bidang_keahlian' => $worksheet[$i]["E"],
                            'sertifikat_profesi' => $worksheet[$i]["F"],
                            'matakuliah_diampu' => $worksheet[$i]["G"],
                            'sks' => $worksheet[$i]["H"],
                            'prodi' => $worksheet[$i]["I"]
                        );
                        $this->db->insert('dosen_praktisi', $data);
                    }
                    break;
                case '3.b.1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama' => $worksheet[$i]["A"],
                            'bidang_keahlian' => $worksheet[$i]["B"],
                            'bukti_pendukung' => $worksheet[$i]["C"],
                            'tingkat' => $worksheet[$i]["D"],
                            'tahun' => $worksheet[$i]["E"],
                            'prodi	' => $worksheet[$i]["F"]
                        );
                        $this->db->insert('rekognisi_dpts', $data);
                    }
                    break;
                case '3.b.2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'sumber_biaya' => $worksheet[$i]["A"],
                            'jml_judul' => $worksheet[$i]["B"],
                            'th_akademik' => $worksheet[$i]["C"],
                            'prodi' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('penelitian_dosen', $data);
                    }
                    break;
                case '3.b.3':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'sumber_biaya' => $worksheet[$i]["A"],
                            'jml_judul' => $worksheet[$i]["B"],
                            'th_akademik' => $worksheet[$i]["C"],
                            'prodi' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('pkm_dosen', $data);
                    }
                    break;
                case '3.b.4-1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'jenis_publikasi' => $worksheet[$i]["A"],
                            'jml_judul' => $worksheet[$i]["B"],
                            'th_akademik' => $worksheet[$i]["C"],
                            'prodi' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('publikasi_ilmiah', $data);
                    }
                    break;
                case '3.b.4-2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'jenis_publikasi' => $worksheet[$i]["A"],
                            'jml_judul' => $worksheet[$i]["B"],
                            'th_akademik' => $worksheet[$i]["C"],
                            'prodi' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('pagelaran_ilmiah', $data);
                    }
                    break;
                case '3.b.6':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_dosen' => $worksheet[$i]["A"],
                            'nama_produk' => $worksheet[$i]["B"],
                            'deskripsi' => $worksheet[$i]["C"],
                            'bukti' => $worksheet[$i]["D"],
                            'prodi' => $worksheet[$i]["E"]
                        );
                        $this->db->insert('produk_dtps', $data);
                    }
                    break;
                case '3.b.7-1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_dosen' => $worksheet[$i]["A"],
                            'nama_produk' => $worksheet[$i]["B"],
                            'deskripsi' => $worksheet[$i]["C"],
                            'bukti' => $worksheet[$i]["D"],
                            'prodi' => $worksheet[$i]["E"]
                        );
                        $this->db->insert('hki_paten', $data);
                    }
                    break;
                case '3.b.7-2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'prodi' => $worksheet[$i]["A"],
                            'luaran_penelitian' => $worksheet[$i]["B"],
                            'th_perolehan' => $worksheet[$i]["C"],
                            'keterangan' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('hki_hak_cipta', $data);
                    }
                    break;
                case '3.b.7-3':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'prodi' => $worksheet[$i]["A"],
                            'luaran_penelitian' => $worksheet[$i]["B"],
                            'th_perolehan' => $worksheet[$i]["C"],
                            'keterangan' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('hki_teknologi_tepatguna', $data);
                    }
                    break;
                case '3.b.7-4':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'luaran_penelitian' => $worksheet[$i]["A"],
                            'th_perolehan' => $worksheet[$i]["B"],
                            'keterangan' => $worksheet[$i]["C"],
                            'prodi' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('buku_isbn', $data);
                    }
                    break;
                case '5.a':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'semester' => $worksheet[$i]["A"],
                            'kode_matkul' => $worksheet[$i]["B"],
                            'nama_matkul' => $worksheet[$i]["C"],
                            'matkul_kopetensi' => $worksheet[$i]["D"],
                            'kuliah' => $worksheet[$i]["E"],
                            'seminar' => $worksheet[$i]["F"],
                            'praktikum' => $worksheet[$i]["G"],
                            'konversi_jam' => $worksheet[$i]["H"],
                            'sikap' => $worksheet[$i]["I"],
                            'pengetahuan' => $worksheet[$i]["J"],
                            'keterampilan_umum' => $worksheet[$i]["K"],
                            'keterampilan_khusus	' => $worksheet[$i]["L"],
                            'dokumen_pembelajaran' => $worksheet[$i]["M"],
                            'unit_penyelenggara' => $worksheet[$i]["N"],
                            'prodi' => $worksheet[$i]["O"]
                        );
                        $this->db->insert('kurikulum', $data);
                    }
                    break;
                case '5.b':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'judul' => $worksheet[$i]["A"],
                            'nama_dosen' => $worksheet[$i]["B"],
                            'matkul' => $worksheet[$i]["C"],
                            'bentuk_integrasi' => $worksheet[$i]["D"],
                            'tahun' => $worksheet[$i]["E"],
                            'prodi' => $worksheet[$i]["F"]
                        );
                        $this->db->insert('integrasi_pkm', $data);
                    }
                    break;
                case '5.c':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'aspek_ukuran' => $worksheet[$i]["A"],
                            'sangat_baik' => $worksheet[$i]["B"],
                            'baik' => $worksheet[$i]["C"],
                            'cukup' => $worksheet[$i]["D"],
                            'kurang' => $worksheet[$i]["E"],
                            'rencana_tindaklanjut' => $worksheet[$i]["F"],
                            'prodi' => $worksheet[$i]["G"]
                        );
                        $this->db->insert('kepuasan_pelanggan', $data);
                    }
                    break;
                case '6.a':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_dosen' => $worksheet[$i]["A"],
                            'tema_penelitian' => $worksheet[$i]["B"],
                            'nama_mhs' => $worksheet[$i]["C"],
                            'judul_kegiatan' => $worksheet[$i]["D"],
                            'tahun' => $worksheet[$i]["E"],
                            'prodi' => $worksheet[$i]["F"]
                        );
                        $this->db->insert('penelitian_dosen_mhs', $data);
                    }
                    break;
                case '6.b':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_dosen' => $worksheet[$i]["A"],
                            'tema_penelitian' => $worksheet[$i]["B"],
                            'nama_mhs' => $worksheet[$i]["C"],
                            'judul_kegiatan' => $worksheet[$i]["D"],
                            'tahun' => $worksheet[$i]["E"],
                            'prodi' => $worksheet[$i]["F"]
                        );
                        $this->db->insert('penelitian_mhs_tesis', $data);
                    }
                    break;
                case '7':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_dosen' => $worksheet[$i]["A"],
                            'tema_penelitian' => $worksheet[$i]["B"],
                            'nama_mhs' => $worksheet[$i]["C"],
                            'judul_kegiatan' => $worksheet[$i]["D"],
                            'tahun' => $worksheet[$i]["E"],
                            'prodi' => $worksheet[$i]["F"]
                        );
                        $this->db->insert('pkm_dosen_mhs', $data);
                    }
                    break;
                case '8.b.1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_kegiatan' => $worksheet[$i]["A"],
                            'waktu' => $worksheet[$i]["B"],
                            'tingkat' => $worksheet[$i]["C"],
                            'prestasi' => $worksheet[$i]["D"],
                            'prodi' => $worksheet[$i]["E"]
                        );
                        $this->db->insert('prestasi_akad_mhs', $data);
                    }
                    break;
                case '8.b.2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_kegiatan' => $worksheet[$i]["A"],
                            'waktu' => $worksheet[$i]["B"],
                            'tingkat' => $worksheet[$i]["C"],
                            'prestasi' => $worksheet[$i]["D"],
                            'prodi' => $worksheet[$i]["E"]
                        );
                        $this->db->insert('prestasi_non_akad_mhs', $data);
                    }
                    break;
                case '8.d.1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'jml_lulusan_terlacak' => $worksheet[$i]["A"],
                            'jml_lulusan_dipesan' => $worksheet[$i]["B"],
                            'wt_dibawah_3bln' => $worksheet[$i]["C"],
                            'wt_3sd6_bulan' => $worksheet[$i]["D"],
                            'wt_diatas_6bulan' => $worksheet[$i]["E"],
                            'prodi' => $worksheet[$i]["F"],
                            'ts' => $worksheet[$i]["G"]
                        );
                        $this->db->insert('waktu_tunggu_lulusan', $data);
                    }
                    break;
                case '8.d.2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'jml_lulusan_terlacak' => $worksheet[$i]["A"],
                            'jml_lulusan_terlacak_rendah' => $worksheet[$i]["B"],
                            'jml_lulusan_terlacak_sedang' => $worksheet[$i]["C"],
                            'jml_lulusan_terlacak_tinggi' => $worksheet[$i]["D"],
                            'prodi' => $worksheet[$i]["E"],
                            'ts' => $worksheet[$i]["F"]
                        );
                        $this->db->insert('kesesuaian_bidang_kerja_lulusan', $data);
                    }
                    break;
                case '8.e.1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'jml_lulusan_terlacak' => $worksheet[$i]["A"],
                            'jml_lulusan_terlacak_lokal' => $worksheet[$i]["B"],
                            'jml_lulusan_terlacak_nasional' => $worksheet[$i]["C"],
                            'jml_lulusan_terlacak_internasional' => $worksheet[$i]["D"],
                            'prodi' => $worksheet[$i]["E"],
                            'ts' => $worksheet[$i]["F"]
                        );
                        $this->db->insert('tempat_kerja_lulusan', $data);
                    }
                    break;
                case '8.e.2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'jns_kemampuan' => $worksheet[$i]["A"],
                            'sangat_baik' => $worksheet[$i]["B"],
                            'baik' => $worksheet[$i]["C"],
                            'cukup' => $worksheet[$i]["D"],
                            'kurang' => $worksheet[$i]["E"],
                            'rencana_tindak_lanjut' => $worksheet[$i]["F"],
                            'prodi' => $worksheet[$i]["G"]
                        );
                        $this->db->insert('kepuasan_pengguna_lulusan', $data);
                    }
                    break;
                case '8.e.2.ref':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'ts' => $worksheet[$i]["A"],
                            'jml_tanggapan_terlacak' => $worksheet[$i]["B"],
                            'podi' => $worksheet[$i]["C"]
                        );
                        $this->db->insert('ref_kepuasan_pelanggan_lulusan', $data);
                    }
                    break;
                case '8.f.1-1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'jenis_publikasi' => $worksheet[$i]["A"],
                            'jml_judul' => $worksheet[$i]["B"],
                            'th_akademik' => $worksheet[$i]["C"],
                            'prodi' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('publikasi_ilmiah_mhs', $data);
                    }
                    break;
                case '8.f.1-2':
                    break;
                case '8.f.2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_dosen' => $worksheet[$i]["A"],
                            'judul_artikel_disitasi' => $worksheet[$i]["B"],
                            'jumlah' => $worksheet[$i]["C"],
                            'prodi' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('karya_ilmiah_disitasi_mhs', $data);
                    }
                    break;
                case '8.f.3':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_mhs' => $worksheet[$i]["A"],
                            'nama_produk' => $worksheet[$i]["B"],
                            'deskripsi' => $worksheet[$i]["C"],
                            'bukti' => $worksheet[$i]["D"],
                            'prodi' => $worksheet[$i]["E"]
                        );
                        $this->db->insert('produk_dtps_mhs', $data);
                    }
                    break;
                case '8.f.4-1':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'nama_dosen' => $worksheet[$i]["A"],
                            'nama_produk' => $worksheet[$i]["B"],
                            'deskripsi' => $worksheet[$i]["C"],
                            'bukti' => $worksheet[$i]["D"],
                            'prodi' => $worksheet[$i]["E"]
                        );
                        $this->db->insert('hki_paten_mhs', $data);
                    }
                    break;
                case '8.f.4-2':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'prodi' => $worksheet[$i]["A"],
                            'luaran_penelitian' => $worksheet[$i]["B"],
                            'th_perolehan' => $worksheet[$i]["C"],
                            'keterangan' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('hki_hak_cipta_mhs', $data);
                    }
                    break;
                case '8.f.4-3':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'prodi' => $worksheet[$i]["A"],
                            'luaran_penelitian' => $worksheet[$i]["B"],
                            'th_perolehan' => $worksheet[$i]["C"],
                            'keterangan' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('hki_teknologi_tepatguna_mhs', $data);
                    }
                    break;
                case '8.f.4-4':
                    for ($i = 2; $i < ($numRows + 1); $i++) {
                        $data = array(
                            'luaran_penelitian' => $worksheet[$i]["A"],
                            'th_perolehan' => $worksheet[$i]["B"],
                            'keterangan' => $worksheet[$i]["C"],
                            'prodi' => $worksheet[$i]["D"]
                        );
                        $this->db->insert('buku_isbn_mhs', $data);
                    }
                    break;
                default:
                    // code...
                    break;
            }
            return $numRows - 1;
        }
        catch (Exception $e) {
            return ('Error loading file :' . $e->getMessage());
        }
    }
}
