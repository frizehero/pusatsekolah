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

	function hapus($id)
	{
		$this->M_prestasi->hapus($id);
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
