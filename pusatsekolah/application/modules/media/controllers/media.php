<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_media');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "media",
			'namafileview' 	=> "V_media",
			'tampil'		=> $this->M_media->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "media",
			'namafileview' 	=> "V_tambah_media",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambahvidio()
	{
		$data = array(
			'namamodule' 	=> "media",
			'namafileview' 	=> "V_tambah_vidio",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "media",
			'namafileview' 	=> "V_edit_media",
			'tampil'		=> $this->M_media->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_media->tambah();
		redirect('media');
		
	}

	function tambahvid()
	{

		$this->M_media->tambah();
		redirect('media');
		
	}

	function edit()
	{
		$this->M_media->edit();
		redirect('media');
	}

	function hapus()
	{
		$this->M_media->hapus();
		redirect('media');
	}
	
}
 