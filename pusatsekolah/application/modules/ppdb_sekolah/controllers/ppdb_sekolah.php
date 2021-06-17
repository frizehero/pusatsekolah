<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ppdb_sekolah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_ppdb_sekolah');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "ppdb_sekolah",
			'namafileview' 	=> "V_ppdb_sekolah",
			'tampil'		=> $this->M_ppdb_sekolah->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "ppdb_sekolah",
			'namafileview' 	=> "V_tambah_ppdb",
		);
		echo Modules::run('template/tampilCore', $data);
	}


		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "ppdb_sekolah",
			'namafileview' 	=> "V_edit_ppdb",
			'tampil'		=> $this->M_ppdb_sekolah->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_ppdb_sekolah->tambah();
		redirect('ppdb_sekolah');
		
	}


	function edit()
	{
		$this->M_ppdb_sekolah->edit();
		redirect('ppdb_sekolah');
	}

	function hapus()
	{
		$this->M_ppdb_sekolah->hapus();
		redirect('ppdb_sekolah');
	}
	
}
 