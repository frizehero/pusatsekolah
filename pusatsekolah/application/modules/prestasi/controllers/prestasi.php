<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_beranda');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');

		} else {

			$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_prestasi",
		);
		echo Modules::run('template/tampilCore', $data);
		}


	}

	function tambah()
	{
		$this->m_data_sekolah->tambah();
		redirect('prestasi');
	}

	function edit()
	{
		$this->m_data_sekolah->edit();
		redirect('prestasi');
	}

	function hapus($id)
	{
		$this->m_data_sekolah->hapus($id);
		redirect('prestasi');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_prestasi",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 