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

	function publikasi_ilmiah_dtps_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT a.nama, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts FROM `jenis_publikasi` a LEFT JOIN publikasi_ilmiah b on b.jenis_publikasi=a.id LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE a.modul='publikasi_ilmiah' GROUP by a.seq_id ";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function pagelaran_ilmiah_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT a.nama, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts FROM `jenis_publikasi` a LEFT JOIN pagelaran_ilmiah b on b.jenis_publikasi=a.id LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE a.modul='pagelaran_ilmiah' GROUP by a.seq_id ";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function hki_paten_data_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('hki_paten');
		return $data->result();
	}

	function hki_paten_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'luaran_penelitian'  => $this->input->post('luaran_penelitian'),
  		'th_perolehan'  => $this->input->post('th_perolehan'),
  		'keterangan' => $this->input->post('keterangan'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('hki_paten', $data);
		return $result;
	}

	function hki_paten_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'luaran_penelitian'  => $this->input->post('luaran_penelitian'),
  		'th_perolehan'  => $this->input->post('th_perolehan'),
  		'keterangan' => $this->input->post('keterangan'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('hki_paten', $data);
  	return $result;
	}

	function hki_paten_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('hki_paten');
   	 	return $result;
	}

	function hki_hak_cipta_data_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('hki_hak_cipta');
		return $data->result();
	}

	function hki_hak_cipta_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'luaran_penelitian'  => $this->input->post('luaran_penelitian'),
  		'th_perolehan'  => $this->input->post('th_perolehan'),
  		'keterangan' => $this->input->post('keterangan'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('hki_hak_cipta', $data);
		return $result;
	}

	function hki_hak_cipta_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'luaran_penelitian'  => $this->input->post('luaran_penelitian'),
  		'th_perolehan'  => $this->input->post('th_perolehan'),
  		'keterangan' => $this->input->post('keterangan'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('hki_hak_cipta', $data);
  	return $result;
	}

	function hki_hak_cipta_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('hki_hak_cipta');
   	 	return $result;
	}

	function hki_teknologi_tepatguna_data_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('hki_teknologi_tepatguna');
		return $data->result();
	}

	function hki_teknologi_tepatguna_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'luaran_penelitian'  => $this->input->post('luaran_penelitian'),
  		'th_perolehan'  => $this->input->post('th_perolehan'),
  		'keterangan' => $this->input->post('keterangan'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('hki_teknologi_tepatguna', $data);
		return $result;
	}

	function hki_teknologi_tepatguna_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
			'luaran_penelitian'  => $this->input->post('luaran_penelitian'),
			'th_perolehan'  => $this->input->post('th_perolehan'),
			'keterangan' => $this->input->post('keterangan'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->update('hki_teknologi_tepatguna', $data);
		return $result;
	}

	function hki_teknologi_tepatguna_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('hki_teknologi_tepatguna');
   	 	return $result;
	}

	function buku_isbn_data_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('buku_isbn');
		return $data->result();
	}

	function buku_isbn_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'luaran_penelitian'  => $this->input->post('luaran_penelitian'),
			'th_perolehan'  => $this->input->post('th_perolehan'),
			'keterangan' => $this->input->post('keterangan'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('buku_isbn', $data);
		return $result;
	}

	function buku_isbn_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
			'luaran_penelitian'  => $this->input->post('luaran_penelitian'),
			'th_perolehan'  => $this->input->post('th_perolehan'),
			'keterangan' => $this->input->post('keterangan'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->update('buku_isbn', $data);
		return $result;
	}

	function buku_isbn_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('buku_isbn');
   	 	return $result;
	}

	function karya_ilmiah_disitasi_data_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('karya_ilmiah_disitasi');
		return $data->result();
	}

	function karya_ilmiah_disitasi_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
			'judul_artikel_disitasi'  => $this->input->post('judul_artikel_disitasi'),
			'jumlah' => $this->input->post('jumlah'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('karya_ilmiah_disitasi', $data);
		return $result;
	}

	function karya_ilmiah_disitasi_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
			'judul_artikel_disitasi'  => $this->input->post('judul_artikel_disitasi'),
			'jumlah' => $this->input->post('jumlah'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->update('karya_ilmiah_disitasi', $data);
		return $result;
	}

	function karya_ilmiah_disitasi_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('karya_ilmiah_disitasi');
   	 	return $result;
	}

	function produk_dtps_data_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('produk_dtps');
		return $data->result();
	}

	function produk_dtps_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
			'nama_produk'  => $this->input->post('nama_produk'),
			'deskripsi' => $this->input->post('deskripsi'),
			'bukti' => $this->input->post('bukti'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('produk_dtps', $data);
		return $result;
	}

	function produk_dtps_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    	$data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
			'nama_produk'  => $this->input->post('nama_produk'),
			'deskripsi' => $this->input->post('deskripsi'),
			'bukti' => $this->input->post('bukti'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->update('produk_dtps', $data);
		return $result;
	}

	function produk_dtps_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('produk_dtps');
   	 	return $result;
	}

	function penggunaan_dana_data_list(){
		$prodi = $this->session->userdata('nama');
		$sql = "SELECT SUM(a_biaya_dosen_ts2) AS a_biaya_dosen_ts2, SUM(a_biaya_tenaga_kependidikan_ts2) AS a_biaya_tenaga_kependidikan_ts2, SUM(a_biaya_operasional_pembelajaran_ts2) AS a_biaya_operasional_pembelajaran_ts2, SUM(a_biaya_operasional_tidak_langsung_ts2) AS a_biaya_operasional_tidak_langsung_ts2, SUM(a_biaya_operasional_kemahasiswaan_ts2) AS a_biaya_operasional_kemahasiswaan_ts2, SUM(a_biaya_penelitian_ts2) AS a_biaya_penelitian_ts2, SUM(a_biaya_pkm_ts2) AS a_biaya_pkm_ts2, SUM(a_biaya_investasi_sdm_ts2) AS a_biaya_investasi_sdm_ts2, SUM(a_biaya_investasi_sarana_ts2) AS a_biaya_investasi_sarana_ts2, SUM(a_biaya_investasi_prasarana_ts2) AS a_biaya_investasi_prasarana_ts2, SUM(a_biaya_dosen_ts1) AS a_biaya_dosen_ts1, SUM(a_biaya_tenaga_kependidikan_ts1) AS a_biaya_tenaga_kependidikan_ts1, SUM(a_biaya_operasional_pembelajaran_ts1) AS a_biaya_operasional_pembelajaran_ts1, SUM(a_biaya_operasional_tidak_langsung_ts1) AS a_biaya_operasional_tidak_langsung_ts1, SUM(a_biaya_operasional_kemahasiswaan_ts1) AS a_biaya_operasional_kemahasiswaan_ts1, SUM(a_biaya_operasional_kemahasiswaan_ts1) AS a_biaya_penelitian_ts1, SUM(a_biaya_pkm_ts1) AS a_biaya_pkm_ts1, SUM(a_biaya_investasi_sdm_ts1) AS a_biaya_investasi_sdm_ts1, SUM(a_biaya_investasi_sarana_ts1) AS a_biaya_investasi_sarana_ts1, SUM(a_biaya_investasi_prasarana_ts1) AS a_biaya_investasi_prasarana_ts1, SUM(a_biaya_dosen_ts) AS a_biaya_dosen_ts, SUM(a_biaya_tenaga_kependidikan_ts) AS a_biaya_tenaga_kependidikan_ts, SUM(a_biaya_operasional_pembelajaran_ts) AS a_biaya_operasional_pembelajaran_ts, SUM(a_biaya_operasional_tidak_langsung_ts) AS a_biaya_operasional_tidak_langsung_ts, SUM(a_biaya_operasional_kemahasiswaan_ts) AS a_biaya_operasional_kemahasiswaan_ts, SUM(a_biaya_penelitian_ts) AS a_biaya_penelitian_ts, SUM(a_biaya_pkm_ts) AS a_biaya_pkm_ts, SUM(a_biaya_investasi_sdm_ts) AS a_biaya_investasi_sdm_ts, SUM(a_biaya_investasi_sarana_ts) AS a_biaya_investasi_sarana_ts, SUM(a_biaya_investasi_prasarana_ts) AS a_biaya_investasi_prasarana_ts, SUM(b_biaya_dosen_ts2) AS b_biaya_dosen_ts2, SUM(b_biaya_tenaga_kependidikan_ts2) AS b_biaya_tenaga_kependidikan_ts2, SUM(b_biaya_operasional_pembelajaran_ts2) AS b_biaya_operasional_pembelajaran_ts2, SUM(b_biaya_operasional_tidak_langsung_ts2) AS b_biaya_operasional_tidak_langsung_ts2, SUM(b_biaya_operasional_kemahasiswaan_ts2) AS b_biaya_operasional_kemahasiswaan_ts2, SUM(b_biaya_penelitian_ts2) AS b_biaya_penelitian_ts2, SUM(b_biaya_pkm_ts2) AS b_biaya_pkm_ts2, SUM(b_biaya_investasi_sdm_ts2) AS b_biaya_investasi_sdm_ts2, SUM(b_biaya_investasi_sarana_ts2) AS b_biaya_investasi_sarana_ts2, SUM(b_biaya_investasi_prasarana_ts2) AS b_biaya_investasi_prasarana_ts2, SUM(b_biaya_dosen_ts1) AS b_biaya_dosen_ts1, SUM(b_biaya_tenaga_kependidikan_ts1) AS b_biaya_tenaga_kependidikan_ts1, SUM(b_biaya_operasional_pembelajaran_ts1) AS b_biaya_operasional_pembelajaran_ts1, SUM(b_biaya_operasional_tidak_langsung_ts1) AS b_biaya_operasional_tidak_langsung_ts1, SUM(b_biaya_dosen_ts2) AS b_biaya_operasional_kemahasiswaan_ts1, SUM(b_biaya_operasional_kemahasiswaan_ts1) AS b_biaya_penelitian_ts1, SUM(b_biaya_pkm_ts1) AS b_biaya_pkm_ts1, SUM(b_biaya_investasi_sdm_ts1) AS b_biaya_investasi_sdm_ts1, SUM(b_biaya_investasi_sarana_ts1) AS b_biaya_investasi_sarana_ts1, SUM(b_biaya_investasi_prasarana_ts1) AS b_biaya_investasi_prasarana_ts1, SUM(b_biaya_dosen_ts) AS b_biaya_dosen_ts, SUM(b_biaya_tenaga_kependidikan_ts) AS b_biaya_tenaga_kependidikan_ts, SUM(b_biaya_operasional_pembelajaran_ts) AS b_biaya_operasional_pembelajaran_ts, SUM(b_biaya_operasional_tidak_langsung_ts) AS b_biaya_operasional_tidak_langsung_ts, SUM(b_biaya_operasional_kemahasiswaan_ts) AS b_biaya_operasional_kemahasiswaan_ts, SUM(b_biaya_penelitian_ts) AS b_biaya_penelitian_ts, SUM(b_biaya_pkm_ts) AS b_biaya_pkm_ts, SUM(b_biaya_investasi_sdm_ts) AS b_biaya_investasi_sdm_ts, SUM(b_biaya_investasi_sarana_ts) AS b_biaya_investasi_sarana_ts, SUM(b_biaya_investasi_prasarana_ts) AS b_biaya_investasi_prasarana_ts FROM(SELECT SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_dosen ELSE 0 END) AS a_biaya_dosen_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_tenaga_kependidikan ELSE 0 END) AS a_biaya_tenaga_kependidikan_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_operasional_pembelajaran ELSE 0 END) AS a_biaya_operasional_pembelajaran_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 END) AS a_biaya_operasional_tidak_langsung_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 END) AS a_biaya_operasional_kemahasiswaan_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_penelitian ELSE 0 END) AS a_biaya_penelitian_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_pkm ELSE 0 END) AS a_biaya_pkm_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_investasi_sdm ELSE 0 END) AS a_biaya_investasi_sdm_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_investasi_sarana ELSE 0 END) AS a_biaya_investasi_sarana_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$prodi') THEN biaya_investasi_prasarana ELSE 0 END) AS a_biaya_investasi_prasarana_ts2, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_dosen ELSE 0 END) AS a_biaya_dosen_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_tenaga_kependidikan ELSE 0 END) AS a_biaya_tenaga_kependidikan_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_operasional_pembelajaran ELSE 0 END) AS a_biaya_operasional_pembelajaran_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 END) AS a_biaya_operasional_tidak_langsung_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 END) AS a_biaya_operasional_kemahasiswaan_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_penelitian ELSE 0 END) AS a_biaya_penelitian_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_pkm ELSE 0 END) AS a_biaya_pkm_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_investasi_sdm ELSE 0 END) AS a_biaya_investasi_sdm_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_investasi_sarana ELSE 0 END) AS a_biaya_investasi_sarana_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$prodi') THEN biaya_investasi_prasarana ELSE 0 END) AS a_biaya_investasi_prasarana_ts1, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_dosen ELSE 0 END) AS a_biaya_dosen_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_tenaga_kependidikan ELSE 0 END) AS a_biaya_tenaga_kependidikan_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_operasional_pembelajaran ELSE 0 END) AS a_biaya_operasional_pembelajaran_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 END) AS a_biaya_operasional_tidak_langsung_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 END) AS a_biaya_operasional_kemahasiswaan_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_penelitian ELSE 0 END) AS a_biaya_penelitian_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_pkm ELSE 0 END) AS a_biaya_pkm_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_investasi_sdm ELSE 0 END) AS a_biaya_investasi_sdm_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_investasi_sarana ELSE 0 END) AS a_biaya_investasi_sarana_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$prodi') THEN biaya_investasi_prasarana ELSE 0 END) AS a_biaya_investasi_prasarana_ts, '' AS b_biaya_dosen_ts2, '' AS b_biaya_tenaga_kependidikan_ts2, '' AS b_biaya_operasional_pembelajaran_ts2, '' AS b_biaya_operasional_tidak_langsung_ts2, '' AS b_biaya_operasional_kemahasiswaan_ts2, '' AS b_biaya_penelitian_ts2, '' AS b_biaya_pkm_ts2, '' AS b_biaya_investasi_sdm_ts2, '' AS b_biaya_investasi_sarana_ts2, '' AS b_biaya_investasi_prasarana_ts2, '' AS b_biaya_dosen_ts1, '' AS b_biaya_tenaga_kependidikan_ts1, '' AS b_biaya_operasional_pembelajaran_ts1, '' AS b_biaya_operasional_tidak_langsung_ts1, '' AS b_biaya_operasional_kemahasiswaan_ts1, '' AS b_biaya_penelitian_ts1, '' AS b_biaya_pkm_ts1, '' AS b_biaya_investasi_sdm_ts1, '' AS b_biaya_investasi_sarana_ts1, '' AS b_biaya_investasi_prasarana_ts1, '' AS b_biaya_dosen_ts, '' AS b_biaya_tenaga_kependidikan_ts, '' AS b_biaya_operasional_pembelajaran_ts, '' AS b_biaya_operasional_tidak_langsung_ts, '' AS b_biaya_operasional_kemahasiswaan_ts, '' AS b_biaya_penelitian_ts, '' AS b_biaya_pkm_ts, '' AS b_biaya_investasi_sdm_ts, '' AS b_biaya_investasi_sarana_ts, '' AS b_biaya_investasi_prasarana_ts FROM `dana_prodi` b LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.prodi = '$prodi' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.prodi = '$prodi' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.prodi = '$prodi' AND ts.nama_ts = 'TS' UNION ALL SELECT '' AS a_biaya_dosen_ts2, '' AS a_biaya_tenaga_kependidikan_ts2, '' AS a_biaya_operasional_pembelajaran_ts2, '' AS a_biaya_operasional_tidak_langsung_ts2, '' AS a_biaya_operasional_kemahasiswaan_ts2, '' AS a_biaya_penelitian_ts2, '' AS a_biaya_pkm_ts2, '' AS a_biaya_investasi_sdm_ts2, '' AS a_biaya_investasi_sarana_ts2, '' AS a_biaya_investasi_prasarana_ts2, '' AS a_biaya_dosen_ts1, '' AS a_biaya_tenaga_kependidikan_ts1, '' AS a_biaya_operasional_pembelajaran_ts1, '' AS a_biaya_operasional_tidak_langsung_ts1, '' AS a_biaya_operasional_kemahasiswaan_ts1, '' AS a_biaya_penelitian_ts1, '' AS a_biaya_pkm_ts1, '' AS a_biaya_investasi_sdm_ts1, '' AS a_biaya_investasi_sarana_ts1, '' AS a_biaya_investasi_prasarana_ts1, '' AS a_biaya_dosen_ts, '' AS a_biaya_tenaga_kependidikan_ts, '' AS a_biaya_operasional_pembelajaran_ts, '' AS a_biaya_operasional_tidak_langsung_ts, '' AS a_biaya_operasional_kemahasiswaan_ts, '' AS a_biaya_penelitian_ts, '' AS a_biaya_pkm_ts, '' AS a_biaya_investasi_sdm_ts, '' AS a_biaya_investasi_sarana_ts, '' AS a_biaya_investasi_prasarana_ts, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_dosen ELSE 0 END) AS b_biaya_dosen_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_tenaga_kependidikan ELSE 0 END) AS b_biaya_tenaga_kependidikan_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_operasional_pembelajaran ELSE 0 END) AS b_biaya_operasional_pembelajaran_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_operasional_tidak_langsung ELSE 0 END) AS b_biaya_operasional_tidak_langsung_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_operasional_kemahasiswaan ELSE 0 END) AS b_biaya_operasional_kemahasiswaan_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_penelitian ELSE 0 END) AS b_biaya_penelitian_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_pkm ELSE 0 END) AS b_biaya_pkm_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_investasi_sdm ELSE 0 END) AS b_biaya_investasi_sdm_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_investasi_sarana ELSE 0 END) AS b_biaya_investasi_sarana_ts2, SUM(CASE WHEN(b.th_akademik = ts2.tahun) THEN biaya_investasi_prasarana ELSE 0 END) AS b_biaya_investasi_prasarana_ts2, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_dosen ELSE 0 END) AS b_biaya_dosen_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_tenaga_kependidikan ELSE 0 END) AS b_biaya_tenaga_kependidikan_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_operasional_pembelajaran ELSE 0 END) AS b_biaya_operasional_pembelajaran_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_operasional_tidak_langsung ELSE 0 END) AS b_biaya_operasional_tidak_langsung_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_operasional_kemahasiswaan ELSE 0 END) AS b_biaya_operasional_kemahasiswaan_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_penelitian ELSE 0 END) AS b_biaya_penelitian_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_pkm ELSE 0 END) AS b_biaya_pkm_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_investasi_sdm ELSE 0 END) AS b_biaya_investasi_sdm_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_investasi_sarana ELSE 0 END) AS b_biaya_investasi_sarana_ts1, SUM(CASE WHEN(b.th_akademik = ts1.tahun) THEN biaya_investasi_prasarana ELSE 0 END) AS b_biaya_investasi_prasarana_ts1, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_dosen ELSE 0 END) AS b_biaya_dosen_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_tenaga_kependidikan ELSE 0 END) AS b_biaya_tenaga_kependidikan_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_operasional_pembelajaran ELSE 0 END) AS b_biaya_operasional_pembelajaran_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_operasional_tidak_langsung ELSE 0 END) AS b_biaya_operasional_tidak_langsung_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_operasional_kemahasiswaan ELSE 0 END) AS b_biaya_operasional_kemahasiswaan_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_penelitian ELSE 0 END) AS b_biaya_penelitian_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_pkm ELSE 0 END) AS b_biaya_pkm_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_investasi_sdm ELSE 0 END) AS b_biaya_investasi_sdm_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_investasi_sarana ELSE 0 END) AS b_biaya_investasi_sarana_ts, SUM(CASE WHEN(b.th_akademik = ts.tahun) THEN biaya_investasi_prasarana ELSE 0 END) AS b_biaya_investasi_prasarana_ts FROM `dana_fakultas` b LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.nama_ts = 'TS') x";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function cp_rencana_pembelajaran_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('kurikulum');
		return $data->result();
	}

	function cp_rencana_pembelajaran_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'semester'  => $this->input->post('semester'),
			'kode_matkul'  => $this->input->post('kode_matkul'),
			'nama_matkul' => $this->input->post('nama_matkul'),
			'matkul_kopetensi' => $this->input->post('matkul_kopetensi'),
			'kuliah' => $this->input->post('kuliah'),
			'seminar' => $this->input->post('seminar'),
			'praktikum' => $this->input->post('praktikum'),
			'konversi_jam' => $this->input->post('konversi_jam'),
			'sikap' => $this->input->post('sikap'),
			'pengetahuan' => $this->input->post('pengetahuan'),
			'keterampilan_umum' => $this->input->post('keterampilan_umum'),
			'keterampilan_khusus' => $this->input->post('keterampilan_khusus'),
			'dokumen_pembelajaran' => $this->input->post('dokumen_pembelajaran'),
			'unit_penyelenggara' => $this->input->post('unit_penyelenggara'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('kurikulum', $data);
		return $result;
	}

	function cp_rencana_pembelajaran_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'semester'  => $this->input->post('semester'),
			'kode_matkul'  => $this->input->post('kode_matkul'),
			'nama_matkul' => $this->input->post('nama_matkul'),
			'matkul_kopetensi' => $this->input->post('matkul_kopetensi'),
			'kuliah' => $this->input->post('kuliah'),
			'seminar' => $this->input->post('seminar'),
			'praktikum' => $this->input->post('praktikum'),
			'konversi_jam' => $this->input->post('konversi_jam'),
			'sikap' => $this->input->post('sikap'),
			'pengetahuan' => $this->input->post('pengetahuan'),
			'keterampilan_umum' => $this->input->post('keterampilan_umum'),
			'keterampilan_khusus' => $this->input->post('keterampilan_khusus'),
			'dokumen_pembelajaran' => $this->input->post('dokumen_pembelajaran'),
			'unit_penyelenggara' => $this->input->post('unit_penyelenggara'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->update('kurikulum', $data);
		return $result;
	}

	function cp_rencana_pembelajaran_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
    	$result = $this->db->delete('kurikulum');
   	 	return $result;
	}

	function integrasi_pkm_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('integrasi_pkm');
		return $data->result();
	}

	function integrasi_pkm_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'judul'  => $this->input->post('judul'),
  		'nama_dosen'  => $this->input->post('nama_dosen'),
  		'matkul' => $this->input->post('matkul'),
			'bentuk_integrasi' => $this->input->post('bentuk_integrasi'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('integrasi_pkm', $data);
		return $result;
	}

	function integrasi_pkm_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'judul'  => $this->input->post('judul'),
			'nama_dosen'  => $this->input->post('nama_dosen'),
			'matkul' => $this->input->post('matkul'),
			'bentuk_integrasi' => $this->input->post('bentuk_integrasi'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('integrasi_pkm', $data);
  	return $result;
	}

	function integrasi_pkm_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->delete('integrasi_pkm');
 	 	return $result;
	}

	function kepuasan_mahasiswa_list(){
		$prodi = $this->session->userdata('nama');
		$sql = "SELECT b.*, a.nama FROM jenis_publikasi a LEFT OUTER JOIN kepuasan_pelanggan b ON a.id=b.aspek_ukuran AND b.prodi='$prodi' WHERE a.modul='kepuasan_mahasiswa' ";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function aspek_list()
	{
		$sql = "SELECT seq_id,id,CONCAT(LEFT(nama, 100),'  .....') AS nama FROM jenis_publikasi WHERE modul='kepuasan_mahasiswa'";
		// $this->db->where('modul', 'kepuasan_mahasiswa');
		// $this->db->order_by('nama', 'ASC');
		// $data = $this->db->get('jenis_publikasi');
		$data = $this->db->query($sql);
		return $data;
	}

	function kepuasan_mahasiswa_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'aspek_ukuran'  => $this->input->post('aspek_ukuran'),
  		'sangat_baik'  => $this->input->post('sangat_baik'),
  		'baik' => $this->input->post('baik'),
			'cukup' => $this->input->post('cukup'),
			'kurang' => $this->input->post('kurang'),
			'rencana_tindaklanjut' => $this->input->post('rencana_tindaklanjut'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('kepuasan_pelanggan', $data);
		return $result;
	}

	function kepuasan_mahasiswa_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'aspek_ukuran'  => $this->input->post('aspek_ukuran'),
			'sangat_baik'  => $this->input->post('sangat_baik'),
			'baik' => $this->input->post('baik'),
			'cukup' => $this->input->post('cukup'),
			'kurang' => $this->input->post('kurang'),
			'rencana_tindaklanjut' => $this->input->post('rencana_tindaklanjut'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('kepuasan_pelanggan', $data);
  	return $result;
	}

	function kepuasan_mahasiswa_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->delete('kepuasan_pelanggan');
 	 	return $result;
	}

	function penelitian_dosen_dan_mhs_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('penelitian_dosen_mhs');
		return $data->result();
	}

	function penelitian_dosen_dan_mhs_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
  		'tema_penelitian'  => $this->input->post('tema_penelitian'),
  		'nama_mhs' => $this->input->post('nama_mhs'),
			'judul_kegiatan' => $this->input->post('judul_kegiatan'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('penelitian_dosen_mhs', $data);
		return $result;
	}

	function penelitian_dosen_dan_mhs_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
  		'tema_penelitian'  => $this->input->post('tema_penelitian'),
  		'nama_mhs' => $this->input->post('nama_mhs'),
			'judul_kegiatan' => $this->input->post('judul_kegiatan'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('penelitian_dosen_mhs', $data);
  	return $result;
	}

	function penelitian_dosen_dan_mhs_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->delete('penelitian_dosen_mhs');
 	 	return $result;
	}

	function penelitian_mhs_tesis_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('penelitian_mhs_tesis');
		return $data->result();
	}

	function penelitian_mhs_tesis_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
  		'tema_penelitian'  => $this->input->post('tema_penelitian'),
  		'nama_mhs' => $this->input->post('nama_mhs'),
			'judul_kegiatan' => $this->input->post('judul_kegiatan'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('penelitian_mhs_tesis', $data);
		return $result;
	}

	function penelitian_mhs_tesis_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
  		'tema_penelitian'  => $this->input->post('tema_penelitian'),
  		'nama_mhs' => $this->input->post('nama_mhs'),
			'judul_kegiatan' => $this->input->post('judul_kegiatan'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('penelitian_mhs_tesis', $data);
  	return $result;
	}

	function penelitian_mhs_tesis_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->delete('penelitian_mhs_tesis');
 	 	return $result;
	}

	function pkm_dosen_dan_mhs_list(){
		$role = $this->session->userdata('nama');
		$this->db->where('prodi', $role);
		$data = $this->db->get('pkm_dosen_mhs');
		return $data->result();
	}

	function pkm_dosen_dan_mhs_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
  		'tema_penelitian'  => $this->input->post('tema_penelitian'),
  		'nama_mhs' => $this->input->post('nama_mhs'),
			'judul_kegiatan' => $this->input->post('judul_kegiatan'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('pkm_dosen_mhs', $data);
		return $result;
	}

	function pkm_dosen_dan_mhs_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
    $data = array(
			'nama_dosen'  => $this->input->post('nama_dosen'),
  		'tema_penelitian'  => $this->input->post('tema_penelitian'),
  		'nama_mhs' => $this->input->post('nama_mhs'),
			'judul_kegiatan' => $this->input->post('judul_kegiatan'),
			'tahun' => $this->input->post('tahun'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->update('pkm_dosen_mhs', $data);
  	return $result;
	}

	function pkm_dosen_dan_mhs_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
  	$result = $this->db->delete('pkm_dosen_mhs');
 	 	return $result;
	}

	function ipk_lulusan_data_list(){
		$prodi = $this->session->userdata('nama');
		$sql = "SELECT ts.seq_id, ts.nama_ts, SUM(CASE WHEN c.status_mhs='LULUS' THEN 1 ELSE 0 END) as jml, MIN(c.ipk) AS ipk_min, MAX(c.ipk) AS ipk_maks, AVG(c.ipk) AS ipk_rata FROM `mahasiswa` c INNER JOIN ts ON ts.tahun = LEFT(c.thn_lulus, 4) AND ts.prodi = '$prodi' WHERE c.prodi = '$prodi' AND ts.nama_ts IN ('TS','TS-1','TS-2') GROUP BY ts.nama_ts ORDER BY ts.seq_id DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function prestasi_akademik_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `prestasi_akad_mhs` WHERE prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function prestasi_akademik_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_kegiatan'  => $this->input->post('nama_kegiatan'),
			'waktu'  => $this->input->post('waktu'),
			'tingkat' => $this->input->post('tingkat'),
			'prestasi' => $this->input->post('prestasi'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('prestasi_akad_mhs', $data);
		return $result;
	}

	function prestasi_akademik_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_kegiatan'  => $this->input->post('nama_kegiatan'),
			'waktu'  => $this->input->post('waktu'),
			'tingkat' => $this->input->post('tingkat'),
			'prestasi' => $this->input->post('prestasi'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->update('prestasi_akad_mhs', $data);
		return $result;
	}

	function prestasi_akademik_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->delete('prestasi_akad_mhs');
		return $result;
	}
	function prestasi_non_akademik_data_list(){
		$role = $this->session->userdata('nama');
		$sql = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `prestasi_non_akad_mhs` WHERE prodi='$role'";
		$data = $this->db->query($sql);
		return $data->result();
	}

	function prestasi_non_akademik_add(){
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_kegiatan'  => $this->input->post('nama_kegiatan'),
			'waktu'  => $this->input->post('waktu'),
			'tingkat' => $this->input->post('tingkat'),
			'prestasi' => $this->input->post('prestasi'),
			'prodi' => $prodi
		);
		$result = $this->db->insert('prestasi_non_akad_mhs', $data);
		return $result;
	}

	function prestasi_non_akademik_edit(){
		$seq_id = $this->input->post('seq_id');
		$prodi = $this->session->userdata('nama');
		$data = array(
			'nama_kegiatan'  => $this->input->post('nama_kegiatan'),
			'waktu'  => $this->input->post('waktu'),
			'tingkat' => $this->input->post('tingkat'),
			'prestasi' => $this->input->post('prestasi'),
			'prodi' => $prodi
		);
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->update('prestasi_non_akad_mhs', $data);
		return $result;
	}

	function prestasi_non_akademik_delete(){
		$seq_id = $this->input->post('seq_id');
		$this->db->where('seq_id', $seq_id);
		$result = $this->db->delete('prestasi_non_akad_mhs');
		return $result;
	}


}
