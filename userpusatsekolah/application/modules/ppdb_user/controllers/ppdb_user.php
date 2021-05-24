<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb_user extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_ppdb');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{

		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {

			$data = array(
				'namamodule' 	=> "ppdb_user",
				'namafileview' 	=> "V_ppdb",
				'tampil'		=> $this->M_ppdb->tampil(),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "ppdb_user",
			'namafileview' 	=> "V_ppdb_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "ppdb_user",
			'namafileview' 	=> "V_ppdb_edit",
			'tampil'		=> $this->M_ppdb->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_ppdb->tambah();
		redirect('ppdb_user');
	}

	function edit()
	{
		$this->M_ppdb->edit();
		redirect('ppdb_user');
	}

	function hapus($id)
	{
		$this->M_ppdb->hapus($id);
		redirect('ppdb_user');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "ppdb_user",
			'namafileview' 	=> "V_ppdb",
			'tampil'		=> $this->M_ppdb->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
