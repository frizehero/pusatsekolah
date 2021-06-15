<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_sekolah extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_statistik_sekolah');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$data = array(
			'namamodule' 		=> "statistik_sekolah",
			'namafileview' 		=> "V_statistik_sekolah",
			'tampil'			=> $this->M_statistik_sekolah->tampil(),
			'totalalumni'		=> $this->M_statistik_sekolah->totalalumni(),
			'totalpengajar'		=> $this->M_statistik_sekolah->totalpengajar(),
			
			
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
