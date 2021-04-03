<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_alumni extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_alumni');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_data_alumni",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function detailprofil()
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_profil_alumni",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_tambah_alumni",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_alumni->tambah();
		redirect('data_alumni');
	}

	function edit()
	{
		$this->m_data_alumni->edit();
		redirect('data_alumni');
	}

	function hapus($id)
	{
		$this->m_data_alumni->hapus($id);
		redirect('data_alumni');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_data_alumni",
			'tampil'		=> $this->m_data_alumni->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 