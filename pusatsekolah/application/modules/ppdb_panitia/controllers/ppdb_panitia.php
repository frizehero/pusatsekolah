<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb_panitia extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_ppdb_panitia');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "ppdb_panitia",
			'namafileview' 	=> "V_ppdb_panitia",
			'tampil'		=> $this->M_ppdb_panitia->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "ppdb_panitia",
			'namafileview' 	=> "V_tambah_panitia",
		);
		echo Modules::run('template/tampilCore', $data);
	}


		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "ppdb_panitia",
			'namafileview' 	=> "V_edit_ppdb",
			'tampil'		=> $this->M_ppdb_panitia->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_ppdb_panitia->tambah();
		redirect('ppdb_panitia');
		
	}


	function edit()
	{
		$this->M_ppdb_panitia->edit();
		redirect('ppdb_panitia');
	}

	function hapus()
	{
		$this->M_ppdb_panitia->hapus();
		redirect('ppdb_panitia');
	}
	
}
 