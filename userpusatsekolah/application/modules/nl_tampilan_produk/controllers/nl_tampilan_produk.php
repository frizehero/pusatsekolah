<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nl_tampilan_produk extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_nl_tampilan_produk');
		$this->load->model('login/m_session');
	}

	function index()
	{
		$data = array(
			'namamodule' 	=> "nl_tampilan_produk",
			'namafileview' 	=> "V_tampilan_produk",
			'tampil'		=> $this->M_nl_tampilan_produk->tampil(),
		);
		echo Modules::run('template/tampilCore_nl', $data);
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
