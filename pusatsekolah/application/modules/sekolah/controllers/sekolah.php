<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends MX_Controller
{

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
		$data = array(
			'namamodule' 	=> "sekolah",
			'namafileview' 	=> "V_sekolah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman anak-anak beranda
	function tentangview()
	{
		$data = array(
			'namamodule' 	=> "beranda",
			'namafileview' 	=> "V_tentang",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_sekolah->tambah();
		redirect('data_sekolah');
	}

	function edit()
	{
		$this->m_data_sekolah->edit();
		redirect('data_sekolah');
	}

	function hapus($id)
	{
		$this->m_data_sekolah->hapus($id);
		redirect('data_sekolah');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_sekolah",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
