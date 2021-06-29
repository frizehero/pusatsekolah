<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilan_berita extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_tampilan_berita');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "tampilan_berita",
			'namafileview' 	=> "V_tampilan_berita",
			'tampil'		=> $this->M_tampilan_berita->tampil(),
			'tampil_sekolah'	=> $this->M_tampilan_berita->tampil_sekolah(),
			'tampil_jenjang'	=> $this->M_tampilan_berita->tampil_jenjang(),

		);
		echo Modules::run('template/tampilCore', $data);
	}

	function filter()
	{

		$P_sekolah = $this->input->post('sekolah');
		$data = array(
			'namamodule' 	=> "tampilan_berita",
			'namafileview' 	=> "V_tampilan_berita",
			'tampil'		=> $this->M_tampilan_berita->filter(),
			'tampil_sekolah'	=> $this->M_tampilan_berita->tampil_sekolah(),
		);
		echo Modules::run('template/tampilCore', $data);
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
