<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_fasilitas extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_media_fasilitas');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "media_fasilitas",
			'namafileview' 	=> "V_media_fasilitas",
			'tampil'		=> $this->M_media_fasilitas->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "media_fasilitas",
			'namafileview' 	=> "V_tambah_fasilitas",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "media_fasilitas",
			'namafileview' 	=> "V_edit_media",
			'tampil'		=> $this->M_media_fasilitas->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_media_fasilitas->tambah();
		redirect('media_fasilitas');
		
	}

	function edit()
	{
		$this->M_media_fasilitas->edit();
		redirect('media_fasilitas');
	}

	function hapus()
	{
		$this->M_media_fasilitas->hapus();
		redirect('media_fasilitas');
	}
	
}
 