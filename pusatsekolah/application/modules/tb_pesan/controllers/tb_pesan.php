<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tb_pesan extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_pesan');
	}

	// index
	function index()
	{
		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		}
		else {
			$data = array(
				'namamodule' 	=> "tb_pesan",
				'namafileview' 	=> "V_pesan",
				'tampil'		=> $this->M_pesan->tampil(),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function tambah()
	{
		$this->M_pesan->tambah();
		redirect('tb_pesan');
	}

	function hapus($id)
	{
		$this->M_pesan->hapus($id);
		redirect('tb_pesan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "pesan",
			'namafileview' 	=> "V_pesan",
			'tampil'		=> $this->M_pesan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
