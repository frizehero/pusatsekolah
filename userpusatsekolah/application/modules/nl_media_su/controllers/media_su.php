<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nl_media_su extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_produk');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "nl_media_su",
			'namafileview' 	=> "V_media_su",
			'tampil'		=> $this->M_produk->tampil(),
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
			'tampil'		=> $this->M_produk->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_produk->tambah();
		redirect('produk');
		
	}

	function edit()
	{
		$this->M_produk->edit();
		redirect('produk');
	}

	function hapus()
	{
		$this->M_produk->hapus();
		redirect('produk');
	}
	
}
 