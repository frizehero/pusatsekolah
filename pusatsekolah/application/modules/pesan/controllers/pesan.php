<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_pesan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pesan",
			'namafileview' 	=> "V_pesan",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_pesan->tambah();
		redirect('pesan');
	}

	function edit()
	{
		$this->M_pesan->edit();
		redirect('pesan');
	}

	function hapus($id)
	{
		$this->M_pesan->hapus($id);
		redirect('pesan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "pesan",
			'namafileview' 	=> "V_pesan",
			'tampil'		=> $this->M_pesan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 