<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function auth()
	{
		$userid    = $this->input->post('username',TRUE);
		$password  = $this->input->post('passowrd',TRUE);
		$validate  = $this->Model_security->validate($userid, $password);
		if($validate->num_rows() > 0){
			$data  			= $validate->row_array();
			$nama  			= $data['nama_lengkap'];
			$userid 		= $data['userid'];
			$role 			= $data['role'];
			$login_terakhir = $data['login_terakhir'];
			$sesdata = array(
				'nama'  	=> $nama,
				'userid'    => $userid,
				'role'		=> $role,
				'login_terakhir' => $login_terakhir,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if ($this->session->has_userdata('redirect')) {
				redirect($this->session->redirect);
			} else {
				redirect('home');
			}
		}else{
			echo $this->session->set_flashdata('msg','USERID atau PASSWORD salah');
			redirect('account');
		}
	}

	public function logout()
	{
		$id = $this->session->userdata('userid');
		date_default_timezone_set("ASIA/JAKARTA");
        $date = array('login_terakhir' => date('Y-m-d H:i:s'));
		$this->Model_security->logout($id, $date);
		$this->session->sess_destroy();
		redirect('home');
	}

	public function adm_reset_pwd()
	{
        $data['title']    = 'Reset Password';
        $data['content']  = 'change_pwd';
        $data['modal']    = '';
        $this->load->view('default_page', $data);
	}

	public function reset_pwd()
	{
        $data['title']    = 'Reset Password';
        $data['content']  = 'user_change_pwd';
        $data['modal']    = '';
        $this->load->view('default_page', $data);
	}

	public function account_mgmt()
	{
        $data['title']    = 'Account Management';
        $data['content']  = 'register';
        $data['modal']    = '';
        $this->load->view('default_page', $data);
	}

	function user_list(){
		$data = $this->Model_security->user_list();
		echo json_encode($data);
	}

	function check_exists()
    {
        $user_id = $this->input->post('id');
        if($this->Model_security->user_verify($user_id))
		{
			echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> ID sudah terdaftar</label>';
		}
		else
		{
			echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> ID Tersedia</label>';
		}
	}

	function add_account(){
		$data=$this->Model_security->add_account();
		echo json_encode($data);
  	}

	function upd_pwd()
	{
		$id 	= $this->input->post('uid');
		$pw1 	= $this->input->post('pwd1');
		$pw2	= $this->input->post('pwd2');
		if (strcmp($pw1, $pw2) !== 0)
		{
			echo $this->session->set_flashdata('msg','Password tidak cocok');
			redirect('account\reset_pwd');
		}
		else{
			$this->Model_security->change_password($id, $pw1);
			echo $this->session->set_flashdata('msg','Password Berhasil Di Reset');
			redirect('account\reset_pwd');
		}
	}

	function usr_reset_pwd()
	{
		$id 	= $this->input->post('uid');
		$pw1 	= $this->input->post('pwd1');
		$pw2	= $this->input->post('pwd2');
		if (strcmp($pw1, $pw2) !== 0)
		{
			echo $this->session->set_flashdata('msg','<label class="text-danger"><span class="fas fa-times"></span> Password Tidak Cocok, Harap Ulangi Kembali</label>');
			redirect('account\reset_pwd');
		}
		else{
			$this->Model_security->change_password($id, $pw1);
			echo $this->session->set_flashdata('msg','<label class="text-success"><span class="fas fa-check"></span> Password Anda Berhasil Dirubah</label>');
			redirect('account\reset_pwd');
		}
	}
}
