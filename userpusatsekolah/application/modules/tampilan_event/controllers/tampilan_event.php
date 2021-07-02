<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampilan_event extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_tampilan_event');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Tampilan_event",
			'namafileview' 	=> "V_tampilan_event",
			'tampil'		=> $this->M_tampilan_event->tampil(),
			'tampil_sekolah'	=> $this->M_tampilan_event->tampil_sekolah(),
			'tampil_jenjang'	=> $this->M_tampilan_event->tampil_jenjang(),

		);
		echo Modules::run('template/tampilCore', $data);
	}

	function filter()
	{

		$P_sekolah = $this->input->post('sekolah');
		$data = array(
			'namamodule' 	=> "Tampilan_event",
			'namafileview' 	=> "V_tampilan_event",
			'tampil'		=> $this->M_tampilan_event->filter(),
			'tampil_sekolah'	=> $this->M_tampilan_event->tampil_sekolah(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function search()
	{

		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_tampilan_event->ambilidsekolah($iduser);

		$tampilan_event 	= $this->input->post('nama');
		$data = array(
			'namamodule' 	=> "tampilan_event",
			'namafileview' 	=> "V_tampilan_event",
			'tampil'		=> $this->M_tampilan_event->cari(),
			'tampilberanda'		=> $this->M_tampilan_event->tampilberanda($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampilkompetensi'	=> $this->M_tampilan_event->tampilkompetensi($idsekolahx['id_sekolah']),
		);
		echo Modules::run('template/tampilCore', $data);
	
	}
}
