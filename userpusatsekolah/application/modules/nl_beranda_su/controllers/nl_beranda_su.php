<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nl_beranda_su extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_beranda_as');
		$this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "nl_beranda_su",
			'namafileview' 	=> "V_beranda_su",
			'tampil'		=> $this->M_beranda_as->tampil(),
		);
		echo Modules::run('template/tampilCore_nl', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "produk",
			'namafileview' 	=> "V_tambah_produk",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "produk",
			'namafileview' 	=> "V_edit_produk",
			'tampil'		=> $this->M_beranda_as->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_beranda_as->tambah();
		redirect('produk');
		
	}

	function edit()
	{
		$this->M_beranda_as->edit();
		redirect('produk');
	}

	function hapus()
	{
		$this->M_beranda_as->hapus();
		redirect('produk');
	}
	
}
 