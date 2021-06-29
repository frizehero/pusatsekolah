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
			'tampilberanda'		=> $this->M_data_guru->tampilberanda($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampilkompetensi'	=> $this->M_data_guru->tampilkompetensi($idsekolahx['id_sekolah']),
			'tampil_mapel'	=> $this->M_data_guru->tampil_mapel($idsekolahx['id_sekolah']),

		);
		echo Modules::run('template/tampilCore', $data);
	}

	function filter()
	{

        $iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_guru->ambilidsekolah($iduser);


		$data_guru = $this->input->post('mapel');
		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->filter($data_guru, $idsekolahx['id_sekolah']),
			'tampilberanda'		=> $this->M_data_guru->tampilberanda($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampilkompetensi'	=> $this->M_data_guru->tampilkompetensi($idsekolahx['id_sekolah']),
			'tampil_mapel'	=> $this->M_data_guru->tampil_mapel($idsekolahx['id_sekolah']),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function search()
	{

		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_guru->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->get_guru($search, $idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampil_mapel'	=> $this->M_data_guru->tampil_mapel($idsekolahx['id_sekolah']),
		);
		echo Modules::run('template/tampilCore', $data);
	
	}


	function profilguru($id)
	{
		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_profil_guru",
			'tampil'		=> $this->M_data_guru->tampildetail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_tambah_guru",
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

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
