<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_beranda');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{

		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {

			$data = array(
				'namamodule' 	=> "beranda",
				'namafileview' 	=> "V_beranda",
			);
			echo Modules::run('template/tampilCore', $data);
		}
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
		$this->M_beranda->tambah();
		redirect('data_sekolah');
	}

	function edit()
	{
		$this->M_beranda->edit();
		redirect('data_sekolah');
	}

	function hapus($id)
	{
		$this->M_beranda->hapus($id);
		redirect('data_sekolah');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_sekolah",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->M_beranda->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
