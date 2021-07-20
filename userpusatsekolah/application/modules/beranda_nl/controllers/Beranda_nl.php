<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_nl extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_beranda_nl');
		 $this->load->model('login/m_session');
	}

	// index
	function index()
	{
			$data = array(
				'namamodule' 	=> "beranda_nl",
				'namafileview' 	=> "V_beranda_nl",
				'tampil'		=> $this->M_beranda_nl->tampil(),
				'totalakun'		=> $this->M_beranda_nl->totalakun(),
				'totalsekolah'	=> $this->M_beranda_nl->totalsekolah(),
				'totalkomentar'	=> $this->M_beranda_nl->totalkomentar(),
			);
		{
			echo Modules::run('template/tampilCore_nl',$data);
		}


	}
	
}
 