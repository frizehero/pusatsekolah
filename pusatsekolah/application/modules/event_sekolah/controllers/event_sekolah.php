<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_sekolah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_event');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_event",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_tambah_event",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function detailview()
	{

		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_detail_event",
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_event->tambah();
		redirect('event_sekolah');
		
		//redirect('inventory_room');
	}

	function detail()
	{
		$this->M_event->detail();
		redirect('event_sekolah');
	}

	function hapus()
	{
		$this->M_event->hapus();
		redirect('event_sekolah');
	}
	
}
 