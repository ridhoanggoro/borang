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
        $this->Model_security->getsecurity();
        $role = $this->session->userdata('nama');
        $uri = $this->uri->segment(3);
        $data = $this->Model_master->penggunaan_dana_data_list();
        $data_ts = $this->Model_master->getSelectedData("ts", array('prodi' => $role, 'nama_ts' => 'TS'))->row();
        $data_ts1 = $this->Model_master->getSelectedData("ts", array('prodi' => $role, 'nama_ts' => 'TS-1'))->row();
        $data_ts2 = $this->Model_master->getSelectedData("ts", array('prodi' => $role, 'nama_ts' => 'TS-2'))->row();

        $isi['ts'] = $data_ts->tahun;
        $isi['ts1'] = $data_ts1->tahun;
        $isi['ts2'] = $data_ts2->tahun;

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
        $prodi  = strtoupper($this->session->userdata('nama'));
        // new save method 
        $this->Model_master->deleteData("dana_prodi", array('prodi' => strtoupper($this->session->userdata('nama')), 'th_akademik' => $this->input->post('ts')));
		$this->Model_master->deleteData("dana_prodi", array('prodi' => strtoupper($this->session->userdata('nama')), 'th_akademik' => $this->input->post('ts1')));
		$this->Model_master->deleteData("dana_prodi", array('prodi' => strtoupper($this->session->userdata('nama')), 'th_akademik' => $this->input->post('ts2')));	

		$data = array();

        $data[] = array(
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
            'th_akademik' => $this->input->post('ts'),
            'prodi' => $prodi,
            'doc' => ''
        );
        
        $data[] = array(
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
            'th_akademik' => $this->input->post('ts1'),
            'prodi' => $prodi,
            'doc' => ''
        );
        
        $data[] = array(
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
            'th_akademik' => $this->input->post('ts2'),
            'prodi' => $prodi,
            'doc' => ''
        );
                   
        $result = $this->Model_master->insertBatchData("dana_prodi", $data);    
            
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert">
                                                <i class="ace-icon fa fa-times"></i>
                                            </button><i class="ace-icon fa fa-check"></i> Dana Prodi sudah berhasil di update!!!</div>');
        redirect('dana/penggunaan_dana');
        
    }
    
    function simpan_penggunaan_dana_fakultas()
    {
        $prodi  = strtoupper($this->session->userdata('nama'));
        // new save method 
        $this->Model_master->deleteData("dana_fakultas", array('prodi' => strtoupper($this->session->userdata('nama')), 'th_akademik' => $this->input->post('ts')));
		$this->Model_master->deleteData("dana_fakultas", array('prodi' => strtoupper($this->session->userdata('nama')), 'th_akademik' => $this->input->post('ts1')));
		$this->Model_master->deleteData("dana_fakultas", array('prodi' => strtoupper($this->session->userdata('nama')), 'th_akademik' => $this->input->post('ts2')));	

		$data = array();

        $data[] = array(
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
            'th_akademik' => $this->input->post('ts'),
            'prodi' => $prodi,
            'doc' => ''
        );
        

        $data[] = array(
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
            'th_akademik' => $this->input->post('ts1'),
            'prodi' => $prodi,
            'doc' => ''
        );
        
        $data[] = array(
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
            'th_akademik' => $this->input->post('ts2'),
            'prodi' => $prodi,
            'doc' => ''
        );

        $result = $this->Model_master->insertBatchData("dana_fakultas", $data);                  
       
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><i class="ace-icon fa fa-check"></i> Dana Fakultas sudah berhasil di update!!!</div>');
                redirect('dana/penggunaan_dana');          
    }
}