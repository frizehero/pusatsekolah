<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_sekolah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_media_sekolah');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "media_sekolah",
			'namafileview' 	=> "V_media_sekolah",
			'tampil'		=> $this->M_media_sekolah->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "media_sekolah",
			'namafileview' 	=> "V_tambah_media",
		);
		echo Modules::run('template/tampilCore', $data);
	}


		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "media_sekolah",
			'namafileview' 	=> "V_edit_media",
			'tampil'		=> $this->M_media_sekolah->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_media_sekolah->tambah();
		redirect('media_sekolah');
		
	}


	function edit()
	{
		$this->M_media_sekolah->edit();
		redirect('media_sekolah');
	}

	function hapus()
	{
		$this->M_media_sekolah->hapus();
		redirect('media_sekolah');
	}
	
}
 