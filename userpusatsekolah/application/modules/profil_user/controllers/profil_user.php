<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_user extends MX_Controller {

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
			'namamodule' 	=> "profil_user",
			'namafileview' 	=> "V_profil_user",
			'tampil'		=> $this->M_data_alumni->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "profil_user",
			'namafileview' 	=> "V_tambah_produk",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "profil_user",
			'namafileview' 	=> "V_edit_produk",
			'tampil'		=> $this->M_data_alumni->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_produk->tambah();
		redirect('profil_user');
		
	}

	function edit()
	{
		$this->M_data_alumni->edit();
		redirect('profil_user');
	}

	function hapus()
	{
		$this->M_data_alumni->hapus();
		redirect('profil_user');
	}
	
}
 