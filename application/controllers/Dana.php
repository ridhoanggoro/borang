<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana extends CI_Controller
{
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_security');
        $this->load->model('Model_master');
    }
    
    function penggunaan_dana()
    {
        $this->Model_security->getsecurity();
        $isi['title']   = 'Penggunaan Dana';
        $isi['content'] = 'dana/penggunaan_dana';
        $this->load->view('default_page', $isi);
    }
    
    function penggunaan_dana_data_list()
    {
        $data = $this->Model_master->penggunaan_dana_data_list();
        echo json_encode($data);
    }
    
    function add_dana()
    {
        $uri = $this->uri->segment(3);
        $this->Model_security->getsecurity();
        $data = $this->Model_master->penggunaan_dana_data_list();
        if ($uri == "prodi") {
            $isi['title']   = 'Tambah/Rubah Penggunaan Dana Prodi';
            $isi['content'] = 'dana/penggunaan_dana_prodi';
            foreach ($data as $v) {
                $isi['a_biaya_dosen_ts2']                      = $v->a_biaya_dosen_ts2;
                $isi['a_biaya_tenaga_kependidikan_ts2']        = $v->a_biaya_tenaga_kependidikan_ts2;
                $isi['a_biaya_operasional_pembelajaran_ts2']   = $v->a_biaya_operasional_pembelajaran_ts2;
                $isi['a_biaya_operasional_tidak_langsung_ts2'] = $v->a_biaya_operasional_tidak_langsung_ts2;
                $isi['a_biaya_operasional_kemahasiswaan_ts2']  = $v->a_biaya_operasional_kemahasiswaan_ts2;
                $isi['a_biaya_penelitian_ts2']                 = $v->a_biaya_penelitian_ts2;
                $isi['a_biaya_pkm_ts2']                        = $v->a_biaya_pkm_ts2;
                $isi['a_biaya_investasi_sdm_ts2']              = $v->a_biaya_investasi_sdm_ts2;
                $isi['a_biaya_investasi_sarana_ts2']           = $v->a_biaya_investasi_sarana_ts2;
                $isi['a_biaya_investasi_prasarana_ts2']        = $v->a_biaya_investasi_prasarana_ts2;
                $isi['a_biaya_dosen_ts1']                      = $v->a_biaya_dosen_ts1;
                $isi['a_biaya_tenaga_kependidikan_ts1']        = $v->a_biaya_tenaga_kependidikan_ts1;
                $isi['a_biaya_operasional_pembelajaran_ts1']   = $v->a_biaya_operasional_pembelajaran_ts1;
                $isi['a_biaya_operasional_tidak_langsung_ts1'] = $v->a_biaya_operasional_tidak_langsung_ts1;
                $isi['a_biaya_operasional_kemahasiswaan_ts1']  = $v->a_biaya_operasional_kemahasiswaan_ts1;
                $isi['a_biaya_penelitian_ts1']                 = $v->a_biaya_penelitian_ts1;
                $isi['a_biaya_pkm_ts1']                        = $v->a_biaya_pkm_ts1;
                $isi['a_biaya_investasi_sdm_ts1']              = $v->a_biaya_investasi_sdm_ts1;
                $isi['a_biaya_investasi_sarana_ts1']           = $v->a_biaya_investasi_sarana_ts1;
                $isi['a_biaya_investasi_prasarana_ts1']        = $v->a_biaya_investasi_prasarana_ts1;
                $isi['a_biaya_dosen_ts']                       = $v->a_biaya_dosen_ts;
                $isi['a_biaya_tenaga_kependidikan_ts']         = $v->a_biaya_tenaga_kependidikan_ts;
                $isi['a_biaya_operasional_pembelajaran_ts']    = $v->a_biaya_operasional_pembelajaran_ts;
                $isi['a_biaya_operasional_tidak_langsung_ts']  = $v->a_biaya_operasional_tidak_langsung_ts;
                $isi['a_biaya_operasional_kemahasiswaan_ts']   = $v->a_biaya_operasional_kemahasiswaan_ts;
                $isi['a_biaya_penelitian_ts']                  = $v->a_biaya_penelitian_ts;
                $isi['a_biaya_pkm_ts']                         = $v->a_biaya_pkm_ts;
                $isi['a_biaya_investasi_sdm_ts']               = $v->a_biaya_investasi_sdm_ts;
                $isi['a_biaya_investasi_sarana_ts']            = $v->a_biaya_investasi_sarana_ts;
                $isi['a_biaya_investasi_prasarana_ts']         = $v->a_biaya_investasi_prasarana_ts;
            }
            
        } elseif ($uri == "fakultas") {
            $isi['title']   = 'Tambah/Rubah Penggunaan Dana Fakultas';
            $isi['content'] = 'dana/penggunaan_dana_fakultas';
            foreach ($data as $v) {
                $isi['b_biaya_dosen_ts2']                      = $v->b_biaya_dosen_ts2;
                $isi['b_biaya_tenaga_kependidikan_ts2']        = $v->b_biaya_tenaga_kependidikan_ts2;
                $isi['b_biaya_operasional_pembelajaran_ts2']   = $v->b_biaya_operasional_pembelajaran_ts2;
                $isi['b_biaya_operasional_tidak_langsung_ts2'] = $v->b_biaya_operasional_tidak_langsung_ts2;
                $isi['b_biaya_operasional_kemahasiswaan_ts2']  = $v->b_biaya_operasional_kemahasiswaan_ts2;
                $isi['b_biaya_penelitian_ts2']                 = $v->b_biaya_penelitian_ts2;
                $isi['b_biaya_pkm_ts2']                        = $v->b_biaya_pkm_ts2;
                $isi['b_biaya_investasi_sdm_ts2']              = $v->b_biaya_investasi_sdm_ts2;
                $isi['b_biaya_investasi_sarana_ts2']           = $v->b_biaya_investasi_sarana_ts2;
                $isi['b_biaya_investasi_prasarana_ts2']        = $v->b_biaya_investasi_prasarana_ts2;
                $isi['b_biaya_dosen_ts1']                      = $v->b_biaya_dosen_ts1;
                $isi['b_biaya_tenaga_kependidikan_ts1']        = $v->b_biaya_tenaga_kependidikan_ts1;
                $isi['b_biaya_operasional_pembelajaran_ts1']   = $v->b_biaya_operasional_pembelajaran_ts1;
                $isi['b_biaya_operasional_tidak_langsung_ts1'] = $v->b_biaya_operasional_tidak_langsung_ts1;
                $isi['b_biaya_operasional_kemahasiswaan_ts1']  = $v->b_biaya_operasional_kemahasiswaan_ts1;
                $isi['b_biaya_penelitian_ts1']                 = $v->b_biaya_penelitian_ts1;
                $isi['b_biaya_pkm_ts1']                        = $v->b_biaya_pkm_ts1;
                $isi['b_biaya_investasi_sdm_ts1']              = $v->b_biaya_investasi_sdm_ts1;
                $isi['b_biaya_investasi_sarana_ts1']           = $v->b_biaya_investasi_sarana_ts1;
                $isi['b_biaya_investasi_prasarana_ts1']        = $v->b_biaya_investasi_prasarana_ts1;
                $isi['b_biaya_dosen_ts']                       = $v->b_biaya_dosen_ts;
                $isi['b_biaya_tenaga_kependidikan_ts']         = $v->b_biaya_tenaga_kependidikan_ts;
                $isi['b_biaya_operasional_pembelajaran_ts']    = $v->b_biaya_operasional_pembelajaran_ts;
                $isi['b_biaya_operasional_tidak_langsung_ts']  = $v->b_biaya_operasional_tidak_langsung_ts;
                $isi['b_biaya_operasional_kemahasiswaan_ts']   = $v->b_biaya_operasional_kemahasiswaan_ts;
                $isi['b_biaya_penelitian_ts']                  = $v->b_biaya_penelitian_ts;
                $isi['b_biaya_pkm_ts']                         = $v->b_biaya_pkm_ts;
                $isi['b_biaya_investasi_sdm_ts']               = $v->b_biaya_investasi_sdm_ts;
                $isi['b_biaya_investasi_sarana_ts']            = $v->b_biaya_investasi_sarana_ts;
                $isi['b_biaya_investasi_prasarana_ts']         = $v->b_biaya_investasi_prasarana_ts;
            }
        }
        $this->load->view('default_page', $isi);
        
    }
    
    function simpan_penggunaan_dana_prodi()
    {
        $prodi  = $this->session->userdata('nama');
        $cek = $this->db->query("SELECT d.seq_id, ts.nama_ts, ts.tahun FROM dana_prodi d INNER JOIN ts ON ts.prodi=d.prodi AND ts.tahun=d.th_akademik WHERE ts.nama_ts IN ('TS','TS-1','TS-2') AND ts.prodi='$prodi' ")->num_rows();
        if ($cek > 0) {
            $get_id = $this->db->query("SELECT d.seq_id,ts.nama_ts,ts.tahun FROM dana_prodi d INNER JOIN ts ON ts.prodi='$prodi' AND ts.tahun=d.th_akademik")->result_array();
            foreach ($get_id as $j) {
                if ($j['nama_ts'] == "TS") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('a_biaya_dosen_ts')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('a_biaya_tenaga_kependidikan_ts')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('a_biaya_operasional_pembelajaran_ts')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('a_biaya_operasional_tidak_langsung_ts')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('a_biaya_operasional_kemahasiswaan_ts')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('a_biaya_penelitian_ts')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('a_biaya_pkm_ts')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('a_biaya_investasi_sdm_ts')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_sarana_ts')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_prasarana_ts')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->update_data($j['seq_id'], 'dana_prodi', $data);
                } elseif ($j['nama_ts'] == "TS-1") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('a_biaya_dosen_ts1')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('a_biaya_tenaga_kependidikan_ts1')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('a_biaya_operasional_pembelajaran_ts1')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('a_biaya_operasional_tidak_langsung_ts1')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('a_biaya_operasional_kemahasiswaan_ts1')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('a_biaya_penelitian_ts1')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('a_biaya_pkm_ts1')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('a_biaya_investasi_sdm_ts1')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_sarana_ts1')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_prasarana_ts1')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->update_data($j['seq_id'], 'dana_prodi', $data);
                } elseif ($j['nama_ts'] == "TS-2") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('a_biaya_dosen_ts2')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('a_biaya_tenaga_kependidikan_ts2')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('a_biaya_operasional_pembelajaran_ts2')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('a_biaya_operasional_tidak_langsung_ts2')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('a_biaya_operasional_kemahasiswaan_ts2')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('a_biaya_penelitian_ts2')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('a_biaya_pkm_ts2')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('a_biaya_investasi_sdm_ts2')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_sarana_ts2')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_prasarana_ts2')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->update_data($j['seq_id'], 'dana_prodi', $data);
                }
            }
            
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button><i class="ace-icon fa fa-check"></i> Dana Prodi sudah berhasil di update!!!</div>');
            redirect('dana/penggunaan_dana');

        } else {
            $get_ts = $this->db->query("SELECT nama_ts,tahun FROM ts WHERE prodi='$prodi' AND nama_ts IN ('TS','TS-1','TS-2')")->result_array();
            foreach ($get_ts as $j) {
                if ($j['nama_ts'] == "TS") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('a_biaya_dosen_ts')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('a_biaya_tenaga_kependidikan_ts')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('a_biaya_operasional_pembelajaran_ts')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('a_biaya_operasional_tidak_langsung_ts')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('a_biaya_operasional_kemahasiswaan_ts')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('a_biaya_penelitian_ts')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('a_biaya_pkm_ts')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('a_biaya_investasi_sdm_ts')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_sarana_ts')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_prasarana_ts')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->insert_data('dana_prodi', $data);
                } elseif ($j['nama_ts'] == "TS-1") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('a_biaya_dosen_ts1')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('a_biaya_tenaga_kependidikan_ts1')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('a_biaya_operasional_pembelajaran_ts1')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('a_biaya_operasional_tidak_langsung_ts1')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('a_biaya_operasional_kemahasiswaan_ts1')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('a_biaya_penelitian_ts1')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('a_biaya_pkm_ts1')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('a_biaya_investasi_sdm_ts1')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_sarana_ts1')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_prasarana_ts1')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->insert_data('dana_prodi', $data);
                } elseif ($j['nama_ts'] == "TS-2") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('a_biaya_dosen_ts2')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('a_biaya_tenaga_kependidikan_ts2')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('a_biaya_operasional_pembelajaran_ts2')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('a_biaya_operasional_tidak_langsung_ts2')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('a_biaya_operasional_kemahasiswaan_ts2')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('a_biaya_penelitian_ts2')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('a_biaya_pkm_ts2')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('a_biaya_investasi_sdm_ts2')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_sarana_ts2')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('a_biaya_investasi_prasarana_ts2')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->insert_data('dana_prodi', $data);
                }
            }

            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button><i class="ace-icon fa fa-check"></i> Dana Prodi sudah berhasil di tambah!!!</div>');
            redirect('dana/penggunaan_dana');

        }

        
        
    }
    
    function simpan_penggunaan_dana_fakultas()
    {
        $prodi  = $this->session->userdata('nama');
        $cek = $this->db->query("SELECT d.seq_id, ts.nama_ts, ts.tahun FROM dana_fakultas d INNER JOIN ts ON ts.prodi=d.prodi AND ts.tahun=d.th_akademik WHERE ts.nama_ts IN ('TS','TS-1','TS-2') AND ts.prodi='$prodi' ")->num_rows();

        if ($cek > 0) {
            $get_id = $this->db->query("SELECT d.seq_id,ts.nama_ts,ts.tahun FROM dana_fakultas d INNER JOIN ts ON ts.prodi='$prodi' AND ts.tahun=d.th_akademik")->result_array();
            foreach ($get_id as $j) {
                if ($j['nama_ts'] == "TS") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('b_biaya_dosen_ts')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('b_biaya_tenaga_kependidikan_ts')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('b_biaya_operasional_pembelajaran_ts')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('b_biaya_operasional_tidak_langsung_ts')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('b_biaya_operasional_kemahasiswaan_ts')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('b_biaya_penelitian_ts')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('b_biaya_pkm_ts')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('b_biaya_investasi_sdm_ts')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_sarana_ts')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_prasarana_ts')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->update_data($j['seq_id'], 'dana_fakultas', $data);
                } elseif ($j['nama_ts'] == "TS-1") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('b_biaya_dosen_ts1')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('b_biaya_tenaga_kependidikan_ts1')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('b_biaya_operasional_pembelajaran_ts1')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('b_biaya_operasional_tidak_langsung_ts1')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('b_biaya_operasional_kemahasiswaan_ts1')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('b_biaya_penelitian_ts1')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('b_biaya_pkm_ts1')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('b_biaya_investasi_sdm_ts1')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_sarana_ts1')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_prasarana_ts1')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->update_data($j['seq_id'], 'dana_fakultas', $data);
                } elseif ($j['nama_ts'] == "TS-2") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('b_biaya_dosen_ts2')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('b_biaya_tenaga_kependidikan_ts2')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('b_biaya_operasional_pembelajaran_ts2')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('b_biaya_operasional_tidak_langsung_ts2')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('b_biaya_operasional_kemahasiswaan_ts2')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('b_biaya_penelitian_ts2')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('b_biaya_pkm_ts2')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('b_biaya_investasi_sdm_ts2')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_sarana_ts2')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_prasarana_ts2')),
                        'th_akademik' => $j['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->update_data($j['seq_id'], 'dana_fakultas', $data);
                }
            }
            
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button><i class="ace-icon fa fa-check"></i> Dana Fakultas sudah berhasil di update!!!</div>');
            redirect('dana/penggunaan_dana');
        } else {
            $get_ts = $this->db->query("SELECT nama_ts,tahun FROM ts WHERE prodi='$prodi' AND nama_ts IN ('TS','TS-1','TS-2')")->result_array();
            foreach ($get_ts as $x) {
                if ($x['nama_ts'] == "TS") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('b_biaya_dosen_ts')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('b_biaya_tenaga_kependidikan_ts')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('b_biaya_operasional_pembelajaran_ts')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('b_biaya_operasional_tidak_langsung_ts')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('b_biaya_operasional_kemahasiswaan_ts')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('b_biaya_penelitian_ts')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('b_biaya_pkm_ts')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('b_biaya_investasi_sdm_ts')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_sarana_ts')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_prasarana_ts')),
                        'th_akademik' => $x['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->insert_data('dana_fakultas', $data);
                } elseif ($x['nama_ts'] == "TS-1") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('b_biaya_dosen_ts1')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('b_biaya_tenaga_kependidikan_ts1')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('b_biaya_operasional_pembelajaran_ts1')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('b_biaya_operasional_tidak_langsung_ts1')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('b_biaya_operasional_kemahasiswaan_ts1')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('b_biaya_penelitian_ts1')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('b_biaya_pkm_ts1')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('b_biaya_investasi_sdm_ts1')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_sarana_ts1')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_prasarana_ts1')),
                        'th_akademik' => $x['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->insert_data('dana_fakultas', $data);
                } elseif ($x['nama_ts'] == "TS-2") {
                    $data = array(
                        'biaya_dosen' => str_replace(',', '', $this->input->post('b_biaya_dosen_ts2')),
                        'biaya_tenaga_kependidikan' => str_replace(',', '', $this->input->post('b_biaya_tenaga_kependidikan_ts2')),
                        'biaya_operasional_pembelajaran' => str_replace(',', '', $this->input->post('b_biaya_operasional_pembelajaran_ts2')),
                        'biaya_operasional_tidak_langsung' => str_replace(',', '', $this->input->post('b_biaya_operasional_tidak_langsung_ts2')),
                        'biaya_operasional_kemahasiswaan' => str_replace(',', '', $this->input->post('b_biaya_operasional_kemahasiswaan_ts2')),
                        'biaya_penelitian' => str_replace(',', '', $this->input->post('b_biaya_penelitian_ts2')),
                        'biaya_pkm' => str_replace(',', '', $this->input->post('b_biaya_pkm_ts2')),
                        'biaya_investasi_sdm' => str_replace(',', '', $this->input->post('b_biaya_investasi_sdm_ts2')),
                        'biaya_investasi_sarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_sarana_ts2')),
                        'biaya_investasi_prasarana' => str_replace(',', '', $this->input->post('b_biaya_investasi_prasarana_ts2')),
                        'th_akademik' => $x['tahun'],
                        'prodi' => $prodi
                    );
                    $this->Model_master->insert_data('dana_fakultas', $data);
                }

            }
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><i class="ace-icon fa fa-check"></i> Dana Fakultas sudah berhasil di tambah!!!</div>');
                redirect('dana/penggunaan_dana');
        }  
    }
}