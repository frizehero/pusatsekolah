<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_guru extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_data_guru');
		$this->load->model('login/m_session');
        $this->load->library('session');
	}


	// index
	function index()
	{
		$data['mapel_data'] = $this->M_data_guru->fetch_filter_type('mapel_guru');
		$idguru=$this->load->view('v_data_guru', $data);

		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_guru->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
		);
		echo Modules::run('template/tampilCore', $data);
	}

	// halaman tambah
	function tambahview()
	{
		$iduser=$this->session->userdata('session_id');
		$idsekolahx = $this->M_data_guru->ambilidsekolah($iduser);

		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_tambah_guru",
			'tampil'		=> $this->M_data_guru->tampil($idsekolahx['id_sekolah']),
			'idnya' 		=> $iduser,
			'idsekolah' 	=> $idsekolahx,
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
	function detailprofil($id)
		{
			$data = array(
				'namamodule' 	=> "data_guru",
				'namafileview' 	=> "V_profil_guru",
				'tampil'		=> $this->M_data_guru->tampildetail($id),
			);
			echo Modules::run('template/tampilCore', $data);
		}

	// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_edit_guru",
			'tampil'		=> $this->M_data_guru->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_guru->tambah();
		redirect('data_guru');
	}

	function edit()
	{
		$this->M_data_guru->edit();
		redirect('data_guru');
	}

	function hapus()
	{
		$this->M_data_guru->hapus();
		redirect('data_guru');
	}

	function search()
	{
		$data_guru 	= $this->input->post('nama');
		$data = array(
			'namamodule' 	=> "data_guru",
			'namafileview' 	=> "V_data_guru",
			'tampil'		=> $this->M_data_guru->cari($data_guru),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function fetch_data()
	{
		sleep(2);
		$mapel = $this->input->post('mapel');
		$this->load->library("pagination");
		$config = array();
		$config["base_url"] = "#";
		$config["total_rows"] = $this->M_data_guru->count_all($mapel,);
		$config["per_page"] = 6;
		$config["uri_segment"] = 3;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li>';
		$config["first_tag_close"] = '</li>';
		$config["last_tag_open"] = '<li>';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '&gt;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = "&lt;";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='active'><a href='#'>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment('3');
		$start = ($page - 1) * $config["per_page"];
		
		$output = array(
			'pagination_link'		=>	$this->pagination->create_links(),
			'product_list'			=>	$this->M_data_guru->fetch_data($config["per_page"], $start, $mapel,)
		);
		echo json_encode($output);
		echo Modules::run('template/tampilCore', $data);
	}
}