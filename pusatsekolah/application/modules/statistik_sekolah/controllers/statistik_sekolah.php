<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistik_sekolah extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_statistik_sekolah');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$data = array(
			'namamodule' 		=> "statistik_sekolah",
			'namafileview' 		=> "V_statistik_sekolah",
			'tampil'			=> $this->M_statistik_sekolah->tampil(),
			'totalalumni'		=> $this->M_statistik_sekolah->totalalumni(),
			'totalpengajar'		=> $this->M_statistik_sekolah->totalpengajar(),
			'totalprestasi'		=> $this->M_statistik_sekolah->totalprestasi(),
			'totalproduk'		=> $this->M_statistik_sekolah->totalproduk(),
			'totalevent'		=> $this->M_statistik_sekolah->totalevent(),
			
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
