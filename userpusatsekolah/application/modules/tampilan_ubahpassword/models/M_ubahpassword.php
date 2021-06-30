<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ubahpassword extends CI_Model
{

	function tampil()
	{
		return $this->db->get('event_sekolah')->result();
	}

	function edit()
	{
		$level = 1;
		$password = $this->input->post('password');
		$password1 	=sha1($password);
		$id = $this->input->post('id_admin');
				

				$data = array(
					
					'password'		=> $password1,
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
		
	}

	function fetch_pass($session_id)
	{
		$fetch_pass=$this->db->query("select * from tb_login where id_admin='$session_id'");
		$res=$fetch_pass->result();
		}
		function change_pass($session_id,$new_pass)
		{
		$update_pass=$this->db->query("UPDATE tb_login set pass='$new_pass'  where id_admin='$session_id'");
	}


	function ambilidsekolah($id)
	{

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();



		return $query->row_array();
	}

	function tampilkompetensi($id)
	{

		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->where('id_p_sekolah', $id);
		$query = $this->db->get();
		return $query->result();
	}
}
