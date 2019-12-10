<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_security extends CI_model {

	public function getsecurity()
	{
		$username = $this->session->userdata('userid');
		if (empty($username)) 
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}

	public function validate($id, $pwd)
	{
		$dec_pwd = $this->hash($pwd);
		$param = array('userid' => $id, 'pwd' => $dec_pwd);
		$this->db->where($param);
		$result = $this->db->get('user_info');
		return $result;	
	}

	function change_password($id, $pass)
	{
		$password = $this->hash($pass);
		$data = array(
			'pwd' => $password,
			'user_update' => $id,
		);

		$this->db->where('userid', $id);
		$this->db->update('user_info', $data);
	}

	function logout($id, $date)
	{
		$this->db->where('userid', $id);
        $this->db->update('user_info', $date);
	}

	function hash($string)
    {
        return hash('sha512', $string.config_item('encryption_key'));
    }
}