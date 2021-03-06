<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_alumni extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_data_alumni');
		$this->load->model('login/m_session');
		$this->load->library('pagination');
        $this->load->library('session');
	}

	
	// index
	function index()
    {
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_alumni->ambilidsekolah($iduser);
        //konfigurasi pagination
        $config = array();
        $config['base_url']         = site_url('data_alumni/index'); //site url
        $config['total_rows']       = $this->M_data_alumni->totaldata($idsekolahx['id_sekolah']); //total row
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
        	'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_data_alumni",
            'tampilkan'		=> $this->M_data_alumni->tampilkan($idsekolahx['id_sekolah'],$config["per_page"], $data['page']),
			'tampil'		=> $this->M_data_alumni->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampil_tahun'	=> $this->M_data_alumni->tampil_tahun($idsekolahx['id_sekolah']),
			'totalalumni'	=> $this->M_data_alumni->totalalumni(),
			'totalperempuan'=> $this->M_data_alumni->totalperempuan(),
			'totallaki'		=> $this->M_data_alumni->totallaki(),
            'pagination'    => $this->pagination->create_links(),

        );
        echo Modules::run('template/tampilCore', $data);
    }

	function detailprofil($id)
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_profil_alumni",
			'tampil'		=> $this->M_data_alumni->tampildetail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_tambah_alumni",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_alumni->tambah();
		redirect('data_alumni');
	}

	function edit()
	{
		$this->m_data_alumni->edit();
		redirect('data_alumni');
	}

	function hapus()
	{
		$this->M_data_alumni->hapus();
		redirect('data_alumni');
	}

	function folter()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_alumni->ambilidsekolah($iduser);
		
		// get search string
		$folter = ($this->input->post("cari"))? $this->input->post("cari") : "NIL";
		$folter = ($this->uri->segment(3)) ? $this->uri->segment(3) : $folter;

		// pagination settings
		$config = array();
		$config['base_url'] = site_url("data_alumni/folter");
		$config['total_rows'] = $this->M_data_alumni->get_alumni_count($folter);
		$config['per_page'] = "6";
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"]/$config["per_page"];
		$config["num_links"] = floor($choice);

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

		$data_alumni = $this->input->post('tahun');
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_data_alumni",
			'tampilkan'		=> $this->M_data_alumni->folter($data_alumni, $idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampil_tahun'	=> $this->M_data_alumni->tampil_tahun($idsekolahx['id_sekolah']),
			'totalalumni'	=> $this->M_data_alumni->totalalumni(),
			'totalperempuan'=> $this->M_data_alumni->totalperempuan(),
			'totallaki'		=> $this->M_data_alumni->totallaki(),
			'pagination'    => $this->pagination->create_links(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function search()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_alumni->ambilidsekolah($iduser);

		// get search string
		$search = ($this->input->post("cari"))? $this->input->post("cari") : "NIL";
		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

        //konfigurasi pagination
       $config = array();
		$config['base_url'] = site_url("data_alumni/search/$search");
		$config['total_rows'] = $this->M_data_alumni->get_alumni_count($search);
		$config['per_page'] = "6";
		$config["uri_segment"] = 4;
		$choice = $config["total_rows"]/$config["per_page"];
		$config["num_links"] = floor($choice);


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

		$data_alumni 	= $this->input->post('nama');
		$data = array(
			'namamodule' 	=> "data_alumni",
			'namafileview' 	=> "V_data_alumni",
			'tampilkan'		=> $this->M_data_alumni->get_alumni($config["per_page"], $data['page'],$search, $idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
			'tampil_tahun'	=> $this->M_data_alumni->tampil_tahun($idsekolahx['id_sekolah']),
			'totalalumni'	=> $this->M_data_alumni->totalalumni(),
			'totalperempuan'=> $this->M_data_alumni->totalperempuan(),
			'totallaki'		=> $this->M_data_alumni->totallaki(),
			'pagination'    => $this->pagination->create_links(),
		);
		echo Modules::run('template/tampilCore', $data);
	
	}
	
}
 