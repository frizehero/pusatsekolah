<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nl_pb_produklayanan extends MX_Controller
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
			'namamodule' 	=> "nl_pb_produklayanan",
			'namafileview' 	=> "V_pusatbantuan",
			'tampil'		=> $this->M_data_guru->tampil(),
		);
		echo Modules::run('template/tampilCore_nl', $data);
	}

	// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "pb_produklayanan",
			'namafileview' 	=> "V_tambah_guru",
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
	function detailprofil($id)
		{
			$data = array(
				'namamodule' 	=> "pb_produklayanan",
				'namafileview' 	=> "V_profil_guru",
				'tampil'		=> $this->M_data_guru->tampildetail($id),
			);
			echo Modules::run('template/tampilCore', $data);
		}

	// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "pb_produklayanan",
			'namafileview' 	=> "V_edit_guru",
			'tampil'		=> $this->M_data_guru->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_guru->tambah();
		redirect('pb_produklayanan');
	}

	function edit()
	{
		$this->M_data_guru->edit();
		redirect('pb_produklayanan');
	}

	function hapus()
	{
		$this->M_data_guru->hapus();
		redirect('pb_produklayanan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "pb_produklayanan",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
