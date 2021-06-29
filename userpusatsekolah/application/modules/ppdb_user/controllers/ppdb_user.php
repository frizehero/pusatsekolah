<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb_user extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_ppdb_sekolah');
		$this->load->model('login/m_session');
	}


	// index
	function index()
	{

		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {

			$data = array(
				'namamodule' 	=> "ppdb_user",
				'namafileview' 	=> "V_ppdb",
				'tampil'		=> $this->M_ppdb_sekolah->tampil(),
				'tampilpanitia' => $this->M_ppdb_sekolah->tampilpanitia(),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "ppdb_user",
			'namafileview' 	=> "V_ppdb",
			'tampil'		=> $this->M_ppdb->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
