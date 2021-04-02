<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_prestasi');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_prestasi",
			'tampil'		=> $this->M_prestasi->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_tambah-prestasi",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_edit-prestasi",
			'tampil'		=> $this->M_prestasi->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{
		$this->M_prestasi->tambah();
		redirect('prestasi');
	}

	function edit()
	{
		$this->M_prestasi->edit();
		redirect('prestasi');
	}

	function hapus()
	{
		$this->M_prestasi->hapus();
		redirect('prestasi');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_prestasi",
			'tampil'		=> $this->M_prestasi->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
