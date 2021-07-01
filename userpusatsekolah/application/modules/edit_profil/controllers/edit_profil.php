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
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil",
			'tampil'		=> $this->M_tb_login->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

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

	// halaman tambah
	function tambahview()
	{
		$data['path'] = base_url('assets');
		$this->load->view('V_edit_profil_tambah', $data);
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil",
		);
		echo Modules::run('template/tampilCore',$data);
	}

	/*function tentangview()
	{
		//echo $this->session->userdata('session_id');
		{
			$iduser=$this->session->userdata('session_id');
			$idsekolahx = $this->M_beranda_as->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 	=> "beranda_as",
				'namafileview' 	=> "V_tentang",
				'idnya' 		=> $iduser,
				'idsekolah' 	=> $idsekolahx,
				'tampilkompetensi'		=> $this->M_beranda_as->tampilkompetensi($idsekolahx['id_sekolah']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}*/

	// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil",
			'tampil'		=> $this->M_tb_login->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_tb_login->tambah();
		redirect('edit_profil');
	}

	function edit()
	{
		$this->M_tb_login->edit();
		redirect('edit_profil');
	}

	function hapus()
	{
		$this->M_tb_login->hapus();
		redirect('edit_profil');
	}
}
