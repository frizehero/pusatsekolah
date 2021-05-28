<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilalumni extends MX_Controller {

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
			'namamodule' 	=> "profilalumni",
			'namafileview' 	=> "V_profilalumni",
			'tampil'		=> $this->M_data_alumni->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "profilalumni",
			'namafileview' 	=> "V_room_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "profilalumni",
			'namafileview' 	=> "V_room_edit",
			'tampil'		=> $this->M_data_alumni->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_data_alumni->tambah();
		redirect('profilalumni');
		
		//redirect('profilalumni');
	}

	function edit()
	{
		$this->M_data_alumni->edit();
		redirect('profilalumni');
	}

	function hapus()
	{
		$this->M_data_alumni->hapus();
		redirect('profilalumni');
	}
	
}
 