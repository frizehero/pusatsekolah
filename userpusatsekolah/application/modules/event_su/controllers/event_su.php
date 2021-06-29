<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_su extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_event_su');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_event_su->ambilidsekolah($iduser);


		$data = array(
			'namamodule' 	=> "event_su",
			'namafileview' 	=> "V_event_su",
			'tampil'		=> $this->M_event_su->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,

		);
		echo Modules::run('template/tampilCore', $data);
	}

	
}
 