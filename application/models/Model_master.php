<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_master extends CI_model
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_security');
    }
    
    function tridharma_pendidikan_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `tridarma_pendidikan` WHERE prodi='$role'";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function tridharma_pendidikan_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'prodi' => $prodi,
            'lembaga_mitra' => $this->input->post('lembaga_mitra'),
            'tingkat' => $this->input->post('tingkat'),
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
            'durasi' => $this->input->post('durasi'),
            'bukti_kerjasama' => $this->input->post('bukti'),
            'tahun_berakhir' => $this->input->post('tahun_berakhir')
        );
        $result = $this->db->insert('tridarma_pendidikan', $data);
        return $result;
    }
    
    function tridharma_pendidikan_edit($id, $data)
    {
        $this->db->where('seq_id', $id);
        $result = $this->db->update('tridarma_pendidikan', $data);
        return $result;
    }
    
    function tridharma_pendidikan_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('tridarma_pendidikan');
        return $result;
    }
    
    function tridharma_penelitian_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `tridarma_penelitian` WHERE prodi='$role'";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function tridharma_penelitian_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'prodi' => $prodi,
            'lembaga_mitra' => $this->input->post('lembaga_mitra'),
            'tingkat' => $this->input->post('tingkat'),
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
            'durasi' => $this->input->post('durasi'),
            'bukti_kerjasama' => $this->input->post('bukti'),
            'tahun_berakhir' => $this->input->post('tahun_berakhir')
        );
        $result = $this->db->insert('tridarma_penelitian', $data);
        return $result;
    }
    
    function tridharma_penelitian_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'prodi' => $prodi,
                'lembaga_mitra' => $this->input->post('mitra_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps_edit'),
                'durasi' => $this->input->post('waktu_edit'),
                'bukti_kerjasama' => $this->input->post('bukti_edit'),
                'tahun_berakhir' => $this->input->post('tahun_berakhir_edit'),
                'doc' => $file
            );
        } else {
            $data = array(
                'prodi' => $prodi,
                'lembaga_mitra' => $this->input->post('mitra_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps_edit'),
                'durasi' => $this->input->post('waktu_edit'),
                'bukti_kerjasama' => $this->input->post('bukti_edit'),
                'tahun_berakhir' => $this->input->post('tahun_berakhir_edit')
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('tridarma_penelitian', $data);
        return $result;
    }
    
    function tridharma_penelitian_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('tridarma_penelitian');
        return $result;
    }
    
    function tridharma_pkm_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `tridarma_pkm` WHERE prodi='$role'";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function tridharma_pkm_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'prodi' => $prodi,
            'lembaga_mitra' => $this->input->post('lembaga_mitra'),
            'tingkat' => $this->input->post('tingkat'),
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps'),
            'durasi' => $this->input->post('durasi'),
            'bukti_kerjasama' => $this->input->post('bukti'),
            'tahun_berakhir' => $this->input->post('tahun_berakhir')
        );
        $result = $this->db->insert('tridarma_pkm', $data);
        return $result;
    }
    
    function tridharma_pkm_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'prodi' => $prodi,
                'lembaga_mitra' => $this->input->post('mitra_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps_edit'),
                'durasi' => $this->input->post('waktu_edit'),
                'bukti_kerjasama' => $this->input->post('bukti_edit'),
                'tahun_berakhir' => $this->input->post('tahun_berakhir_edit'),
                'doc' => $file
            );
        } else {
            $data = array(
                'prodi' => $prodi,
                'lembaga_mitra' => $this->input->post('mitra_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'manfaat_bagi_ps' => $this->input->post('manfaat_bagi_ps_edit'),
                'durasi' => $this->input->post('durasi_edit'),
                'bukti_kerjasama' => $this->input->post('bukti_edit'),
                'tahun_berakhir' => $this->input->post('tahun_berakhir_edit')
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('tridarma_pkm', $data);
        return $result;
    }
    
    function tridharma_pkm_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('tridarma_pkm');
        return $result;
    }
    
    function seleksi_mahasiswa_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT seq_id, nama_ts, SUM(daya_tampung) AS daya_tampung, SUM(pendaftar) AS pendaftar, SUM(lulus) AS lulus, SUM(reguler) AS reguler, SUM(pindahan) AS pindahan, SUM(aktif_reguler) AS aktif_reguler, SUM(aktif_pindahan) AS aktif_pindahan FROM( SELECT a.seq_id, a.nama_ts, a.daya_tampung, a.lulus+a.tidak_lulus AS pendaftar, a.lulus, 0 AS reguler, 0 AS pindahan, 0 AS aktif_reguler, 0 AS aktif_pindahan FROM ( SELECT t.seq_id, ts.nama_ts, t.daya_tampung, SUM( CASE WHEN c.hasil = 'LULUS' THEN 1 ELSE 0 END) AS 'lulus', SUM( CASE WHEN c.hasil = 'TIDAK LULUS' THEN 1 ELSE 0 END ) AS 'tidak_lulus' FROM `calon_mahasiswa` c INNER JOIN ts ON ts.tahun = LEFT(c.thn_akademik, 4) AND ts.prodi = '$role' INNER JOIN tbl_2a t ON t.thn_akademik = ts.nama_ts AND t.prodi = '$role' WHERE c.prodi = '$role' GROUP BY ts.nama_ts ORDER BY ts.seq_id DESC ) a UNION ALL SELECT '' AS seq_id, b.nama_ts, 0 AS daya_tampung, 0 AS pendaftar, 0 AS lulus, b.reguler, b.pindahan, 0 AS aktif_reguler, 0 AS aktif_pindahan FROM ( SELECT ts.nama_ts, SUM( CASE WHEN m.status_asal = 'REGULER' THEN 1 ELSE 0 END ) AS 'reguler', SUM( CASE WHEN m.status_asal = 'PINDAHAN' THEN 1 ELSE 0 END ) AS 'pindahan' FROM mahasiswa m INNER JOIN ts ON ts.tahun = m.thn_akademik AND ts.prodi = '$role' WHERE m.prodi = '$role' GROUP BY ts.nama_ts ORDER BY ts.seq_id DESC ) b UNION ALL SELECT '' AS seq_id, c.nama_ts, 0 AS daya_tampung, 0 AS pendaftar, 0 AS lulus, 0 AS reguler, 0 AS pindahan, c.aktif_reguler, c.aktif_pindahan FROM ( SELECT ts.nama_ts, SUM( CASE WHEN m.status_asal = 'REGULER' THEN 1 ELSE 0 END ) AS 'aktif_reguler', SUM( CASE WHEN m.status_asal = 'PINDAHAN' THEN 1 ELSE 0 END ) AS 'aktif_pindahan' FROM ( SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a WHERE a.prodi = '$role' AND a.status = 'AKTIF' GROUP BY nim, LEFT(th_akademik, 4) ) s INNER JOIN mahasiswa m ON m.nim = s.nim INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = '$role' GROUP BY ts.nama_ts ORDER BY ts.seq_id DESC ) c ) main WHERE nama_ts IN('TS-4','TS-3','TS-2','TS-1','TS') GROUP BY nama_ts ORDER BY seq_id DESC";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function seleksi_mahasiswa_edit()
    {
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'daya_tampung' => $this->input->post('daya_tampung')
        );
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('tbl_2a', $data);
        return $result;
    }
    
    function mahasiswa_asing_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT m.prodi as m_prodi, IFNULL(SUM(TS_2),0) AS 'ts_2', IFNULL(SUM(TS_1),0) AS 'ts_1', IFNULL(SUM(TS),0) AS 'ts', z.* FROM tbl_2b z LEFT JOIN(SELECT ts.prodi, COUNT(s.nim) AS 'TS_2', 0 AS 'TS_1', 0 AS 'TS' FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a WHERE a.prodi = '$role' AND a.status = 'AKTIF' GROUP BY nim, LEFT(th_akademik, 4)) s INNER JOIN mahasiswa m ON m.nim = s.nim AND m.asing=1 INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = '$role' AND ts.nama_ts = 'TS-2' GROUP BY ts.nama_ts UNION ALL SELECT ts.prodi, 0 AS 'TS_2', COUNT(s.nim) AS 'TS_1', 0 AS 'TS' FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a WHERE a.prodi = '$role' AND a.status = 'AKTIF' GROUP BY nim, LEFT(th_akademik, 4)) s INNER JOIN mahasiswa m ON m.nim = s.nim AND m.asing=1 INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = '$role' AND ts.nama_ts = 'TS-1' GROUP BY ts.nama_ts UNION ALL SELECT ts.prodi, 0 AS 'TS_2', 0 AS 'TS_1', COUNT(s.nim) AS 'TS' FROM (SELECT nim, LEFT(th_akademik, 4) AS th_akademik FROM `status_mahasiswa` a WHERE a.prodi = '$role' AND a.status = 'AKTIF' GROUP BY nim, LEFT(th_akademik, 4)) s INNER JOIN mahasiswa m ON m.nim = s.nim AND m.asing=1 INNER JOIN ts ON ts.tahun = LEFT(s.th_akademik, 4) AND ts.prodi = '$role' AND ts.nama_ts = 'TS' GROUP BY ts.nama_ts) m ON m.prodi = z.prodi WHERE z.prodi='$role'";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function mahasiswa_asing_edit()
    {
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'asing_fulltime_ts2' => $this->input->post('asing_fulltime_ts2'),
            'asing_fulltime_ts1' => $this->input->post('asing_fulltime_ts1'),
            'asing_fulltime_ts' => $this->input->post('asing_fulltime_ts'),
            'asing_partime_ts2' => $this->input->post('asing_partime_ts2'),
            'asing_partime_ts1' => $this->input->post('asing_partime_ts1'),
            'asing_partime_ts' => $this->input->post('asing_partime_ts')
        );
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('tbl_2b', $data);
        return $result;
    }
    
    function dosen_tetap_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT *, CASE WHEN kesesuaian_kompetensi_inti_ps='YA' THEN 'V' ELSE '' END AS chk_kesesuaian_kompetensi, CASE WHEN kesesuaian_bidang_keahlian='YA' THEN 'V' ELSE '' END AS chk_kesesuaian_keahlian FROM `dosen` WHERE prodi='$role' AND status='TETAP'";
        
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function dosen_tetap_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama'),
            'pendidikan_magister' => $this->input->post('pendidikan_magister'),
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
    
    function dosen_tetap_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nidn' => $this->input->post('nidn_edit'),
                'nama' => $this->input->post('nama_edit'),
                'pendidikan_magister' => $this->input->post('pendidikan_magister_edit'),
                'pendidikan_doktor' => $this->input->post('pendidikan_doktor_edit'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian_edit'),
                'kesesuaian_kompetensi_inti_ps' => $this->input->post('kesesuaian_kompetensi_inti_ps_edit'),
                'jabatan_akademik' => $this->input->post('jabatan_akademik_edit'),
                'sertifikasi_profesional' => $this->input->post('sertifikasi_profesional_edit'),
                'sertifikasi_kompetensi' => $this->input->post('sertifikasi_kompetensi_edit'),
                'matakuliah_diampu' => $this->input->post('matakuliah_diampu_edit'),
                'kesesuaian_bidang_keahlian' => $this->input->post('kesesuaian_bidang_keahlian_edit'),
                'matakuliah_diampu_ps_lain' => $this->input->post('matakuliah_diampu_ps_lain_edit'),
                'sertifikasi' => $this->input->post('sertifikasi_edit'),
                'prodi' => $prodi,
                'status' => 'TETAP',
                'doc' => $file
            );
        } else {
            $data = array(
                'nidn' => $this->input->post('nidn_edit'),
                'nama' => $this->input->post('nama_edit'),
                'pendidikan_magister' => $this->input->post('pendidikan_magister_edit'),
                'pendidikan_doktor' => $this->input->post('pendidikan_doktor_edit'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian_edit'),
                'kesesuaian_kompetensi_inti_ps' => $this->input->post('kesesuaian_kompetensi_inti_ps_edit'),
                'jabatan_akademik' => $this->input->post('jabatan_akademik_edit'),
                'sertifikasi_profesional' => $this->input->post('sertifikasi_profesional_edit'),
                'sertifikasi_kompetensi' => $this->input->post('sertifikasi_kompetensi_edit'),
                'matakuliah_diampu' => $this->input->post('matakuliah_diampu_edit'),
                'kesesuaian_bidang_keahlian' => $this->input->post('kesesuaian_bidang_keahlian_edit'),
                'matakuliah_diampu_ps_lain' => $this->input->post('matakuliah_diampu_ps_lain_edit'),
                'sertifikasi' => $this->input->post('sertifikasi_edit'),
                'prodi' => $prodi,
                'status' => 'TETAP'
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('dosen', $data);
        return $result;
    }
    
    function dosen_tetap_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('dosen');
        return $result;
    }
    
    // function dosen_pa_data_list()
    // {
    //     $role = $this->session->userdata('nama');
    //     $sql  = "SELECT d.nama, SUM(CASE WHEN(pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts2.tahun) THEN 1 ELSE 0 END) AS ps_sendiri_ts2, SUM(CASE WHEN (pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts1.tahun) THEN 1 ELSE 0 END) AS ps_sendiri_ts1, SUM(CASE WHEN (pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts.tahun) THEN 1 ELSE 0 END) AS ps_sendiri_ts, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts2.tahun) THEN 1 ELSE 0 END) AS ps_lain_ts2, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts1.tahun) THEN 1 ELSE 0 END) AS ps_lain_ts1, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts.tahun) THEN 1 ELSE 0 END) AS ps_lain_ts FROM dosen_pa pa INNER JOIN dosen d on d.nidn=pa.nik_nidn_pembimbing and pa.prodi='$role' LEFT JOIN ts AS ts2 ON ts2.tahun=pa.th_akademik and ts2.prodi='$role' AND ts2.nama_ts='TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun=pa.th_akademik and ts1.prodi='$role' AND ts1.nama_ts='TS-1' LEFT JOIN ts ON ts.tahun=pa.th_akademik and ts.prodi='$role' AND ts.nama_ts='TS' GROUP BY d.nama";
    //     $data = $this->db->query($sql);
    //     return $data->result();
    // }

    function dosen_pa_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT d.nama, SUM(CASE WHEN(pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts2.tahun) THEN pa.jumlah ELSE 0 END) AS ps_sendiri_ts2, SUM(CASE WHEN (pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts1.tahun) THEN pa.jumlah ELSE 0 END) AS ps_sendiri_ts1, SUM(CASE WHEN (pa.mhs_pa='PS sendiri' AND pa.th_akademik=ts.tahun) THEN pa.jumlah ELSE 0 END) AS ps_sendiri_ts, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts2.tahun) THEN pa.jumlah ELSE 0 END) AS ps_lain_ts2, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts1.tahun) THEN pa.jumlah ELSE 0 END) AS ps_lain_ts1, SUM(CASE WHEN (pa.mhs_pa='PS lain' AND pa.th_akademik=ts.tahun) THEN pa.jumlah ELSE 0 END) AS ps_lain_ts FROM dosen_ta pa INNER JOIN dosen d on d.nidn=pa.nik_nidn_pembimbing and pa.prodi='$role' LEFT JOIN ts AS ts2 ON ts2.tahun=pa.th_akademik and ts2.prodi='$role' AND ts2.nama_ts='TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun=pa.th_akademik and ts1.prodi='$role' AND ts1.nama_ts='TS-1' LEFT JOIN ts ON ts.tahun=pa.th_akademik and ts.prodi='$role' AND ts.nama_ts='TS' GROUP BY d.nama";
        $data = $this->db->query($sql);
        return $data->result();
    }

    function dosen_pa_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nik_nidn_pembimbing' => $this->input->post('nik_nidn_pembimbing'),
            'th_akademik' => $this->input->post('th_akademik'),
            'jumlah' => $this->input->post('jumlah'),
            'mhs_pa' => $this->input->post('mhs_pa'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('dosen_ta', $data);
        return $result;
    }
    
    function ewmp_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT a.*, dosen.nama FROM `ekuivalen_dosen_mengajar` a INNER JOIN dosen on dosen.nidn=a.nik_nidn AND dosen.prodi=a.prodi WHERE a.prodi='$role'";
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
    
    function ewmp_add()
    {
        $prodi  = $this->session->userdata('nama');
        $nik = $this->input->post('nik_nidn');
        $cek =  $this->db->query("select * from ekuivalen_dosen_mengajar where nik_nidn='$nik'")->num_rows();
        if ($cek > 0) {
            $data   = array(
                'dtps' => $this->input->post('dtps'),
                'ps_yang_diakreditasi' => $this->input->post('ps_yang_diakreditasi'),
                'ps_lain_di_dalam_pt' => $this->input->post('ps_lain_di_dalam_pt'),
                'ps_lain_di_luar_pt' => $this->input->post('ps_lain_di_luar_pt'),
                'penelitian' => $this->input->post('penelitian'),
                'pkm' => $this->input->post('pkm'),
                'tugas_tambahan' => $this->input->post('tugas_tambahan'),
                'prodi' => $prodi
            );

            $this->db->where('nik_nidn', $nik);
            $result = $this->db->update('ekuivalen_dosen_mengajar', $data);

        } else {
            $data   = array(
                'nik_nidn' => $this->input->post('nik_nidn'),
                'dtps' => $this->input->post('dtps'),
                'ps_yang_diakreditasi' => $this->input->post('ps_yang_diakreditasi'),
                'ps_lain_di_dalam_pt' => $this->input->post('ps_lain_di_dalam_pt'),
                'ps_lain_di_luar_pt' => $this->input->post('ps_lain_di_luar_pt'),
                'penelitian' => $this->input->post('penelitian'),
                'pkm' => $this->input->post('pkm'),
                'tugas_tambahan' => $this->input->post('tugas_tambahan'),
                'prodi' => $prodi
            );
            $result = $this->db->insert('ekuivalen_dosen_mengajar', $data);
            
        }
        return $result;
        
    }
    
    function ewmp_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nik_nidn' => $this->input->post('nidn_edit'),
                'dtps' => $this->input->post('dtps_edit'),
                'ps_yang_diakreditasi' => $this->input->post('ps_yang_diakreditasi_edit'),
                'ps_lain_di_dalam_pt' => $this->input->post('ps_lain_di_dalam_pt_edit'),
                'ps_lain_di_luar_pt' => $this->input->post('ps_lain_di_luar_pt_edit'),
                'penelitian' => $this->input->post('penelitian_edit'),
                'pkm' => $this->input->post('pkm_edit'),
                'tugas_tambahan' => $this->input->post('tugas_tambahan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nik_nidn' => $this->input->post('nidn_edit'),
                'dtps' => $this->input->post('dtps_edit'),
                'ps_yang_diakreditasi' => $this->input->post('ps_yang_diakreditasi_edit'),
                'ps_lain_di_dalam_pt' => $this->input->post('ps_lain_di_dalam_pt_edit'),
                'ps_lain_di_luar_pt' => $this->input->post('ps_lain_di_luar_pt_edit'),
                'penelitian' => $this->input->post('penelitian_edit'),
                'pkm' => $this->input->post('pkm_edit'),
                'tugas_tambahan' => $this->input->post('tugas_tambahan_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('ekuivalen_dosen_mengajar', $data);
        return $result;
    }
    
    function ewmp_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('ekuivalen_dosen_mengajar');
        return $result;
    }
    
    function dosen_tdk_tetap_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT *, CASE WHEN kesesuaian_kompetensi_inti_ps='YA' THEN 'V' ELSE '' END AS chk_kesesuaian_kompetensi, CASE WHEN kesesuaian_bidang_keahlian='YA' THEN 'V' ELSE '' END AS chk_kesesuaian_keahlian FROM `dosen` WHERE prodi='$role' AND status='TIDAK TETAP'";
        
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function dosen_tdk_tetap_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama'),
            'pendidikan_magister' => $this->input->post('pendidikan_magister'),
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
    
    function dosen_tdk_tetap_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nidn' => $this->input->post('nidn_edit'),
                'nama' => $this->input->post('nama_edit'),
                'pendidikan_magister' => $this->input->post('pendidikan_ps_edit'),
                'pendidikan_doktor' => $this->input->post('pendidikan_doktor_edit'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian_edit'),
                'kesesuaian_kompetensi_inti_ps' => $this->input->post('kesesuaian_kompetensi_inti_ps_edit'),
                'jabatan_akademik' => $this->input->post('jabatan_akademik_edit'),
                'sertifikasi_profesional' => $this->input->post('sertifikasi_profesional_edit'),
                'sertifikasi_kompetensi' => $this->input->post('sertifikasi_kompetensi_edit'),
                'matakuliah_diampu' => $this->input->post('matakuliah_diampu_edit'),
                'kesesuaian_bidang_keahlian' => $this->input->post('kesesuaian_bidang_keahlian_edit'),
                'matakuliah_diampu_ps_lain' => $this->input->post('matakuliah_diampu_ps_lain_edit'),
                'prodi' => $prodi,
                'status' => 'TIDAK TETAP',
                'doc' => $file
            );
        } else {
            $data = array(
                'nidn' => $this->input->post('nidn_edit'),
                'nama' => $this->input->post('nama_edit'),
                'pendidikan_magister' => $this->input->post('pendidikan_ps_edit'),
                'pendidikan_doktor' => $this->input->post('pendidikan_doktor_edit'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian_edit'),
                'kesesuaian_kompetensi_inti_ps' => $this->input->post('kesesuaian_kompetensi_inti_ps_edit'),
                'jabatan_akademik' => $this->input->post('jabatan_akademik_edit'),
                'sertifikasi_profesional' => $this->input->post('sertifikasi_profesional_edit'),
                'sertifikasi_kompetensi' => $this->input->post('sertifikasi_kompetensi_edit'),
                'matakuliah_diampu' => $this->input->post('matakuliah_diampu_edit'),
                'kesesuaian_bidang_keahlian' => $this->input->post('kesesuaian_bidang_keahlian_edit'),
                'matakuliah_diampu_ps_lain' => $this->input->post('matakuliah_diampu_ps_lain_edit'),
                'prodi' => $prodi,
                'status' => 'TIDAK TETAP'
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('dosen', $data);
        return $result;
    }
    
    function dosen_tdk_tetap_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('dosen');
        return $result;
    }
    
    function dosen_praktisi_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('dosen_praktisi');
        return $data->result();
    }
    
    function dosen_praktisi_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nik_nidn' => $this->input->post('nik_nidn'),
            'nama_dosen' => $this->input->post('nama'),
            'perusahaan' => $this->input->post('perusahaan'),
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
    
    function dosen_praktisi_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nik_nidn' => $this->input->post('nidk_edit'),
                'nama_dosen' => $this->input->post('nama_edit'),
                'perusahaan' => $this->input->post('perusahaan_edit'),
                'pendidikan_tertinggi' => $this->input->post('pendidikan_tertinggi_edit'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian_edit'),
                'sertifikat_profesi' => $this->input->post('sertifikat_profesi_edit'),
                'matakuliah_diampu' => $this->input->post('matakuliah_diampu_edit'),
                'sks' => $this->input->post('bobot_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nik_nidn' => $this->input->post('nidk_edit'),
                'nama_dosen' => $this->input->post('nama_edit'),
                'perusahaan' => $this->input->post('perusahaan_edit'),
                'pendidikan_tertinggi' => $this->input->post('pendidikan_tertinggi_edit'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian_edit'),
                'sertifikat_profesi' => $this->input->post('sertifikat_profesi_edit'),
                'matakuliah_diampu' => $this->input->post('matakuliah_diampu_edit'),
                'sks' => $this->input->post('bobot_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('dosen_praktisi', $data);
        return $result;
    }
    
    function dosen_praktisi_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('dosen_praktisi');
        return $result;
    }
    
    function rekognisi_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT *, CASE WHEN tingkat='Wilayah' THEN 'V' ELSE '' END AS 'Wilayah', CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS 'Nasional', CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS 'Internasional' FROM `rekognisi_dpts` WHERE prodi='$role'";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function rekognisi_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama' => $this->input->post('nama'),
            'bidang_keahlian' => $this->input->post('bidang_keahlian'),
            'bukti_pendukung' => $this->input->post('bukti_pendukung'),
            'tingkat' => $this->input->post('tingkat'),
            'tahun' => $this->input->post('tahun'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('rekognisi_dpts', $data);
        return $result;
    }
    
    function rekognisi_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama' => $this->input->post('nama_edit'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian_edit'),
                'bukti_pendukung' => $this->input->post('bukti_pendukung_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama' => $this->input->post('nama_edit'),
                'bidang_keahlian' => $this->input->post('bidang_keahlian_edit'),
                'bukti_pendukung' => $this->input->post('bukti_pendukung_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('rekognisi_dpts', $data);
        return $result;
    }
    
    function rekognisi_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('rekognisi_dpts');
        return $result;
    }
    
    function penelitian_dtps_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT CASE WHEN main.sumber_biaya='mandiri-perguruan tinggi' THEN 'a) Perguruan tinggi<p>b) Mandiri' WHEN main.sumber_biaya='lembaga dalam negeri' THEN 'Lembaga dalam negeri (diluar PT)' ELSE 'Lembaga luar negeri' END AS sumber_biaya, main.ts2, main.ts1, main.ts FROM (SELECT pa.sumber_biaya, SUM(CASE WHEN(pa.th_akademik = ts2.tahun) THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(pa.th_akademik = ts1.tahun) THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(pa.th_akademik = ts.tahun) THEN jml_judul ELSE 0 END) AS ts FROM penelitian_dosen pa LEFT JOIN ts AS ts2 ON ts2.tahun = pa.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = pa.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = pa.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE pa.prodi='$role' GROUP BY pa.sumber_biaya) main";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function pkm_dtps_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT CASE WHEN main.sumber_biaya='mandiri-perguruan tinggi' THEN 'a) Perguruan tinggi<p>b) Mandiri' WHEN main.sumber_biaya='lembaga dalam negeri' THEN 'Lembaga dalam negeri (diluar PT)' ELSE 'Lembaga luar negeri' END AS sumber_biaya, main.ts2, main.ts1, main.ts FROM (SELECT pa.sumber_biaya, SUM(CASE WHEN(pa.th_akademik = ts2.tahun) THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(pa.th_akademik = ts1.tahun) THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(pa.th_akademik = ts.tahun) THEN jml_judul ELSE 0 END) AS ts FROM pkm_dosen pa LEFT JOIN ts AS ts2 ON ts2.tahun = pa.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = pa.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = pa.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE pa.prodi='$role' GROUP BY pa.sumber_biaya) main";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function publikasi_ilmiah_dtps_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT a.nama, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts FROM `jenis_publikasi` a LEFT JOIN publikasi_ilmiah b on b.jenis_publikasi=a.id LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE a.modul='publikasi_ilmiah' GROUP by a.seq_id ";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function pagelaran_ilmiah_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT a.nama, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts FROM `jenis_publikasi` a LEFT JOIN pagelaran_ilmiah b on b.jenis_publikasi=a.id LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE a.modul='pagelaran_ilmiah' GROUP by a.seq_id ";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function hki_paten_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('hki_paten');
        return $data->result();
    }
    
    function hki_paten_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'luaran_penelitian' => $this->input->post('luaran_penelitian'),
            'th_perolehan' => $this->input->post('th_perolehan'),
            'keterangan' => $this->input->post('keterangan'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('hki_paten', $data);
        return $result;
    }
    
    function hki_paten_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('hki_paten', $data);
        return $result;
    }
    
    function hki_paten_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('hki_paten');
        return $result;
    }
    
    function hki_hak_cipta_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('hki_hak_cipta');
        return $data->result();
    }
    
    function hki_hak_cipta_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'luaran_penelitian' => $this->input->post('luaran_penelitian'),
            'th_perolehan' => $this->input->post('th_perolehan'),
            'keterangan' => $this->input->post('keterangan'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('hki_hak_cipta', $data);
        return $result;
    }
    
    function hki_hak_cipta_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('hki_hak_cipta', $data);
        return $result;
    }
    
    function hki_hak_cipta_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('hki_hak_cipta');
        return $result;
    }
    
    function hki_teknologi_tepatguna_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('hki_teknologi_tepatguna');
        return $data->result();
    }
    
    function hki_teknologi_tepatguna_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'luaran_penelitian' => $this->input->post('luaran_penelitian'),
            'th_perolehan' => $this->input->post('th_perolehan'),
            'keterangan' => $this->input->post('keterangan'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('hki_teknologi_tepatguna', $data);
        return $result;
    }
    
    function hki_teknologi_tepatguna_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('hki_teknologi_tepatguna', $data);
        return $result;
    }
    
    function hki_teknologi_tepatguna_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('hki_teknologi_tepatguna');
        return $result;
    }
    
    function buku_isbn_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('buku_isbn');
        return $data->result();
    }
    
    function buku_isbn_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'luaran_penelitian' => $this->input->post('luaran_penelitian'),
            'th_perolehan' => $this->input->post('th_perolehan'),
            'keterangan' => $this->input->post('keterangan'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('buku_isbn', $data);
        return $result;
    }
    
    function buku_isbn_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi
            );
        }
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('buku_isbn', $data);
        return $result;
    }
    
    function buku_isbn_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('buku_isbn');
        return $result;
    }
    
    function karya_ilmiah_disitasi_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('karya_ilmiah_disitasi');
        return $data->result();
    }
    
    function karya_ilmiah_disitasi_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'judul_artikel_disitasi' => $this->input->post('judul_artikel_disitasi'),
            'jumlah' => $this->input->post('jumlah'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('karya_ilmiah_disitasi', $data);
        return $result;
    }
    
    function karya_ilmiah_disitasi_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'judul_artikel_disitasi' => $this->input->post('judul_artikel_disitasi_edit'),
                'jumlah' => $this->input->post('jumlah_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'judul_artikel_disitasi' => $this->input->post('judul_artikel_disitasi_edit'),
                'jumlah' => $this->input->post('jumlah_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('karya_ilmiah_disitasi', $data);
        return $result;
    }
    
    function karya_ilmiah_disitasi_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('karya_ilmiah_disitasi');
        return $result;
    }
    
    function produk_dtps_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('produk_dtps');
        return $data->result();
    }
    
    function produk_dtps_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'nama_produk' => $this->input->post('nama_produk'),
            'deskripsi' => $this->input->post('deskripsi'),
            'bukti' => $this->input->post('bukti'),
            'tahun' => $this->input->post('tahun'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('produk_dtps', $data);
        return $result;
    }
    
    function produk_dtps_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'nama_produk' => $this->input->post('nama_produk_edit'),
                'deskripsi' => $this->input->post('deskripsi_edit'),
                'bukti' => $this->input->post('bukti_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'nama_produk' => $this->input->post('nama_produk_edit'),
                'deskripsi' => $this->input->post('deskripsi_edit'),
                'bukti' => $this->input->post('bukti_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('produk_dtps', $data);
        return $result;
    }
    
    function produk_dtps_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('produk_dtps');
        return $result;
    }
    
    function penggunaan_dana_data_list()
    {
        $prodi = $this->session->userdata('nama');
        $sql   = "SELECT Sum(a_biaya_dosen_ts2) AS a_biaya_dosen_ts2, Sum(a_biaya_tenaga_kependidikan_ts2) AS a_biaya_tenaga_kependidikan_ts2, Sum(a_biaya_operasional_pembelajaran_ts2) AS a_biaya_operasional_pembelajaran_ts2, Sum(a_biaya_operasional_tidak_langsung_ts2) AS a_biaya_operasional_tidak_langsung_ts2, Sum(a_biaya_operasional_kemahasiswaan_ts2) AS a_biaya_operasional_kemahasiswaan_ts2, Sum(a_biaya_penelitian_ts2) AS a_biaya_penelitian_ts2, Sum(a_biaya_pkm_ts2) AS a_biaya_pkm_ts2, Sum(a_biaya_investasi_sdm_ts2) AS a_biaya_investasi_sdm_ts2, Sum(a_biaya_investasi_sarana_ts2) AS a_biaya_investasi_sarana_ts2, Sum(a_biaya_investasi_prasarana_ts2) AS a_biaya_investasi_prasarana_ts2, Sum(a_biaya_dosen_ts1) AS a_biaya_dosen_ts1, Sum(a_biaya_tenaga_kependidikan_ts1) AS a_biaya_tenaga_kependidikan_ts1, Sum(a_biaya_operasional_pembelajaran_ts1) AS a_biaya_operasional_pembelajaran_ts1, Sum(a_biaya_operasional_tidak_langsung_ts1) AS a_biaya_operasional_tidak_langsung_ts1, Sum(a_biaya_operasional_kemahasiswaan_ts1) AS a_biaya_operasional_kemahasiswaan_ts1, Sum(a_biaya_operasional_kemahasiswaan_ts1) AS a_biaya_penelitian_ts1, Sum(a_biaya_pkm_ts1) AS a_biaya_pkm_ts1, Sum(a_biaya_investasi_sdm_ts1) AS a_biaya_investasi_sdm_ts1, Sum(a_biaya_investasi_sarana_ts1) AS a_biaya_investasi_sarana_ts1, Sum(a_biaya_investasi_prasarana_ts1) AS a_biaya_investasi_prasarana_ts1, Sum(a_biaya_dosen_ts) AS a_biaya_dosen_ts, Sum(a_biaya_tenaga_kependidikan_ts) AS a_biaya_tenaga_kependidikan_ts, Sum(a_biaya_operasional_pembelajaran_ts) AS a_biaya_operasional_pembelajaran_ts, Sum(a_biaya_operasional_tidak_langsung_ts) AS a_biaya_operasional_tidak_langsung_ts, Sum(a_biaya_operasional_kemahasiswaan_ts) AS a_biaya_operasional_kemahasiswaan_ts, Sum(a_biaya_penelitian_ts) AS a_biaya_penelitian_ts, Sum(a_biaya_pkm_ts) AS a_biaya_pkm_ts, Sum(a_biaya_investasi_sdm_ts) AS a_biaya_investasi_sdm_ts, Sum(a_biaya_investasi_sarana_ts) AS a_biaya_investasi_sarana_ts, Sum(a_biaya_investasi_prasarana_ts) AS a_biaya_investasi_prasarana_ts, Sum(b_biaya_dosen_ts2) AS b_biaya_dosen_ts2, Sum(b_biaya_tenaga_kependidikan_ts2) AS b_biaya_tenaga_kependidikan_ts2, Sum(b_biaya_operasional_pembelajaran_ts2) AS b_biaya_operasional_pembelajaran_ts2, Sum(b_biaya_operasional_tidak_langsung_ts2) AS b_biaya_operasional_tidak_langsung_ts2, Sum(b_biaya_operasional_kemahasiswaan_ts2) AS b_biaya_operasional_kemahasiswaan_ts2, Sum(b_biaya_penelitian_ts2) AS b_biaya_penelitian_ts2, Sum(b_biaya_pkm_ts2) AS b_biaya_pkm_ts2, Sum(b_biaya_investasi_sdm_ts2) AS b_biaya_investasi_sdm_ts2, Sum(b_biaya_investasi_sarana_ts2) AS b_biaya_investasi_sarana_ts2, Sum(b_biaya_investasi_prasarana_ts2) AS b_biaya_investasi_prasarana_ts2, Sum(b_biaya_dosen_ts1) AS b_biaya_dosen_ts1, Sum(b_biaya_tenaga_kependidikan_ts1) AS b_biaya_tenaga_kependidikan_ts1, Sum(b_biaya_operasional_pembelajaran_ts1) AS b_biaya_operasional_pembelajaran_ts1, Sum(b_biaya_operasional_tidak_langsung_ts1) AS b_biaya_operasional_tidak_langsung_ts1, Sum(b_biaya_operasional_kemahasiswaan_ts1) AS b_biaya_operasional_kemahasiswaan_ts1, Sum(b_biaya_penelitian_ts1) AS b_biaya_penelitian_ts1, Sum(b_biaya_pkm_ts1) AS b_biaya_pkm_ts1, Sum(b_biaya_investasi_sdm_ts1) AS b_biaya_investasi_sdm_ts1, Sum(b_biaya_investasi_sarana_ts1) AS b_biaya_investasi_sarana_ts1, Sum(b_biaya_investasi_prasarana_ts1) AS b_biaya_investasi_prasarana_ts1, Sum(b_biaya_dosen_ts) AS b_biaya_dosen_ts, Sum(b_biaya_tenaga_kependidikan_ts) AS b_biaya_tenaga_kependidikan_ts, Sum(b_biaya_operasional_pembelajaran_ts) AS b_biaya_operasional_pembelajaran_ts, Sum(b_biaya_operasional_tidak_langsung_ts) AS b_biaya_operasional_tidak_langsung_ts, Sum(b_biaya_operasional_kemahasiswaan_ts) AS b_biaya_operasional_kemahasiswaan_ts, Sum(b_biaya_penelitian_ts) AS b_biaya_penelitian_ts, Sum(b_biaya_pkm_ts) AS b_biaya_pkm_ts, Sum(b_biaya_investasi_sdm_ts) AS b_biaya_investasi_sdm_ts, Sum(b_biaya_investasi_sarana_ts) AS b_biaya_investasi_sarana_ts, Sum(b_biaya_investasi_prasarana_ts) AS b_biaya_investasi_prasarana_ts FROM ( SELECT Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_dosen ELSE 0 end ) AS a_biaya_dosen_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_tenaga_kependidikan ELSE 0 end ) AS a_biaya_tenaga_kependidikan_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_pembelajaran ELSE 0 end ) AS a_biaya_operasional_pembelajaran_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_tidak_langsung ELSE 0 end ) AS a_biaya_operasional_tidak_langsung_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_kemahasiswaan ELSE 0 end ) AS a_biaya_operasional_kemahasiswaan_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_penelitian ELSE 0 end ) AS a_biaya_penelitian_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_pkm ELSE 0 end ) AS a_biaya_pkm_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_sdm ELSE 0 end ) AS a_biaya_investasi_sdm_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_sarana ELSE 0 end ) AS a_biaya_investasi_sarana_ts2, Sum( CASE WHEN( b.th_akademik = ts2.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_prasarana ELSE 0 end ) AS a_biaya_investasi_prasarana_ts2, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_dosen ELSE 0 end ) AS a_biaya_dosen_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_tenaga_kependidikan ELSE 0 end ) AS a_biaya_tenaga_kependidikan_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_pembelajaran ELSE 0 end ) AS a_biaya_operasional_pembelajaran_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_tidak_langsung ELSE 0 end ) AS a_biaya_operasional_tidak_langsung_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_kemahasiswaan ELSE 0 end ) AS a_biaya_operasional_kemahasiswaan_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_penelitian ELSE 0 end ) AS a_biaya_penelitian_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_pkm ELSE 0 end ) AS a_biaya_pkm_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_sdm ELSE 0 end ) AS a_biaya_investasi_sdm_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_sarana ELSE 0 end ) AS a_biaya_investasi_sarana_ts1, Sum( CASE WHEN( b.th_akademik = ts1.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_prasarana ELSE 0 end ) AS a_biaya_investasi_prasarana_ts1, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_dosen ELSE 0 end ) AS a_biaya_dosen_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_tenaga_kependidikan ELSE 0 end ) AS a_biaya_tenaga_kependidikan_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_pembelajaran ELSE 0 end ) AS a_biaya_operasional_pembelajaran_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_tidak_langsung ELSE 0 end ) AS a_biaya_operasional_tidak_langsung_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_operasional_kemahasiswaan ELSE 0 end ) AS a_biaya_operasional_kemahasiswaan_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_penelitian ELSE 0 end ) AS a_biaya_penelitian_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_pkm ELSE 0 end ) AS a_biaya_pkm_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_sdm ELSE 0 end ) AS a_biaya_investasi_sdm_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_sarana ELSE 0 end ) AS a_biaya_investasi_sarana_ts, Sum( CASE WHEN( b.th_akademik = ts.tahun AND b.prodi = '$prodi' ) THEN biaya_investasi_prasarana ELSE 0 end ) AS a_biaya_investasi_prasarana_ts, '' AS b_biaya_dosen_ts2, '' AS b_biaya_tenaga_kependidikan_ts2, '' AS b_biaya_operasional_pembelajaran_ts2, '' AS b_biaya_operasional_tidak_langsung_ts2, '' AS b_biaya_operasional_kemahasiswaan_ts2, '' AS b_biaya_penelitian_ts2, '' AS b_biaya_pkm_ts2, '' AS b_biaya_investasi_sdm_ts2, '' AS b_biaya_investasi_sarana_ts2, '' AS b_biaya_investasi_prasarana_ts2, '' AS b_biaya_dosen_ts1, '' AS b_biaya_tenaga_kependidikan_ts1, '' AS b_biaya_operasional_pembelajaran_ts1, '' AS b_biaya_operasional_tidak_langsung_ts1, '' AS b_biaya_operasional_kemahasiswaan_ts1, '' AS b_biaya_penelitian_ts1, '' AS b_biaya_pkm_ts1, '' AS b_biaya_investasi_sdm_ts1, '' AS b_biaya_investasi_sarana_ts1, '' AS b_biaya_investasi_prasarana_ts1, '' AS b_biaya_dosen_ts, '' AS b_biaya_tenaga_kependidikan_ts, '' AS b_biaya_operasional_pembelajaran_ts, '' AS b_biaya_operasional_tidak_langsung_ts, '' AS b_biaya_operasional_kemahasiswaan_ts, '' AS b_biaya_penelitian_ts, '' AS b_biaya_pkm_ts, '' AS b_biaya_investasi_sdm_ts, '' AS b_biaya_investasi_sarana_ts, '' AS b_biaya_investasi_prasarana_ts FROM dana_prodi b LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.prodi = '$prodi' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.prodi = '$prodi' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.prodi = '$prodi' AND ts.nama_ts = 'TS' UNION ALL SELECT '' AS a_biaya_dosen_ts2, '' AS a_biaya_tenaga_kependidikan_ts2, '' AS a_biaya_operasional_pembelajaran_ts2, '' AS a_biaya_operasional_tidak_langsung_ts2, '' AS a_biaya_operasional_kemahasiswaan_ts2, '' AS a_biaya_penelitian_ts2, '' AS a_biaya_pkm_ts2, '' AS a_biaya_investasi_sdm_ts2, '' AS a_biaya_investasi_sarana_ts2, '' AS a_biaya_investasi_prasarana_ts2, '' AS a_biaya_dosen_ts1, '' AS a_biaya_tenaga_kependidikan_ts1, '' AS a_biaya_operasional_pembelajaran_ts1, '' AS a_biaya_operasional_tidak_langsung_ts1, '' AS a_biaya_operasional_kemahasiswaan_ts1, '' AS a_biaya_penelitian_ts1, '' AS a_biaya_pkm_ts1, '' AS a_biaya_investasi_sdm_ts1, '' AS a_biaya_investasi_sarana_ts1, '' AS a_biaya_investasi_prasarana_ts1, '' AS a_biaya_dosen_ts, '' AS a_biaya_tenaga_kependidikan_ts, '' AS a_biaya_operasional_pembelajaran_ts, '' AS a_biaya_operasional_tidak_langsung_ts, '' AS a_biaya_operasional_kemahasiswaan_ts, '' AS a_biaya_penelitian_ts, '' AS a_biaya_pkm_ts, '' AS a_biaya_investasi_sdm_ts, '' AS a_biaya_investasi_sarana_ts, '' AS a_biaya_investasi_prasarana_ts, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_dosen ELSE 0 end ) AS b_biaya_dosen_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_tenaga_kependidikan ELSE 0 end ) AS b_biaya_tenaga_kependidikan_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_operasional_pembelajaran ELSE 0 end ) AS b_biaya_operasional_pembelajaran_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 end ) AS b_biaya_operasional_tidak_langsung_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 end ) AS b_biaya_operasional_kemahasiswaan_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_penelitian ELSE 0 end ) AS b_biaya_penelitian_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_pkm ELSE 0 end ) AS b_biaya_pkm_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sdm ELSE 0 end ) AS b_biaya_investasi_sdm_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sarana ELSE 0 end ) AS b_biaya_investasi_sarana_ts2, Sum( CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi = '$prodi') THEN biaya_investasi_prasarana ELSE 0 end ) AS b_biaya_investasi_prasarana_ts2, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_dosen ELSE 0 end ) AS b_biaya_dosen_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_tenaga_kependidikan ELSE 0 end ) AS b_biaya_tenaga_kependidikan_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_operasional_pembelajaran ELSE 0 end ) AS b_biaya_operasional_pembelajaran_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 end ) AS b_biaya_operasional_tidak_langsung_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 end ) AS b_biaya_operasional_kemahasiswaan_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_penelitian ELSE 0 end ) AS b_biaya_penelitian_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_pkm ELSE 0 end ) AS b_biaya_pkm_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sdm ELSE 0 end ) AS b_biaya_investasi_sdm_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sarana ELSE 0 end ) AS b_biaya_investasi_sarana_ts1, Sum( CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi = '$prodi') THEN biaya_investasi_prasarana ELSE 0 end ) AS b_biaya_investasi_prasarana_ts1, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_dosen ELSE 0 end ) AS b_biaya_dosen_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_tenaga_kependidikan ELSE 0 end ) AS b_biaya_tenaga_kependidikan_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_operasional_pembelajaran ELSE 0 end ) AS b_biaya_operasional_pembelajaran_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_operasional_tidak_langsung ELSE 0 end ) AS b_biaya_operasional_tidak_langsung_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_operasional_kemahasiswaan ELSE 0 end ) AS b_biaya_operasional_kemahasiswaan_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_penelitian ELSE 0 end ) AS b_biaya_penelitian_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_pkm ELSE 0 end ) AS b_biaya_pkm_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sdm ELSE 0 end ) AS b_biaya_investasi_sdm_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_investasi_sarana ELSE 0 end ) AS b_biaya_investasi_sarana_ts, Sum( CASE WHEN(b.th_akademik = ts.tahun AND b.prodi = '$prodi') THEN biaya_investasi_prasarana ELSE 0 end ) AS b_biaya_investasi_prasarana_ts FROM dana_fakultas b LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.nama_ts = 'TS-2' AND ts2.prodi = '$prodi' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.nama_ts = 'TS-1' AND ts1.prodi = '$prodi' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.nama_ts = 'TS' AND ts.prodi = '$prodi' ) x ";
        $data  = $this->db->query($sql);
        return $data->result();
    }
    
    function cp_rencana_pembelajaran_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('kurikulum');
        return $data->result();
    }
    
    function cp_rencana_pembelajaran_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'semester' => $this->input->post('semester'),
            'kode_matkul' => $this->input->post('kode_matkul'),
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
    
    function cp_rencana_pembelajaran_edit()
    {
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'semester' => $this->input->post('semester'),
            'kode_matkul' => $this->input->post('kode_matkul'),
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
    
    function cp_rencana_pembelajaran_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('kurikulum');
        return $result;
    }
    
    function integrasi_pkm_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('integrasi_pkm');
        return $data->result();
    }
    
    function integrasi_pkm_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'judul' => $this->input->post('judul'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'matkul' => $this->input->post('matkul'),
            'bentuk_integrasi' => $this->input->post('bentuk_integrasi'),
            'tahun' => $this->input->post('tahun'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('integrasi_pkm', $data);
        return $result;
    }
    
    function integrasi_pkm_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'judul' => $this->input->post('judul_edit'),
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'matkul' => $this->input->post('matkul_edit'),
                'bentuk_integrasi' => $this->input->post('bentuk_integrasi_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'judul' => $this->input->post('judul_edit'),
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'matkul' => $this->input->post('matkul_edit'),
                'bentuk_integrasi' => $this->input->post('bentuk_integrasi_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('integrasi_pkm', $data);
        return $result;
    }
    
    function integrasi_pkm_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('integrasi_pkm');
        return $result;
    }
    
    function kepuasan_mahasiswa_list()
    {
        $prodi = $this->session->userdata('nama');
        // $sql = "SELECT b.seq_id,b.aspek_ukuran, ifnull(b.sangat_baik,0) as sangat_baik, ifnull(b.baik,0) as baik, ifnull(b.cukup,0) as cukup, ifnull(b.kurang,0) as kurang, ifnull(b.rencana_tindaklanjut,'-') as rencana_tindaklanjut,b.prodi,b.doc, a.nama FROM jenis_publikasi a LEFT OUTER JOIN kepuasan_pelanggan b ON a.id=b.aspek_ukuran AND b.prodi='$prodi' WHERE a.modul='kepuasan_mahasiswa' ";
        $sql   = "SELECT b.*, a.nama FROM jenis_publikasi a LEFT OUTER JOIN kepuasan_pelanggan b ON a.id=b.aspek_ukuran AND b.prodi='$prodi' WHERE a.modul='kepuasan_mahasiswa' ";
        $data  = $this->db->query($sql);
        return $data->result();
    }
    
    function aspek_list()
    {
        //$sql = "SELECT seq_id,id,CONCAT(LEFT(nama, 100),'  .....') AS nama FROM jenis_publikasi WHERE modul='kepuasan_mahasiswa'";
        $this->db->where('modul', 'kepuasan_mahasiswa');
        $this->db->order_by('nama', 'ASC');
        $data = $this->db->get('jenis_publikasi');
        //$data = $this->db->query($sql);
        return $data;
    }
    
    function kepuasan_mahasiswa_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'aspek_ukuran' => $this->input->post('aspek_ukuran'),
            'sangat_baik' => $this->input->post('sangat_baik'),
            'baik' => $this->input->post('baik'),
            'cukup' => $this->input->post('cukup'),
            'kurang' => $this->input->post('kurang'),
            'rencana_tindaklanjut' => $this->input->post('rencana_tindaklanjut'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('kepuasan_pelanggan', $data);
        return $result;
    }
    
    function kepuasan_mahasiswa_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'aspek_ukuran' => $this->input->post('aspek_ukuran_edit'),
                'sangat_baik' => $this->input->post('sangat_baik_edit'),
                'baik' => $this->input->post('baik_edit'),
                'cukup' => $this->input->post('cukup_edit'),
                'kurang' => $this->input->post('kurang_edit'),
                'rencana_tindaklanjut' => $this->input->post('rencana_tindaklanjut_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'aspek_ukuran' => $this->input->post('aspek_ukuran_edit'),
                'sangat_baik' => $this->input->post('sangat_baik_edit'),
                'baik' => $this->input->post('baik_edit'),
                'cukup' => $this->input->post('cukup_edit'),
                'kurang' => $this->input->post('kurang_edit'),
                'rencana_tindaklanjut' => $this->input->post('rencana_tindaklanjut_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('kepuasan_pelanggan', $data);
        return $result;
    }
    
    function kepuasan_mahasiswa_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('kepuasan_pelanggan');
        return $result;
    }
    
    function penelitian_dosen_dan_mhs_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('penelitian_dosen_mhs');
        return $data->result();
    }
    
    function penelitian_dosen_dan_mhs_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'tema_penelitian' => $this->input->post('tema_penelitian'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'tahun' => $this->input->post('tahun'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('penelitian_dosen_mhs', $data);
        return $result;
    }
    
    function penelitian_dosen_dan_mhs_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'tema_penelitian' => $this->input->post('tema_penelitian_edit'),
                'nama_mhs' => $this->input->post('nama_mhs_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'tema_penelitian' => $this->input->post('tema_penelitian_edit'),
                'nama_mhs' => $this->input->post('nama_mhs_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('penelitian_dosen_mhs', $data);
        return $result;
    }
    
    function penelitian_dosen_dan_mhs_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('penelitian_dosen_mhs');
        return $result;
    }
    
    function penelitian_mhs_tesis_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('penelitian_mhs_tesis');
        return $data->result();
    }
    
    function penelitian_mhs_tesis_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'tema_penelitian' => $this->input->post('tema_penelitian'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'tahun' => $this->input->post('tahun'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('penelitian_mhs_tesis', $data);
        return $result;
    }
    
    function penelitian_mhs_tesis_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'tema_penelitian' => $this->input->post('tema_penelitian_edit'),
                'nama_mhs' => $this->input->post('nama_mhs_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'tema_penelitian' => $this->input->post('tema_penelitian_edit'),
                'nama_mhs' => $this->input->post('nama_mhs_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('penelitian_mhs_tesis', $data);
        return $result;
    }
    
    function penelitian_mhs_tesis_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('penelitian_mhs_tesis');
        return $result;
    }
    
    function pkm_dosen_dan_mhs_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('pkm_dosen_mhs');
        return $data->result();
    }
    
    function pkm_dosen_dan_mhs_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'tema_penelitian' => $this->input->post('tema_penelitian'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'judul_kegiatan' => $this->input->post('judul_kegiatan'),
            'tahun' => $this->input->post('tahun'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('pkm_dosen_mhs', $data);
        return $result;
    }
    
    function pkm_dosen_dan_mhs_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'tema_penelitian' => $this->input->post('tema_penelitian_edit'),
                'nama_mhs' => $this->input->post('nama_mhs_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'tema_penelitian' => $this->input->post('tema_penelitian_edit'),
                'nama_mhs' => $this->input->post('nama_mhs_edit'),
                'judul_kegiatan' => $this->input->post('judul_kegiatan_edit'),
                'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('pkm_dosen_mhs', $data);
        return $result;
    }
    
    function pkm_dosen_dan_mhs_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('pkm_dosen_mhs');
        return $result;
    }
    
    function ipk_lulusan_data_list()
    {
        $prodi = $this->session->userdata('nama');
        $sql   = "SELECT ts.seq_id, ts.nama_ts, SUM(CASE WHEN c.status_mhs='LULUS' THEN 1 ELSE 0 END) as jml, MIN(c.ipk) AS ipk_min, MAX(c.ipk) AS ipk_maks, AVG(c.ipk) AS ipk_rata FROM `mahasiswa` c INNER JOIN ts ON ts.tahun = LEFT(c.thn_lulus, 4) AND ts.prodi = '$prodi' WHERE c.prodi = '$prodi' AND ts.nama_ts IN ('TS','TS-1','TS-2') GROUP BY ts.nama_ts ORDER BY ts.seq_id DESC";
        $data  = $this->db->query($sql);
        return $data->result();
    }
    
    function prestasi_akademik_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `prestasi_akad_mhs` WHERE prodi='$role'";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function prestasi_akademik_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'waktu' => $this->input->post('waktu'),
            'tingkat' => $this->input->post('tingkat'),
            'prestasi' => $this->input->post('prestasi'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('prestasi_akad_mhs', $data);
        return $result;
    }
    
    function prestasi_akademik_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_kegiatan' => $this->input->post('nama_kegiatan_edit'),
                'waktu' => $this->input->post('waktu_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'prestasi' => $this->input->post('prestasi_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_kegiatan' => $this->input->post('nama_kegiatan_edit'),
                'waktu' => $this->input->post('waktu_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'prestasi' => $this->input->post('prestasi_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('prestasi_akad_mhs', $data);
        return $result;
    }
    
    function prestasi_akademik_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('prestasi_akad_mhs');
        return $result;
    }
    function prestasi_non_akademik_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT *,CASE WHEN tingkat='Internasional' THEN 'V' ELSE '' END AS internasional,CASE WHEN tingkat='Nasional' THEN 'V' ELSE '' END AS nasional,CASE WHEN tingkat='Lokal' THEN 'V' ELSE '' END AS lokal FROM `prestasi_non_akad_mhs` WHERE prodi='$role'";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function prestasi_non_akademik_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'waktu' => $this->input->post('waktu'),
            'tingkat' => $this->input->post('tingkat'),
            'prestasi' => $this->input->post('prestasi'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('prestasi_non_akad_mhs', $data);
        return $result;
    }
    
    function prestasi_non_akademik_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_kegiatan' => $this->input->post('nama_kegiatan_edit'),
                'waktu' => $this->input->post('waktu_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'prestasi' => $this->input->post('prestasi_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_kegiatan' => $this->input->post('nama_kegiatan_edit'),
                'waktu' => $this->input->post('waktu_edit'),
                'tingkat' => $this->input->post('tingkat_edit'),
                'prestasi' => $this->input->post('prestasi_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('prestasi_non_akad_mhs', $data);
        return $result;
    }
    
    function prestasi_non_akademik_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('prestasi_non_akad_mhs');
        return $result;
    }
    
    function masa_studi_lulusan_list()
    {
        $prodi = $this->session->userdata('nama');
        $role  = substr($prodi, strlen($prodi) - 2);
        if (strtoupper($role) == 'S1') {
            $sql = "SELECT ts_masuk.seq_id, ts_masuk.nama_ts, SUM( CASE WHEN c.thn_akademik = ts_masuk.tahun AND c.status_asal = 'REGULER' THEN 1 ELSE 0 END) AS jml, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts6.tahun THEN 1 ELSE 0 END ) AS ts6, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts5.tahun THEN 1 ELSE 0 END ) AS ts5, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts4.tahun THEN 1 ELSE 0 END ) AS ts4, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts3.tahun THEN 1 ELSE 0 END ) AS ts3, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts2.tahun THEN 1 ELSE 0 END ) AS ts2, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts1.tahun THEN 1 ELSE 0 END ) AS ts1, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts.tahun THEN 1 ELSE 0 END ) AS ts, IFNULL(FORMAT(ms.masa_studi, 2),0) AS masa_studi FROM mahasiswa c INNER JOIN ts AS ts_masuk ON ts_masuk.tahun = c.thn_akademik AND ts_masuk.prodi = '$prodi' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts6 ON ts6.tahun = LEFT(c.thn_lulus, 4) AND ts6.prodi = '$prodi' AND ts6.nama_ts = 'TS-6' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts5 ON ts5.tahun = LEFT(c.thn_lulus, 4) AND ts5.prodi = '$prodi' AND ts5.nama_ts = 'TS-5' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts4 ON ts4.tahun = LEFT(c.thn_lulus, 4) AND ts4.prodi = '$prodi' AND ts4.nama_ts = 'TS-4' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts3 ON ts3.tahun = LEFT(c.thn_lulus, 4) AND ts3.prodi = '$prodi' AND ts3.nama_ts = 'TS-3' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts2 ON ts2.tahun = LEFT(c.thn_lulus, 4) AND ts2.prodi = '$prodi' AND ts2.nama_ts = 'TS-2' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts1 ON ts1.tahun = LEFT(c.thn_lulus, 4) AND ts1.prodi = '$prodi' AND ts1.nama_ts = 'TS-1' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts ON ts.tahun = LEFT(c.thn_lulus, 4) AND ts.prodi = '$prodi' AND ts.nama_ts = 'TS' LEFT JOIN(SELECT thn_akademik,AVG(masa_studi) AS masa_studi FROM mahasiswa WHERE prodi = '$prodi' AND status_mhs = 'LULUS' AND status_asal = 'REGULER' GROUP BY thn_akademik) ms ON ms.thn_akademik=ts_masuk.tahun WHERE c.prodi = '$prodi' AND ts_masuk.nama_ts IN('TS-6', 'TS-5', 'TS-4', 'TS-3') GROUP BY ts_masuk.nama_ts ORDER BY ts_masuk.seq_id DESC";
        } else if (strtoupper($role) == 'D3') {
            $sql = "SELECT ts_masuk.seq_id, ts_masuk.nama_ts, SUM( CASE WHEN c.thn_akademik = ts_masuk.tahun AND c.status_asal = 'REGULER' THEN 1 ELSE 0 END) AS jml, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts4.tahun THEN 1 ELSE 0 END ) AS ts4, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts3.tahun THEN 1 ELSE 0 END ) AS ts3, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts2.tahun THEN 1 ELSE 0 END ) AS ts2, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts1.tahun THEN 1 ELSE 0 END ) AS ts1, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts.tahun THEN 1 ELSE 0 END ) AS ts, IFNULL(FORMAT(ms.masa_studi, 2),0) AS masa_studi FROM mahasiswa c INNER JOIN ts AS ts_masuk ON ts_masuk.tahun = c.thn_akademik AND ts_masuk.prodi = '$prodi' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts4 ON ts4.tahun = LEFT(c.thn_lulus, 4) AND ts4.prodi = '$prodi' AND ts4.nama_ts = 'TS-4' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts3 ON ts3.tahun = LEFT(c.thn_lulus, 4) AND ts3.prodi = '$prodi' AND ts3.nama_ts = 'TS-3' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts2 ON ts2.tahun = LEFT(c.thn_lulus, 4) AND ts2.prodi = '$prodi' AND ts2.nama_ts = 'TS-2' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts1 ON ts1.tahun = LEFT(c.thn_lulus, 4) AND ts1.prodi = '$prodi' AND ts1.nama_ts = 'TS-1' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts ON ts.tahun = LEFT(c.thn_lulus, 4) AND ts.prodi = '$prodi' AND ts.nama_ts = 'TS' LEFT JOIN(SELECT thn_akademik,AVG(masa_studi) AS masa_studi FROM mahasiswa WHERE prodi = '$prodi' AND status_mhs = 'LULUS' AND status_asal = 'REGULER' GROUP BY thn_akademik) ms ON ms.thn_akademik=ts_masuk.tahun WHERE c.prodi = '$prodi' AND ts_masuk.nama_ts IN('TS-2', 'TS-3', 'TS-4') GROUP BY ts_masuk.nama_ts ORDER BY ts_masuk.seq_id DESC";
        } else if (strtoupper($role) == 'S3') {
            $sql = "SELECT ts_masuk.seq_id, ts_masuk.nama_ts, SUM( CASE WHEN c.thn_akademik = ts_masuk.tahun AND c.status_asal = 'REGULER' THEN 1 ELSE 0 END) AS jml, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts6.tahun THEN 1 ELSE 0 END ) AS ts6, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts5.tahun THEN 1 ELSE 0 END ) AS ts5, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts4.tahun THEN 1 ELSE 0 END ) AS ts4, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts3.tahun THEN 1 ELSE 0 END ) AS ts3, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts2.tahun THEN 1 ELSE 0 END ) AS ts2, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts1.tahun THEN 1 ELSE 0 END ) AS ts1, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts.tahun THEN 1 ELSE 0 END ) AS ts, IFNULL(FORMAT(ms.masa_studi, 2),0) AS masa_studi FROM mahasiswa c INNER JOIN ts AS ts_masuk ON ts_masuk.tahun = c.thn_akademik AND ts_masuk.prodi = '$prodi' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts6 ON ts6.tahun = LEFT(c.thn_lulus, 4) AND ts6.prodi = '$prodi' AND ts6.nama_ts = 'TS-6' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts5 ON ts5.tahun = LEFT(c.thn_lulus, 4) AND ts5.prodi = '$prodi' AND ts5.nama_ts = 'TS-5' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts4 ON ts4.tahun = LEFT(c.thn_lulus, 4) AND ts4.prodi = '$prodi' AND ts4.nama_ts = 'TS-4' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts3 ON ts3.tahun = LEFT(c.thn_lulus, 4) AND ts3.prodi = '$prodi' AND ts3.nama_ts = 'TS-3' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts2 ON ts2.tahun = LEFT(c.thn_lulus, 4) AND ts2.prodi = '$prodi' AND ts2.nama_ts = 'TS-2' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts1 ON ts1.tahun = LEFT(c.thn_lulus, 4) AND ts1.prodi = '$prodi' AND ts1.nama_ts = 'TS-1' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts ON ts.tahun = LEFT(c.thn_lulus, 4) AND ts.prodi = '$prodi' AND ts.nama_ts = 'TS' LEFT JOIN(SELECT thn_akademik,AVG(masa_studi) AS masa_studi FROM mahasiswa WHERE prodi = '$prodi' AND status_mhs = 'LULUS' AND status_asal = 'REGULER' GROUP BY thn_akademik) ms ON ms.thn_akademik=ts_masuk.tahun WHERE c.prodi = '$prodi' AND ts_masuk.nama_ts IN('TS-6', 'TS-5', 'TS-4', 'TS-3', 'TS-2') GROUP BY ts_masuk.nama_ts ORDER BY ts_masuk.seq_id DESC";
        } 
        else {
            $sql = "SELECT ts_masuk.seq_id, ts_masuk.nama_ts, SUM( CASE WHEN c.thn_akademik = ts_masuk.tahun AND c.status_asal = 'REGULER' THEN 1 ELSE 0 END) AS jml, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts3.tahun THEN 1 ELSE 0 END ) AS ts3, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts2.tahun THEN 1 ELSE 0 END ) AS ts2, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts1.tahun THEN 1 ELSE 0 END ) AS ts1, SUM( CASE WHEN LEFT(c.thn_lulus, 4) = ts.tahun THEN 1 ELSE 0 END ) AS ts, IFNULL(FORMAT(ms.masa_studi, 2),0) AS masa_studi FROM mahasiswa c INNER JOIN ts AS ts_masuk ON ts_masuk.tahun = c.thn_akademik AND ts_masuk.prodi = '$prodi' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts3 ON ts3.tahun = LEFT(c.thn_lulus, 4) AND ts3.prodi = '$prodi' AND ts3.nama_ts = 'TS-3' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts2 ON ts2.tahun = LEFT(c.thn_lulus, 4) AND ts2.prodi = '$prodi' AND ts2.nama_ts = 'TS-2' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts AS ts1 ON ts1.tahun = LEFT(c.thn_lulus, 4) AND ts1.prodi = '$prodi' AND ts1.nama_ts = 'TS-1' AND c.status_mhs = 'LULUS' AND c.status_asal = 'REGULER' LEFT JOIN ts ON ts.tahun = LEFT(c.thn_lulus, 4) AND ts.prodi = '$prodi' AND ts.nama_ts = 'TS' LEFT JOIN(SELECT thn_akademik,AVG(masa_studi) AS masa_studi FROM mahasiswa WHERE prodi = '$prodi' AND status_mhs = 'LULUS' AND status_asal = 'REGULER' GROUP BY thn_akademik) ms ON ms.thn_akademik=ts_masuk.tahun WHERE c.prodi = '$prodi' AND ts_masuk.nama_ts IN('TS-3', 'TS-2', 'TS-1') GROUP BY ts_masuk.nama_ts ORDER BY ts_masuk.seq_id DESC";
        }
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function waktu_tunggu_lulusan_list()
    {
        $prodi = $this->session->userdata('nama');
        $sql   = "SELECT ts_lulus.seq_id AS ts_id, ts_lulus.nama_ts, SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts_lulus.tahun THEN 1 ELSE 0 END) AS jml, w.* FROM mahasiswa c INNER JOIN ts AS ts_lulus ON ts_lulus.tahun = LEFT(c.thn_lulus,4) AND ts_lulus.prodi = '$prodi' LEFT OUTER JOIN waktu_tunggu_lulusan w ON w.ts = ts_lulus.nama_ts AND ts_lulus.prodi = '$prodi' WHERE c.prodi = '$prodi' AND c.status_mhs='LULUS' AND ts_lulus.nama_ts IN ('TS-2','TS-3','TS-4') GROUP BY ts_lulus.nama_ts ORDER BY ts_lulus.seq_id DESC";
        $data  = $this->db->query($sql);
        return $data->result();
    }
    
    function ts_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $this->db->order_by('nama_ts', 'ASC');
        $data = $this->db->get('ts');
        return $data;
    }
    
    function waktu_tunggu_lulusan_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jml_lulusan_terlacak' => $this->input->post('jml_lulusan_terlacak'),
            'jml_lulusan_dipesan' => $this->input->post('jml_lulusan_dipesan'),
            'wt_dibawah_3bln' => $this->input->post('wt_dibawah_3bln'),
            'wt_3sd6_bulan' => $this->input->post('wt_3sd6_bulan'),
            'wt_diatas_6bulan' => $this->input->post('wt_diatas_6bulan'),
            'prodi' => $prodi,
            'ts' => $this->input->post('ts')
        );
        $result = $this->db->insert('waktu_tunggu_lulusan', $data);
        return $result;
    }
    
    function waktu_tunggu_lulusan_edit()
    {
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jml_lulusan_terlacak' => $this->input->post('jml_lulusan_terlacak'),
            'jml_lulusan_dipesan' => $this->input->post('jml_lulusan_dipesan'),
            'wt_dibawah_3bln' => $this->input->post('wt_dibawah_3bln'),
            'wt_3sd6_bulan' => $this->input->post('wt_3sd6_bulan'),
            'wt_diatas_6bulan' => $this->input->post('wt_diatas_6bulan'),
            'prodi' => $prodi,
            'ts' => $this->input->post('ts')
        );
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('waktu_tunggu_lulusan', $data);
        return $result;
    }
    
    function waktu_tunggu_lulusan_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('waktu_tunggu_lulusan');
        return $result;
    }
    
    function kesesuaian_bidang_kerja_lulusan_list()
    {
        $prodi = $this->session->userdata('nama');
        $sql   = "SELECT ts_lulus.seq_id AS ts_id, ts_lulus.nama_ts, SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts_lulus.tahun THEN 1 ELSE 0 END) AS jml, w.* FROM mahasiswa c INNER JOIN ts AS ts_lulus ON ts_lulus.tahun = LEFT(c.thn_lulus,4) AND ts_lulus.prodi = '$prodi' LEFT OUTER JOIN kesesuaian_bidang_kerja_lulusan w ON w.ts = ts_lulus.nama_ts AND ts_lulus.prodi = '$prodi' WHERE c.prodi = '$prodi' AND c.status_mhs='LULUS' AND ts_lulus.nama_ts IN ('TS-2','TS-3','TS-4') GROUP BY ts_lulus.nama_ts ORDER BY ts_lulus.seq_id DESC";
        $data  = $this->db->query($sql);
        return $data->result();
    }
    
    function kesesuaian_bidang_kerja_lulusan_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jml_lulusan_terlacak' => $this->input->post('jml_lulusan_terlacak'),
            'jml_lulusan_terlacak_rendah' => $this->input->post('jml_lulusan_terlacak_rendah'),
            'jml_lulusan_terlacak_sedang' => $this->input->post('jml_lulusan_terlacak_sedang'),
            'jml_lulusan_terlacak_tinggi' => $this->input->post('jml_lulusan_terlacak_tinggi'),
            'prodi' => $prodi,
            'ts' => $this->input->post('ts')
        );
        $result = $this->db->insert('kesesuaian_bidang_kerja_lulusan', $data);
        return $result;
    }
    
    function kesesuaian_bidang_kerja_lulusan_edit()
    {
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jml_lulusan_terlacak' => $this->input->post('jml_lulusan_terlacak'),
            'jml_lulusan_terlacak_rendah' => $this->input->post('jml_lulusan_terlacak_rendah'),
            'jml_lulusan_terlacak_sedang' => $this->input->post('jml_lulusan_terlacak_sedang'),
            'jml_lulusan_terlacak_tinggi' => $this->input->post('jml_lulusan_terlacak_tinggi'),
            'prodi' => $prodi,
            'ts' => $this->input->post('ts')
        );
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('kesesuaian_bidang_kerja_lulusan', $data);
        return $result;
    }
    
    function kesesuaian_bidang_kerja_lulusan_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('kesesuaian_bidang_kerja_lulusan');
        return $result;
    }
    
    function tempat_kerja_lulusan_list()
    {
        $prodi = $this->session->userdata('nama');
        $sql   = "SELECT ts_lulus.seq_id AS ts_id, ts_lulus.nama_ts, SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts_lulus.tahun THEN 1 ELSE 0 END) AS jml, w.* FROM mahasiswa c INNER JOIN ts AS ts_lulus ON ts_lulus.tahun = LEFT(c.thn_lulus,4) AND ts_lulus.prodi = '$prodi' LEFT OUTER JOIN tempat_kerja_lulusan w ON w.ts = ts_lulus.nama_ts AND ts_lulus.prodi = '$prodi' WHERE c.prodi = '$prodi' AND c.status_mhs='LULUS' AND ts_lulus.nama_ts IN ('TS-2','TS-3','TS-4') GROUP BY ts_lulus.nama_ts ORDER BY ts_lulus.seq_id DESC";
        $data  = $this->db->query($sql);
        return $data->result();
    }
    
    function tempat_kerja_lulusan_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jml_lulusan_terlacak' => $this->input->post('jml_lulusan_terlacak'),
            'jml_lulusan_terlacak_lokal' => $this->input->post('jml_lulusan_terlacak_lokal'),
            'jml_lulusan_terlacak_nasional' => $this->input->post('jml_lulusan_terlacak_nasional'),
            'jml_lulusan_terlacak_internasional' => $this->input->post('jml_lulusan_terlacak_internasional'),
            'prodi' => $prodi,
            'ts' => $this->input->post('ts')
        );
        $result = $this->db->insert('tempat_kerja_lulusan', $data);
        return $result;
    }
    
    function tempat_kerja_lulusan_edit()
    {
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jml_lulusan_terlacak' => $this->input->post('jml_lulusan_terlacak'),
            'jml_lulusan_terlacak_lokal' => $this->input->post('jml_lulusan_terlacak_lokal'),
            'jml_lulusan_terlacak_nasional' => $this->input->post('jml_lulusan_terlacak_nasional'),
            'jml_lulusan_terlacak_internasional' => $this->input->post('jml_lulusan_terlacak_internasional'),
            'prodi' => $prodi,
            'ts' => $this->input->post('ts')
        );
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('tempat_kerja_lulusan', $data);
        return $result;
    }
    
    function tempat_kerja_lulusan_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('tempat_kerja_lulusan');
        return $result;
    }
    
    function ref_kepuasan_pelanggan_lulusan_list()
    {
        $prodi = $this->session->userdata('nama');
        $sql   = "SELECT ts_lulus.seq_id AS ts_id, ts_lulus.nama_ts, SUM(CASE WHEN LEFT(c.thn_lulus,4)=ts_lulus.tahun THEN 1 ELSE 0 END) AS jml, w.* FROM mahasiswa c INNER JOIN ts AS ts_lulus ON ts_lulus.tahun = LEFT(c.thn_lulus,4) AND ts_lulus.prodi = '$prodi' LEFT OUTER JOIN ref_kepuasan_pelanggan_lulusan w ON w.ts = ts_lulus.nama_ts AND ts_lulus.prodi = '$prodi' WHERE c.prodi = '$prodi' AND c.status_mhs='LULUS' AND ts_lulus.nama_ts IN ('TS-2','TS-3','TS-4') GROUP BY ts_lulus.nama_ts ORDER BY ts_lulus.seq_id DESC";
        $data  = $this->db->query($sql);
        return $data->result();
    }
    
    function ref_kepuasan_pelanggan_lulusan_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jml_tanggapan_terlacak' => $this->input->post('jml_tanggapan_terlacak'),
            'prodi' => $prodi,
            'ts' => $this->input->post('ts')
        );
        $result = $this->db->insert('ref_kepuasan_pelanggan_lulusan', $data);
        return $result;
    }
    
    function ref_kepuasan_pelanggan_lulusan_edit()
    {
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jml_tanggapan_terlacak' => $this->input->post('jml_tanggapan_terlacak'),
            'prodi' => $prodi,
            'ts' => $this->input->post('ts')
        );
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('ref_kepuasan_pelanggan_lulusan', $data);
        return $result;
    }
    
    function ref_kepuasan_pelanggan_lulusan_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('ref_kepuasan_pelanggan_lulusan');
        return $result;
    }
    
    function kepuasan_pengguna_lulusan_list()
    {
        $prodi = $this->session->userdata('nama');
        $sql   = "SELECT a.nama,b.* FROM `jenis_publikasi` a LEFT OUTER JOIN kepuasan_pengguna_lulusan b on b.jns_kemampuan=a.id and b.prodi='$prodi' WHERE a.modul='kepuasan_pengguna_lulusan' GROUP by a.seq_id";
        $data  = $this->db->query($sql);
        return $data->result();
    }
    
    function jenis_kemampuan_list()
    {
        $this->db->where('modul', 'kepuasan_pengguna_lulusan');
        $this->db->order_by('nama', 'id');
        $data = $this->db->get('jenis_publikasi');
        return $data;
    }
    
    function kepuasan_pengguna_lulusan_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jns_kemampuan' => $this->input->post('jns_kemampuan'),
            'sangat_baik' => $this->input->post('sangat_baik'),
            'baik' => $this->input->post('baik'),
            'cukup' => $this->input->post('cukup'),
            'kurang' => $this->input->post('kurang'),
            'rencana_tindak_lanjut' => $this->input->post('rencana_tindak_lanjut'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('kepuasan_pengguna_lulusan', $data);
        return $result;
    }
    
    function kepuasan_pengguna_lulusan_edit()
    {
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'jns_kemampuan' => $this->input->post('jns_kemampuan'),
            'sangat_baik' => $this->input->post('sangat_baik'),
            'baik' => $this->input->post('baik'),
            'cukup' => $this->input->post('cukup'),
            'kurang' => $this->input->post('kurang'),
            'rencana_tindak_lanjut' => $this->input->post('rencana_tindak_lanjut'),
            'prodi' => $prodi
        );
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('kepuasan_pengguna_lulusan', $data);
        return $result;
    }
    
    function kepuasan_pengguna_lulusan_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('kepuasan_pengguna_lulusan');
        return $result;
    }
    
    function publikasi_ilmiah_mhs_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT a.nama, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts FROM `jenis_publikasi` a LEFT JOIN publikasi_ilmiah_mhs b on b.jenis_publikasi=a.id LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE a.modul='publikasi_ilmiah' GROUP by a.seq_id ";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function pagelaran_ilmiah_mhs_data_list()
    {
        $role = $this->session->userdata('nama');
        $sql  = "SELECT a.nama, SUM(CASE WHEN(b.th_akademik = ts2.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts2, SUM(CASE WHEN(b.th_akademik = ts1.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts1, SUM(CASE WHEN(b.th_akademik = ts.tahun AND b.prodi='$role') THEN jml_judul ELSE 0 END) AS ts FROM `jenis_publikasi` a LEFT JOIN pagelaran_ilmiah b on b.jenis_publikasi=a.id LEFT JOIN ts AS ts2 ON ts2.tahun = b.th_akademik AND ts2.prodi = '$role' AND ts2.nama_ts = 'TS-2' LEFT JOIN ts AS ts1 ON ts1.tahun = b.th_akademik AND ts1.prodi = '$role' AND ts1.nama_ts = 'TS-1' LEFT JOIN ts ON ts.tahun = b.th_akademik AND ts.prodi = '$role' AND ts.nama_ts = 'TS' WHERE a.modul='pagelaran_ilmiah' GROUP by a.seq_id ";
        $data = $this->db->query($sql);
        return $data->result();
    }
    
    function karya_ilmiah_disitasi_mhs_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('karya_ilmiah_disitasi_mhs');
        return $data->result();
    }
    
    function karya_ilmiah_disitasi_mhs_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_dosen' => $this->input->post('nama_dosen'),
            'judul_artikel_disitasi' => $this->input->post('judul_artikel_disitasi'),
            'jumlah' => $this->input->post('jumlah'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('karya_ilmiah_disitasi_mhs', $data);
        return $result;
    }
    
    function karya_ilmiah_disitasi_mhs_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'judul_artikel_disitasi' => $this->input->post('judul_artikel_disitasi_edit'),
                'jumlah' => $this->input->post('jumlah_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_dosen' => $this->input->post('nama_dosen_edit'),
                'judul_artikel_disitasi' => $this->input->post('judul_artikel_disitasi_edit'),
                'jumlah' => $this->input->post('jumlah_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('karya_ilmiah_disitasi_mhs', $data);
        return $result;
    }
    
    function karya_ilmiah_disitasi_mhs_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('karya_ilmiah_disitasi_mhs');
        return $result;
    }
    
    function hki_paten_mhs_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('hki_paten_mhs');
        return $data->result();
    }
    
    function produk_dtps_mhs_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('produk_dtps_mhs');
        return $data->result();
    }
    
    function produk_dtps_mhs_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'nama_mhs' => $this->input->post('nama_dosen'),
            'nama_produk' => $this->input->post('nama_produk'),
            'deskripsi' => $this->input->post('deskripsi'),
            'bukti' => $this->input->post('bukti'),
			'tahun' => $this->input->post('tahun'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('produk_dtps_mhs', $data);
        return $result;
    }
    
    function produk_dtps_mhs_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'nama_mhs' => $this->input->post('nama_dosen_edit'),
                'nama_produk' => $this->input->post('nama_produk_edit'),
                'deskripsi' => $this->input->post('deskripsi_edit'),
                'bukti' => $this->input->post('bukti_edit'),
				'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'nama_mhs' => $this->input->post('nama_dosen_edit'),
                'nama_produk' => $this->input->post('nama_produk_edit'),
                'deskripsi' => $this->input->post('deskripsi_edit'),
                'bukti' => $this->input->post('bukti_edit'),
				'tahun' => $this->input->post('tahun_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('produk_dtps_mhs', $data);
        return $result;
    }
    
    function produk_dtps_mhs_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('produk_dtps_mhs');
        return $result;
    }
    
    function hki_paten_mhs_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'luaran_penelitian' => $this->input->post('luaran_penelitian'),
            'th_perolehan' => $this->input->post('th_perolehan'),
            'keterangan' => $this->input->post('keterangan'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('hki_paten_mhs', $data);
        return $result;
    }
    
    function hki_paten_mhs_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('hki_paten_mhs', $data);
        return $result;
    }
    
    function hki_paten_mhs_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('hki_paten_mhs');
        return $result;
    }
    
    function hki_hak_cipta_mhs_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('hki_hak_cipta_mhs');
        return $data->result();
    }
    
    function hki_hak_cipta_mhs_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'luaran_penelitian' => $this->input->post('luaran_penelitian'),
            'th_perolehan' => $this->input->post('th_perolehan'),
            'keterangan' => $this->input->post('keterangan'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('hki_hak_cipta_mhs', $data);
        return $result;
    }
    
    function hki_hak_cipta_mhs_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('hki_hak_cipta_mhs', $data);
        return $result;
    }
    
    function hki_hak_cipta_mhs_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('hki_hak_cipta_mhs');
        return $result;
    }
    
    function hki_teknologi_tepatguna_mhs_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('hki_teknologi_tepatguna_mhs');
        return $data->result();
    }
    
    function hki_teknologi_tepatguna_mhs_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'luaran_penelitian' => $this->input->post('luaran_penelitian'),
            'th_perolehan' => $this->input->post('th_perolehan'),
            'keterangan' => $this->input->post('keterangan'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('hki_teknologi_tepatguna_mhs', $data);
        return $result;
    }
    
    function hki_teknologi_tepatguna_mhs_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('hki_teknologi_tepatguna_mhs', $data);
        return $result;
    }
    
    function hki_teknologi_tepatguna_mhs_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('hki_teknologi_tepatguna_mhs');
        return $result;
    }
    
    function buku_isbn_mhs_data_list()
    {
        $role = $this->session->userdata('nama');
        $this->db->where('prodi', $role);
        $data = $this->db->get('buku_isbn_mhs');
        return $data->result();
    }
    
    function buku_isbn_mhs_add()
    {
        $prodi  = $this->session->userdata('nama');
        $data   = array(
            'luaran_penelitian' => $this->input->post('luaran_penelitian'),
            'th_perolehan' => $this->input->post('th_perolehan'),
            'keterangan' => $this->input->post('keterangan'),
            'prodi' => $prodi
        );
        $result = $this->db->insert('buku_isbn_mhs', $data);
        return $result;
    }
    
    function buku_isbn_mhs_edit()
    {
        $config['upload_path']   = "./assets/document";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        $seq_id = $this->input->post('seq_id');
        $prodi  = $this->session->userdata('nama');
        
        if ($this->upload->do_upload("file_edit")) {
            $docs = array(
                'upload_data' => $this->upload->data()
            );
            $file = $docs['upload_data']['file_name'];
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi,
                'doc' => $file
            );
        } else {
            $data = array(
                'luaran_penelitian' => $this->input->post('luaran_penelitian_edit'),
                'th_perolehan' => $this->input->post('th_perolehan_edit'),
                'keterangan' => $this->input->post('keterangan_edit'),
                'prodi' => $prodi
            );
        }
        
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->update('buku_isbn_mhs', $data);
        return $result;
    }
    
    function buku_isbn_mhs_delete()
    {
        $seq_id = $this->input->post('seq_id');
        $this->db->where('seq_id', $seq_id);
        $result = $this->db->delete('buku_isbn_mhs');
        return $result;
    }
    
    function update_data($id, $table, $value)
    {
        $this->db->where('seq_id', $id);
        $result = $this->db->update($table, $value);
        return $result;
    }

    function insert_data($table, $value)
    {
        $result = $this->db->insert($table, $value);
        return $result;
    }
}
