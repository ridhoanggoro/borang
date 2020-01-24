<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_upload extends CI_model {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
	}

  function upload_excel($filename, $modul){
    ini_set('memory_limit', '-1');
    $inputFileName = './assets/temp/'.$filename;

    try {
        $objPHPExcel    = PHPExcel_IOFactory::load($inputFileName);
        $prodi          = $this->session->userdata('nama');
        $worksheet      = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows        = count($worksheet);

				switch ($modul) {
					case '1-1':
  					for ($i=2; $i < ($numRows+1) ; $i++)
  					{
              $data = array(
              'prodi' => $worksheet[$i]["A"],
              'lembaga_mitra' => $worksheet[$i]["B"],
              'tingkat'  => $worksheet[$i]["C"],
              'judul_kegiatan'  => $worksheet[$i]["D"],
              'manfaat_bagi_ps'=> $worksheet[$i]["E"],
              'durasi'  => $worksheet[$i]["F"],
              'bukti_kerjasama' => $worksheet[$i]["G"],
              'tahun_berakhir'=> $worksheet[$i]["H"]);
              $this->db->insert('tridarma_pendidikan', $data);
  					}
  					break;
          case '1-2':
  					for ($i=2; $i < ($numRows+1) ; $i++)
  					{
              $data = array(
              'prodi' => $worksheet[$i]["A"],
              'lembaga_mitra' => $worksheet[$i]["B"],
              'tingkat'  => $worksheet[$i]["C"],
              'judul_kegiatan'  => $worksheet[$i]["D"],
              'manfaat_bagi_ps'=> $worksheet[$i]["E"],
              'durasi'  => $worksheet[$i]["F"],
              'bukti_kerjasama' => $worksheet[$i]["G"],
              'tahun_berakhir'=> $worksheet[$i]["H"]);
              $this->db->insert('tridarma_penelitian', $data);
  					}
  					break;
          case '1-3':
  					for ($i=2; $i < ($numRows+1) ; $i++)
  					{
              $data = array(
              'prodi' => $worksheet[$i]["A"],
              'lembaga_mitra' => $worksheet[$i]["B"],
              'tingkat'  => $worksheet[$i]["C"],
              'judul_kegiatan'  => $worksheet[$i]["D"],
              'manfaat_bagi_ps'=> $worksheet[$i]["E"],
              'durasi'  => $worksheet[$i]["F"],
              'bukti_kerjasama' => $worksheet[$i]["G"],
              'tahun_berakhir'=> $worksheet[$i]["H"]);
              $this->db->insert('tridarma_pkm', $data);
  					}
  					break;
          case '3.a.1':
  					for ($i=2; $i < ($numRows+1) ; $i++)
  					{
              $data = array(
                'npd' => $worksheet[$i]["A"],
                'nidn' => $worksheet[$i]["B"],
          			'nama'  => $worksheet[$i]["C"],
            		'pendidikan_magister'  => $worksheet[$i]["D"],
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
					default:
						// code...
						break;
				}
				return $numRows-1;
			}
			catch (Exception $e) {
            return ('Error loading file :' . $e->getMessage());
      }
		}
}
