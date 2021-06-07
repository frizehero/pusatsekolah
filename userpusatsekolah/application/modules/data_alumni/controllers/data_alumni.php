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
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function profilalumni($id)
	{
		$data = array(
<<<<<<< Updated upstream
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_profil_alumni",
=======
			'namamodule' 	=> "profilalumni",
			'namafileview' 	=> "V_profilalumni",
>>>>>>> Stashed changes
			'tampil'		=> $this->M_data_alumni->tampildetail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_tambah_alumni",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_edit_alumni",
			'tampil'		=> $this->M_data_alumni->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_produk->tambah();
		redirect('data_alumni');
		
	}

	function edit()
	{
		$this->M_data_alumni->edit();
		redirect('data_alumni');
	}

	function hapus()
	{
		$this->M_data_alumni->hapus();
		redirect('data_alumni');
	}
	
}
 