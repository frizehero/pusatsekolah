<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_as extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_beranda_as');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		echo $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {
			$iduser=$this->session->userdata('session_id');
			$idsekolahx = $this->M_beranda_as->ambilidsekolah($iduser);

			$data = array(
				'namamodule' 	=> "beranda_as",
				'namafileview' 	=> "V_beranda_as",
				'tampil'		=> $this->M_beranda_as->tampil(),
				'idnya' 		=> $iduser,
				'idsekolah' 	=> $idsekolahx,
				'tampilkompetensi'		=> $this->M_beranda_as->tampilkompetensi($idsekolahx['id_sekolah']),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "beranda_as",
			'namafileview' 	=> "V_beranda_",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tentangview()
	{
		echo $this->session->userdata('session_id');
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
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "p_sekolah",
			'namafileview' 	=> "V_p_sekolah",
			'tampil'		=> $this->M_p_sekolah->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_beranda_as->tambah();
		redirect('beranda_as');
	}

	function edit()
	{
		$this->M_p_sekolah->edit();
		redirect('p_sekolah');
	}

	function hapus()
	{
		$this->M_beranda_as->hapus();
		redirect('beranda_as');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "beranda_as",
			'namafileview' 	=> "V_beranda_as",
			'tampil'		=> $this->M_beranda_as->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
