<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_master_userid extends CI_Model {

	public function __construct(){
		parent::__construct();
    }

    function tampil($data_siswa)
  	{
	    //$ee=1;
	    $this->db->select('*');
	    $this->db->from('tb_login');
		$this->db->where('id_admin',$data_siswa);
	    $query = $this->db->get();
	    return $query->row_array();
	}


	// for checking credential
	function getCredential($varUser, $varPassword)
	{
		$getField = array('username' => $varUser, 'password' => $varPassword);

		$query = $this->db->get_where('tb_login', $getField);

		return $query->row();
	}


	function tambah()
	{
		$nama 				= $this->input->post('nama');
		$username 			= $this->input->post('username');
		$password 			= $this->input->post('password');
		$password1          = sha1($password);

		$data = array(
			'nama'			=> $nama,
			'username'		=> $username,
			'password'		=> $password1,
		);
		$this->db->insert('tb_login', $data);
			
	}

	function cekAdmin()
	{
		return $query = $this->db->select('*')->from('tb_login')->get()->num_rows();
	}

	function cekUser($iduser){

		$array = array('id_admin' => $iduser, 'user_level' => '2');

		$check = $this
				->db
				->where($array)
				->get('tb_login')->num_rows();

		return $check;

	}

}
?>
