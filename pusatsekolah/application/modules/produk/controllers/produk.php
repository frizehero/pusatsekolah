<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_produk');
		 $this->load->model('login/m_session');
		 $this->load->library('pagination');
         $this->load->library('session');
	}

	
	// index
	function index()
    {
        //konfigurasi pagination
        $config = array();
        $config['base_url']         = site_url('produk/index'); //site url
        $config['total_rows']       = $this->db->count_all('produk'); //total row
        $config['per_page']         = 3;  //show record per halaman
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

        $iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_produk->ambilidsekolah($iduser);

        $data = array(
        	'namamodule' 	=> "produk",
			'namafileview' 	=> "V_produk",
			'tampilkan'     => $this->M_produk->tampilkan($config["per_page"], $data['page']),
			'tampil'		=> $this->M_produk->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
            'pagination'    => $this->pagination->create_links(),

        );
        echo Modules::run('template/tampilCore', $data);
    }

		// halaman tambah
	function tambahview()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_produk->ambilidsekolah($iduser);
		
		$data = array(
			'namamodule' 	=> "produk",
			'namafileview' 	=> "V_tambah_produk",
			'tampil'		=> $this->M_produk->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
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
	
	function cariview()
	{
		$data = array(
			'namamodule' 	=> "produk",
			'namafileview' 	=> "V_produk",
			'tampil'		=> $this->M_produk->cari(),
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
	
	function search()
	{
		$produk 	= $this->input->post('nama');
		$data = array(
			'namamodule' 	=> "produk",
			'namafileview' 	=> "V_produk",
			'tampil'		=> $this->M_produk->filter($produk),
		);
		echo Modules::run('template/tampilCore', $data);
	
	}
}
 

