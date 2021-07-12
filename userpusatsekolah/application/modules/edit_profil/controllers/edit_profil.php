<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_profil extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_tb_login');
		$this->load->model('login/m_session');
	}

	
	function index()
	{
		$data_siswa=  $this->session->userdata('session_id');

		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil",
			'tampil'		=> $this->M_tb_login->tampil($data_siswa),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function edit()
	{
		$data_siswa=  $this->session->userdata('session_id');
		$this->M_tb_login->edit();
		redirect('edit_profil');
		
	}


	/*function edit()
	{
		$this->M_tb_login->edit();
		redirect('edit_profil');
	}*/

	// index
	/*function index()
	{
		//echo $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {
			$iduser = $this->session->userdata('session_id');
			$idsekolahx = $this->M_beranda_as->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 		=> "tampilan_akunsaya",
				'namafileview' 		=> "V_akun_saya",
				'tampil'			=> $this->M_beranda_as->tampil(),
				'idnya' 			=> $iduser,
				'idsekolah' 		=> $idsekolahx,
				'tampilkompetensi'	=> $this->M_beranda_as->tampilkompetensi($idsekolahx['id_sekolah']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}*/
}
