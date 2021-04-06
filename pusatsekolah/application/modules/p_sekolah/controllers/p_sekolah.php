<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_sekolah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_p_sekolah');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "p_sekolah",
			'namafileview' 	=> "V_p_sekolah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	/*function tambahview()
	{
		$data = array(
			'namamodule' 	=> "inventory_room",
			'namafileview' 	=> "V_room_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}*/

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "p_sekolah",
			'namafileview' 	=> "V_p_sekolah",
			'tampil'		=> $this->M_p_sekolah->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function edit()
	{
		$this->M_p_sekolah->edit();
		redirect('p_sekolah');
	}
	
}
 