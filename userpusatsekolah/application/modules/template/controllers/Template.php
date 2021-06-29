<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('M_template');
		$this->load->model('login/m_session');
	}

	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_core');
	}

	public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		if (empty($this->session->userdata('session_id'))) 
		{
			redirect('login');
		}

		$data['nama'] = $this->M_template->oke($id);
		
		$this->load->view('view_template_core',$data);
	}

	// view core templating
	public function index_nl()
	{
		
		$this->load->view('view_template_core_nl');
	}

	public function tampilCore_nl($data)
	{
		
		$this->load->view('view_template_core_nl',$data);
	}

}
