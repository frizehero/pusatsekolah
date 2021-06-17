<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb_pendaftaran extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_ppdb_pendaftaran');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "ppdb_pendaftaran",
			'namafileview' 	=> "V_ppdb_pendaftaran",
			'tampil'		=> $this->M_ppdb_pendaftaran->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "ppdb_pendaftaran",
			'namafileview' 	=> "V_tambah_ppdb",
		);
		echo Modules::run('template/tampilCore', $data);
	}


		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "ppdb_pendaftaran",
			'namafileview' 	=> "V_edit_ppdb",
			'tampil'		=> $this->M_ppdb_pendaftaran->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detailprofil($id)
	{
		$data = array(
			'namamodule' 	=> "ppdb_pendaftaran",
			'namafileview' 	=> "V_detail_pendaftar",
			'tampil'		=> $this->M_ppdb_pendaftaran->tampildetail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_ppdb_pendaftaran->tambah();
		redirect('ppdb_pendaftaran');
		
	}


	function edit()
	{
		$this->M_ppdb_pendaftaran->edit();
		redirect('ppdb_pendaftaran');
	}

	function hapus()
	{
		$this->M_ppdb_pendaftaran->hapus();
		redirect('ppdb_pendaftaran');
	}
	
}
 