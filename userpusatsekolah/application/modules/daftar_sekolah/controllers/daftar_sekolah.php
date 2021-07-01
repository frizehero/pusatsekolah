<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftar_sekolah extends MX_Controller
{

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

		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {

			$data = array(
				'namamodule' 	=> "daftar_sekolah",
				'namafileview' 	=> "V_daftar_sekolah",
				'tampil'		=> $this->M_ppdb_pendaftaran->tampil(),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "ppdb_pendaftaran",
			'namafileview' 	=> "V_ppdb",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "ppdb_pendaftaran",
			'namafileview' 	=> "V_ppdb_edit",
			'tampil'		=> $this->M_ppdb_pendaftaran->tampiledit($id),
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

	function hapus($id)
	{
		$this->M_ppdb_pendaftaran->hapus($id);
		redirect('ppdb_pendaftaran');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "ppdb_pendaftaran",
			'namafileview' 	=> "V_ppdb",
			'tampil'		=> $this->M_ppdb->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
