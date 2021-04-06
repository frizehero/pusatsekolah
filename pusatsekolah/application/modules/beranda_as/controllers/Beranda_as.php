<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_as extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_beranda_as');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{

		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {

			$data = array(
				'namamodule' 	=> "beranda_as",
				'namafileview' 	=> "V_beranda_as",
				'tampil'		=> $this->M_beranda_as->tampil(),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function tentangview()
	{
		$data = array(
			'namamodule' 	=> "beranda_as",
			'namafileview' 	=> "V_tentang",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "beranda_as",
			'namafileview' 	=> "V_edit_sekolah",
			'tampil'		=> $this->M_beranda_as->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_beranda_as->tambah();
		redirect('beranda_as');
	}

	function edit()
	{
		$this->M_beranda_as->edit();
		redirect('beranda_as');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "beranda_as",
			'namafileview' 	=> "V_beranda_as",
			'tampil'		=> $this->M_beranda_as->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
