<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_user extends MX_Controller
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
		$data = array(
			'namamodule' 	=> "kontak_user",
			'namafileview' 	=> "V_kontak",
			'tampil'		=> $this->M_data_guru->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "kontak_user",
			'namafileview' 	=> "V_tambah_guru",
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
	function detailprofil($id)
		{
			$data = array(
				'namamodule' 	=> "kontak_user",
				'namafileview' 	=> "V_profil_guru",
				'tampil'		=> $this->M_data_guru->tampildetail($id),
			);
			echo Modules::run('template/tampilCore', $data);
		}

	// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "kontak_user",
			'namafileview' 	=> "V_edit_guru",
			'tampil'		=> $this->M_data_guru->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_guru->tambah();
		redirect('kontak_user');
	}

	function edit()
	{
		$this->M_data_guru->edit();
		redirect('kontak_user');
	}

	function hapus()
	{
		$this->M_data_guru->hapus();
		redirect('kontak_user');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "kontak_user",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
