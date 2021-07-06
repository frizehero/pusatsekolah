<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ubahpassword extends CI_Model
{

	function tampil($data_siswa)
  	{
	    //$ee=1;
	    $this->db->select('*');
	    $this->db->from('tb_login');
		$this->db->where('id_admin',$data_siswa);
	    $query = $this->db->get();
	    return $query->row_array();
	}

	function edit()
  {
    
    $id = $this->input->post('id');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $password1          = sha1($password);
    $data = array(
          'username'    => $username,
          'password'    => $password1,
        );
        $this->db->where('id_admin',$id)->update('tb_login', $data);
    
  }


	/*function tampil()
	{
		$this->db->select('*');
		$this->db->from('tb_login');
		$query = $this->db->get();

		return $query->result();
	}

	function tampiledit($id)
	{
		//$idnya=decrypt_url($id);

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin',$id);
		$query = $this->db->get();

    	return $query->row_array();
	}*/

	/*function edit()
	{
		$id = $this->input->post('id_admin');

		$password = $this->input->post('password');
		
		$this->upload->initialize($config);
		
		if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'password'				=> $password,
				);
				$this->db->where('id_admin',$id)->update('tampilan_ubahpassword', $data);
			
			}	 
		}
		else{
			$data = array(
				'password'				=> $password,
				);
				$this->db->where('id_admin',$id)->update('tampilan_ubahpassword', $data);
			}
	}*/

	/*function edit()
	{
		$id = $this->input->post('id_admin');
		$password = $this->input->post('password');
		$password 	=sha1($password);
		
				
				$data = array(
					
					'password'		=> $password,
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
		
	}*/

	/*public function save()
 	{
  		$pass = sha1($this->input->post('new'));
  		$data = array (
   		'password' => $pass
   		);
  		$this->db->where('id_admin', $this->session->userdata('id_admin'));
  		$this->db->update('tb_login', $data);
 	}
	//fungsi untuk mengecek password lama :
 	public function cek_old()
  	{
   		$old = sha1($this->input->post('old'));    $this->db->where('password',$old);
   		$query = $this->db->get('tb_login');
      	return $query->result();;
   	}*/


	/*function fetch_pass($session_id)
	{
		$fetch_pass=$this->db->query("select * from tb_login where id_admin='$session_id'");
		$res=$fetch_pass->result();
		}
		function change_pass($session_id,$new_pass)
		{
		$update_pass=$this->db->query("UPDATE tb_login set pass='$new_pass'  where id_admin='$session_id'");
	}*/


	function ambilidsekolah($id)
	{

		$this->db->select('*');
		$this->db->from('tb_login');
		$this->db->where('id_admin', $id);
		$query = $this->db->get();



		return $query->row_array();
	}

	/*function tampilkompetensi($id)
	{

		$this->db->select('*');
		$this->db->from('p_sekolah');
		$this->db->where('id_p_sekolah', $id);
		$query = $this->db->get();
		return $query->result();
	}*/
}
