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
		$data_siswa=  $this->session->userdata('session_id');

		$data = array(
			'namamodule' 		=> "tampilan_ubahpassword",
			'namafileview' 		=> "V_ubahpassword",
			'tampil'			=> $this->M_ubahpassword->tampil($data_siswa),
		);
		echo Modules::run('template/tampilCore', $data);
	}


  	function edit()
	{
		$data_siswa=  $this->session->userdata('session_id');
		$this->M_ubahpassword->edit();
		redirect('tampilan_ubahpassword');
		
	}

	function editview($id)
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_ubahpassword->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 	=> "tampilan_ubahpassword",
			'namafileview' 	=> "V_ubahpassword",
			'tampil'		=> $this->M_ubahpassword->tampiledit($id),
			'idnya' 			=> $iduser,
			'idsekolah' 		=> $idsekolahx,
		);

		echo Modules::run('template/tampilCore', $data);
	}

	/*function edit()
	{
		$this->M_ubahpassword->edit();
		redirect('tampilan_ubahpassword');
	}*/

	/*public function save_password()
	 { 
	  	$this->form_validation->set_rules('new','New','required|alpha_numeric');
	  	$this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
	    if($this->form_validation->run() == FALSE)
	  {
	   	$this->load->view('template/view_template_core');
	   		$this->load->view('tampilan_ubahpassword/V_ubahpassword');
	   	$this->load->view('template/view_template_core');
	  	}else{
	   	$cek_old = $this->M_ubahpassword->cek_old();
	   	if ($cek_old == False){
	    $this->session->set_flashdata('error','Old password not match!' );
	    $this->load->view('template/view_template_core');
	    $this->load->view('tampilan_ubahpassword/V_ubahpassword');
	    $this->load->view('template/view_template_core');
	   }else{
	    $this->M_ubahpassword->save();
	    $this->session->sess_destroy();
	    $this->session->set_flashdata('error','Your password success to change, please relogin !' );
	    $this->load->view('template/view_template_core');
	    $this->load->view('tampilan_ubahpassword/V_ubahpassword');
	    $this->load->view('template/view_template_core');
	   }//end if valid_user
	  }
	  echo Modules::run('template/tampilCore', $data);
	 }*/

	/*function index()
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
				'tampil'			=> $this->M_ubahpassword->editpassword(),
				'idnya' 			=> $iduser,
				'idsekolah' 		=> $idsekolahx,
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}*/

	/*function change_pass()
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
	}*/

}
