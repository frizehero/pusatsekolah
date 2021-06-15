<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_guru extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_data_guru');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_guru->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampil_mapel'	=> $this->M_data_guru->tampil_mapel(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function filter()
	{
		$mapel = $this->input->post('mapel');
		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->filter($mapel),
			'tampil_mapel'		=> $this->M_data_guru->tampil_mapel(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// halaman tambah
	function tambahview()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_guru->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_tambah_guru",
			'tampil'		=> $this->M_data_guru->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
	function detailprofil($id)
		{
			$data = array(
				'namamodule' 	=> "data_guru",
				'namafileview' 	=> "V_profil_guru",
				'tampil'		=> $this->M_data_guru->tampildetail($id),
			);
			echo Modules::run('template/tampilCore', $data);
		}

	// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_edit_guru",
			'tampil'		=> $this->M_data_guru->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_guru->tambah();
		redirect('data_guru');
	}

	function edit()
	{
		$this->M_data_guru->edit();
		redirect('data_guru');
	}

	function hapus()
	{
		$this->M_data_guru->hapus();
		redirect('data_guru');
	}

	function search()
	{
		$data_guru 	= $this->input->post('nama');
		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->cari($data_guru),
		);
		echo Modules::run('template/tampilCore', $data);
	
	}
}