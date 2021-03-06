<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilan_akunsaya extends MX_Controller
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
			'namamodule' 	=> "tampilan_akunsaya",
			'namafileview' 	=> "V_akun_saya",
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
		$data = array(
			'namamodule' 	=> "tampilan_akunsaya",
			'namafileview' 	=> "V_akun_saya",
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
			'namamodule' 	=> "tampilan_akunsaya",
			'namafileview' 	=> "V_akunsaya",
			'tampil'		=> $this->M_tb_login->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_tb_login->tambah();
		redirect('tampilan_akunsaya');
	}

	function edit()
	{
		$this->M_tb_login->edit();
		redirect('tampilan_akunsaya');
	}

	function hapus()
	{
		$this->M_tb_login->hapus();
		redirect('tampilan_akunsaya');
	}
}
