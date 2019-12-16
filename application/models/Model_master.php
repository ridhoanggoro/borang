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
// 		SELECT nama_ts, sum(daya_tampung) AS daya_tampung, sum(lulus) AS lulus, sum(tidak_lulus) AS tidak_lulus, SUM(reguler) AS reguler, SUM(pindahan) AS pindahan, SUM(aktif_reguler) AS aktif_reguler, SUM(aktif_pindahan) AS aktif_pindahan FROM

// (SELECT a.nama_ts, a.daya_tampung, a.lulus, a.tidak_lulus, 0 AS reguler, 0 AS pindahan, 0 AS aktif_reguler, 0 AS aktif_pindahan FROM (SELECT ts.nama_ts,t.daya_tampung,SUM(case when c.hasil='LULUS' THEN 1 ELSE 0 END) AS 'lulus', SUM(case when c.hasil='TIDAK LULUS' THEN 1 ELSE 0 END) AS 'tidak_lulus'
// FROM `calon_mahasiswa` c
// INNER JOIN ts on ts.tahun=LEFT(c.thn_akademik,4) AND ts.prodi='$role'
// INNER JOIN tbl_2a t on t.thn_akademik=ts.nama_ts AND t.prodi='$role'
// WHERE c.prodi='$role'
// GROUP BY ts.nama_ts
// ORDER BY ts.seq_id DESC) a

// UNION ALL
// SELECT b.nama_ts, 0 AS daya_tampung, 0 AS lulus, 0 AS tidak_lulus, b.reguler, b.pindahan, 0 AS aktif_reguler, 0 AS aktif_pindahan
// FROM (
// SELECT ts.nama_ts,SUM(case when m.status_asal='REGULER' THEN 1 ELSE 0 END) AS 'reguler', SUM(case when m.status_asal='PINDAHAN' THEN 1 ELSE 0 END) AS 'pindahan'
// FROM mahasiswa m
// INNER JOIN ts on ts.tahun=m.thn_akademik AND ts.prodi='$role'
// WHERE m.prodi='$role'
// GROUP BY ts.nama_ts
// ORDER by ts.seq_id DESC) b

// UNION ALL

// SELECT c.nama_ts, 0 AS daya_tampung, 0 AS lulus, 0 AS tidak_lulus, 0 AS reguler, 0 AS pindahan, c.aktif_reguler, c.aktif_pindahan FROM
// (SELECT ts.nama_ts, SUM(case when m.status_asal='REGULER' THEN 1 ELSE 0 END) AS 'aktif_reguler', SUM(case when m.status_asal='PINDAHAN' THEN 1 ELSE 0 END) AS 'aktif_pindahan' FROM (
// SELECT nim,LEFT(th_akademik,4) AS th_akademik FROM `status_mahasiswa` a
// WHERE a.prodi='$role'
// and a.status='AKTIF'
// GROUP BY nim,LEFT(th_akademik,4)) s
// INNER JOIN mahasiswa m ON m.nim=s.nim
// INNER JOIN ts on ts.tahun=LEFT(s.th_akademik,4) AND ts.prodi='$role'
// GROUP BY ts.nama_ts
// ORDER BY ts.seq_id DESC) c

// ) main GROUP by nama_ts

// SELECT m.prodi, SUM(TS-2) AS 'TS-2', SUM(TS-1) AS 'TS-1', SUM(TS) AS 'TS' FROM (SELECT ts.prodi, COUNT(s.nim) AS 'TS-2', 0 AS 'TS-1', 0 AS 'TS'
// FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a
// WHERE a.prodi = 'TEKNIK INDUSTRI S1' AND a.status = 'AKTIF'
// GROUP BY nim, LEFT(th_akademik, 4)) s
// INNER JOIN mahasiswa m ON m.nim = s.nim
// INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = 'TEKNIK INDUSTRI S1' AND ts.nama_ts='TS-2'
// GROUP BY ts.nama_ts
// UNION ALL
// SELECT ts.prodi,0 AS 'TS-2', COUNT(s.nim) AS 'TS-1', 0 AS 'TS'
// FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a
// WHERE a.prodi = 'TEKNIK INDUSTRI S1' AND a.status = 'AKTIF'
// GROUP BY nim, LEFT(th_akademik, 4)) s
// INNER JOIN mahasiswa m ON m.nim = s.nim
// INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = 'TEKNIK INDUSTRI S1' AND ts.nama_ts='TS-1'
// GROUP BY ts.nama_ts
// UNION ALL
// SELECT ts.prodi,0 AS 'TS-2', 0 AS 'TS-1', COUNT(s.nim) AS 'TS'
// FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a
// WHERE a.prodi = 'TEKNIK INDUSTRI S1' AND a.status = 'AKTIF'
// GROUP BY nim, LEFT(th_akademik, 4)) s
// INNER JOIN mahasiswa m ON m.nim = s.nim
// INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = 'TEKNIK INDUSTRI S1' AND ts.nama_ts='TS'
// GROUP BY ts.nama_ts) m

}
