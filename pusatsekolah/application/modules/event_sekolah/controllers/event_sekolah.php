
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event_sekolah extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_event');
		$this->load->model('login/m_session');
		$this->load->library('pagination');
        $this->load->library('session');
	}






	// index
	function index()
	{

		$iduser = $this->session->userdata('session_id');
		$idsekolahx = $this->M_event->ambilidsekolah($iduser);

		//konfigurasi pagination
        $config = array();
        $config['base_url']         = site_url('event_sekolah/index'); //site url
        $config['total_rows']       = $this->M_event->totaldata($idsekolahx['id_sekolah']); //total row
        $config['per_page']         = 6;  //show record per halaman
        $config["uri_segment"]      = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"]        = floor($choice);


        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        

		$data = array(
			'namamodule' 				=> "event_sekolah",
			'namafileview' 				=> "V_event",
			'tampilkan'		            => $this->M_event->tampilkan($idsekolahx['id_sekolah'],$config["per_page"], $data['page']),
			'tampil'		    	 	=> $this->M_event->tampil($idsekolahx['id_sekolah']),
			'idnya' 					=> $iduser,
			'idsekolah' 				=> $idsekolahx,
            'pagination'    			=> $this->pagination->create_links(),
			

		);
		echo Modules::run('template/tampilCore', $data);
	}

	// halaman tambah
	function tambahview()
	{
		$iduser = $this->session->userdata('session_id');
		$idsekolahx = $this->M_event->ambilidsekolah($iduser);
		
		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_tambah_event",
			'tampil'		=> $this->M_event->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// Halaman Edit
	function detailview($id)
	{
		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_detail_event",
			'tampil'		=> $this->M_event->tampildetail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_edit_event",
			'tampil'		=> $this->M_event->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_event->tambah();
		redirect('event_sekolah');
	}

	function edit()
	{
		$this->M_event->edit();
		redirect('event_sekolah');
	}

	function hapus()
	{
		$this->M_event->hapus();
		redirect('event_sekolah');
	}
	function cari()
	{
		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_event",
			'tampil'		=> $this->M_event->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function search()
	{
		// get search string
		$search = ($this->input->post("cari"))? $this->input->post("cari") : "NIL";
		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

		// pagination settings
		$config = array();
        $config['base_url']         = site_url("event_sekolah/search/$search"); //site url
        $config['total_rows']       = $this->M_event->get_event_count($search); //total row
        $config['per_page']         = "6";
        $config["uri_segment"]      = 4;  // uri parameter
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"]        = floor($choice);


        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

		$data = array(
			'namamodule' 	=> "event_sekolah",
			'namafileview' 	=> "V_event",
			'tampilkan'		=> $this->M_event->get_event($config["per_page"], $data['page'],$search),
			'pagination'    => $this->pagination->create_links(),
		);
		echo Modules::run('template/tampilCore', $data);
	
	}


}