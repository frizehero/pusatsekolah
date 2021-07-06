<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends MX_Controller
{

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

		if (empty($this->session->userdata('session_id'))) {
			redirect('login');
		} else {

			

			$data = array(
				'namamodule' 	=> "produk",
				'namafileview' 	=> "V_produk",
				'tampil'		=> $this->M_produk->tampil(),

				// 'tampilpanitia' => $this->M_ppdb_sekolah->tampilpanitia(),
			);
			echo Modules::run('template/tampilCore', $data);
		}
	}

	function detailproduk($id)
	{
		$data = array(
			'namamodule' 	=> "produk",
			'namafileview' 	=> "V_detail_produk",
			'tampil'		=> $this->M_produk->tampildetail($id),
			'totalproduk'	=> $this->M_produk->totalproduk(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "produk",
			'namafileview' 	=> "V_ppdb",
			'tampil'		=> $this->M_ppdb->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
