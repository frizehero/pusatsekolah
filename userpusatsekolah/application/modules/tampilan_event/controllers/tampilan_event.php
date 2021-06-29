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

		);
		echo Modules::run('template/tampilCore', $data);
	}
}
