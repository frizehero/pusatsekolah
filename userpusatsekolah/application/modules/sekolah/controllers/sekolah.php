<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_sosmed_as');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "sekolah",
			'namafileview' 	=> "V_edit_sekolah",
			'tampil'		=> $this->M_sosmed_as->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	/*function tambahview()
	{
		$data = array(
			'namamodule' 	=> "inventory_room",
			'namafileview' 	=> "V_room_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}*/

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "sekolah",
			'namafileview' 	=> "V_edit_sekolah",
			'tampil'		=> $this->M_sosmed_as->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_sosmed_as->tambah();
		redirect('sekolah');
		
	}

	function edit()
	{
		$this->M_sosmed_as->edit();
		redirect('sekolah');
	}

	function hapus()
	{
		$this->M_sosmed_as->hapus();
		redirect('sekolah');
	}
	
}
 