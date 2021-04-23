<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event_sekolah extends MX_Controller
{

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
			'tampil'		=> $this->M_event->tampil(),
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
	function detailview($id)
	{
		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_detail_event",
			'tampil'		=> $this->M_event->tampildetail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_edit_event",
			'tampil'		=> $this->M_event->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_event->tambah();
		redirect('event_sekolah');
	}

	function edit()
	{
		$this->M_event->edit();
		redirect('event_sekolah');
	}

	function hapus($id)
	{
		$this->M_event->hapus($id);
		redirect('event_sekolah');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_sekolah",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->M_event->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
