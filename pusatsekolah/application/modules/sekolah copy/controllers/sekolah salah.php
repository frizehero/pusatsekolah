<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_sosmed_as');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "sekolah",
			'namafileview' 	=> "V_sekolah",
			'tampil'		=> $this->M_sosmed_as->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman anak-anak beranda
	function tentangview()
	{
		$data = array(
			'namamodule' 	=> "sekolah",
			'namafileview' 	=> "V_tentang",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "sekolah",
			'namafileview' 	=> "V_sekolah",
			'tampil'		=> $this->M_sosmed_as->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_sosmed_as->tambah();
		redirect('sekolah');
	}

	function edit()
	{
		$this->M_sosmed_as->edit();
		redirect('sekolah');
	}

	function hapus($id)
	{
		$this->M_sosmed_as->hapus($id);
		redirect('sekolah');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "sekolah",
			'namafileview' 	=> "V_sekolah",
			'tampil'		=> $this->M_sosmed_as->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
