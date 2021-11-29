<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_security extends CI_model {

	public function getsecurity()
	{
		$username = $this->session->userdata('userid');
		if (empty($username)) 
		{
			$this->session->sess_destroy();
			redirect('account');
		}
	}

	public function validate($id, $pwd)
	{
		$dec_pwd = $this->hash($pwd);
		$param = array('userid' => $id, 'pwd' => $dec_pwd, 'role' => 'BORANG');
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
	
	function user_list()
	{
		$data = $this->db->get('user_info');
		return $data->result();
	}

	/**
     * This function is used to check userid is available or not 
    **/
	function user_verify($param) 
	{    
		$this->db->where('userid', $param);  
		$query = $this->db->get("user_info");  
		if($query->num_rows() > 0)  
		{  
			return true;  
		}  
		else  
		{  
			return false;  
		}  
	}

	function add_account()
    {
		$encrypt_pwd = $this->hash($this->input->post('pwd'));
        $data = array(
                'userid'  => $this->input->post('userid'), 
                'pwd'  => $encrypt_pwd, 
                'nama_lengkap' => $this->input->post('nama'), 
                'role' => $this->input->post('role')                         
            );
        $result=$this->db->insert('user_info',$data);
        return $result;
    }
}