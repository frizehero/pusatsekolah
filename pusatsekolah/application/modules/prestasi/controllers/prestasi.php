<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_prestasi');
		$this->load->model('login/m_session');
		$this->load->library('pagination');
        $this->load->library('session');
	}


	// index
	function index()
    {
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_prestasi->ambilidsekolah($iduser);
        //konfigurasi pagination
        $config = array();
        $config['base_url']         = site_url('prestasi/index'); //site url
        $config['total_rows']       = $this->M_prestasi->totaldata($idsekolahx['id_sekolah']); //total row
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
        	'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_prestasi",
			'tampilkan'		=> $this->M_prestasi->tampilkan($idsekolahx['id_sekolah'],$config["per_page"], $data['page']),
			'tampil'		=> $this->M_prestasi->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampil_jenis'	=> $this->M_prestasi->tampil_jenis($idsekolahx['id_sekolah']),
            'pagination'    => $this->pagination->create_links(),

        );
        echo Modules::run('template/tampilCore', $data);
    }


	// halaman tambah
	function tambahview()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_prestasi->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_tambah-prestasi",
			'tampil'		=> $this->M_prestasi->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_edit-prestasi",
			'tampil'		=> $this->M_prestasi->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{
		$this->M_prestasi->tambah();
		redirect('prestasi');
	}

	function edit()
	{
		$this->M_prestasi->edit();
		redirect('prestasi');
	}

	function hapus()
	{
		$this->M_prestasi->hapus();
		redirect('prestasi');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_prestasi",
			'tampil'		=> $this->M_prestasi->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function folter()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_prestasi->ambilidsekolah($iduser);
		
		// get search string
		$folter = ($this->input->post("folter"))? $this->input->post("folter") : "NIL";
		$folter = ($this->uri->segment(3)) ? $this->uri->segment(3) : $folter;

		// pagination settings
		$config = array();
		$config['base_url'] 	= site_url("prestasi/folter/$folter"); // site url
		$config['total_rows']	= $this->M_prestasi->get_prestasi_count($folter); // total row
		$config['per_page'] 	= "6";
		$config["uri_segment"] 	= 4; // uri paramater
		$choice 				= $config["total_rows"]/$config["per_page"];
		$config["num_links"] 	= floor($choice);

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

		$prestasi = $this->input->post('prestasi');
		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_prestasi",
			'tampilkan'		=> $this->M_prestasi->folter($prestasi),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampil_jenis'	=> $this->M_prestasi->tampil_jenis($idsekolahx['id_sekolah']),
			'pagination'    => $this->pagination->create_links(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function search()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_prestasi->ambilidsekolah($iduser);

		// get search string
		$search = ($this->input->post("cari"))? $this->input->post("cari") : "NIL";
		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

		// pagination settings
		$config = array();
		$config['base_url'] 	= site_url("prestasi/search/$search");
		$config['total_rows'] 	= $this->M_prestasi->get_prestasi_count($search);
		$config['per_page'] 	= "6";
		$config["uri_segment"] 	= 4;
		$choice 				= $config["total_rows"]/$config["per_page"];
		$config["num_links"] 	= floor($choice);

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

        $prestasi 	= $this->input->post('nama');
		$data = array(
			'namamodule' 	=> "prestasi",
			'namafileview' 	=> "V_prestasi",
			'tampilkan'		=> $this->M_prestasi->get_prestasi($config["per_page"], $data['page'],$search),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampil_jenis'	=> $this->M_prestasi->tampil_jenis($idsekolahx['id_sekolah']),
			'pagination'    => $this->pagination->create_links(),
		);
		echo Modules::run('template/tampilCore', $data);
       
	}

}
