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

		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_statistik_sekolah->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 		=> "statistik_sekolah",
			'namafileview' 		=> "V_statistik_sekolah",
			'idnya' 			=> $iduser,
			'idsekolah' 		=> $idsekolahx,
			'tampil'			=> $this->M_statistik_sekolah->tampil($idsekolahx['id_sekolah']),
			'totalalumni'		=> $this->M_statistik_sekolah->totalalumni(),
			'totalpengajar'		=> $this->M_statistik_sekolah->totalpengajar($idsekolahx['id_sekolah']),
			'totalprestasi'		=> $this->M_statistik_sekolah->totalprestasi(),
			'totalproduk'		=> $this->M_statistik_sekolah->totalproduk(),
			'totalevent'		=> $this->M_statistik_sekolah->totalevent(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
