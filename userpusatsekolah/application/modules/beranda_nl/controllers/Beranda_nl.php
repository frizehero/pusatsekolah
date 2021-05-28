<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_nl extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_beranda_nl');
	}

	// index
	function index()
	{
			$data = array(
				'namamodule' 	=> "beranda_nl",
				'namafileview' 	=> "V_beranda_nl",
			);
		{
			echo Modules::run('template/tampilCore_nl',$data);
		}


	}
	
}
 