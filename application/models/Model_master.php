<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_master extends CI_model {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_security');
	}

	function tridharma_pendidikan_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `tridarma_pendidikan` WHERE prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function tridharma_pendidikan_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'prodi' => $prodi,
			'lembaga_mitra'  => $this->input->post('lembaga_mitra'),
      		'tingkat'  => $this->input->post('tingkat'),
      		'judul_kegiatan' => $this->input->post('judul_kegiatan'),
      		'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
			'durasi' => $this->input->post('durasi'),
			'bukti_kerjasama' => $this->input->post('bukti'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir')
		);
		$result = $this->db->insert('tridarma_pendidikan', $data);
		return $result;
	}

	function tridharma_pendidikan_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
    		'prodi' => $prodi,
			'lembaga_mitra'  => $this->input->post('lembaga_mitra'),
		    'tingkat'  => $this->input->post('tingkat'),
		    'judul_kegiatan' => $this->input->post('judul_kegiatan'),
		    'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
			'durasi' => $this->input->post('durasi'),
			'bukti_kerjasama' => $this->input->post('bukti'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir')
		);
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->update('tridarma_pendidikan', $data);
    	return $result;
	}

	function tridharma_pendidikan_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('tridarma_pendidikan');
   	 	return $result;
	}

	function tridharma_penelitian_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `tridarma_penelitian` WHERE prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function tridharma_penelitian_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'prodi' => $prodi,
			'lembaga_mitra'  => $this->input->post('lembaga_mitra'),
      		'tingkat'  => $this->input->post('tingkat'),
      		'judul_kegiatan' => $this->input->post('judul_kegiatan'),
      		'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
			'durasi' => $this->input->post('durasi'),
			'bukti_kerjasama' => $this->input->post('bukti'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir')
		);
		$result = $this->db->insert('tridarma_penelitian', $data);
		return $result;
	}

	function tridharma_penelitian_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
			'prodi' => $prodi,
			'lembaga_mitra'  => $this->input->post('lembaga_mitra'),
      		'tingkat'  => $this->input->post('tingkat'),
      		'judul_kegiatan' => $this->input->post('judul_kegiatan'),
      		'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
			'durasi' => $this->input->post('durasi'),
			'bukti_kerjasama' => $this->input->post('bukti'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir')
    	);
    	$this->db->where('seq_id', $seq_id);
    	$result = $this->db->update('tridarma_penelitian', $data);
    	return $result;
	}

	function tridharma_penelitian_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
	    $result = $this->db->delete('tridarma_penelitian');
	    return $result;
	}

	function tridharma_pkm_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `tridarma_pkm` WHERE prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function tridharma_pkm_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'prodi' => $prodi,
			'lembaga_mitra'  => $this->input->post('lembaga_mitra'),
		    'tingkat'  => $this->input->post('tingkat'),
		    'judul_kegiatan' => $this->input->post('judul_kegiatan'),
		    'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
			'durasi' => $this->input->post('durasi'),
			'bukti_kerjasama' => $this->input->post('bukti'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir')
		);
		$result = $this->db->insert('tridarma_pkm', $data);
		return $result;
	}

	function tridharma_pkm_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
			'prodi' => $prodi,
			'lembaga_mitra'  => $this->input->post('lembaga_mitra'),
      		'tingkat'  => $this->input->post('tingkat'),
      		'judul_kegiatan' => $this->input->post('judul_kegiatan'),
      		'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
			'durasi' => $this->input->post('durasi'),
			'bukti_kerjasama' => $this->input->post('bukti'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir')
    	);
    	$this->db->where('seq_id', $seq_id);
    	$result = $this->db->update('tridarma_pkm', $data);
    	return $result;
	}

	function tridharma_pkm_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('tridarma_pkm');
    	return $result;
	}

	function seleksi_mahasiswa_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT seq_id, nama_ts, SUM(daya_tampung) AS daya_tampung, SUM(pendaftar) AS pendaftar, SUM(lulus) AS lulus, SUM(reguler) AS reguler, SUM(pindahan) AS pindahan, SUM(aktif_reguler) AS aktif_reguler, SUM(aktif_pindahan) AS aktif_pindahan FROM( SELECT a.seq_id, a.nama_ts, a.daya_tampung, a.lulus+a.tidak_lulus AS pendaftar, a.lulus, 0 AS reguler, 0 AS pindahan, 0 AS aktif_reguler, 0 AS aktif_pindahan FROM ( SELECT t.seq_id, ts.nama_ts, t.daya_tampung, SUM( CASE WHEN c.hasil = 'LULUS' THEN 1 ELSE 0 END) AS 'lulus', SUM( CASE WHEN c.hasil = 'TIDAK LULUS' THEN 1 ELSE 0 END ) AS 'tidak_lulus' FROM `calon_mahasiswa` c INNER JOIN ts ON ts.tahun = LEFT(c.thn_akademik, 4) AND ts.prodi = '$role' INNER JOIN tbl_2a t ON t.thn_akademik = ts.nama_ts AND t.prodi = '$role' WHERE c.prodi = '$role' GROUP BY ts.nama_ts ORDER BY ts.seq_id DESC ) a UNION ALL SELECT '' AS seq_id, b.nama_ts, 0 AS daya_tampung, 0 AS pendaftar, 0 AS lulus, b.reguler, b.pindahan, 0 AS aktif_reguler, 0 AS aktif_pindahan FROM ( SELECT ts.nama_ts, SUM( CASE WHEN m.status_asal = 'REGULER' THEN 1 ELSE 0 END ) AS 'reguler', SUM( CASE WHEN m.status_asal = 'PINDAHAN' THEN 1 ELSE 0 END ) AS 'pindahan' FROM mahasiswa m INNER JOIN ts ON ts.tahun = m.thn_akademik AND ts.prodi = '$role' WHERE m.prodi = '$role' GROUP BY ts.nama_ts ORDER BY ts.seq_id DESC ) b UNION ALL SELECT '' AS seq_id, c.nama_ts, 0 AS daya_tampung, 0 AS pendaftar, 0 AS lulus, 0 AS reguler, 0 AS pindahan, c.aktif_reguler, c.aktif_pindahan FROM ( SELECT ts.nama_ts, SUM( CASE WHEN m.status_asal = 'REGULER' THEN 1 ELSE 0 END ) AS 'aktif_reguler', SUM( CASE WHEN m.status_asal = 'PINDAHAN' THEN 1 ELSE 0 END ) AS 'aktif_pindahan' FROM ( SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a WHERE a.prodi = '$role' AND a.status = 'AKTIF' GROUP BY nim, LEFT(th_akademik, 4) ) s INNER JOIN mahasiswa m ON m.nim = s.nim INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = '$role' GROUP BY ts.nama_ts ORDER BY ts.seq_id DESC ) c ) main GROUP BY nama_ts ORDER BY seq_id DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function seleksi_mahasiswa_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
  	$data = array(
			'daya_tampung' => $this->input->post('daya_tampung')
  	);
  	$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('tbl_2a', $data);
  	return $result;
	}

	function mahasiswa_asing_list(){
		$role= $this->session->userdata('nama');
		$sql="SELECT m.prodi, SUM(TS_2) AS 'ts_2', SUM(TS_1) AS 'ts_1', SUM(TS) AS 'ts', z.* FROM(SELECT ts.prodi, COUNT(s.nim) AS 'TS_2', 0 AS 'TS_1', 0 AS 'TS' FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a WHERE a.prodi = '$role' AND a.status = 'AKTIF' GROUP BY nim, LEFT(th_akademik, 4)) s INNER JOIN mahasiswa m ON m.nim = s.nim INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = '$role' AND ts.nama_ts='TS-2' GROUP BY ts.nama_ts UNION ALL SELECT ts.prodi,0 AS 'TS_2', COUNT(s.nim) AS 'TS_1', 0 AS 'TS' FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a WHERE a.prodi = '$role' AND a.status = 'AKTIF' GROUP BY nim, LEFT(th_akademik, 4)) s INNER JOIN mahasiswa m ON m.nim = s.nim INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = '$role' AND ts.nama_ts='TS-1' GROUP BY ts.nama_ts UNION ALL SELECT ts.prodi,0 AS 'TS_2', 0 AS 'TS_1', COUNT(s.nim) AS 'TS' FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a WHERE a.prodi = '$role' AND a.status = 'AKTIF' GROUP BY nim, LEFT(th_akademik, 4)) s INNER JOIN mahasiswa m ON m.nim = s.nim INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = '$role' AND ts.nama_ts='TS' GROUP BY ts.nama_ts) m LEFT OUTER JOIN tbl_2b z ON m.prodi=z.prodi";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function mahasiswa_asing_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
  	$data = array(
			'asing_fulltime_ts2' => $this->input->post('asing_fulltime_ts2'),
			'asing_fulltime_ts1' => $this->input->post('asing_fulltime_ts1'),
			'asing_fulltime_ts' => $this->input->post('asing_fulltime_ts'),
			'asing_partime_ts2' => $this->input->post('asing_partime_ts2'),
			'asing_partime_ts1' => $this->input->post('asing_partime_ts1'),
			'asing_partime_ts' => $this->input->post('asing_partime_ts'),
  	);
  	$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('tbl_2b', $data);
  	return $result;
	}

	function dosen_tetap_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *, CASE WHEN kesesuaian_kompetensi_inti_ps='YA' THEN 'V' ELSE '' END AS chk_kesesuaian_kompetensi, CASE WHEN kesesuaian_bidang_keahlian='YA' THEN 'V' ELSE '' END AS chk_kesesuaian_keahlian FROM `dosen` WHERE prodi='$role' AND status='TETAP'";

		$data = $this->db->query($sql);
		return $data->result();
	}

	function dosen_tetap_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nidn' => $this->input->post('nidn'),
			'nama'  => $this->input->post('nama'),
  		'pendidikan_magister'  => $this->input->post('pendidikan_magister'),
  		'pendidikan_doktor' => $this->input->post('pendidikan_doktor'),
  		'bidang_keahlian' => $this->input->post('bidang_keahlian'),
			'kesesuaian_kompetensi_inti_ps' => $this->input->post('kesesuaian_kompetensi_inti_ps'),
			'jabatan_akademik' => $this->input->post('jabatan_akademik'),
			'sertifikasi_profesional' => $this->input->post('sertifikasi_profesional'),
			'sertifikasi_kompetensi' => $this->input->post('sertifikasi_kompetensi'),
			'matakuliah_diampu' => $this->input->post('matakuliah_diampu'),
			'kesesuaian_bidang_keahlian' => $this->input->post('kesesuaian_bidang_keahlian'),
			'matakuliah_diampu_ps_lain' => $this->input->post('matakuliah_diampu_ps_lain'),
			'prodi' => $prodi,
			'status' => 'TETAP'
		);
		$result = $this->db->insert('dosen', $data);
		return $result;
	}

	function dosen_tetap_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
				'nidn' => $this->input->post('nidn'),
				'nama'  => $this->input->post('nama'),
	  		'pendidikan_magister'  => $this->input->post('pendidikan_magister'),
	  		'pendidikan_doktor' => $this->input->post('pendidikan_doktor'),
	  		'bidang_keahlian' => $this->input->post('bidang_keahlian'),
				'kesesuaian_kompetensi_inti_ps' => $this->input->post('kesesuaian_kompetensi_inti_ps'),
				'jabatan_akademik' => $this->input->post('jabatan_akademik'),
				'sertifikasi_profesional' => $this->input->post('sertifikasi_profesional'),
				'sertifikasi_kompetensi' => $this->input->post('sertifikasi_kompetensi'),
				'matakuliah_diampu' => $this->input->post('matakuliah_diampu'),
				'kesesuaian_bidang_keahlian' => $this->input->post('kesesuaian_bidang_keahlian'),
				'matakuliah_diampu_ps_lain' => $this->input->post('matakuliah_diampu_ps_lain'),
				'prodi' => $prodi,
				'status' => 'TETAP'
			);
			$this->db->where('seq_id', $seq_id);
    	$result = $this->db->update('dosen', $data);
    	return $result;
	}

	function dosen_tetap_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('dosen');
   	 	return $result;
	}

	function dosen_pa_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT d.nama, SUM(CASE WHEN(pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts2.tahun) THEN 1 ELSE 0 END) AS ps_sendiri_ts2, SUM(CASE WHEN (pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts1.tahun) THEN 1 ELSE 0 END) AS ps_sendiri_ts1, SUM(CASE WHEN (pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts.tahun) THEN 1 ELSE 0 END) AS ps_sendiri_ts, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts2.tahun) THEN 1 ELSE 0 END) AS ps_lain_ts2, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts1.tahun) THEN 1 ELSE 0 END) AS ps_lain_ts1, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts.tahun) THEN 1 ELSE 0 END) AS ps_lain_ts FROM dosen_pa pa INNER JOIN dosen d on d.nidn=pa.nik_nidn_pembimbing LEFT JOIN ts AS ts2 ON ts2.tahun=pa.th_akademik and ts2.prodi='$role' AND ts2.nama_ts='TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun=pa.th_akademik and ts1.prodi='$role' AND ts1.nama_ts='TS-1' LEFT JOIN ts ON ts.tahun=pa.th_akademik and ts.prodi='$role' AND ts.nama_ts='TS' GROUP BY d.nama";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function ewmp_data_list(){
		$role = $this->session->userdata('nama');
		$sql="SELECT a.*, dosen.nama FROM `ekuivalen_dosen_mengajar` a INNER JOIN dosen on dosen.nidn=a.nik_nidn WHERE a.prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function dosen_list()
	{
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$this->db->order_by('nama', 'ASC');
		$data = $this->db->get('dosen');
		return $data;
	}

	function ewmp_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nik_nidn' => $this->input->post('nik_nidn'),
			'dtps'  => $this->input->post('dtps'),
  		'ps_yang_diakreditasi'  => $this->input->post('ps_yang_diakreditasi'),
  		'ps_lain_di_dalam_pt' => $this->input->post('ps_lain_di_dalam_pt'),
  		'ps_lain_di_luar_pt' => $this->input->post('ps_lain_di_luar_pt'),
			'penelitian' => $this->input->post('penelitian'),
			'pkm' => $this->input->post('pkm'),
			'tugas_tambahan' => $this->input->post('tugas_tambahan'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('ekuivalen_dosen_mengajar', $data);
		return $result;
	}

	function ewmp_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
				'nik_nidn' => $this->input->post('nik_nidn'),
				'dtps'  => $this->input->post('dtps'),
	  		'ps_yang_diakreditasi'  => $this->input->post('ps_yang_diakreditasi'),
	  		'ps_lain_di_dalam_pt' => $this->input->post('ps_lain_di_dalam_pt'),
	  		'ps_lain_di_luar_pt' => $this->input->post('ps_lain_di_luar_pt'),
				'penelitian' => $this->input->post('penelitian'),
				'pkm' => $this->input->post('pkm'),
				'tugas_tambahan' => $this->input->post('tugas_tambahan'),
				'prodi' => $prodi
			);
			$this->db->where('seq_id', $seq_id);
    	$result = $this->db->update('ekuivalen_dosen_mengajar', $data);
    	return $result;
	}

	function ewmp_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('ekuivalen_dosen_mengajar');
   	 	return $result;
	}

	function dosen_tdk_tetap_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *, CASE WHEN kesesuaian_kompetensi_inti_ps='YA' THEN 'V' ELSE '' END AS chk_kesesuaian_kompetensi, CASE WHEN kesesuaian_bidang_keahlian='YA' THEN 'V' ELSE '' END AS chk_kesesuaian_keahlian FROM `dosen` WHERE prodi='$role' AND status='TIDAK TETAP'";

		$data = $this->db->query($sql);
		return $data->result();
	}

	function dosen_tdk_tetap_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nidn' => $this->input->post('nidn'),
			'nama'  => $this->input->post('nama'),
  		'pendidikan_magister'  => $this->input->post('pendidikan_magister'),
  		'pendidikan_doktor' => $this->input->post('pendidikan_doktor'),
  		'bidang_keahlian' => $this->input->post('bidang_keahlian'),
			'kesesuaian_kompetensi_inti_ps' => $this->input->post('kesesuaian_kompetensi_inti_ps'),
			'jabatan_akademik' => $this->input->post('jabatan_akademik'),
			'sertifikasi_profesional' => $this->input->post('sertifikasi_profesional'),
			'sertifikasi_kompetensi' => $this->input->post('sertifikasi_kompetensi'),
			'matakuliah_diampu' => $this->input->post('matakuliah_diampu'),
			'kesesuaian_bidang_keahlian' => $this->input->post('kesesuaian_bidang_keahlian'),
			'matakuliah_diampu_ps_lain' => $this->input->post('matakuliah_diampu_ps_lain'),
			'prodi' => $prodi,
			'status' => 'TIDAK TETAP'
		);
		$result = $this->db->insert('dosen', $data);
		return $result;
	}

	function dosen_tdk_tetap_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
				'nidn' => $this->input->post('nidn'),
				'nama'  => $this->input->post('nama'),
	  		'pendidikan_magister'  => $this->input->post('pendidikan_magister'),
	  		'pendidikan_doktor' => $this->input->post('pendidikan_doktor'),
	  		'bidang_keahlian' => $this->input->post('bidang_keahlian'),
				'kesesuaian_kompetensi_inti_ps' => $this->input->post('kesesuaian_kompetensi_inti_ps'),
				'jabatan_akademik' => $this->input->post('jabatan_akademik'),
				'sertifikasi_profesional' => $this->input->post('sertifikasi_profesional'),
				'sertifikasi_kompetensi' => $this->input->post('sertifikasi_kompetensi'),
				'matakuliah_diampu' => $this->input->post('matakuliah_diampu'),
				'kesesuaian_bidang_keahlian' => $this->input->post('kesesuaian_bidang_keahlian'),
				'matakuliah_diampu_ps_lain' => $this->input->post('matakuliah_diampu_ps_lain'),
				'prodi' => $prodi,
				'status' => 'TIDAK TETAP'
			);
			$this->db->where('seq_id', $seq_id);
    	$result = $this->db->update('dosen', $data);
    	return $result;
	}

	function dosen_tdk_tetap_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->delete('dosen');
 	 	return $result;
	}

	function dosen_praktisi_data_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('dosen_praktisi');
		return $data->result();
	}

	function dosen_praktisi_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nik_nidn' => $this->input->post('nik_nidn'),
			'nama_dosen'  => $this->input->post('nama'),
  		'perusahaan'  => $this->input->post('perusahaan'),
  		'pendidikan_tertinggi' => $this->input->post('pendidikan_tertinggi'),
  		'bidang_keahlian' => $this->input->post('bidang_keahlian'),
			'sertifikat_profesi' => $this->input->post('sertifikat_profesi'),
			'matakuliah_diampu' => $this->input->post('matakuliah_diampu'),
			'sks' => $this->input->post('sks'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('dosen_praktisi', $data);
		return $result;
	}

	function dosen_praktisi_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
				'nik_nidn' => $this->input->post('nik_nidn'),
				'nama_dosen'  => $this->input->post('nama_dosen'),
	  		'perusahaan'  => $this->input->post('perusahaan'),
	  		'pendidikan_tertinggi' => $this->input->post('pendidikan_tertinggi'),
	  		'bidang_keahlian' => $this->input->post('bidang_keahlian'),
				'sertifikat_profesi' => $this->input->post('sertifikat_profesi'),
				'matakuliah_diampu' => $this->input->post('matakuliah_diampu'),
				'sks' => $this->input->post('sks'),
				'prodi' => $prodi
			);
			$this->db->where('seq_id', $seq_id);
    	$result = $this->db->update('dosen_praktisi', $data);
    	return $result;
	}

	function dosen_praktisi_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('dosen_praktisi');
   	 	return $result;
	}

	function rekognisi_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *, CASE WHEN tingkat='Wilayah' THEN 'V' ELSE '' END AS 'Wilayah', CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS 'Nasional', CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS 'Internasional' FROM `rekognisi_dpts` WHERE prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function rekognisi_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama'  => $this->input->post('nama'),
  		'bidang_keahlian'  => $this->input->post('bidang_keahlian'),
  		'bukti_pendukung' => $this->input->post('bukti_pendukung'),
  		'tingkat' => $this->input->post('tingkat'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('rekognisi_dpts', $data);
		return $result;
	}

	function rekognisi_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'nama'  => $this->input->post('nama'),
  		'bidang_keahlian'  => $this->input->post('bidang_keahlian'),
  		'bukti_pendukung' => $this->input->post('bukti_pendukung'),
  		'tingkat' => $this->input->post('tingkat'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('rekognisi_dpts', $data);
  	return $result;
	}

	function rekognisi_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('rekognisi_dpts');
   	 	return $result;
	}

	function penelitian_dtps_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT CASE WHEN main.sumber_biaya='mandiri-perguruan tinggi' THEN 'a) Perguruan tinggi<p>b) Mandiri' WHEN main.sumber_biaya='lembaga dalam negeri' THEN 'Lembaga dalam negeri (diluar PT)' ELSE 'Lembaga luar negeri' END AS sumber_biaya, main.ts2, main.ts1, main.ts FROM (SELECT pa.sumber_biaya, SUM(CASE WHEN(pa.th_akademik = ts2.tahun) THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(pa.th_akademik = ts1.tahun) THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(pa.th_akademik = ts.tahun) THEN jml_judul ELSE 0 END) AS ts FROM penelitian_dosen pa LEFT JOIN ts AS ts2 ON ts2.tahun = pa.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = pa.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = pa.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE pa.prodi='$role' GROUP BY pa.sumber_biaya) main";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function pkm_dtps_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT CASE WHEN main.sumber_biaya='mandiri-perguruan tinggi' THEN 'a) Perguruan tinggi<p>b) Mandiri' WHEN main.sumber_biaya='lembaga dalam negeri' THEN 'Lembaga dalam negeri (diluar PT)' ELSE 'Lembaga luar negeri' END AS sumber_biaya, main.ts2, main.ts1, main.ts FROM (SELECT pa.sumber_biaya, SUM(CASE WHEN(pa.th_akademik = ts2.tahun) THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(pa.th_akademik = ts1.tahun) THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(pa.th_akademik = ts.tahun) THEN jml_judul ELSE 0 END) AS ts FROM pkm_dosen pa LEFT JOIN ts AS ts2 ON ts2.tahun = pa.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = pa.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = pa.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE pa.prodi='$role' GROUP BY pa.sumber_biaya) main";
		$data = $this->db->query($sql);
		return $data->result();
	}

}
