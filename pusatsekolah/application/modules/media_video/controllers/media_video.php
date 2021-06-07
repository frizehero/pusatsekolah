<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_video extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_media_video');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "media_video",
			'namafileview' 	=> "V_media_video",
			'tampil'		=> $this->M_media_video->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "media_video",
			'namafileview' 	=> "V_tambah_video",
		);
		echo Modules::run('template/tampilCore', $data);
	}


		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "media_video",
			'namafileview' 	=> "V_edit_media",
			'tampil'		=> $this->M_media_video->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_media_video->tambah();
		redirect('media_video');
		
	}


	function edit()
	{
		$this->M_media_video->edit();
		redirect('media_video');
	}

	function hapus()
	{
		$this->M_media_video->hapus();
		redirect('media_video');
	}
	
}
 