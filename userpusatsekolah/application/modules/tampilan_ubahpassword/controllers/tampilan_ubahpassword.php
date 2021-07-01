<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilan_ubahpassword extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_ubahpassword');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		//echo $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {
			$iduser = $this->session->userdata('session_id');
			$idsekolahx = $this->M_ubahpassword->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 		=> "tampilan_ubahpassword",
				'namafileview' 		=> "V_ubahpassword",
				'tampil'			=> $this->M_ubahpassword->tampil(),
				'idnya' 			=> $iduser,
				'idsekolah' 		=> $idsekolahx,
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function change_pass()
	{
		if($this->input->post('change_pass'))
		{
			$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$confirm_pass=$this->input->post('confirm_pass');
			$session_id=$this->session->userdata('id_admin');
			$que=$this->db->query("select * from tb_login where id_admin='$session_id'");
			$row=$que->row();
			if((!strcmp($old_pass, $pass))&& (!strcmp($new_pass, $confirm_pass))){
				$this->M_ubahpassword->change_pass($session_id,$new_pass);
				echo "Password changed successfully !";
				}
			    else{
					echo "Invalid";
				}
		}
		$this->load->view('V_ubahpassword');	
	}

}
