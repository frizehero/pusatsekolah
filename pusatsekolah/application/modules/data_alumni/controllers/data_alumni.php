<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_alumni extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_alumni');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_data_alumni",
			'tampil'		=> $this->M_data_alumni->tampil(),
			'totalalumni'		=> $this->M_data_alumni->totalalumni(),
			'totalperempuan'	=> $this->M_data_alumni->totalperempuan(),
			'totallaki'			=> $this->M_data_alumni->totallaki(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function detailprofil($id)
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_profil_alumni",
			'tampil'		=> $this->M_data_alumni->tampildetail($id),
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

	function hapus()
	{
		$this->M_data_alumni->hapus();
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
 