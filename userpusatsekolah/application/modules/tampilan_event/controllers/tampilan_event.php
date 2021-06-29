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

		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->get_guru(),
			'tampil_mapel'	=> $this->M_data_guru->tampil_mapel(),
		);
		echo Modules::run('template/tampilCore', $data);
	
	}
}
